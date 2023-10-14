<template>

<div class="media">
   
    <div class="media-body">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-body"> 
                
                    <a  href="#"  data-toggle="modal" data-target="#church-camera-modal" style="float:right;">
                        Add new camera
                    </a>
                    <p><div class="alert alert-danger" v-show="delete_success" style="width:25%;text-align:cemter;">Camera Added successfully.</div></p>
                    <h4 class="card-title">All Cameras</h4>
                    <div class="row">
                        <div class="col-12">
                             <div class="table-sorter-wrapper col-lg-12 table-responsive">
                                <table id="camera-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>Camera Name</th>
                                        <th>Camera URL/RTSP</th>
                                        <th>HTTP Port</th>
                                        <th>RTSP Port</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="camera in Cameras">
                                            <td>{{ camera.CameraName }}</td>
                                            <td>{{ camera.CameraUrl }}</td>
                                            <td>{{ camera.HttpPort }}</td>
                                            <td>{{ camera.RtspPort }}</td>
                                            <td>
                                                <button @click="setVal(camera.CameraId,camera.CameraName,camera.ServerId,camera.CameraUrl,camera.HttpPort,camera.RtspPort,camera.ChurchId)" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#church-update-camera-modal">update</button>
                                                <button @click.prevent="deletecamera(camera.CameraId)" class="btn btn-outline-secondary btn-sm">delete</button>
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                
                <div class="modal fade" id="church-camera-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div style="width:600px;" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:15px 27px;">
                        <h5 class="modal-title" id="ModalLabel">Add new camera</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form @submit.prevent="addcamera" method="post" id="church-camera-form" class="church-camera-form-class">
                            <div class="modal-body" style="padding:10px 26px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-success" v-show="success">Camera Added successfully.</div>
                                        <div class="alert alert-danger" role="alert" v-bind:style="{display: displayResult}">
                                            All fields are required!
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="CameraName" class="col-form-label">Camera Name</label>
                                        <input type="text" name="CameraName" class="form-control" id="CameraName" v-model="newCamera.cameraName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Server" class="col-form-label">Select Server</label>
                                        <select class="form-control" name="ServerId" id="ServerId" v-model="newCamera.serverId" required>
                                            <option value="auto" selected>Auto(Recomended)</option>
                                            <option v-for="server in Servers"
                                                :value="server.ServerId">{{ server.ServerName }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        
                                        <label for="CameraUrl" class="col-form-label">Camera URL/RTSP</label>
                                        <input type="text" name="CameraUrl" class="form-control" id="CameraUrl" v-model="newCamera.cameraUrl" required>
                                   </div>
                                    <div class="col-md-6">
                                        <label for="HttpPort" class="col-form-label">HTTP Port:</label>
                                        <input type="text" name="HttpPort" class="form-control" id="HttpPort" v-model="newCamera.httpPort"  required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="RtspPort'" class="col-form-label">RTSP Port:</label>
                                        <input type="text" name="RtspPort" class="form-control" id="RtspPort" v-model="newCamera.rtspPort" required>
                                   </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <input type="submit" value="save" name="camerasubmit" class="btn btn-primary btn-icon-text" />
                            </div>
                        </form>
                    </div>
                    </div>
                </div>

        <div class="modal fade" id="church-update-camera-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
			<div style="width:600px;" class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="padding:15px 27px;">
						<h5 class="modal-title" id="ModalLabel">Update camera</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form @submit.prevent="updatecamera" method="post" id="church-camera-update-form" class="church-camera-update-form-class">
						<div class="modal-body" style="padding:10px 26px;">
							<div class="row">
								<div class="col-md-12">
									<div class="alert alert-success" v-show="update_success">Camera updated successfully.</div>
									<div class="alert alert-danger" role="alert" v-bind:style="{display: displayResult}">
										All fields are required!
									</div>
								</div>
								<div class="col-md-6">
									<label for="CameraName" class="col-form-label">Camera Name</label>
									<input type="hidden" disabled class="form-control" id="update_camera_id" name="id" required  :value="this.update_camera_id">
									<input type="text" ref="updcamra" class="form-control"  id="update_camera_name" name="update_camera_name" required  :value="this.update_camera_name">
								</div>
								<div class="col-md-6">
									<label for="ServerName" class="col-form-label">Server</label>
                                     <select v-model="update_camera_server" class="form-control" name="update_camera_server" id="update_camera_server"  required>
                                            
                                            <option v-for="server in Servers" 
                                                   
                                                   :value="server.ServerId">{{ server.ServerName }}
                                            </option>
                                            <option value="auto">Auto(Recomended)</option>
                                        
                                    </select>
                                </div>
								<div class="col-md-12">
									
									<label for="CameraUrl" class="col-form-label">Camera URL/RTSP</label>
									<input type="text"  class="form-control" id="update_camera_url" name="update_camera_url" required  :value="this.update_camera_url">
							   </div>
								<div class="col-md-6">
									<label for="HttpPort" class="col-form-label">HTTP Port:</label>
									<input type="text"  class="form-control" id="update_camera_httpport" name="update_camera_httpport" required  :value="this.update_camera_httpport">
								</div>
								<div class="col-md-6">
									<label for="RtspPort'" class="col-form-label">RTSP Port:</label>
									<input type="text"  class="form-control" id="update_camera_rtspport" name="update_camera_rtspport" required  :value="this.update_camera_rtspport">
							   </div>
							</div>
						</div>
						<div class="modal-footer">
						 <input type="submit" value="Update Changes" name="cameraupdatebutton" class="btn btn-primary btn-icon-text" />
						</div>
					</form>
				</div>
			</div>
		</div>   
            

        </div>


    </div>
    
   
</div>
</template>

<script>

import axios from 'axios';

export default{
    props: ['churchid'], 
    data: function data() {

        return {

            newCamera: { cameraName: '', serverId:'auto', cameraUrl: '', httpPort: '', rtspPort: '' },
            displayResult: 'none',
            Cameras: [],
            Servers:[],
            UpdateCameras:[],
            success: false,
            update_success:false,
            delete_success:false,
            update_camera_id: '',
            update_camera_name: '',
            update_camera_server: '',
            update_camera_url:'',
            update_camera_httpport:'',
            update_camera_rtspport:''
        }
    },
    mounted: function mounted() {

        this.getcamerasofchurch();
        this.getservers();

    },

    methods: {

        addcamera: function addcamera() {
            
            // Adding Church Id in form request
            var thispointer = this;
            var forminputs = thispointer.newCamera;
            forminputs['churchId'] = thispointer.churchid;

            if(forminputs['rtspPort'] == '' || forminputs['serverId'] == '' || forminputs['httpPort'] == '' || forminputs['cameraName'] == '' || forminputs['cameraUrl'] == '') {

                thispointer.displayResult = 'block';
                thispointer.success = false;
               
            }else{

                axios.post('/admin/add-camera/' , forminputs).then(function(response){
                    thispointer.newCamera = {};
                    thispointer.success = true;
                    thispointer.displayResult = 'none';
                    setTimeout(() => thispointer.success = false, 1500);
                    //console.log(response.data);
                    //console.log(response.data.message);
                    thispointer.getcamerasofchurch();
                }).catch( error=> {
                    console.log("Insert: "+error);
                });
            }
        },

        getservers: function getservers() {
            
            var thispointer = this;
         
            axios.get('/admin/getservers/').then(function(response){
            thispointer.Servers = response.data.servers;

            }).catch(error=>{

               console.log("Server Get: "+error);
            });
        },

        getcamerasofchurch: function getcamerasofchurch(){
            
            var thispointer = this;
            axios.get('/admin/getcameras-of-the-church/'+thispointer.churchid).then(function(response){

                thispointer.Cameras = response.data.churchCameras;
               // console.log(response.data.churchCameras);

            }).catch(error=>{

                 console.log("Cameras Get: "+error);

            });
        },

        deletecamera: function deletecamera(camera_id) {
            var _this = this;
           
                axios.post('/admin/delete-camera/' + camera_id).then(function(response){


                    _this.delete_success = true;

                    _this.getcamerasofchurch();
                    setTimeout(() =>  _this.delete_success = false, 1500);
                    console.log(response.data.message);
                }).catch(error=>{
                    console.log("Delete camera: "+error);
                });

          
        },
 
        setVal(val_id, val_camera_name, val_camera_server, val_camera_url, val_httpport, val_rtspport,val_churchid) {

            this.update_camera_id = val_id;
            this.update_camera_name = val_camera_name;
            this.update_camera_server = val_camera_server;
            this.update_camera_url = val_camera_url;
            this.update_camera_httpport = val_httpport;
            this.update_camera_rtspport = val_rtspport;
            this.churchid = val_churchid;
        },

        updatecamera: function updatecamera(){
            
            var _this = this;
            let cameraId = document.getElementById('update_camera_id').value;

            _this.UpdateCameras = {
                
                updatedCameraName: document.getElementById('update_camera_name').value,
                updatedCameraUrl: document.getElementById('update_camera_url').value,
                updatedCameraServer: document.getElementById('update_camera_server').value,
                updatedCameraHttpPort: document.getElementById('update_camera_httpport').value,
                updatedCameraRtspPort: document.getElementById('update_camera_rtspport').value,
                updatedCameraChurchId: _this.churchid

                };
            
            axios.post('/admin/update-church-camera/' + cameraId, _this.UpdateCameras ).then(response => {

                _this.displayResult = 'none';
                _this.update_success = true;
                
               
                _this.update_camera_name = _this.UpdateCameras.updatedCameraName;
                _this.update_camera_Url = _this.UpdateCameras.updatedCameraUrl;
                _this.update_camera_httpport = _this.UpdateCameras.updatedCameraHttpPort;
                _this.update_camera_rtspport = _this.UpdateCameras.updatedCameraRtspPort;
                _this.update_camera_server = _this.UpdateCameras.updatedCameraServer;
                console.log(_this.UpdateCameras.updatedCameraName);
                
                _this.getcamerasofchurch();

                setTimeout(() => _this.update_success = false, 1500);
                
            });
       }
        
    }

} 

</script>