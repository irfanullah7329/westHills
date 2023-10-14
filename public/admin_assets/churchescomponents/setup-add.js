$('document').ready(function() {

    // Get Setup tab Data
    // Get Id of the church to get all the ChurchMedia Records For that Id
    if ($("form[name='main-church-detail-form-name']").attr("id")) {
        
        var churchId = $("form[name='main-church-detail-form-name']").attr("id");
       //alert(churchId);
        getTabSetupData(churchId);

    }
   
    
    // Add Tab Setup
    $('#church-setup-form').on('submit', function(event){
        
        event.preventDefault();
       
        $('#setup_message_success').hide();

        $.ajax({

            url: "/admin/add-tab-setup/",
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
                    $('#setup_message_success').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#setup_message_success')
                        .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }
                getTabSetupData(churchId);
                $("#church-setup-form")[0].reset();
                return false;
                
              }
        });

    });

    // Update the Setup
    $('#church-setup-update-form').on('submit', function(event){
        
        event.preventDefault();
        //$(".loading-div").show();
        
        $('#setup_update_message').hide();

        $.ajax({

            url: "/admin/update-tab-setup/",
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
                    $('#setup_update_message').show().delay(4000).slideUp(300);
                }else if (data.message == "failed") {
                    $('#setup_update_message')
                        .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                        .css("display","block").delay(5000).slideUp(300);
                }

                getTabSetupData(churchId);
               
                return false;
                
              }
        });

    });

    
    return false;
});
// Set Updated Values Update Setup tab data
function setSetupTabUpdateValues(setupTabId,InternetProvider,RouterModel,RouterUserName,RouterPassword,Aerials,Switch,HomePlugs,DirectWire){
    
    // Assigng values to the Setup Tab update form

    $("input#UpdatedInternetProviderId").val(InternetProvider);
    $("input#UpdatedRouterModelId").val(RouterModel);
    $("input#UpdatedRouterUserNameId").val(RouterUserName);
    $("input#UpdatedRouterPasswordId").val(RouterPassword);

    if(Aerials == '1'){
        $('input#UpdatedAerialsId').attr("checked",true);
    }else if(Aerials == '0'){
        $('input#UpdatedAerialsId').attr("checked",false);
    }

    if(Switch == '1'){
        $('input#UpdatedSwitchId').attr("checked",true);
    }else if(Switch == '0'){
        $('input#UpdatedSwitchId').attr("checked",false);
    }

    if(HomePlugs == '1'){
        $('input#UpdatedHomePlugsId').attr("checked",true);
    }else if(HomePlugs == '0'){
        $('input#UpdatedHomePlugsId').attr("checked",false);
    }

    if(DirectWire == '1'){
        $('input#UpdatedDirectWireId').attr("checked",true);
    }else if(DirectWire == '0'){

        $("input#UpdatedDirectWireId").attr("checked",false);
    }
    $("input#UpdateChurchSetupId").val(setupTabId);
    
    return false;
          
}
// Get all Setups
function getTabSetupData(churchId) {

    $.ajax({ 
        
        url: "/admin/get-tab-setup/" + churchId,
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
            
            if(response.allTabSetup == 'no-data') {
                return false;
            }
            // Application base Url
            //var app_base_url = APP_URL+'/storage/';
            var result='';
            //var mediaUrl='';
            result +=
            '<table id="Setup-listing" class="table">'+
                '<thead>'+
                    '<tr>'+
                        '<th>Internet Provider</th>'+
                        '<th>Router Model</th>'+
                        '<th>Router UserName</th>'+
                        '<th>Router Password</th>'+
                        '<th>Aerials</th>'+
                        '<th>Switch</th>'+
                        '<th>Home Plugs</th>'+
                        '<th>Direct Wire</th>'+
                        '<th>Action</th>'+
                    '</tr>'+
                '</thead>'+
                '<tbody>';
                $.each (response.allTabSetup, function (key, value) {
                    
                    result +=
                    '<tr>'+
                        '<td>'+value.InternetProvider+'</td>'+
                        '<td>'+value.RouterModel+'</td>'+
                        '<td>'+value.RouterUserName+'</td>'+
                        '<td>'+value.RouterPassword+'</td>'+
                        '<td>'+value.Aerials+'</td>'+
                        '<td>'+value.Switch+'</td>'+
                        '<td>'+value.HomePlugs+'</td>'+
                        '<td>'+value.DirectWire+'</td>'+
                        '<td >'+
                            '<button onclick="setSetupTabUpdateValues('+value.ChurchSetUpId+',\''+value.InternetProvider+'\',\''+value.RouterModel+'\',\''+value.RouterUserName+'\',\''+value.RouterPassword+'\',\''+value.Aerials+'\',\''+value.Switch+'\',\''+value.HomePlugs+'\',\''+value.DirectWire+'\')"  data-toggle="modal" data-target="#church-update-setup-modal" class="btn btn-outline-secondary btn-sm">update</button>'+
                            '<button onclick="deleteTabSetup('+value.ChurchSetUpId+','+value.ChurchId+')" class="btn btn-outline-secondary btn-sm">delete</button>'+
                        '</td>'+
                    '</tr>'; 
                });
                result +=      
                '</tbody>'+
                '</table>';
            // console.log(result);
            // Asgin all values to the setup List
            $('div#church-setup-tab-listing').html(result);
           
            
        }
    });
}

// Delete The Setup Tab Information
function deleteTabSetup(setupTabId,ChurchId){
        
    $.ajax({

        url: "/admin/delete-tab-setup/"+setupTabId,
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
                $('#setup_delete_message').show().delay(4000).slideUp(300);
                getTabSetupData(ChurchId);
            }else if (response.message == "failed") {
                $('#setup_delete_message')
                    .html('<label class="badge badge-danger">Something went wrong please try again.</label>')
                    .css("display","block").delay(5000).slideUp(300);
                
                getTabSetupData(ChurchId);
            }
          
            
            return false;
        }
    });

    return false;
}



