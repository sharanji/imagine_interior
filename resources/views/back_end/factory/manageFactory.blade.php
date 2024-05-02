@extends('back_end.template')
@section('content')

<!-- breadcrumb start-->
<div class="content-header row">
    <div class="content-header-left col-12 mb-2">
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
									$pageTitle = ucfirst($type)." Factory";
								}
								else
								{
									$pageTitle = "Manage Factory";
								}
							?>
                            <a href="{{url('manage-factory.html')}}" title="<?php echo $pageTitle;?>">
                                <?php echo $pageTitle;?>
                            </a>
                        </li>
                    </ol>
                </h2>
            </div>
            <?php 
				if (isset($type) && $type == 'add' || $type == 'edit')
				{
					
				}
				else
				{					
					?>
            <div class="col-md-6 text-right">

            </div>


            <?php 
				} 
			?>
        </div>
    </div>
</div>
<section id="row-grouping">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <fieldset>
                            <legend class="text-uppercase font-size-sm font-weight-bold">
                                <?php echo isset($type)? ucfirst($type)." Factory" : 'Manage Factory';?>
                            </legend>
                        </fieldset>
                    </div>
                    <div class="col-2 text-center">
                        <a href="{{url('manage-factory.html/add')}}" class="btn btn-primary">Add New Machine</a>
                    </div>
                </div>

                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row mt-1">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table row-grouping dataTable nowrap scroll-horizontal-vertical" style="width: 100%;" id="customers">
                                    <thead class="tb-head">
                                        <tr>
                                            <th class="text-center">Controls</th>
                                            <th onclick="sortTable(1)" class="text-center">Machine Name</th>
                                            <th onclick="sortTable(2)" class="text-center">Machine Description</th>
                                            <th onclick="sortTable(5)">Date Time</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-data">
                                        @if ($factory->count() > 0 )
                                        @foreach ($factory as $row)
                                        <tr>
                                            <td>
                                                <div class="dropdown" style="text-align:center;">
                                                    <button type="button" class="btn btn-default gropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        Action <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right action-links">

                                                        <li>
                                                            <a href="<?php echo url('manage-factory.html/edit/'.$row->machine_id);?>" title="Active"><i class="fa fa-edit"></i> Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo url('manage-factory.html/view/'.$row->machine_id);?>" title="Active"><i class="fa fa-eye"></i> View</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>

                                            <td class="text-center">{{$row->machine_name}}</td>
                                            <td class="text-center">
                                                @php
                                                echo $row->machine_desc;
                                                @endphp
                                            </td>

                                            <td>{{date('d/m/Y h:s',strtotime($row->modified))}}</td>


                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td class="text-center" colspan="12">
                                                <?php echo NO_DATA_FOUND;?>
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-2">
                                <div class="col-8 d-flex">
                                    <div class="8dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                        Showing {{$factory->firstItem()}} to {{$factory->lastItem()}} of {{$factory->total()}}
                                        entries
                                    </div>
                                </div>
                                <div class="col-4 ">
                                    <div class="text-right justify-content-end float-right">
                                        {{$factory->appends(request()->input())->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
