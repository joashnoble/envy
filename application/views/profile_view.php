<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>JCORE HRIS - <?php echo $title; ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="">

    <?php echo $_def_css_files; ?>

    <link rel="stylesheet" href="assets/plugins/spinner/dist/ladda-themeless.min.css">

    <link type="text/css" href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">



    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/_all.css" rel="stylesheet">                   <!-- Custom Checkboxes / iCheck -->

    <link href="assets/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="assets/plugins/select2/select2.min.css" rel="stylesheet">


    <link href="assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <style>

        .toolbar{
            float: left;
        }

        td.details-control {
            background: url('assets/img/Folder_Closed.png') no-repeat center center;
            cursor: pointer;
        }
        tr.details td.details-control {
            background: url('assets/img/Folder_Opened.png') no-repeat center center;
        }

        .child_table{
            padding: 5px;
            border: 1px #ff0000 solid;
        }

        .glyphicon.spinning {
            animation: spin 1s infinite linear;
            -webkit-animation: spin2 1s infinite linear;
        }
        .select2-container{
            min-width: 100%;
        }
        @keyframes spin {
            from { transform: scale(1) rotate(0deg); }
            to { transform: scale(1) rotate(360deg); }
        }

        @-webkit-keyframes spin2 {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(360deg); }
        }

        textarea {
            resize:none;
        }

        .fa-home:before {
            font-size:20px !important;
        }

        .fa-mobile:before {
            font-size:18px !important;
        }

        .fa-cloud:before {
            font-size:18px !important;
        }

        .red{
            color: red;
            font-weight: bold;
        }

        .view{
            cursor: pointer;
        }
        .view:hover{
            color: lightgreen;
        }
    </style>

<?php echo $_switcher_settings; ?>
<?php echo $_def_js_files; ?>
<script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/plugins/datatables/dataTables.bootstrap.js"></script>


<!-- Date range use moment.js same as full calendar plugin -->
<script src="assets/plugins/fullcalendar/moment.min.js"></script>
<!-- Data picker -->
<script src="assets/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- Select2 -->
<script src="assets/plugins/select2/select2.full.min.js"></script>


<!-- Date range use moment.js same as full calendar plugin -->
<script src="assets/js/plugins/fullcalendar/moment.min.js"></script>
<!-- Data picker -->
<script src="assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- twitter typehead -->
<script src="assets/plugins/twittertypehead/handlebars.js"></script>
<script src="assets/plugins/twittertypehead/bloodhound.min.js"></script>
<script src="assets/plugins/twittertypehead/typeahead.bundle.min.js"></script>
<script src="assets/plugins/twittertypehead/typeahead.jquery.min.js"></script>

<!-- touchspin -->
<script type="text/javascript" src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>

<!-- numeric formatter -->
<script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>
<?php echo $loaderscript; ?>
</head>

<body class="animated-content">
<?php echo $loader; ?>
<?php echo $_top_navigation; ?>

