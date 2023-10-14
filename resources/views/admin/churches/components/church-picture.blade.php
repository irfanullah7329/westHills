<div class="media">
   
    <div class="media-body">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-body"> 
                
                    <a  href="#"  data-toggle="modal" data-target="#church-picture-modal" style="float:right;">
                        Add new picture
                    </a>
                    <p>
                        <div id="picture_delete_message" style="width:25%;text-align:cemter;display:none;">
                            <label class="badge badge-danger">Picture deleted successfully.</label>
                        </div>
                    </p>
                    <h4 class="card-title">All Pictures</h4>
                    <div class="row">
                        <div class="col-12">
                             <div class="table-sorter-wrapper col-lg-12 table-responsive" id="church-picture-tab-images-listing">
                               <!-- From jquery display data here picture-add.js -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                
                <div class="modal fade" id="church-picture-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div style="width:600px;" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:15px 27px;">
                        <h5 class="modal-title" id="ModalLabel">Add new picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form  method="post" id="church-picture-form" class="church-picture-form-class" enctype="multipart/form-data">
                           @csrf
                            <div class="modal-body" style="padding:10px 26px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="picture_message_success" style="display:none;"><label class="badge badge-success">Picture Added successfully.</label></div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tab-name" class="col-form-label">Tab Name</label>
                                        <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                                        <input type="hidden" name="ChurchId" value="{{ $church->ChurchId }}" />
                                        <input type="text" name="tabname" class="form-control" id="picture_tab_name"  required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="picture" class="col-form-label">Select Image</label>
                                        <input type="file" name="tab_picture_image" id="tab_picture_image" class="form-control">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer">
                            <input type="submit" value="save" name="picture_tab_submit" class="btn btn-primary btn-icon-text" />
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

        <div class="modal fade" id="church-update-picture-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div style="width:600px;" class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="padding:15px 27px;">
						<h5 class="modal-title" id="ModalLabel">Update picture</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form  method="post" id="church-picture-update-form" class="church-picture-update-form-class" enctype="multipart/form-data">
						<div class="modal-body" style="padding:10px 26px;">
							<div class="row">
								<div class="col-md-12">
                                    <div id="picture_update_message" style="display:none;"><label class="badge badge-success">Picture updated successfully.</label></div>
                                </div>
                                <div class="col-md-12">
                                <label for="tab-name" class="col-form-label">Tab Name</label>
                                    <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                                    <input type="text" name="updatetabname" id="updatetabname_id" value="" class="form-control" required>
                                </div>
								<div class="col-md-12">
                                <label for="tab-name" class="col-form-label">Update Picture</label>
                                    <input type="file" name="updatetab_picture_image" id="updatetab_picture_image_id" class="form-control">
                                    <input type="hidden" name="OldPictureTabImageUrl" id="OldPictureTabImageUrl" value="" alt="image not exists" class="form-control">
                                </div> 
                                <div class="col-md-12">
                                    <img id="tabimage_source" src=""  alt="image not exists" class="img-lg rounded-circle mb-3">
                                </div>
                                <input type="hidden" id="updateFormChurchMediaId" name="ChurchMediaId" value="" />
							</div>
						</div>
						<div class="modal-footer">
						 <input type="submit" value="Update Changes" name="pictureupdatebutton" class="btn btn-primary btn-icon-text" />
						</div>
					</form>
				</div>
			</div>
		</div>   
            

        </div>


    </div>
    
   
</div>