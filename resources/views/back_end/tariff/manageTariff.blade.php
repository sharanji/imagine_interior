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
									$pageTitle = ucfirst($type)." Tariff";
								}
								else
								{
									$pageTitle = "Manage Tariff";
								}
							?>
                            <a href="{{url('manage-Tariff.html')}}" title="<?php echo $pageTitle;?>"><?php echo $pageTitle;?></a>
                        </li>
                    </ol>
                </h2>
            </div>
            <?php 
				if (isset($type) && $type == 'add' || $type == 'edit')
				{
                    ?>

            <?php
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
                    <div class="col-md-10">
                        <fieldset>
                            <legend class="text-uppercase font-size-sm font-weight-bold">
                                <?php echo isset($type)? ucfirst($type)." Tariff" : 'Manage Tariff';?>
                            </legend>
                        </fieldset>
                    </div>
                    <div class="col-md-2">
                        @if ($type=="view")
                        <a href="{{url('manage-tariff.html/add')}}" class="btn btn-primary">Add Tariff</a>
                        @else
                        <a href="{{url('manage-tariff.html')}}" class="btn btn-primary">Back</a>
                        @endif
                    </div>
                </div>

                @if($type == "add")
                <form action="" method="post" onsubmit="return validateFrom();">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <input type="text" name="title" class="form-control" placeholder="Enter Tariff Title" required>
                                </div>
                                <div class="col-6">Plans</div>
                                <div class="col-6 text-right">Description</div>
                            </div>
                            <hr>
                            <div class="row" id="planrows">
                                <div class="col-6 my-1">
                                    <input type="text" class="form-control" name="plan_item[]" placeholder="Enter Your Plan Item" required>
                                </div>
                                <div class="col-6 text-right my-1">
                                    <input type="text" class="form-control" name="plan_desc[]" placeholder="Short Description" maxlength="100" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 my-2">
                                    <button class="btn btn-primary" type="button" onclick="addMoreRows()">Add More </button>
                                    <button class="btn btn-success" type="submit">Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @elseif ($type =="edit")

                <form action="" method="post" onsubmit="return validateFrom();">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12 mb-1">
                                    <input type="text" name="title" class="form-control" value="{{$editData->tittle}}" placeholder="Enter Tariff Title" required>
                                </div>
                                <div class="col-6">Plans</div>
                                <div class="col-6 text-right">Description</div>
                            </div>
                            <hr>
                            @php
                            $plans = DB::table('tariff_line')->where('tariff_header_id','=',$editData->tariff_id)->get();
                            @endphp
                            @foreach ($plans as $item)
                            <div class="row" id="planrows">
                                <div class="col-6 my-1">
                                    <input type="text" class="form-control" value="{{$item->plan}}" name="plan_item[]" placeholder="Enter Your Plan Item" required>
                                </div>
                                <div class="col-6 text-right my-1">
                                    <input type="text" class="form-control" value="{{$item->description}}" name="plan_desc[]" placeholder="Short Description" maxlength="100" required>
                                </div>
                            </div>
                            @endforeach
                            <div class="row">
                                <div class="col-12 my-2">
                                    <button class="btn btn-primary" type="button" onclick="addMoreRows()">Add More </button>
                                    <button class="btn btn-success" type="submit">Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                @else

                <div class="row">
                    @foreach ($tariffs as $tf)

                    <div class="col-md-6 my-2">
                        <div class="row">
                            <div class="col-6 h1">{{$tf->tittle}}
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{url('manage-tariff.html/edit/'.$tf->tariff_id)}}" class="btn btn-primary rounded-circle">
                                    <i class="feather icon-edit-2"></i>
                                </a>
                            </div>
                            <div class="col-6">Plans</div>
                            <div class="col-6 text-right">Time</div>
                        </div>
                        <hr>
                        @php
                        $plans = DB::table('tariff_line')->where('tariff_header_id','=',$tf->tariff_id)->get();
                        @endphp
                        @foreach ($plans as $item)

                        <div class="row">

                            <div class="col-6">{{$item->plan}}</div>
                            <div class="col-6 text-right">{{$item->description}}</div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach

                </div>
                @endif
            </div>
        </div>
    </div>
    </div>
</section>

<script>
    function addMoreRows() {
        $('#planrows').append(` <div class="col-6 my-1">
            <input type="text" class="form-control" required name="plan_item[]" placeholder="Enter Your Plan Item">
            </div>
            <div class="col-6 text-right my-1">
                <input type="text" class="form-control" required name="plan_desc[]" placeholder="Short Description" maxlength="100">
            </div>`);
    }

    function validateFrom() {
        return true;
    }

</script>

@endsection
