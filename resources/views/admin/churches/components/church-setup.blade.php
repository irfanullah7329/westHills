<div class="media">
   
    <div class="media-body">
        <div class="content-wrapper" style="padding:0;">

            <div class="card">
                <div class="card-body"> 
                
                    <a  href="#"  data-toggle="modal" data-target="#church-setup-modal" style="float:right;">
                        Add new setup
                    </a>
                    <p>
                        <div id="setup_delete_message" style="width:25%;text-align:cemter;display:none;">
                            <label class="badge badge-danger">setup deleted successfully.</label>
                        </div>
                    </p>
                    <h4 class="card-title">All setups</h4>
                    <div class="row">
                        <div class="col-12">
                             <div class="table-sorter-wrapper col-lg-12 table-responsive" id="church-setup-tab-listing">
                               <!-- From jquery display data here setup-add.js -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                
                <div class="modal fade" id="church-setup-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div style="width:600px;" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:15px 27px;">
                        <h5 class="modal-title" id="ModalLabel">Add new setup</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form  method="post" id="church-setup-form" class="church-setup-form-class" enctype="multipart/form-data">
                           @csrf
                            <div class="modal-body" style="padding:10px 26px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="setup_message_success" style="display:none;"><label class="badge badge-success">setup Added successfully.</label></div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tab-name" class="col-form-label">Internet Provider</label>
                                        <input type="hidden" name="CreatedBy" value="{{ Auth::user()->UserId }}" />
                                        <input type="hidden" name="ChurchId" value="{{ $church->ChurchId }}" />
                                        <input type="text" name="InternetProvider" class="form-control" id="InternetProviderId">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Router Model" class="col-form-label">Router Model</label>
                                        <input type="text" name="RouterModel" id="RouterModelId" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Router UserName" class="col-form-label">Router UserName</label>
                                        <input type="text" name="RouterUserName" id="RouterUserNameId" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Router Password" class="col-form-label">Router Password</label>
                                        <input type="text" name="RouterPassword" id="RouterPasswordId" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name= "Aerials" id="AerialsId" class="form-check-input">
                                                Aerials
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name= "Switch" id="SwitchId" class="form-check-input">
                                                Switch
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name= "HomePlugs" id="HomePlugsId" class="form-check-input">
                                                Home Plug
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name= "DirectWire" id="DirectWireId" class="form-check-input">
                                                Direct Wire
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <input type="submit" value="save" name="setup_tab_submit" class="btn btn-primary btn-icon-text" />
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

        <div class="modal fade" id="church-update-setup-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div style="width:600px;" class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="padding:15px 27px;">
						<h5 class="modal-title" id="ModalLabel">Update setup</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form  method="post" id="church-setup-update-form" class="church-setup-update-form-class" enctype="multipart/form-data">
						<div class="modal-body" style="padding:10px 26px;">
							<div class="row">
								<div class="col-md-12">
                                    <div id="setup_update_message" style="display:none;"><label class="badge badge-success">setup information updated successfully.</label></div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="tab-name" class="col-form-label">Internet Provider</label>
                                    <input type="hidden" name="UpdatedBy" value="{{ Auth::user()->UserId }}" />
                                    <input type="text" name="UpdateInternetProvider" class="form-control" id="UpdatedInternetProviderId">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Router Model" class="col-form-label">Router Model</label>
                                        <input type="text" name="UpdateRouterModel" id="UpdatedRouterModelId" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Router UserName" class="col-form-label">Router UserName</label>
                                        <input type="text" name="UpdateRouterUserName" id="UpdatedRouterUserNameId" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Router Password" class="col-form-label">Router Password</label>
                                        <input type="text" name="UpdateRouterPassword" id="UpdatedRouterPasswordId" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name= "UpdateAerials" id="UpdatedAerialsId" class="form-check-input">
                                                Aerials
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name= "UpdateSwitch" id="UpdatedSwitchId" class="form-check-input">
                                                Switch
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name= "UpdateHomePlugs" id="UpdatedHomePlugsId" class="form-check-input">
                                                Home Plug
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="checkbox" name= "UpdateDirectWire" id="UpdatedDirectWireId" class="form-check-input">
                                                Direct Wire
                                            <i class="input-helper"></i></label>
                                        </div>
                                    </div>
								
                                <input type="hidden" id="UpdateChurchSetupId" name="ChurchSetupId" value="" />
							</div>
						</div>
						<div class="modal-footer">
						 <input type="submit" value="Update Changes" name="setupupdatebutton" class="btn btn-primary btn-icon-text" />
						</div>
					</form>
				</div>
			</div>
		</div>   
            

        </div>


    </div>
    
   
</div>