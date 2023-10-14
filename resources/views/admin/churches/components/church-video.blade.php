<div class="media">
   
    <div class="media-body">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-body"> 
                
                    <a  href="#"  data-toggle="modal" data-target="#church-video-modal" style="float:right;">
                        Add new video
                    </a>
                    <p>
                        <div id="video_delete_message" style="width:25%;text-align:cemter;display:none;">
                            <label class="badge badge-danger">Video deleted successfully.</label>
                        </div>
                    </p>
                    <h4 class="card-title">All Videos</h4>
                    <div class="row">
                        <div class="col-12">
                             <div class="table-sorter-wrapper col-lg-12 table-responsive" id="church-video-tab-listing">
                               <!-- From jquery display data here video-add.js -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                
                <div class="modal fade" id="church-video-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div style="width:600px;" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:15px 27px;">
                        <h5 class="modal-title" id="ModalLabel">Add new video</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form  method="post" id="church-video-form" class="church-video-form-class" enctype="multipart/form-data">
                           @csrf
                            <div class="modal-body" style="padding:10px 26px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="video_message_success" style="display:none;"><label class="badge badge-success">Video Added successfully.</label></div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tab-name" class="col-form-label">Tab Name</label>
                                        <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                                        <input type="hidden" name="ChurchId" value="{{ $church->ChurchId }}" />
                                        <input type="text" name="videotabname" class="form-control" id="video_tab_name"  required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="video" class="col-form-label">Select Video File</label>
                                        <input type="file" name="tab_video_file" id="tab_video_file" class="form-control">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="modal-footer">
                            <input type="submit" value="save" name="video_tab_submit" class="btn btn-primary btn-icon-text" />
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

        <div class="modal fade" id="church-update-video-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div style="width:600px;" class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="padding:15px 27px;">
						<h5 class="modal-title" id="ModalLabel">Update video</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form  method="post" id="church-video-update-form" class="church-video-update-form-class" enctype="multipart/form-data">
						<div class="modal-body" style="padding:10px 26px;">
							<div class="row">
								<div class="col-md-12">
                                    <div id="video_update_message" style="display:none;"><label class="badge badge-success">Video updated successfully.</label></div>
                                </div>
                                <div class="col-md-12">
                                <label for="tab-name" class="col-form-label">Tab Name</label>
                                    <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                                    <input type="text" name="updateVideoTabName" id="updateVideoTabNameId" value="" class="form-control" required>
                                </div>
								<div class="col-md-12">
                                <label for="tab-name" class="col-form-label">Update video</label>
                                    <input type="file" name="updateVideoFile" id="updateVideoFileId" class="form-control">
                                    <input type="hidden" name="oldVideoTabFile" id="oldVideoTabFileUrlId" value=""  class="form-control">
                                </div> 
                                <div class="col-md-12">
                                   
                                    <video id="videoTabVideoSourceId" width="110" height="100" controls><source src="" type="video/mp4"></video>
                                </div>
                                <input type="hidden" id="updateVideoFormChurchMediaId" name="ChurchMediaId" value="" />
							</div>
						</div>
						<div class="modal-footer">
						 <input type="submit" value="Update Changes" name="videowupdatebutton" class="btn btn-primary btn-icon-text" />
						</div>
					</form>
				</div>
			</div>
		</div>   
            

        </div>


    </div>
    
   
</div>