<div id="wrapper">
    <div id="layout-static">

        <?php echo $_side_bar_navigation;?>

        <div class="static-content-wrapper white-bg">
            <div class="static-content" >
                <div class="page-content">

                    <ol class="breadcrumb" style="margin-bottom:0px;">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li><a href="Profile">Profile</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:600;">Profile Information</h2></center>
                                        </div>
                                        <div class="container-fluid" style="padding-top:5px;">

                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                <div class="col-md-12" style="background: #F8F8F8;padding:10px;border-top: 10px solid #E0E0E0;background-image: url('assets/img/profile-header.jpg');background-repeat: no-repeat;background-size: 100% 500px; " >
                                                <center>
                                                    <img name="img_user" src="<?php echo $user->photo_path; ?>" style="border-radius: 50%;width: 200px;height: 200px;"><br><br>

                                                    <button type="button" id="btn_browse" style="width:50px;" class="btn btn-primary">
                                                        
                                                        <i class="fa fa-upload"></i>

                                                    </button>     
                                                    <button type="button" id="btn_remove_photo" style="width:50px;" class="btn btn-danger">
                                                        
                                                        <i class="fa fa-times-circle"></i>

                                                    </button>
                                                    <input type="file" name="file_upload[]" class="hidden">
                                                </center>
                                                <br>
                                                </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12" style="">    
                                                    <div class="col-md-8" style="background: #E0E0E0;padding: 10px;-webkit-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);-moz-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);">
                                                        <i class="fa fa-user"></i> Personal Settings
                                                    </div>
                                                    <div class="col-md-4" style="background: #E0E0E0;padding: 10px;-webkit-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);-moz-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);">
                                                        <i class="fa fa-cog"></i> Login Settings
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12" >
                                                <form id="frm_profile">
                                                    <div class="col-md-4" style="background: #F8F8F8;padding:10px;-webkit-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);-moz-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);">
                                                        <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 127px!important;text-align: left!important;">
                                                                        <i class="fa fa-code"></i> Username <span class="red">*</span>
                                                                     </span>
                                                                     <input type="text" id="user_name" name="user_name" value="<?php echo $user->user_name; ?>" class="form-control" placeholder="Username" data-error-msg="Username is required!" required style="width: 100%;">
                                                                </div>
                                                            </div>
                                                            <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 127px!important;text-align: left!important;">
                                                                         <i class="fa fa-user"></i> Firstname <span class="red">*</span>
                                                                     </span>
                                                                     <input type="text" id="user_fname" name="user_fname" value="<?php echo $user->user_fname; ?>" class="form-control" placeholder="Firstname" data-error-msg="Firstname is required!" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 127px!important;text-align: left!important;">
                                                                        <i class="fa fa-user"></i> Middlename
                                                                     </span>
                                                                     <input type="text" id="user_mname" name="user_mname" value="<?php echo $user->user_mname; ?>" class="form-control" placeholder="Middlename">
                                                                </div>
                                                            </div>


                                                            <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 127px!important;text-align: left!important;">
                                                                        <i class="fa fa-user"></i> Lastname
                                                                     </span>
                                                                     <input type="text" id="user_lname" name="user_lname" value="<?php echo $user->user_lname; ?>" class="form-control" placeholder="Lastname">
                                                                </div>
                                                            </div>

                                                            <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 127px!important;text-align: left!important;">
                                                                        <i class="fa fa-birthday-cake"></i> Birthday
                                                                     </span>
                                                                     <input type="text" id="user_bdate" name="user_bdate" value="<?php echo date("m/d/Y", strtotime($user->user_bdate)); ?>" class="date-picker form-control" placeholder="MM/DD/YYYY">
                                                                </div>
                                                            </div>


                                                    </div>
                                                    <div class="col-md-4" style="background: #F8F8F8;padding:10px;-webkit-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);-moz-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);">

                                                            <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 127px!important;text-align: left!important;">
                                                                        <i class="fa fa-mobile"></i> Mobile No
                                                                     </span>
                                                                     <input type="text" id="user_mobile" name="user_mobile" value="<?php echo $user->user_mobile; ?>" class="form-control" placeholder="Mobile No">
                                                                </div>
                                                            </div>
                                                            <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 127px!important;text-align: left!important;">
                                                                        <i class="fa fa-envelope"></i> Email Address
                                                                     </span>
                                                                     <input type="text" id="user_email" name="user_email" value="<?php echo $user->user_email; ?>" class="form-control" placeholder="Email Address">
                                                                </div>
                                                            </div>

                                                            <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;vertical-align: top;">
                                                                    <span class="input-group-addon" style="width: 127px!important;text-align: left!important;">
                                                                        <i class="fa fa-home"></i> Address
                                                                     </span>
                                                                     <textarea class="form-control" name="user_address" id="user_address" placeholder="Address" style="resize: none;height:68px;"><?php echo $user->user_address; ?></textarea>
                                                                </div>
                                                            </div>

                                                            <button id="btn_update" type="button" class="btn btn-default" style="width: 100%;margin-top: 15px;color: green;">
                                                                <center><i class="fa fa-save" style="color: green;"></i> Update Information</center>
                                                            </button>
                                                    </div>
                                                </form>
                                                <form id="frm_password">
                                                    <div class="col-md-4" style="background: #F8F8F8;padding:10px;-webkit-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);-moz-box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);box-shadow: 0px -4px 17px -1px rgba(194,194,194,1);">

                                                            <div class="form-group1" style="margin-top: 10px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 160px!important;text-align: left!important;">
                                                                        <i class="fa fa-lock"></i> Current Password <span class="red">*</span>
                                                                     </span>
                                                                     <input type="password" id="user_pword" name="user_pword" class="form-control pword" placeholder="Current Password" data-error-msg="Current Password is required!" required style="width: 100%;">

                                                                    <span class="input-group-addon view" data-type="1" data-pasword_type="user_pword">
                                                                        <i class="fa fa-eye-slash"></i>
                                                                     </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group1" id="epassword" style="margin-top: 20px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 160px!important;text-align: left!important;">
                                                                        <i class="fa fa-lock"></i> New Password  <span class="red">*</span>
                                                                     </span>
                                                                     <input type="password" id="new_user_pword" name="new_user_pword" class="form-control pword" placeholder="New Password" data-error-msg="New Password is required!" required style="width: 100%;">

                                                                    <span class="input-group-addon view" data-type="1" data-pasword_type="new_user_pword">
                                                                        <i class="fa fa-eye-slash"></i>
                                                                     </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group1" id="cpassword" style="margin-top: 20px;">
                                                                <div class="input-group" style="width:100%;">
                                                                    <span class="input-group-addon" style="width: 160px!important;text-align: left!important;">
                                                                        <i class="fa fa-lock"></i> Confirm Password <span class="red">*</span>
                                                                     </span>
                                                                     <input type="password" id="c_user_pword" name="c_user_pword" class="form-control pword" placeholder="Confirm Password" data-error-msg="Confirm Password is required!" required style="width: 100%;">

                                                                    <span class="input-group-addon view" data-type="1" data-pasword_type="c_user_pword">
                                                                        <i class="fa fa-eye-slash"></i>
                                                                     </span>
                                                                </div>
                                                            </div>

                                                            <button id="btn_change_password" type="button" class="btn btn-default" style="width: 100%;margin-top: 30px;color: orange;">
                                                                <center><i class="fa fa-save"></i> Change Password</center>
                                                            </button>

                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                <div class="panel-footer">
                                </div>
                            </div> <!--panel default -->

                        </div> <!--rates and duties list -->
                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->

