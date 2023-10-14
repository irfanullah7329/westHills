$('document').ready(function() {

    // Get announcemen tab Data
    // Get Id of the church to get all the Announcemen Records For that Id
    if ($("form[name='main-church-detail-form-name']").attr("id")) {
        
        var churchId = $("form[name='main-church-detail-form-name']").attr("id");
       //alert(churchId);
        getTabAnnouncementData(churchId);

    }
   
    
    // Add Tab announcement
    $('#church-announcement-form').on('submit', function(event){
        
        event.preventDefault();
        $('#announcement_message_success').hide();

        $.ajax({

            url: "/admin/add-tab-announcement/",
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
               
                //return false;
                if(data.message == "success"){
                    $('#announcement_message_success').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#announcement_message_success')
                        .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }
                getTabAnnouncementData(churchId);
                $("#church-announcement-form")[0].reset();
                return false;
                
              }
        });

    });

    // Update the announcement
    $('#church-announcement-update-form').on('submit', function(event){
        
        event.preventDefault();
        //$(".loading-div").show();
        
        $('#announcement_update_message').hide();

        $.ajax({

            url: "/admin/update-tab-announcement/",
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

                // console.log(data.message == "success");
                if(data.message == "success"){
                    $('#announcement_update_message').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#announcement_update_message')
                        .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }

                getTabAnnouncementData(churchId);
               
                return false;
                
              }
        });

    });

    
    return false;
});
// Set Updated Values Update announcement tab data
function setAnnouncementTabUpdateValues(announcementTabId,announcementTitle){
    
    // Assigng values to the announcement Tab update form
    var announcementDescription = $('#getAnnouncement'+announcementTabId).html();

   // alert(announcementDescription);
    $('#UpdatedAnnouncementId').summernote('code', announcementDescription);
    $("input#UpdatedAnnouncementTitleId").val(announcementTitle);
    //alert($('#UpdatedAnnouncementId').summernote(announcementDescription));
    //$("textarea#UpdatedAnnouncementId").val(announcementDescription);
    $("input#UpdateChurchAnnouncementId").val(announcementTabId);
    
    return false;
          
}
// Get all announcements
function getTabAnnouncementData(churchId) {

    $.ajax({ 
        
        url: "/admin/get-tab-announcement/" + churchId,
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
            
            if(response.allTabAnnouncements == 'no-data') {
                return false;
            }
            var result='';
            result +=
            '<table id="announcement-listing" class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>Announcement Title</th>'+
                        '<th>Announcement</th>'+
                        '<th>Action</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>';
                $.each (response.allTabAnnouncements, function (key, value) {
                    
                    result +=
                    '<tr>'+
                        '<td>'+value.AnnouncementTitle+'</td>'+
                        '<td><div id="getAnnouncement'+value.ChurchAnnouncementId+'" disabled="disabled" style="width: 250px;height: 100px;border: 1px solid #ccc;padding: 5px;overflow:auto;">'+value.Announcement+'</div></td>'+
                        '<td>'+
                            '<button onclick="setAnnouncementTabUpdateValues('+value.ChurchAnnouncementId+',\''+value.AnnouncementTitle+'\')"  data-toggle="modal" data-target="#church-update-announcement-modal" class="btn btn-outline-secondary btn-sm">update</button>'+
                            '<button onclick="deleteTabAnnouncement('+value.ChurchAnnouncementId+','+value.ChurchId+')" class="btn btn-outline-secondary btn-sm">delete</button>'+
                        '</td>'+
                    '</tr>'; 
                });
                result +=      
                '</tbody>'+
                '</table>';
            // console.log(result);
            // Asgin all values to the announcement List
            $('div#church-announcement-tab-listing').html(result);
           
            
        }
    });
}

// Delete The Announcement Tab Information
function deleteTabAnnouncement(announcementTabId,ChurchId){
        
    $.ajax({

        url: "/admin/delete-tab-announcement/"+announcementTabId,
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
                $('#announcement_delete_message').show().delay(4000).slideUp(300);
                getTabAnnouncementData(ChurchId);
            }else if (response.message == "failed") {
                $('#announcement_delete_message')
                    .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                    .css("display","block").delay(5000).slideUp(300);
                
                    getTabAnnouncementData(ChurchId);
            }
          
            
            return false;
        }
    });

    return false;
}



