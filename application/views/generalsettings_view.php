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
                        <li><a href="GeneralSettings">Company Setup</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:600;">Company Setup</h2></center>
                                        </div>
                                    <form id="frm_general_settings">
                                        <div class="container-fluid" style="padding-top:5px;">
                                            <div class="col-md-8">
                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:16px;">Company Name :</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-bank"></i>
                                                             </span>
                                                             <?php
                                                                        foreach ($company_setup as $row)
                                                                        {

                                                             ?>
                                                             <textarea id="company_name" name="company_name" class="form-control" placeholder="Company Name" data-error-msg="Company Name is required!" required><?php echo $row->company_name; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:16px;">Address :</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-home"></i>
                                                             </span>
                                                             <textarea id="address" name="address" class="form-control" placeholder="Address" data-error-msg="Address is required!" required><?php echo $row->address; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;">Contact No :</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-mobile"></i>
                                                             </span>
                                                             <input type="text" id="contact_no" name="contact_no" value="<?php echo $row->contact_no; ?>" class="form-control" placeholder="Contact No" data-error-msg="Contact No is required!" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;">RDO :</label>
                                                    </div>
                                                    <div class="col-md-3" style="padding:0px;">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-cloud"></i>
                                                                 </span>
                                                                 <input type="text" id="rdo" name="rdo" value="<?php echo $row->rdo; ?>" class="form-control" placeholder="RDO" data-error-msg="RDO is required!" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;">BIR REG # :</label>
                                                    </div>
                                                    <div class="col-md-3" style="padding:0px;">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-cloud"></i>
                                                                 </span>
                                                                 <input type="text" id="bir_reg_no" name="bir_reg_no" value="<?php echo $row->bir_reg_no; ?>" class="form-control" placeholder="BIR REG Number" data-error-msg="Bir Reg Number is required!" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;">Applicable Year :</label>
                                                    </div>
                                                    <div class="col-md-3" style="padding:0px;">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-cloud"></i>
                                                                 </span>
                                                                 <input type="hidden" id="year_hidden" value="<?php echo $row->applicable_year; ?>">
                                                                 <select class="form-control" name="applicable_year" id="applicable_year" data-error-msg="Applicable Year is required." required>
                                                                    <?php $minyear=2016; $maxyear=2050;
                                                                    while($minyear!=$maxyear){
                                                                        echo '<option value='.$minyear.'>'.$minyear.'</option>';
                                                                        $minyear++;
                                                                    }

                                                                    ?>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;">Applicable Month :</label>
                                                    </div>
                                                    <div class="col-md-3" style="padding:0px;">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-cloud"></i>
                                                                 </span>
                                                                 <input type="hidden" id="month_hidden" value="<?php echo $row->applicable_month; ?>">
                                                                 <select class="form-control" name="applicable_month" id="applicable_month" data-error-msg="Applicable Month is required." required>
                                                                    <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;">TIN # :</label>
                                                    </div>
                                                    <div class="col-md-6" style="padding:0px;">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-cloud"></i>
                                                                 </span>
                                                                 <input type="text" id="tin_no" name="tin_no" value="<?php echo $row->tin_no; ?>" class="form-control" placeholder="Tin Number" data-error-msg="TIN Number is required!" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:16px;">Login Quote :</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-home"></i>
                                                             </span>
                                                             <textarea id="quote" name="quote" class="form-control" placeholder="Login Quote" data-error-msg="Quote is required!" required><?php echo $row->quote; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <hr>
                                                    <label class="control-label boldlabel"><span class="fa fa-envelope"></span> Email Settings</label>
                                                    <hr>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;margin-top:8px;">Email Address :</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-cloud"></i>
                                                             </span>
                                                            <input type="text" id="email_address" name="email_address" value="<?php echo $row->email_address; ?>" class="form-control" placeholder="Email Address" data-error-msg="Email Address is required!" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;margin-top:8px;">Password :</label>
                                                    </div>
                                                    <div class="form-group" id="epassword">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-cloud"></i>
                                                             </span>
                                                            <input type="password" id="email_password" name="email_password" value="<?php echo $row->email_password; ?>" class="form-control" placeholder="Password" data-error-msg="Email Password is required!" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;margin-top:8px;">Confirm Password :</label>
                                                    </div>
                                                    <div class="form-group" id="cpassword">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-cloud"></i>
                                                             </span>
                                                            <input type="password" id="confirm_password" value="<?php echo $row->email_password; ?>" name="confirm_password" class="form-control" placeholder="Confirm Password" data-error-msg="Confirm Password is required!" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <hr>
                                                    <label class="control-label boldlabel"><span class="fa fa-cog"></span> Report Footer Settings</label>
                                                    <hr>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;margin-top:8px;">Checked by :</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                             </span>
                                                            <input type="text" id="checked_by" name="checked_by" value="<?php echo $row->checked_by; ?>" class="form-control" placeholder="Checked by">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-3">
                                                         <label class="control-label boldlabel" style="text-align:right;margin-top:8px;margin-top:8px;">Approved by :</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                             </span>
                                                            <input type="text" id="approved_by" name="approved_by" value="<?php echo $row->approved_by; ?>" class="form-control" placeholder="Checked by">
                                                        </div>
                                                    </div>
                                                </div>

                                                </div>

                                                <div class="col-md-3">
                                                    <div class="col-md-12">
                                                        <label class="control-label boldlabel" style="text-align:left;padding-top:10px;"><i class="fa fa-bank" aria-hidden="true" style="padding-right:10px;"></i>Company Logo</label>
                                                        <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                    </div>
                                                    <div style="width:100%;height:300px;border:2px solid #34495e;border-radius:5px;">
                                                        <center>
                                                        <img name="img_user" src="<?php echo $row->image_name; }?>" height="130px;" width="130px;"></img>
                                                        </center>
                                                        <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                        <center>
                                                             <button type="button" id="btn_browse" style="width:150px;margin-bottom:5px;" class="btn btn-primary">Browse Photo</button>
                                                             <button type="button" id="btn_remove_photo" style="width:150px;" class="btn btn-danger">Remove</button>
                                                             <input type="file" name="file_upload[]" class="hidden">
                                                        </center>
                                                    </div>
                                                </div>

                                        </div>
                                    </form>
                                <div class="panel-footer">
                                        <div align="right" style="padding-right:103px !important;">
                                            <button id="btn_create" type="button" class="btn btn-lg right_companysetup_edit" style="background-color:#2ecc71;color:white;">&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;</button>
                                        </div>
                                </div>
                            </div> <!--panel default -->

                        </div> <!--rates and duties list -->
                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->
<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj;

    var validateRequiredFields=function(f){
    var stat=true;

    var pword = $('#email_password').val();
    var cpword = $('#confirm_password').val();

    $('div.form-group').removeClass('has-error');
    $('input[required],textarea[required],select[required]',f).each(function(){


            if($(this).val()==""){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('div.form-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }
            if(pword!=cpword){
                showNotification({title:"Error!",stat:"error",msg:"Pasword Doesnt Match"});
                $('#epassword').addClass('has-error');
                $('#cpassword').addClass('has-error');
                $('#confirm_password').focus();
                stat=false;
                return false;
            }

    });

    return stat;
    };


    //for select

    var month = $('#month_hidden').val();
    var year = $('#year_hidden').val();
    $('#applicable_month').val(month);
    $('#applicable_year').val(year);

    $('#btn_create').click(function(){
        if(validateRequiredFields($('#frm_general_settings'))){
                _selectedID = 1;
                update_GeneralSettings().done(function(response){
                showNotification(response);

                }).always(function(){
                    //$('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
                    $.unblockUI();
                });
                return;
        }
        else{}
    });

    var create_GeneralSettings=function(){
        var _data = $('#frm_general_settings').serializeArray();
        _data.push({name : "image_name" ,value : $('img[name="img_user"]').attr('src')});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"GeneralSettings/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var update_GeneralSettings=function(){
        var _data=$('#frm_general_settings').serializeArray();
        _data.push({name : "image_name" ,value : $('img[name="img_user"]').attr('src')});

        console.log(_data);
        _data.push({name : "company_id" ,value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"GeneralSettings/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var remove_GeneralSettings=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"GeneralSettings/transaction/delete",
            "data":{company_id : _selectedID},
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
            url : 'GeneralSettings/transaction/upload',
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
