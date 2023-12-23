@extends('back_end/template')
@section('content')
<!-- breadcrumb start-->
<div class="content-header row">
	<div class="content-header-left col-md-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-md-6">
				<h2 class="content-header-title float-left mb-0">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<i class="feather icon-home"></i> <a href="{{route('dashboard')}}">Home</a>
						</li>
						<li class="breadcrumb-item active">
							<?php
								if(isset($type) && $type == 'add' || $type == 'edit' || $type == 'view' )
								{
									$pageTitle = ucfirst($type)." Currency Converstion";
								}
								else
								{
									$pageTitle = "Manage Currency Converstion";
								}
							?>
							<a href="{{url('manage-currencyConvertion.html')}}" title="<?php echo $pageTitle;?>">
								<?php echo $pageTitle;?>
							</a>
						</li>
					</ol>
				</h2>
			</div>
            <div class="col-md-6 text-right">
				<?php 
					if (isset($type) && $type == 'add' || $type == 'edit')
					{
					}
					else
					{					
						?>
						    <a href="{{url('manage-currencyConvertion.html/add')}}" class="btn btn-primary">Add Currency Setup</a>
						<?php 
					} 
				?>
			</div>
		</div>
	</div>
</div>
<!--breadcrumb end -->

<section id="row-grouping">
	<div class="card">
		<div class="card-content">
			<div class="card-body">
				<fieldset>
					<legend class="text-uppercase font-size-sm font-weight-bold">
						<?php echo isset($type)? ucfirst($type)." Currency" : 'Manage Currency Settings';?> 
					</legend>
				</fieldset>
				<?php  
					if (isset($type) && $type == "add" || $type == "edit")
					{
						?>
						<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate>
							@csrf
                            @php
                                $default_currency = DB::table('sm_currency_settings')->where('default_currency',1)->where('currency_setting_status',1)->select('currency_setting_id','country_id')->first();
                                $country          = DB::table('country')->where('country_id',$default_currency->country_id)->Select('currency_code','country_id')->first();
                            @endphp
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Country
											<span class="required-start">*</span>
										</div>
										<div class="controls">
                                            <select id="from_currency" aria-readonly="true" disabled class="form-control js-example-basic-single">
                                                <option selected value="{{$country->country_id}}">{{$country->currency_code}}</option>
                                            </select>
											<input type="hidden" name="from_currency" value="{{$country->country_id}}">
										</div>
									</div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">To Currency / Country <span class="required-start">*</span></div>
										<div class="controls">
											@php
                                                $country = DB::table('country')
                                                        ->where('country_status',1)
														->where('default_country',0)
                                                        ->select('country_name','country_id','currency_code')
                                                        ->get();
                                            @endphp
											<select name="to_currency" id="to_currency" required class="form-control js-example-basic-single">
                                                <option value="" >-Select Country</option>
                                                @foreach ($country as $row)
                                                    @php
                                                        $selected = (isset($editData->to_currency) && $editData->to_currency == $row->country_id) ? 'selected' :'';
                                                    @endphp
                                                    <option {{$selected}} value="{{$row->country_id}}">{{$row->currency_code}} - {{$row->country_name}}</option>
                                                @endforeach
                                            </select>
										</div>
									</div>
								</div>
                                 <!--Ajax  -->
								<script>
                                    $('#to_currency').change(function () {
                                        
                                        val = $(this).val();
                                        if(val !='')
                                        { 
                                            $.ajax({
                                                url:"{{url('getAjaxCountryDetails')}}",
                                                type: "POST",
                                                data: {
                                                    id: val,
                                                    _token: '{{csrf_token()}}' 
                                                },
                                                dataType : 'json',
                                                success: function(result)
                                                {
                                                    $.each(result.data,function(key,value)
                                                    {
                                                        $('#country_code').val(value.country_code);
                                                        $('#currency_symbol').val(value.currency_symbol);
                                                        $('#currency_code').val(value.currency_code);
                                                    });
                                                }
                                            });
                                        }
                                    })
                                </script>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Country Code
										</div>
										<div class="controls">
                                            <input type="text" name="country_code" id="country_code" readonly class="form-control" value="{{isset($editData->country_code)? $editData->country_code:''}}">
										</div>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Currency Symbol</div>
										<div class="controls">
											<input type="text" name="currency_symbol" id="currency_symbol" readonly value="{{isset($editData->currency_symbol)? $editData->currency_symbol:''}}" class="form-control" autocomplete="off" />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Currency Code</div>
										<div class="controls">
											<input type="text" name="currency_code" id="currency_code" readonly value="{{isset($editData->currency_code)? $editData->currency_code:''}}" class="form-control" autocomplete="off" />
										</div>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Conversion Rate<span class="required-start">*</span></div>
										<div class="controls">
											<input type="text" name="currency_rate" id="currency_rate" class="form-control"  value="{{isset($editData->currency_rate)? $editData->currency_rate:''}}" autocomplete="off" />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Decimals for Currency</div>
										<div class="controls">
											<input type="number" name="decimal_for_currency" id="decimal_for_currency" value="{{isset($editData->decimal_for_currency)? $editData->decimal_for_currency:''}}" class="form-control" autocomplete="off" />
										</div>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl">Start Date<span class="required-start">*</span></div>
										<div class="controls">
											<input type="text" name="start_date" id="from_date" class="form-control" readonly value="{{isset($editData->start_date)? date('d-M-Y',(int)$editData->start_date):''}}" autocomplete="off" />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="mbl"> End Date</div>
										<div class="controls">
											<input type="text" name="end_date" id="to_date" class="form-control"  value="{{!empty($editData->end_date)? date('d-M-Y',$editData->end_date):''}}" autocomplete="off" readonly />
										</div>
									</div>
								</div>
							</div>
                            <div class="row mb-2 float-right">
								<div class="col-md-12">
									<a href="<?php echo url('manage-currencyConvertion.html');?>" class="btn btn-danger mr-1">
										Cancel
									</a>
									<?php
										if( isset($type) && $type == "add" )
										{
											?>
											<button type="submit" class="btn btn-primary">Create</button>
											<?php 
										} 
										else
										{
											?>
											<button type="submit" class="btn btn-primary">Update</button>
											<?php 
										} 
									?>
								</div>
							</div>
						</form>
						<?php
					}
					else
					{
						?>
						<form action="" method="get">
							<div class="col-md-12 pl-0">
								<div class="row">
									<div class="col-md-3">	
										<input type="search" class="form-control" name="keywords" value="{{isset($_GET['keywords'])? $_GET['keywords'] :''}}" placeholder="Search...">
										<span class="search-note">Note : From Currency, To Currency.</span>
									</div>	
									<div class="col-md-3">
										<button type="submit" class="btn btn-info trans-saction-butt waves-effect waves-light">Search <i class="fa fa-search" aria-hidden="true"></i></button>
									</div>
									<div class="col-md-6" style="float:right;">
										<div class="row counting">
											<div class="show" style="margin-right:10px;">
												Show
											</div>
											<div class="filter-new-option">
												<select name="page_items" class="form-control count-arrow" onchange="this.form.submit()">
													<?php 
														foreach(page_items as $key=>$value)
														{ 
															$selected="";
															if(isset($_GET['page_items']) && $_GET['page_items'] == $key)
															{
																$selected="selected='selected'";
															}
															?>
															<option value="<?php echo $key;?>" <?php echo $selected;?>><?php echo $key;?></option>
															<?php 
														} 
													?>
												</select>
											</div>
											<div class="entries" style="margin-left:10px;">
												entries
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>

						<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
							<div class="row mt-1">
								<div class="col-md-12 table-responsive">
                                    <table class="table row-grouping dataTable" id="customers">
                                        <thead class="tb-head">
                                            <tr role="row">
                                                <th class="text-center">Controls</th>
                                                <th onclick="sortTable(2)" class="text-center">From Currency</th>
                                                <th onclick="sortTable(3)" class="text-center">To Currency</th>
                                                <th onclick="sortTable(4)" class="text-center">Conversion Rate</th>
                                                <th class="text-center">Start Date</th>
                                                <th class="text-center">End Date</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tb-data">
                                            <?php 
                                                if(count($resultData) > 0)
                                                { 
                                                    foreach($resultData as $row)
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td style="width:12%;" class="text-center">
                                                                <div class="dropdown" style="text-align:center;">
                                                                    <button type="button" class="btn btn-default gropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                        Action <i class="fa fa-angle-down"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-right action-links">
                                                                        <li>
                                                                            <a href="<?php echo url('manage-currencyConvertion.html/edit/'.$row->currency_conversion_id);?>" title="Edit">
                                                                                <i class="fa fa-pencil"></i> Edit
                                                                            </a>
                                                                        </li>                                                                            
                                                                        <li>
                                                                            @if ($row->currency_conversion_status)
                                                                                <a href="<?php echo url('manage-currencyConvertion.html/status/'.$row->currency_conversion_id.'/0');?>" title="Inactive">
                                                                                    <i class="fa fa-ban"></i> Inactive
                                                                                </a>
                                                                            @else
                                                                                <a href="<?php echo url('manage-currencyConvertion.html/status/'.$row->currency_conversion_id.'/1');?>" title="Active">
                                                                                    <i class="fa fa-check"></i> Active
                                                                                </a>
                                                                            @endif
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>      
                                                            <td class="text-center">{{$row->from_country}}</td>
                                                            <td class="text-center">{{$row->to_country}}</td>
                                                            <td class="text-center">{{$row->currency_rate}}</td>
                                                            <td class="text-center">{{date('d-M-Y',(int)$row->start_date)}}</td>
                                                            <td class="text-center">{{!empty($row->end_date)? date('d-M-Y',(int)$row->end_date) :'--'}}</td>
                                                            <td style="width:12%;" class="text-center">
                                                                <?php 
                                                                    if($row->currency_conversion_status == 1)
                                                                    {
                                                                        ?>
                                                                        <button class="btn btn-outline-success btn-block" title="Active">
                                                                            <i class="fa fa-check"></i> Active
                                                                        </button>
                                                                        <?php 
                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                        <button class="btn btn-outline-danger btn-block" title="Inactive">
                                                                            <i class="fa fa-ban"></i> Inactive
                                                                        </button>
                                                                        <?php 
                                                                    } 
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                } 
                                                else
                                                {
                                                    ?>
                                                    <tr>
                                                        <td class="text-center" colspan="11">
                                                            <?php echo NO_DATA_FOUND;?>
                                                        </td>
                                                    </tr>
                                                    <?php 
                                                } 
                                            ?>
                                        </tbody>
                                    </table>								
									<div class="row mt-2">
										<div class="col-md-8 d-flex">
											<div class="8dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
												Showing {{$resultData->firstItem()}} to {{$resultData->lastItem()}} of {{$resultData->total()}} entries
											</div>
										</div>
										<div class="col-md-4">
											<div class="text-right justify-content-end float-right" >
												{{$resultData->appends(request()->input())->links()}}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php 
					} 
				?>
			</div>
		</div>
	</div>
</section>
@endsection
