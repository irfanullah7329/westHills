<div class="media">
   
    <div class="media-body">
        <div class="content-wrapper" style="padding:0;">

            <div class="card">
                <div class="card-body"> 
                
                    <a  href="#"  data-toggle="modal" data-target="#church-notice-modal" style="float:right;">
                        Add new notice
                    </a>
                    <p>
                        <div id="notice_delete_message" style="width:25%;text-align:cemter;display:none;">
                            <label class="badge badge-danger">notice deleted successfully.</label>
                        </div>
                    </p>
                    <h4 class="card-title">All Notices</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-sorter-wrapper col-lg-12 table-responsive" id="church-notice-tab-listing">
                               <!-- From jquery display data here notice-add.js -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                
                <div class="modal fade" id="church-notice-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div  class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:15px 27px;">
                        <h5 class="modal-title" id="ModalLabel">Add new notice</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form  method="post" id="church-notice-form" class="church-notice-form-class" enctype="multipart/form-data">
                           @csrf
                            <div class="modal-body" style="padding:10px 26px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="notice_message_success" style="display:none;"><label class="badge badge-success">notice Added successfully.</label></div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <label for="notice title" class="col-form-label">Notice title</label>
                                        <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                                        <input type="hidden" name="ChurchId" value="{{ $church->ChurchId }}" />
                                        <input type="text" name="NoticeTitle" class="form-control" id="NoticeTitleId" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="Notice" class="col-form-label">Notice</label>
                                        <textarea  name="Notice" id="NoticeId" placeholder="Type your text here" rows="10" cols="50" class="form-control"></textarea>
                                    </div>
                                
                                </div>
                            </div>
                            <div class="modal-footer">
                            <input type="submit" value="save" name="notice_tab_submit" class="btn btn-primary btn-icon-text" />
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

        <div class="modal fade" id="church-update-notice-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div  class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="padding:15px 27px;">
						<h5 class="modal-title" id="ModalLabel">Update notice</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form  method="post" id="church-notice-update-form" class="church-notice-update-form-class" enctype="multipart/form-data">
						<div class="modal-body" style="padding:10px 26px;">
							<div class="row">
								<div class="col-md-12">
                                    <div id="notice_update_message" style="display:none;"><label class="badge badge-success">notice information updated successfully.</label></div>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="notice-title" class="col-form-label">Notice title</label>
                                    <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                                    <input type="text" name="UpdateNoticeTitle" class="form-control" id="UpdatedNoticeTitleId" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="notice" class="col-form-label">Notice</label>
                                    <textarea name="UpdateNotice" id="UpdatedNoticeId" class="form-control" rows="10" cols="50"></textarea>
                                </div>
                                <input type="hidden" id="UpdateChurchNoticeId" name="ChurchNoticeId" value="" />
							</div>
						</div>
						<div class="modal-footer">
						 <input type="submit" value="Update Changes" name="noticeupdatebutton" class="btn btn-primary btn-icon-text" />
						</div>
					</form>
				</div>
			</div>
		</div>   
            

        </div>


    </div>
    
   
</div>