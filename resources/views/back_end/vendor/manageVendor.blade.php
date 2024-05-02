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
									$pageTitle = ucfirst($type)." Vendors";
								}
								else
								{
									$pageTitle = "Manage Vendors";
								}
							?>
                            <a href="{{url('manage-vendor.html')}}" title="<?php echo $pageTitle;?>">
                                <?php echo $pageTitle;?>
                            </a>
                        </li>
                    </ol>
                </h2>
            </div>
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
                                <?php echo isset($type)? ucfirst($type)." Vendors" : 'Manage Vendors';?>
                            </legend>
                        </fieldset>
                    </div>
                    <div class="col-12 text-start">
                        <form action="{{url('/manage-vendor.html/add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="h3">Create Vendor</div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="vendor_name">Name :</label>
                                    <input type="text" class="form-control" value="" name="vendor_name" id="vendor_name" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="vendor_image">Image :</label>
                                    <input type="file" class="form-control" value="" name="vendor_image" id="vendor_image" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-block">Create</button>
                            </div>

                        </form>
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
                                            <th onclick="sortTable(1)" class="text-center">Vendor Name</th>
                                            <th onclick="sortTable(2)" class="text-center">Image</th>
                                            <th onclick="sortTable(5)">Date Time</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tb-data">
                                        @if ($resultData->count() > 0 )
                                        @foreach ($resultData as $row)
                                        <tr>
                                            <td>
                                                <div class="dropdown" style="text-align:center;">
                                                    <button type="button" class="btn btn-default gropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        Action <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-right action-links">
                                                        <li>
                                                            <a href="<?php echo url('manage-vendor.html/delete/'.$row->vendor_id);?>" title="Active"><i class="fa fa-trash"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>

                                            <td class="text-center">{{$row->vendor_name}}</td>
                                            <td>
                                                <img src="{{asset('uploads/vendors/'.$row->vendor_id.'.png')}}" height="100px" alt="{{$row->vendor_name}}">
                                            </td>


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
                                        Showing {{$resultData->firstItem()}} to {{$resultData->lastItem()}} of {{$resultData->total()}}
                                        entries
                                    </div>
                                </div>
                                <div class="col-4 ">
                                    <div class="text-right justify-content-end float-right">
                                        {{$resultData->appends(request()->input())->links()}}
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