<div id="modal_update_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
    <div class="modal-dialog modal-sm">
        <div class="modal-content"><!---content--->
            <div class="modal-header">
                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title"><span id="modal_mode"> </span>Confirm Update</h4>
            </div>

            <div class="modal-body">
                <p id="modal-body-message">Are you sure you want to update your information ?</p>
            </div>

            <div class="modal-footer">
                <button id="btn_yes_update" type="button" class="btn btn-success" data-dismiss="modal">Yes</button>
                <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div><!---content---->
    </div>
    </div>
</div><!---modal-->

<div id="modal_password_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
    <div class="modal-dialog modal-sm">
        <div class="modal-content"><!---content--->
            <div class="modal-header">
                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title"><span id="modal_mode"> </span>Confirm Password</h4>
            </div>

            <div class="modal-body">
                <p id="modal-body-message">Are you sure you want to change your password?</p>
            </div>

            <div class="modal-footer">
                <button id="btn_yes_password" type="button" class="btn btn-success" data-dismiss="modal">Yes</button>
                <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div><!---content---->
    </div>
    </div>
</div><!---modal-->

<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj;

    var validateRequiredFields=function(f){
    var stat=true;

    $('div.form-group1').removeClass('has-error');
    $('input[required],textarea[required],select[required]',f).each(function(){


            if($(this).val()==""){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('div.form-group1').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }

    });

    return stat;
    };


    $('.view').on('click',function(){
        var type = $(this).data('type');
        var pasword_type = $(this).data('pasword_type');

        if( type == 1 ){

            $(this).find('.fa').removeClass('fa-eye-slash');
            $(this).find('.fa').addClass('fa-eye');
            $(this).data('type',0);

            $('#'+pasword_type).attr('type', 'text');

        }else{

            $(this).find('.fa').removeClass('fa-eye');
            $(this).find('.fa').addClass('fa-eye-slash');
            $(this).data('type',1);

            $('#'+pasword_type).attr('type', 'password');

        }

    });


    //for select

    var month = $('#month_hidden').val();
    var year = $('#year_hidden').val();
    $('#applicable_month').val(month);
    $('#applicable_year').val(year);

    $('#btn_update').click(function(){
        if(validateRequiredFields($('#frm_profile'))){
            $('#modal_update_confirmation').modal('toggle');
        }
    });

    $('#btn_yes_update').on('click',function(){
        if(validateRequiredFields($('#frm_profile'))){
                update_profile().done(function(response){
                showNotification(response);

                if(response.stat == 'error'){
                    $('#user_name').focus();
                }

                }).always(function(){
                    $.unblockUI();
                });
        }
    });

    $('input.pword').keypress(function(evt){
        if(evt.keyCode==13){
          evt.preventDefault();
          $('#btn_change_password').click();
        }
    }); 

    $('#btn_change_password').click(function(){
        if(validateRequiredFields($('#frm_password'))){

            var n_pword=$('#new_user_pword').val();
            var c_pword=$('#c_user_pword').val();

            if(n_pword!=c_pword){
                $('div.form-group1').removeClass('has-error');
                showNotification({title:"Error!",stat:"error",msg:"Pasword Doesnt Match"});
                $('#epassword').addClass('has-error');
                $('#cpassword').addClass('has-error');
                $('#c_user_pword').focus();
            }else{
                $('div.form-group1').removeClass('has-error');
                chck_current_pass().done(function(response){

                    if(response.password==0){
                        showNotification(response);
                        $('#user_pword').focus();
                    }else{
                        $('#modal_password_confirmation').modal('toggle');
                    }
                }).always(function(){
                    $.unblockUI();
                });
            }

        }        
    });

    $('#btn_yes_password').click(function(){
        if(validateRequiredFields($('#frm_profile'))){
                update_password().done(function(response){
                showNotification(response);
                $('.pword').val("");
                }).always(function(){
                    $.unblockUI();
                });
                return;
        }
    });


    var update_profile=function(){
        var _data=$('#frm_profile').serializeArray();
        _data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Profile/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var update_password=function(){
        var _data=$('#frm_password').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Profile/transaction/update_password",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var chck_current_pass=function(){
        var _data=$('#').serializeArray();
        _data.push({name : "user_pword" ,value : $('#user_pword').val()});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Profile/transaction/chck_current_pass",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    };

    $('.date-picker').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true

    });

    var showSpinningProgress=function(e){
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Saving Changes</h4>',
            css: {
            border: 'none',
            padding: '15px',
            backgroundColor: 'none',
            opacity: 1,
            zIndex: 20000,
        } });
        $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
    };

    var showSpinningProgressUpload=function(e){
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Uploading Image...</h4>',
            css: {
            border: 'none',
            padding: '15px',
            backgroundColor: 'none',
            opacity: 1,
            zIndex: 20000,
        } });
        $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
    };

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $('select',f).val(0);
        $(f).find('input:first').focus();
    };

    $('#btn_browse').click(function(event){
        event.preventDefault();
        $('input[name="file_upload[]"]').click();
    });

    $('input[name="file_upload[]"]').change(function(event){
        var _files=event.target.files;
        showSpinningProgressUpload();

        var data=new FormData();
        $.each(_files,function(key,value){
            data.append(key,value);
        });

        console.log(_files);

        $.ajax({
            url : 'Profile/transaction/upload',
            type : "POST",
            data : data,
            cache : false,
            dataType : 'json',
            processData : false,
            contentType : false,
            success : function(response){
                        $.unblockUI();
                        $('img[name="img_user"]').attr('src',response.path);

                    }
        });
    });

    $('#btn_remove_photo').click(function(event){
        event.preventDefault();
        $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
    });

});

</script>
</body>

</html>
