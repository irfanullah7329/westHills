<div class="media">
   
    <div class="media-body">
        <div class="content-wrapper" style="padding:0;">

            <div class="card">
                <div class="card-body"> 
                
                    <a  href="#"  data-toggle="modal" data-target="#church-announcement-modal" style="float:right;">
                        Add new announcement
                    </a>
                    <p>
                        <div id="announcement_delete_message" style="width:25%;text-align:cemter;display:none;">
                            <label class="badge badge-danger">announcement deleted successfully.</label>
                        </div>
                    </p>
                    <h4 class="card-title">All Announcements</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-sorter-wrapper col-lg-12 table-responsive" id="church-announcement-tab-listing">
                               <!-- From jquery display data here announcement-add.js -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                
                <div class="modal fade" id="church-announcement-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div  class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:15px 27px;">
                        <h5 class="modal-title" id="ModalLabel">Add new announcement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form  method="post" id="church-announcement-form" class="church-announcement-form-class" enctype="multipart/form-data">
                           @csrf
                            <div class="modal-body" style="padding:10px 26px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="announcement_message_success" style="display:none;"><label class="badge badge-success">announcement Added successfully.</label></div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <label for="announcement title" class="col-form-label">Announcement title</label>
                                        <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                                        <input type="hidden" name="ChurchId" value="{{ $church->ChurchId }}" />
                                        <input type="text" name="AnnouncementTitle" class="form-control" id="AnnouncementTitleId" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="announcement" class="col-form-label">Announcement</label>
                                        <textarea  name="Announcement" id="AnnouncementId" placeholder="Type your text here" rows="10" cols="50" class="form-control"></textarea>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="modal-footer">
                            <input type="submit" value="save" name="announcementId_tab_submit" class="btn btn-primary btn-icon-text" />
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

        <div class="modal fade" id="church-update-announcement-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div  class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="padding:15px 27px;">
						<h5 class="modal-title" id="ModalLabel">Update Announcement</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form  method="post" id="church-announcement-update-form" class="church-announcement-update-form-class" enctype="multipart/form-data">
						<div class="modal-body" style="padding:10px 26px;">
							<div class="row">
								<div class="col-md-12">
                                    <div id="announcement_update_message" style="display:none;"><label class="badge badge-success">announcement information updated successfully.</label></div>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="announcement-title" class="col-form-label">Announcement title</label>
                                    <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                                    <input type="text" name="UpdateAnnouncementTitle" class="form-control" id="UpdatedAnnouncementTitleId" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="announcement" class="col-form-label">Announcement</label>
                                    <textarea name="UpdateAnnouncement" id="UpdatedAnnouncementId" class="form-control" rows="10" cols="50"></textarea>
                                </div>
                                <input type="hidden" id="UpdateChurchAnnouncementId" name="ChurchAnnouncementId" value="" />
							</div>
						</div>
						<div class="modal-footer">
						 <input type="submit" value="Update Changes" name="announcementupdatebutton" class="btn btn-primary btn-icon-text" />
						</div>
					</form>
				</div>
			</div>
		</div>   
            

        </div>


    </div>
    
   
</div>