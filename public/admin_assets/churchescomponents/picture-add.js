$('document').ready(function() {

    // Get Picture tab Data
    // Get Id of the church to get all the ChurchMedia Records For that Id
    if ($("form[name='main-church-detail-form-name']").attr("id")) {
        
        var churchId = $("form[name='main-church-detail-form-name']").attr("id");
        getTabPictureData(churchId);

    }
   
    
    // Add Tab picture
    $('#church-picture-form').on('submit', function(event){
        
        event.preventDefault();
        //$(".loading-div").show();
        
        $('#picture_message_success').hide();

        $.ajax({

            url: "/admin/add-tab-picture/",
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
                    $('#picture_message_success').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#picture_message_success')
                        .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }
                getTabPictureData(churchId);
                $("#church-picture-form")[0].reset();
                return false;
                // $('#picture_message_success').hide();
                //alert(data.myresult);
                // $(".loading-div").hide();
                    
              }
        });

    });

    // Update the Picture
    $('#church-picture-update-form').on('submit', function(event){
        
        event.preventDefault();
        //$(".loading-div").show();
        
        $('#picture_message_success').hide();
        $('#picture_update_message').hide();

        $.ajax({

            url: "/admin/update-tab-picture/",
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
                    $('#picture_update_message').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#picture_update_message')
                        .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }
                getTabPictureData(churchId);
                //$("#church-picture-update-form")[0].reset();
                return false;
                // $('#picture_message_success').hide();
                //alert(data.myresult);
                // $(".loading-div").hide();
                    
              }
        });

    });

    
    return false;
});
// Set Updated Values Update Picture tab data
function setTabPictureUpdateValues(tabpictureId,tabname,tabimage){
    
    // Assigng values to the Picture Tab update form
    $("input#updatetabname_id").val(tabname);
    $("input#updateFormChurchMediaId").val(tabpictureId);
    $("#tabimage_source").attr("src", tabimage);
    $("#OldPictureTabImageUrl").val(tabimage);
    return false;
          
}
// Get all Pictures
function getTabPictureData(churchId) {

    $.ajax({ 
        
        url: "/admin/get-tab-pictures/" + churchId,
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
            //console.log(response.allTabPictureImages);
            if(response.allTabPictureImages == 'no-data') {
                return false;
            }
            // Application base Url
            var app_base_url = APP_URL+'/storage/';
            var result='';
            var mediaurl='';
            result +=
            '<table id="picture-listing" class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>Picture Tab Name</th>'+
                        '<th>Image</th>'+
                        '<th>Action</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>';
                $.each (response.allTabPictureImages, function (key, value) {
                    if(value.MediaURL == "" || value.MediaURL == null ) {
                        mediaurl = "";
                    }else{
                        mediaurl = app_base_url+value.MediaURL;
                    }
                    result +=
                    '<tr>'+
                        '<td>'+value.TabName+'</td>'+
                        '<td><img src="'+mediaurl+'" alt="image not exists"/></td>'+
                        '<td >'+
                             '<button onclick="setTabPictureUpdateValues('+value.ChurchMediaId+',\''+value.TabName+'\',\''+mediaurl+'\')"  data-toggle="modal" data-target="#church-update-picture-modal" class="btn btn-outline-secondary btn-sm">update</button>'+
                             '<button onclick="deleteTabPicture('+value.ChurchMediaId+','+value.ChurchId+')" class="btn btn-outline-secondary btn-sm">delete</button>'+
                             '</td>'+
                        
                        
                    '</tr>'; 
                });
                result +=      
                '</tbody>'+
                '</table>';

            //console.log(result);
            // console.log(app_base_url); // Base Url of the Application (define in scripts.blade.php)
            // Asgin all values to the picture List
            $('div#church-picture-tab-images-listing').html(result);
           
            
        }
    });
}

// Delete The Picture Tab Media
function deleteTabPicture(tabpictureId,ChurchId){
        
    $.ajax({

        url: "/admin/delete-tab-picture/"+tabpictureId,
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

                $('#picture_delete_message').show().delay(4000).slideUp(300);
                getTabPictureData(ChurchId);

            }else if (response.message == "failed") {
                $('#picture_delete_message')
                    .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                    .css("display","block").delay(5000).slideUp(300);
                
                getTabPictureData(ChurchId);
            }
           
            
            return false;
        }
    });

    return false;
}



