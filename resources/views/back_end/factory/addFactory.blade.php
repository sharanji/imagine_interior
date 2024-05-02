@extends('back_end.template')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />

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
                        <a href="{{url('manage-factory.html')}}" class="btn btn-danger">Go Back</a>
                    </div>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="machine_name">Project Name :</label>
                                <input type="text" class="form-control" value="@php echo isset($editData->machine_name) ? $editData->machine_name : '' @endphp" name="machine_name" id="machine_name" required="">
                            </div>
                            <div class="form-group">
                                <label for="jobtitle">Machine Description</label>
                                <input type="hidden" name="description" id="description">
                                <div id="editor" style="height:230px;">@php echo isset($editData->machine_desc) ? $editData->machine_desc : '' @endphp</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="machine_image">Image :</label>
                                <input type="file" class="form-control" value="" name="machine_image" id="machine_image" required="">
                            </div>
                            <div class="col-12">
                                @if(isset($editData))
                                <img src="{{asset('uploads/factory/'.$editData->machine_id.'.png')}}" width="100%" height="300px" alt="{{$editData->machine_name}}">
                                @endif
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div class="col-6">
                                <button type="submit" class=" btn btn-block btn-primary waves-effect waves-light">Save Project</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    const quill = new Quill('#editor', {
        theme: 'snow'
        , placeholder: 'Compose an epic...'
    , });

    quill.on('text-change', (delta, oldDelta, source) => {
        var html = quill.root.innerHTML;
        $('#description').val(`${html}`);
    });

    var html = quill.root.innerHTML;
    $('#description').val(`${html}`);

</script>
@endsection
