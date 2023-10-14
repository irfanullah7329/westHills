<div class="media">
   
    <div class="media-body">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-body"> 
                
                    <a  href="#"  data-toggle="modal" data-target="#church-slideshow-modal" style="float:right;">
                        Add new slideshow
                    </a>
                    <p>
                        <div id="slideshow_delete_message" style="width:25%;text-align:cemter;display:none;">
                            <label class="badge badge-danger">Slideshow deleted successfully.</label>
                        </div>
                    </p>
                    <h4 class="card-title">All slideshows</h4>
                    <div class="row">
                        <div class="col-12">
                             <div class="table-sorter-wrapper col-lg-12 table-responsive" id="church-slideshow-tab-listing">
                               <!-- From jquery display data here slideshow-add.js -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                
                <div class="modal fade" id="church-slideshow-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div style="width:600px;" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:15px 27px;">
                        <h5 class="modal-title" id="ModalLabel">Add new slideshow</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form  method="post" id="church-slideshow-form" class="church-slideshow-form-class" enctype="multipart/form-data">
                           @csrf
                            <div class="modal-body" style="padding:10px 26px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="slideshow_message_success" style="display:none;"><label class="badge badge-success">slideshow Added successfully.</label></div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tab-name" class="col-form-label">Tab Name</label>
                                        <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                                        <input type="hidden" name="ChurchId" value="{{ $church->ChurchId }}" />
                                        <input type="text" name="slideshowtabname" class="form-control" id="slideshow_tab_name"  required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="slideshow" class="col-form-label">Select Image</label>
                                        <input type="file" name="tab_slideshow_image" id="tab_slideshow_image" class="form-control">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer">
                            <input type="submit" value="save" name="slideshow_tab_submit" class="btn btn-primary btn-icon-text" />
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

        <div class="modal fade" id="church-update-slideshow-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div style="width:600px;" class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="padding:15px 27px;">
						<h5 class="modal-title" id="ModalLabel">Update slideshow</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form  method="post" id="church-slideshow-update-form" class="church-slideshow-update-form-class" enctype="multipart/form-data">
						<div class="modal-body" style="padding:10px 26px;">
							<div class="row">
								<div class="col-md-12">
                                    <div id="slideshow_update_message" style="display:none;"><label class="badge badge-success">slideshow updated successfully.</label></div>
                                </div>
                                <div class="col-md-12">
                                <label for="tab-name" class="col-form-label">Tab Name</label>
                                    <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                                    <input type="text" name="updateSlideShowTabName" id="updateSlideShowTabNameId" value="" class="form-control" required>
                                </div>
								<div class="col-md-12">
                                <label for="tab-name" class="col-form-label">Update slideshow</label>
                                    <input type="file" name="updateSlideShowImage" id="updateSlideShowImageId" class="form-control">
                                    <input type="hidden" name="oldSlideShowTabImageUrl" id="oldSlideShowTabImageUrlId" value="" alt="image not exists" class="form-control">
                                </div> 
                                <div class="col-md-12">
                                    <img id="slideShowTabImageSourceId" src=""  alt="image not exists" class="img-lg rounded-circle mb-3">
                                </div>
                                <input type="hidden" id="updateSlideShowFormChurchMediaId" name="ChurchMediaId" value="" />
							</div>
						</div>
						<div class="modal-footer">
						 <input type="submit" value="Update Changes" name="slideshowupdatebutton" class="btn btn-primary btn-icon-text" />
						</div>
					</form>
				</div>
			</div>
		</div>   
            

        </div>


    </div>
    
   
</div>