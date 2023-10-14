$('document').ready(function() {

    // Get Video tab Data
    // Get Id of the church to get all the ChurchMedia Records For that Id
    if ($("form[name='main-church-detail-form-name']").attr("id")) {
        
        var churchId = $("form[name='main-church-detail-form-name']").attr("id");
       // alert(churchId);
        getTabVideoData(churchId);

    }
   
    
    // Add Tab videos
    $('#church-video-form').on('submit', function(event){
        
        event.preventDefault();
       
        $('#video_message_success').hide();

        $.ajax({

            url: "/admin/add-tab-video/",
            method:"POST",
            async: true,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            data: new FormData(this),
              
            headers: {
                    'X-CSRF-TOKEN': $('input[name=_token]').val()
            },
            success: function (data) {
                   
                //console.log(data.message == "success");
                if(data.message == "success"){
                    $('#video_message_success').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#video_message_success')
                        .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }
                getTabVideoData(churchId);
                $("#church-video-form")[0].reset();
                return false;
                
              }
        });

    });

    // Update the video
    $('#church-video-update-form').on('submit', function(event){
        
        event.preventDefault();
        //$(".loading-div").show();
        
        $('#video_update_message').hide();

        $.ajax({

            url: "/admin/update-tab-video/",
            method:"POST",
            async: true,
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            data: new FormData(this),
              
            headers: {
                    'X-CSRF-TOKEN': $('input[name=_token]').val()
            },
            success: function (data) {

                //console.log(data.image);
                //console.log(data.message);
                //console.log(data.chid);
                // console.log(data.message == "success");
                if(data.message == "success"){
                    $('#video_update_message').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#video_update_message')
                        .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }

                getTabVideoData(churchId);
               
                return false;
                
              }
        });

    });

    
    return false;
});
// Set Updated Values Update Video tab data
function setVideoTabUpdateValues(videoTabId,videoTabname,videoTabFile){
    
    // Assigng values to the video Tab update form
    // When deleting Hard will pass the DB media URl
    var videoUrl = APP_URL+'/storage/'+videoTabFile;
    $("input#updateVideoTabNameId").val(videoTabname);
    $("input#updateVideoFormChurchMediaId").val(videoTabId);
    $("#videoTabVideoSourceId").attr("src", videoUrl); // videoUrl
    $("input#oldVideoTabFileUrlId").val(videoTabFile);
    return false;
          
}
// Get all videos
function getTabVideoData(churchId) {

    $.ajax({ 
        
        url: "/admin/get-tab-video/" + churchId,
        method:"GET",
        async: true,
        dataType:'JSON', 
        contentType: false,
        cache: false,
        processData: false,
        
        headers: {
                  'X-CSRF-TOKEN': $('input[name=_token]').val()
              },                
        success: function (response) {
            
            if(response.allTabVideoFiles == 'no-data') {
                return false;
            }
            // Application base Url
            var app_base_url = APP_URL+'/storage/';
            var result='';
            var mediaUrl='';
            result +=
            '<table id="Video-listing" class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>Video Tab Name</th>'+
                        '<th>Video</th>'+
                        '<th>Action</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>';
                $.each (response.allTabVideoFiles, function (key, value) {
                    if(value.MediaURL == "" || value.MediaURL == null ) {
                        mediaUrl = "";
                    }else{
                        mediaUrl = app_base_url+value.MediaURL;
                    }
                    result +=
                    '<tr>'+
                        '<td>'+value.TabName+'</td>'+
                        '<td><video width="110" height="100" controls><source src="'+mediaUrl+'" type="video/mp4"></video></td>'+
                        '<td >'+
                             '<button onclick="setVideoTabUpdateValues('+value.ChurchMediaId+',\''+value.TabName+'\',\''+value.MediaURL+'\')"  data-toggle="modal" data-target="#church-update-video-modal" class="btn btn-outline-secondary btn-sm">update</button>'+
                             '<button onclick="deleteTabVideo('+value.ChurchMediaId+','+value.ChurchId+')" class="btn btn-outline-secondary btn-sm">delete</button>'+
                             '</td>'+
                        
                        
                    '</tr>'; 
                });
                result +=      
                '</tbody>'+
                '</table>';
            //console.log(result);
            // Asgin all values to the video List
            $('div#church-video-tab-listing').html(result);
           
            
        }
    });
}

// Delete The video Tab Media
function deleteTabVideo(videoTabId,ChurchId){
        
    $.ajax({

        url: "/admin/delete-tab-video/"+videoTabId,
        method: "GET",
        async: true,
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'JSON',
        headers: {
            'X-CSRF-TOKEN': $('input[name=_token]').val()
        },
        success: function(response){

             //console.log(response.message);
             if(response.message == "success"){
                $('#video_delete_message').show().delay(4000).slideUp(300);
                getTabVideoData(ChurchId);
            }else if (response.message == "failed") {
                $('#video_delete_message')
                    .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                    .css("display","block").delay(5000).slideUp(300);
                
                getTabVideoData(ChurchId);
            }
          
            
            return false;
        }
    });

    return false;
}



