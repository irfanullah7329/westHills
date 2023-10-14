$('document').ready(function() {

    // Get SlideShow tab Data
    // Get Id of the church to get all the ChurchMedia Records For that Id
    if ($("form[name='main-church-detail-form-name']").attr("id")) {
        
        var churchId = $("form[name='main-church-detail-form-name']").attr("id");
        getTabSlideShowData(churchId);

    }
   
    
    // Add Tab Slideshow
    $('#church-slideshow-form').on('submit', function(event){
        
        event.preventDefault();
       
        $('#slideshow_message_success').hide();

        $.ajax({

            url: "/admin/add-tab-slideshow/",
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
                    $('#slideshow_message_success').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#slideshow_message_success')
                        .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }
                getTabSlideShowData(churchId);
                $("#church-slideshow-form")[0].reset();
                return false;
                
              }
        });

    });

    // Update the SlideShow
    $('#church-slideshow-update-form').on('submit', function(event){
        
        event.preventDefault();
        //$(".loading-div").show();
        
        $('#slideshow_update_message').hide();

        $.ajax({

            url: "/admin/update-tab-slideshow/",
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
                    $('#slideshow_update_message').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#slideshow_update_message')
                        .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }

                getTabSlideShowData(churchId);
               
                return false;
                
              }
        });

    });

    
    return false;
});
// Set Updated Values Update Slideshow tab data
function setSlideShowTabUpdateValues(slideShowTabId,slideShowTabname,slideShowtabimage){
    
    // Assigng values to the SlideShow Tab update form
    $("input#updateSlideShowTabNameId").val(slideShowTabname);
    $("input#updateSlideShowFormChurchMediaId").val(slideShowTabId);
    $("#slideShowTabImageSourceId").attr("src", slideShowtabimage);
    $("#oldSlideShowTabImageUrlId").val(slideShowtabimage);
    return false;
          
}
// Get all SlideShows
function getTabSlideShowData(churchId) {

    $.ajax({ 
        
        url: "/admin/get-tab-slideshow/" + churchId,
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
            
            if(response.allTabSlideShowImages == 'no-data') {
                return false;
            }
            // Application base Url
            var app_base_url = APP_URL+'/storage/';
            var result='';
            var mediaUrl='';
            result +=
            '<table id="SlideShow-listing" class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>Slideshow Tab Name</th>'+
                        '<th>Image</th>'+
                        '<th>Action</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>';
                $.each (response.allTabSlideShowImages, function (key, value) {
                    if(value.MediaURL == "" || value.MediaURL == null ) {
                        mediaUrl = "";
                    }else{
                        mediaUrl = app_base_url+value.MediaURL;
                    }
                    result +=
                    '<tr>'+
                        '<td>'+value.TabName+'</td>'+
                        '<td><img src="'+mediaUrl+'" alt="image not exists"/></td>'+
                        '<td >'+
                             '<button onclick="setSlideShowTabUpdateValues('+value.ChurchMediaId+',\''+value.TabName+'\',\''+mediaUrl+'\')"  data-toggle="modal" data-target="#church-update-slideshow-modal" class="btn btn-outline-secondary btn-sm">update</button>'+
                             '<button onclick="deleteTabSlideShow('+value.ChurchMediaId+','+value.ChurchId+')" class="btn btn-outline-secondary btn-sm">delete</button>'+
                             '</td>'+
                        
                        
                    '</tr>'; 
                });
                result +=      
                '</tbody>'+
                '</table>';

            // Asgin all values to the slideshow List
            $('div#church-slideshow-tab-listing').html(result);
           
            
        }
    });
}

// Delete The Slideshow Tab Media
function deleteTabSlideShow(slideShowTabId,ChurchId){
        
    $.ajax({

        url: "/admin/delete-tab-slideshow/"+slideShowTabId,
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
                $('#slideshow_delete_message').show().delay(4000).slideUp(300);
                getTabSlideShowData(ChurchId);
            }else if (response.message == "failed") {
                $('#slideshow_delete_message')
                    .html('<label class="badge badge-danger">Something went wrong please tryagain.</label>')
                    .css("display","block").delay(5000).slideUp(300);
                
                getTabSlideShowData(ChurchId);
            }
          
            
            return false;
        }
    });

    return false;
}



