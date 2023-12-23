@extends('back_end/template')

@section('content')


<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		
		<!-- breadcrumb start
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h2 class="content-header-title float-left mb-0">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<i class="feather icon-home"></i> <a href="{{route('dashboard')}}">Home</a>
								</li>
								<li class="breadcrumb-item active">
									<?php echo isset($pageTitle) ? $pageTitle :"";?>
								</li>
							</ol>
						</h2>
					</div>
				</div>
			</div>
		</div>
		breadcrumb end -->
		<!---------------------------------->
		
		<?php 
			if( isset($type) && $type == "add" || $type == "edit")
			{
				
			}
			else if( isset($type) && $type == "mergeDoc")
			{
				$condition ='library_id = "'.$id.'" ';
				$query = 'select folder_name,folder_type,document_file from library where '.$condition.'';
				$getFolderName = DB::select($query);
				$folder_name = isset($getFolderName[0]->folder_name) ? $getFolderName[0]->folder_name :"";
				$folder_type = isset($getFolderName[0]->folder_type) ? $getFolderName[0]->folder_type :"";
				$document_file = isset($getFolderName[0]->document_file) ? $getFolderName[0]->document_file :"";
				
				?>
				<section id="row-grouping" class="mt-7">
					<!--
					
					-->
				
					<div class="row">
						<div class="col-12">
							
							<!-- CMA HQ start here -->
							<div class="card">
								<div class="card-content">
									<div class="card-body card-dashboard">
										<!--Merge Document-->
										<section class="pdffolder11">
											<div class="row" style="    margin-left: 0px;margin-right: 0px;">
												<div class="col-md-8">
													<div class="">
														<h3 class="mailref11"><?php echo $document_file;?></h3>
													</div>
												</div>
												<div class="col-md-4"></div>
											</div>
											<div class="row" style="margin-top: 10px;margin-bottom: 10px;">
												<div class="col-md-4">
													<a href="">
													<a href="<?php echo asset('public/uploads/library/'.$document_file);?>" title="Download">
														<div style="text-align:center;">
															<img src="<?php echo asset("public/uploads/images/doc_image.png");?>" style="width:220px;height:200px;">
														</div>
													</a>
													<div style="text-align:center;">
														<p class="down123">
															<a style="color:#000;font-size:18px;" href="<?php echo asset('public/uploads/library/'.$document_file);?>">  Click here to download</a>
														</p>
													</div>
												</div>
												
												<div class="col-md-8">
													<div class="">
														<h3 class="editdoc11">How can I edit this Document?</h3>
													</div>
													<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
														<div class="col-md-1">
															<div class="merge-numbers">
																1
															</div>
														</div>
														<div class="col-md-11">
															<div class="">
																<h3 class="dddown11">Download</h3>
																<p class="computer11">Click on the Download link below the icon to save it to your computer.</p>
															</div>
														</div>
													</div>
													<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
														<div class="col-md-1">
															<div class="merge-numbers">
																2
															</div>
														</div>
														<div class="col-md-11">
															<div class="">
																<h3 class="dddown11">Customize</h3>
																<p class="computer11">Customize the document’s content on your computer to fit your organization needs and rename and save it to your computer.</p>
															</div>
														</div>
													</div>
													<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
														<div class="col-md-1">
															<div class="merge-numbers">
																3
															</div>
														</div>
														<div class="col-md-11">
															<div class="">
																<h3 class="dddown11">Upload</h3>
																<p class="computer11">Click on the Upload button in the top left, select the folder you want the new document to be in.</p>
															</div>
														</div>
													</div>
													<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
														<div class="col-md-1">
															<div class="merge-numbers">
																4
															</div>
														</div>
														<div class="col-md-11">
															<div class="">
																<h3 class="dddown11">Merge</h3>
																<p class="computer11">Select your new document and then click on the Merge List link to select the contact list you want to merge with. </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
										<!--Merge Document end-->
										
										<?php
											/* $condition ='main_library_id="'.$id.'" ';
											$query = 'select * from library where '.$condition.' order by library_id desc ';
											$getCMSHQFolder = DB::select($query);
											if(count($getCMSHQFolder ) > 0)
											{
												?>
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<?php 
																foreach($getCMSHQFolder as $CMSHQFolder)
																{
																	?>
																	<div class="col-md-2">
																		
																		<?php 
																			if($CMSHQFolder->folder_name !="")
																			{
																				?>
																				<img src="<?php echo asset("public/uploads/images/folder.png");?>" class="folder-size">
																				<p class="folder-name"><?php echo ucfirst($CMSHQFolder->folder_name);?></p>
																				<?php 
																			}
																			
																			if($CMSHQFolder->document_file !="")
																			{
																				?>
																				<a href="<?php echo url("manage-library.html/mergeDoc/").$CMSHQFolder->library_id; ?>">
																					<img src="<?php echo asset("public/uploads/images/doc_image.png");?>" class="folder-size">
																					<p class="folder-name"><?php echo ucfirst($CMSHQFolder->document_file);?></p>
																				</a>
																				<?php 
																			} 
																		?>
																		<?php
																			if($CMSHQFolder->folder_name !="")
																			{
																				?>
																				<a href="#" data-toggle="modal" data-target="#cmaFolderModal<?php echo $CMSHQFolder->library_id;?>" title="Update Folder">
																					<i class="fa fa-pencil"></i>
																				</a>
																				<?php 
																			}
																			else if(!empty($CMSHQFolder->document_file))
																			{
																				?>
																				<?php 
																					if(file_exists(public_path('/uploads/library/'.$CMSHQFolder->document_file)))
																					{
																						?>
																						<a href="<?php echo asset('public/uploads/library/'.$CMSHQFolder->document_file);?>" title="Download" style="color:#28C76F;">
																							<i class="fa fa-download"></i>
																						</a>
																						<?php
																					}
																				?>
																				
																				<?php
																			}
																		?>
																		&nbsp;|&nbsp;
																		<a href="<?php echo url('manage-library.html/delete/'.$CMSHQFolder->library_id);?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a>
																	</div>
																	
																	<!--Edit Popup start -->
																	<div class="modal fade new1-model" id="cmaFolderModal<?php echo $CMSHQFolder->library_id;?>" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content max-width">
																				<div class="modal-header" style="background: #0074ae;color: #fff;">
																					<h5 class="modal-title" id="exampleModalLabel">Document</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				
																				<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
																						
																					<div class="modal-body"><!-- modal-body start here-->
																						@csrf
																						<div class="row">
																							<div class="col-12">
																								<div class="form-group form-group-new row">
																									<div class="col-md-3">
																										<span>Folder Name <span class="required-start">*</span></span>
																									</div>
																									<div class="col-md-5 controls">
																										<input type="text" name="folder_name" value="<?php echo ucfirst($CMSHQFolder->folder_name);?>" id="folder_name" required class="form-control">
																										<input type="hidden" name="library_id" value="<?php echo $CMSHQFolder->library_id;?>">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div><!-- modal-body end here-->
																					
																					<div class="modal-footer">
																						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																						<input type="submit" name="Update" value="Update" class="btn btn-primary ml-3">
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																	<!-- Edit Popup end -->
																	<?php 
																}
															?> 
														</div>
													</div>
												</div>
												<?php 
											}
											else
											{
												?>
												<p class="no-data">No Folders found.</p>
												<?php 
											} */ 
										?>
										
									</div>
								</div>
							</div>
							<!-- CMA HQ end here -->
						</div>
					</div>
				</section>
				<?php
			}
			else if( isset($type) && $type == "subFolder")
			{
				$condition ='library_id = "'.$id.'" ';
				$query = 'select folder_name,folder_type from library where '.$condition.'';
				$getFolderName = DB::select($query);
				$folder_name = isset($getFolderName[0]->folder_name) ? $getFolderName[0]->folder_name :"";
				$folder_type = isset($getFolderName[0]->folder_type) ? $getFolderName[0]->folder_type :"";
				
				$folder_type_name ="";
				if($folder_type == 1)
				{
					$folder_type_name ="CMA HQ Files";
				}
				else if($folder_type == 2)
				{
					$folder_type_name ="Custom Files";
				}
				else if($folder_type == 3)
				{
					$folder_type_name ="My Location Files";
				}
				?>
				<section id="row-grouping" class="mt-7">
					<fieldset>
						<legend>
							<?php echo isset($pageTitle) ? $pageTitle :"";?> <i class="fa fa-angle-right" aria-hidden="true"></i>
							<a href="<?php echo url("manage-library.html");?>"><?php echo $folder_type_name;?></a> <i class="fa fa-angle-right" aria-hidden="true"></i>
							<?php echo ucfirst($folder_name);?>
						</legend>
					</fieldset>
				
					<div class="row">
						<div class="col-12">
							
							<!-- CMA HQ start here -->
							<div class="card">
								<div class="card-content">
									<div class="card-body card-dashboard">
										
										<div class="row mb-1">
											<div class="col-md-12">
												<span style="font-size:18px;">Certificates</span> &nbsp;
												<a href="#" data-toggle="modal" data-target="#cmaFolderModal" class="btn btn-success" title="Create New Folder">
													<i class="fa fa-plus"></i> Create New Folder
												</a>
												<a href="#" data-toggle="modal" data-target="#DocumentUploadModal" class="btn btn-success" title="Upload Document">
													<i class="fa fa-plus"></i> Upload Document
												</a>
											</div>
										</div>
										
										<!-- Folder Popup start -->
										<div class="modal fade new1-model" id="cmaFolderModal" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content max-width">
													<div class="modal-header" style="background: #0074ae;color: #fff;">
														<h5 class="modal-title" id="exampleModalLabel">Document</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													
													<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
															
														<div class="modal-body"><!-- modal-body start here-->
															@csrf
															<div class="row">
																<div class="col-12">
																	<div class="form-group form-group-new row">
																		<div class="col-md-3">
																			<span>Folder Name <span class="required-start">*</span></span>
																		</div>
																		<div class="col-md-5 controls">
																			<input type="text" name="folder_name" id="folder_name" required class="form-control">
																			<input type="hidden" name="main_library_id" value="<?php echo $id;?>">
																		</div>
																	</div>
																</div>
															</div>
														</div><!-- modal-body end here-->
														
														<div class="modal-footer">
															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
															<input type="submit" name="Save" value="Save" class="btn btn-primary ml-3">
														</div>
													</form>
												</div>
											</div>
										</div>
										<!-- Folder Popup end -->
										
										<!-- Upload Popup start -->
										<div class="modal fade new1-model" id="DocumentUploadModal" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content max-width">
													<div class="modal-header" style="background: #0074ae;color: #fff;">
														<h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													
													<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
															
														<div class="modal-body"><!-- modal-body start here-->
															@csrf
															<div class="row">
																<div class="col-12">
																	<div class="form-group form-group-new row">
																		<div class="col-md-3">
																			<span>Upload Document<span class="required-start">*</span> </span>
																		</div>
																		<div class="col-md-5 controls">
																			<input type="file" name="upload_document" onchange="return validateDocandDocx(this)" id="upload_document" required class="form-control singleDocument">
																			<input type="hidden" name="main_library_id" value="<?php echo $id;?>">
																		</div>
																	</div>
																</div>
															</div>
														</div><!-- modal-body end here-->
														
														<div class="modal-footer">
															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
															<input type="submit" name="SaveDocument" value="Save" class="btn btn-primary ml-3">
														</div>
													</form>
												</div>
											</div>
										</div>
										<!-- Upload Popup end -->
										
										<?php
											$condition ='main_library_id="'.$id.'" ';
											$query = 'select * from library where '.$condition.' order by library_id desc ';
											$getCMSHQFolder = DB::select($query);
											if(count($getCMSHQFolder ) > 0)
											{
												?>
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<?php 
																foreach($getCMSHQFolder as $CMSHQFolder)
																{
																	?>
																	<div class="col-md-2">
																		
																		<?php 
																			if($CMSHQFolder->folder_name !="")
																			{
																				?>
																				<img src="<?php echo asset("public/uploads/images/folder.png");?>" class="folder-size">
																				<p class="folder-name"><?php echo ucfirst($CMSHQFolder->folder_name);?></p>
																				<?php 
																			}
																			
																			if($CMSHQFolder->document_file !="")
																			{
																				?>
																				<a href="<?php echo url("manage-library.html/mergeDoc/".$CMSHQFolder->library_id); ?>">
																					<img src="<?php echo asset("public/uploads/images/doc_image.png");?>" class="folder-size">
																					<p class="folder-name"><?php echo ucfirst($CMSHQFolder->document_file);?></p>
																				</a>
																				<?php 
																			} 
																		?>
																		<?php
																			if($CMSHQFolder->folder_name !="")
																			{
																				?>
																				<a href="#" data-toggle="modal" data-target="#cmaFolderModal<?php echo $CMSHQFolder->library_id;?>" title="Update Folder">
																					<i class="fa fa-pencil"></i>
																				</a>
																				<?php 
																			}
																			else if(!empty($CMSHQFolder->document_file))
																			{
																				?>
																				<?php 
																					if(file_exists(public_path('/uploads/library/'.$CMSHQFolder->document_file)))
																					{
																						?>
																						<a href="<?php echo asset('public/uploads/library/'.$CMSHQFolder->document_file);?>" title="Download" style="color:#28C76F;">
																							<i class="fa fa-download"></i>
																						</a>
																						<?php
																					}
																				?>
																				
																				<?php
																			}
																		?>
																		&nbsp;|&nbsp;
																		<a href="<?php echo url('manage-library.html/delete/'.$CMSHQFolder->library_id);?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a>
																	</div>
																	
																	<!--Edit Popup start -->
																	<div class="modal fade new1-model" id="cmaFolderModal<?php echo $CMSHQFolder->library_id;?>" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content max-width">
																				<div class="modal-header" style="background: #0074ae;color: #fff;">
																					<h5 class="modal-title" id="exampleModalLabel">Document</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				
																				<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
																						
																					<div class="modal-body"><!-- modal-body start here-->
																						@csrf
																						<div class="row">
																							<div class="col-12">
																								<div class="form-group form-group-new row">
																									<div class="col-md-3">
																										<span>Folder Name <span class="required-start">*</span></span>
																									</div>
																									<div class="col-md-5 controls">
																										<input type="text" name="folder_name" value="<?php echo ucfirst($CMSHQFolder->folder_name);?>" id="folder_name" required class="form-control">
																										<input type="hidden" name="library_id" value="<?php echo $CMSHQFolder->library_id;?>">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div><!-- modal-body end here-->
																					
																					<div class="modal-footer">
																						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																						<input type="submit" name="Update" value="Update" class="btn btn-primary ml-3">
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																	<!-- Edit Popup end -->
																	<?php 
																}
															?> 
														</div>
													</div>
												</div>
												<?php 
											}
											else
											{
												?>
												<p class="no-data">No Folders found.</p>
												<?php 
											} 
										?>
										
									</div>
								</div>
							</div>
							<!-- CMA HQ end here -->
						</div>
					</div>
				</section>
				<?php
			}
			else
			{
				?>
				<section id="row-grouping" class="mt-7">
					<fieldset>
						<legend>
							<?php echo isset($pageTitle) ? $pageTitle :"";?>
						</legend>
					</fieldset>
				
					<div class="row">
						<div class="col-12">
							
							<!-- CMA HQ start here -->
							<div class="card">
								<div class="card-content">
									<div class="card-body card-dashboard">
										
										<div class="row mb-1">
											<div class="col-md-12">
												<span style="font-size:18px;">CMA HQ</span> &nbsp;
												<a href="#" data-toggle="modal" data-target="#cmaFolderModal" class="btn btn-success" title="Create New Folder">
													<i class="fa fa-plus"></i> Create New Folder
												</a>
											</div>
										</div>
										
										<div class="modal fade new1-model" id="cmaFolderModal" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content max-width">
													<div class="modal-header" style="background: #0074ae;color: #fff;">
														<h5 class="modal-title" id="exampleModalLabel">Document</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													
													<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
															
														<div class="modal-body"><!-- modal-body start here-->
															@csrf
															<div class="row">
																<div class="col-12">
																	<div class="form-group form-group-new row">
																		<div class="col-md-3">
																			<span>Folder Name <span class="required-start">*</span></span>
																		</div>
																		<div class="col-md-5 controls">
																			<input type="text" name="folder_name" id="folder_name" required class="form-control">
																			<input type="hidden" name="folder_type" value="1">
																		</div>
																	</div>
																</div>
															</div>
														</div><!-- modal-body end here-->
														
														<div class="modal-footer">
															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
															<input type="submit" name="Save" value="Save" class="btn btn-primary ml-3">
														</div>
													</form>
												</div>
											</div>
										</div>
										<!-- Popup end -->
										
										<div class="row mb-1">
											<div class="col-md-12">
												<p>These files are provided by CMA Headquarters. All files can be downloaded and printed.</p>
											</div>
										</div>
										
										<?php
											$condition ='folder_type = 1 AND main_library_id = 0';
											$query = 'select * from library where '.$condition.' order by library_id desc ';
											$getCMSHQFolder = DB::select($query);
											if(count($getCMSHQFolder ) > 0)
											{
												?>
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<?php 
																foreach($getCMSHQFolder as $CMSHQFolder)
																{
																	?>
																	<div class="col-md-2">
																		<a href="<?php echo url("manage-library.html/subFolder/".$CMSHQFolder->library_id);?>" title="<?php echo ucfirst($CMSHQFolder->folder_name);?>">
																			<img src="<?php echo asset("public/uploads/images/folder.png");?>" class="folder-size">
																			<p class="folder-name"><?php echo ucfirst($CMSHQFolder->folder_name);?></p>
																		</a>
																		
																		<a href="#" data-toggle="modal" data-target="#cmaFolderModal<?php echo $CMSHQFolder->library_id;?>" title="Update Folder">
																			<i class="fa fa-pencil"></i>
																		</a>
																		&nbsp;|&nbsp;
																		<a href="<?php echo url('manage-library.html/delete/'.$CMSHQFolder->library_id);?>" class="confirm-text" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a>
																	</div>
																	
																	<!--Edit Popup start -->
																	<div class="modal fade new1-model" id="cmaFolderModal<?php echo $CMSHQFolder->library_id;?>" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content max-width">
																				<div class="modal-header" style="background: #0074ae;color: #fff;">
																					<h5 class="modal-title" id="exampleModalLabel">Document</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				
																				<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
																						
																					<div class="modal-body"><!-- modal-body start here-->
																						@csrf
																						<div class="row">
																							<div class="col-12">
																								<div class="form-group form-group-new row">
																									<div class="col-md-3">
																										<span>Folder Name <span class="required-start">*</span></span>
																									</div>
																									<div class="col-md-5 controls">
																										<input type="text" name="folder_name" value="<?php echo ucfirst($CMSHQFolder->folder_name);?>" id="folder_name" required class="form-control">
																										<input type="hidden" name="library_id" value="<?php echo $CMSHQFolder->library_id;?>">
																										<input type="hidden" name="folder_type" value="1">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div><!-- modal-body end here-->
																					
																					<div class="modal-footer">
																						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																						<input type="submit" name="Update" value="Update" class="btn btn-primary ml-3">
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																	<!-- Edit Popup end -->
																	<?php 
																}
															?> 
														</div>
													</div>
												</div>
												<?php 
											}
											else
											{
												?>
												<p class="no-data">No Folders found.</p>
												<?php 
											} 
										?>
										
									</div>
								</div>
							</div>
							<!-- CMA HQ end here -->
							
							<!-- Custom Folder start here -->
							<div class="card">
								<div class="card-content">
									<div class="card-body card-dashboard">
										
										<div class="row mb-1">
											<div class="col-md-12">
												<span style="font-size:18px;">Custom Folder</span> &nbsp;
												
												<a href="#" data-toggle="modal" data-target="#CustomFolderModal" class="btn btn-success" title="Custom Folder">
													<i class="fa fa-plus"></i> Create New Folder
												</a>
											</div>
										</div>
										
										<!-- Popup start -->
										<div class="modal fade new1-model" id="CustomFolderModal" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content max-width">
													<div class="modal-header" style="background: #0074ae;color: #fff;">
														<h5 class="modal-title" id="exampleModalLabel">Document</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													
													<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
															
														<div class="modal-body"><!-- modal-body start here-->
															@csrf
															<div class="row">
																<div class="col-12">
																	<div class="form-group form-group-new row">
																		<div class="col-md-3">
																			<span>Folder Name <span class="required-start">*</span></span>
																		</div>
																		<div class="col-md-5 controls">
																			<input type="text" name="folder_name" id="folder_name" required class="form-control">
																			<input type="hidden" name="folder_type" value="2">
																		</div>
																	</div>
																</div>
															</div>
														</div><!-- modal-body end here-->
														
														<div class="modal-footer">
															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
															<input type="submit" name="Save" value="Save" class="btn btn-primary ml-3">
														</div>
													</form>
												</div>
											</div>
										</div>
										<!-- Popup end -->
										
										<?php
											$condition ='folder_type = 2 AND main_library_id = 0';
											$query = 'select * from library where '.$condition.' order by library_id desc ';
											$getCustomFolder = DB::select($query);
											if(count($getCustomFolder ) > 0)
											{
												?>
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<?php 
																foreach($getCustomFolder as $CMSHQFolder)
																{
																	?>
																	<div class="col-md-2">
																		<a href="<?php echo url("manage-library.html/subFolder/".$CMSHQFolder->library_id);?>" title="<?php echo ucfirst($CMSHQFolder->folder_name);?>">
																			<img src="<?php echo asset("public/uploads/images/folder.png");?>" class="folder-size">
																			<p class="folder-name"><?php echo ucfirst($CMSHQFolder->folder_name);?></p>
																		</a>
																		<a href="#" data-toggle="modal" data-target="#CustomFolderModal<?php echo $CMSHQFolder->library_id;?>" title="Update Folder">
																			<i class="fa fa-pencil"></i>
																		</a>
																		&nbsp;|&nbsp;
																		<a href="<?php echo url('manage-library.html/delete/'.$CMSHQFolder->library_id);?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a>
																	</div>
																	
																	<!--Edit Popup start -->
																	<div class="modal fade new1-model" id="CustomFolderModal<?php echo $CMSHQFolder->library_id;?>" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content max-width">
																				<div class="modal-header" style="background: #0074ae;color: #fff;">
																					<h5 class="modal-title" id="exampleModalLabel">Document</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				
																				<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
																					<div class="modal-body"><!-- modal-body start here-->
																						@csrf
																						<div class="row">
																							<div class="col-12">
																								<div class="form-group form-group-new row">
																									<div class="col-md-3">
																										<span>Folder Name <span class="required-start">*</span></span>
																									</div>
																									<div class="col-md-5 controls">
																										<input type="text" name="folder_name" value="<?php echo ucfirst($CMSHQFolder->folder_name);?>" id="folder_name" required class="form-control">
																										<input type="hidden" name="library_id" value="<?php echo $CMSHQFolder->library_id;?>">
																										<input type="hidden" name="folder_type" value="<?php echo $CMSHQFolder->folder_type;?>">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div><!-- modal-body end here-->
																					
																					<div class="modal-footer">
																						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																						<input type="submit" name="Update" value="Update" class="btn btn-primary ml-3">
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																	<!-- Edit Popup end -->
																	<?php 
																} 
															?>
														</div>
													</div>
												</div>
												<?php 
											}
											else
											{
												?>
												<p class="no-data">No Folders found.</p>
												<?php 
											} 
										?>
										
									</div>
								</div>
							</div>
							<!-- Custom Folder ends here -->
							
							<!-- My Location Folder start here -->
							<div class="card">
								<div class="card-content">
									<div class="card-body card-dashboard">
										
										<div class="row mb-1">
											<div class="col-md-12">
												<span style="font-size:18px;">My Location Folder</span> &nbsp;
												<a href="#" data-toggle="modal" data-target="#MyLocationFolderModal" class="btn btn-success" title="Custom Folder">
													<i class="fa fa-plus"></i> Create New Folder
												</a>
											</div>
										</div>
										
										<!-- Popup start -->
										<div class="modal fade new1-model" id="MyLocationFolderModal" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content max-width">
													<div class="modal-header" style="background: #0074ae;color: #fff;">
														<h5 class="modal-title" id="exampleModalLabel">Document</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													
													<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
															
														<div class="modal-body"><!-- modal-body start here-->
															@csrf
															<div class="row">
																<div class="col-12">
																	<div class="form-group form-group-new row">
																		<div class="col-md-3">
																			<span>Folder Name <span class="required-start">*</span></span>
																		</div>
																		<div class="col-md-5 controls">
																			<input type="text" name="folder_name" id="folder_name" required class="form-control">
																			<input type="hidden" name="folder_type" value="3">
																		</div>
																	</div>
																</div>
															</div>
														</div><!-- modal-body end here-->
														
														<div class="modal-footer">
															<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
															<input type="submit" name="Save" value="Save" class="btn btn-primary ml-3">
														</div>
													</form>
												</div>
											</div>
										</div>
										<!-- Popup end -->
										
										<div class="row mb-1">
											<div class="col-md-12">
												<p>These files and folders can be created by the school administration team. All files and folder names can be edited and/or removed.</p>
											</div>
										</div>
										
										<?php
											$condition ='folder_type = 3 AND main_library_id = 0';
											$query = 'select * from library where '.$condition.' order by library_id desc ';
											$getMyLocationFolder = DB::select($query);
											if(count($getMyLocationFolder ) > 0)
											{
												?>
												<div class="row">
													<div class="col-md-12">
														<div class="row">
															<?php 
																foreach($getMyLocationFolder as $CMSHQFolder)
																{
																	?>
																	<div class="col-md-2">
																		<a href="<?php echo url("manage-library.html/subFolder/".$CMSHQFolder->library_id);?>" title="<?php echo ucfirst($CMSHQFolder->folder_name);?>">
																			<img src="<?php echo asset("public/uploads/images/folder.png");?>" class="folder-size">
																			<p class="folder-name"><?php echo ucfirst($CMSHQFolder->folder_name);?></p>
																		</a>
																		
																		<a href="#" data-toggle="modal" data-target="#MyLocationFolderModal<?php echo $CMSHQFolder->library_id;?>" title="Update Folder">
																			<i class="fa fa-pencil"></i>
																		</a>
																		&nbsp;|&nbsp;
																		<a href="<?php echo url('manage-library.html/delete/'.$CMSHQFolder->library_id);?>" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></a>
																	</div>
																	
																	<!--Edit Popup start -->
																	<div class="modal fade new1-model" id="MyLocationFolderModal<?php echo $CMSHQFolder->library_id;?>" style="z-index:99999;position:fixed;top:30px;" aria-labelledby="exampleModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
																		<div class="modal-dialog" role="document">
																			<div class="modal-content max-width">
																				<div class="modal-header" style="background: #0074ae;color: #fff;">
																					<h5 class="modal-title" id="exampleModalLabel">Document</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				
																				<form action="" enctype="multipart/form-data" method="post" class="form-horizontal" novalidate >
																					<div class="modal-body"><!-- modal-body start here-->
																						@csrf
																						<div class="row">
																							<div class="col-12">
																								<div class="form-group form-group-new row">
																									<div class="col-md-3">
																										<span>Folder Name <span class="required-start">*</span></span>
																									</div>
																									<div class="col-md-5 controls">
																										<input type="text" name="folder_name" value="<?php echo ucfirst($CMSHQFolder->folder_name);?>" id="folder_name" required class="form-control">
																										<input type="hidden" name="library_id" value="<?php echo $CMSHQFolder->library_id;?>">
																										<input type="hidden" name="folder_type" value="<?php echo $CMSHQFolder->folder_type;?>">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div><!-- modal-body end here-->
																					
																					<div class="modal-footer">
																						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
																						<input type="submit" name="Update" value="Update" class="btn btn-primary ml-3">
																					</div>
																				</form>
																			</div>
																		</div>
																	</div>
																	<!-- Edit Popup end -->
																	<?php 
																} 
															?>
														</div>
													</div>
												</div>
												<?php 
											}
											else
											{
												?>
												<p class="no-data">No Folders found.</p>
												<?php 
											} 
										?>
										
									</div>
								</div>
							</div>
							<!-- My Location Folder ends here -->
							
						</div>
					</div>
				</section>
				<?php 
			} 
		?>
	</div>
</div>

@endsection
