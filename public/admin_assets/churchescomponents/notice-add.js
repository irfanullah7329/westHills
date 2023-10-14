$('document').ready(function() {

    // Get notice tab Data
    // Get Id of the church to get all the ChurchMedia Records For that Id
    if ($("form[name='main-church-detail-form-name']").attr("id")) {
        
        var churchId = $("form[name='main-church-detail-form-name']").attr("id");
       //alert(churchId);
        getTabNoticeData(churchId);

    }
   
    
    // Add Tab notice
    $('#church-notice-form').on('submit', function(event){
        
        event.preventDefault();
       
        $('#notice_message_success').hide();

        $.ajax({

            url: "/admin/add-tab-notice/",
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
                    $('#notice_message_success').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#notice_message_success')
                        .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }
                getTabNoticeData(churchId);
                $("#church-notice-form")[0].reset();
                return false;
                
              }
        });

    });

    // Update the notice
    $('#church-notice-update-form').on('submit', function(event){
        
        event.preventDefault();
        //$(".loading-div").show();
        
        $('#notice_update_message').hide();

        $.ajax({

            url: "/admin/update-tab-notice/",
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
                    $('#notice_update_message').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#notice_update_message')
                        .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }

                getTabNoticeData(churchId);
               
                return false;
                
              }
        });

    });

    
    return false;
});
// Set Updated Values Update notice tab data
function setNoticeTabUpdateValues(noticeTabId,noticeTitle){
    
    // Assigng values to the notice Tab update form
    //alert(noticeTitle);
    //alert(noticeDescription);
    //alert(noticeTabId);
    //alert($('#getNotice'+noticeTabId).val())
    // Assigng values to the announcement Tab update form
    var noticeDescription = $('#getNotice'+noticeTabId).html();

    // alert(announcementDescription);
    $('#UpdatedNoticeId').summernote('code', noticeDescription);
    // var noticeDescription= $('#getNotice'+noticeTabId).val();
    $("input#UpdatedNoticeTitleId").val(noticeTitle);
    //$("textarea#UpdatedNoticeId").val(noticeDescription);
    $("input#UpdateChurchNoticeId").val(noticeTabId);
    
    return false;
          
}
// Get all notices
function getTabNoticeData(churchId) {

    $.ajax({ 
        
        url: "/admin/get-tab-notice/" + churchId,
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
            
            if(response.allTabNotice == 'no-data') {
                return false;
            }
            // Application base Url
            //var app_base_url = APP_URL+'/storage/';
            var result='';
            //var mediaUrl='';
            result +=
            '<table id="notice-listing" class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>Notice Title</th>'+
                        '<th>Notice</th>'+
                        '<th>Action</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>';
                $.each (response.allTabNotice, function (key, value) {
                    
                    result +=
                    '<tr>'+
                        '<td>'+value.NoticeTitle+'</td>'+
                        '<td><div id="getNotice'+value.ChurchNoticeId+'" disabled="disabled" style="width: 250px;height: 100px;border: 1px solid #ccc;padding: 5px;overflow:auto;">'+value.Notice+'</div></td>'+
                        '<td>'+
                            '<button onclick="setNoticeTabUpdateValues('+value.ChurchNoticeId+',\''+value.NoticeTitle+'\')"  data-toggle="modal" data-target="#church-update-notice-modal" class="btn btn-outline-secondary btn-sm">update</button>'+
                            '<button onclick="deleteTabNotice('+value.ChurchNoticeId+','+value.ChurchId+')" class="btn btn-outline-secondary btn-sm">delete</button>'+
                        '</td>'+
                    '</tr>'; 
                });
                result +=      
                '</tbody>'+
                '</table>';
            // console.log(result);
            // Asgin all values to the notice List
            $('div#church-notice-tab-listing').html(result);
           
            
        }
    });
}

// Delete The notice Tab Information
function deleteTabNotice(noticeTabId,ChurchId){
        
    $.ajax({

        url: "/admin/delete-tab-notice/"+noticeTabId,
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
                $('#notice_delete_message').show().delay(4000).slideUp(300);
                getTabNoticeData(ChurchId);
            }else if (response.message == "failed") {
                $('#notice_delete_message')
                    .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                    .css("display","block").delay(5000).slideUp(300);
                
                getTabNoticeData(ChurchId);
            }
          
            
            return false;
        }
    });

    return false;
}



