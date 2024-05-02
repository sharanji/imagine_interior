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
                                <?php echo isset($type)? ucfirst($type)." Projects" : 'Manage Projects';?>
                            </legend>
                        </fieldset>
                    </div>
                    <div class="col-md-2">
                        @if ($type=="")
                        <a href="{{url('manage-projects.html/add')}}" class="btn btn-primary">Add Project</a>
                        @else
                        @if ($id > 0)
                        <a href="{{url('manage-gallery.html?project_id='.$id)}}" class="btn btn-success">Add Images </a>
                        @endif
                        <a href="{{url('manage-projects.html')}}" class="btn btn-danger">Back</a>
                        @endif
                    </div>
                </div>

                @if ($type == "view" || $type == "add")
                @include('back_end.projects.componets.project_view')
                @else

                @include('back_end.projects.componets.projects_listing')
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
