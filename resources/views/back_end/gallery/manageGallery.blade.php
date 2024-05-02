@extends('back_end.template')
@section('content')
<link href="https://vjs.zencdn.net/8.6.1/video-js.css" rel="stylesheet" />


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
									$pageTitle = ucfirst($type)."Project gallery";
								}
								else
								{
									$pageTitle = "Manage Project gallery";
								}
							?>
                            <a href="" title="<?php echo $pageTitle;?>"><?php echo $pageTitle;?></a>
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
                <fieldset>
                    <legend class="text-uppercase font-size-sm font-weight-bold">
                        <?php echo isset($type)? ucfirst($type)." gallery" : 'Manage gallery';?>
                    </legend>
                </fieldset>
                <form action="{{route('addGalleryLabel')}}" name="addLabel" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 ">
                            <label for="gallery_labels">Add Lables</label>
                            <input type="text" name="label_name" required id="gallery_labels" class="form-control">
                        </div>
                        <div class="col-md-3 mt-2">
                            <button type="submit" class="btn btn-primary">Add Label</button>
                        </div>
                    </div>
                </form>
                <div class="d-flex justify-content-center my-3">
                    <ul class="nav nav-pills">
                        @php
                        $label_id = 0;
                        @endphp
                        @foreach ($galleryLables as $label)
                        @if ($_GET['label'] == $label->label_name)
                        @php
                        $label_id = $label->label_id;
                        @endphp
                        @endif
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($_GET['label'] == $label->label_name)? "active" :''?> }}" href="?project_id={{$_GET['project_id']}}&label={{$label->label_name}}" aria-current="page" href="#">{{$label->label_name}}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="row">
                    @php
                    $galleryImage = DB::table('gallery')->leftjoin('gallery_lables','gallery_lables.label_id','=','gallery.label_id')
                    ->where('label_name','=',$_GET['label'])
                    ->where('project_id','=',$_GET['project_id'])->get();

                    @endphp
                    @foreach ($galleryImage as $image)
                    <div class="col-3 my-1">
                        @php
                        $mimeType = explode(".",$image->image_label)
                        @endphp
                        @if (end($mimeType) =='mp4')
                        <video id="my-video" class="video-js" controls preload="auto" width="300px" height="300px" poster="{{asset("uploads/video.png")}}" data-setup="{}">
                            <source src="{{asset("uploads/gallery_images/$image->image_label")}}" type="video/mp4" />
                        </video>
                        @else
                        <img src="{{asset("uploads/gallery_images/$image->image_label")}}" alt="asdf" class="rounded" width="100%" height="300px">
                        @endif
                    </div>
                    @endforeach
                    <div class="col-12 text-center mt-4">
                        <form action="" id="imageupload_form" name="uploadImage" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="images[]" onchange="this.froms.uploadImage.submit()" id="imgupload" multiple style="display:none" />
                            <input type="hidden" name="label_id" value="{{$label_id}}">
                            <button class="btn btn-primary" type="button" id="OpenImgUpload"> <i class="fa fa-upload pr-1"></i> Add New</button>
                        </form>
                    </div>
                    <script>
                        $('#OpenImgUpload').click(function() {
                            $('#imgupload').trigger('click');
                        });

                        $('#imgupload').change(function() {
                            $('#imageupload_form').submit();
                        })

                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://vjs.zencdn.net/8.6.1/video.min.js"></script>
@endsection
