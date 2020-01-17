<!DOCTYPE html>

<html lang="en">
<?php echo $loader; ?>
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

<script type="text/javascript" src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>
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

        .numeric{
            width: 100%;
        }
        .bootstrap-timepicker-widget.dropdown-menu {
            z-index: 1400!important;

        }
        .checks{
            height:20px !important;
        }
        .cancel{
          background-color:#27ae60 !important;
        }
        .regularday{
          background-color:#81c784 ;
        }
        .schedtime{
            height: 20px !important; 
        }
        .panel_details{
            width: 100%;
            height: 100%;
            padding: 20px;
            padding-left: 30px;
            border: 1px solid #CFD8DC;
        }
        .panel_header{
            background: #E0E0E0;
            color: #fff;
            padding: 10px;
            font-weight: bold;
            color: #000000;
        }
        #image_name{
            border-radius: 50%;
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }
        #image_name:hover{
            border-radius: 50%;
            -moz-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.1);
            z-index: 4000;

        }
        .top_panel_header{
            background: #212121; color: #fff; padding: 10px;
        }
        .main_panel_ovt{
            background: #fff; 
            padding-top: 20px;
            padding-bottom: 50px; 
            border: 1px solid #78909C; 
            border-bottom: 3px solid #212121; 
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px
        }
        .box_shadow_panel{
            -webkit-box-shadow: 0px 0px 10px 2px rgba(166,166,166,1);
            -moz-box-shadow: 0px 0px 10px 2px rgba(166,166,166,1);
            box-shadow: 0px 0px 10px 2px rgba(166,166,166,1);
        }
        .thdetails{
            padding: 5px; font-weight: 400; background: #F5F5F5;border: 3px solid #ECEFF1;
        }
        .tddetails{
            padding: 5px;background: #F5F5F5;border: 3px solid #ECEFF1;
        }
    </style>
<?php echo $loaderscript; ?>
</head>

<body class="animated-content">

<?php echo $_top_navigation; ?>
<div id="wrapper">
    <div id="layout-static">
        <?php echo $_side_bar_navigation;?>
        <div class="static-content-wrapper white-bg">
            <div class="static-content" >
                <div class="page-content">
                    <ol class="breadcrumb" style="margin-bottom:0px;">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li><a href="OverrideTime">Override Time In/Out</a></li>
                    </ol>
                <div class="container-fluid">
                    <div class="top_panel_header">
                        Override Time In/Out
                    </div>
                    <div class="main_panel_ovt">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="box_shadow_panel">
                                        <div class="panel_header">
                                        Employee Filter
                                    </div>
                                    <div class="panel_details">
                                        <div class="row" id="divemployeedetails">
                                            <div class="col-md-4">
                                                <center>
                                                <img class="loadingimg" id="image_name" src="assets/img/anonymous-icon.png"></img>
                                            </center>
                                            </div>
                                            <div class="col-md-6">
                                                <div style="margin-top: 15px; margin-left: 20px;width: 100%;">
                                                    <table style="font-size: 12pt;width: 100% !important;">
                                                        <tr>
                                                            <td class="thdetails">ECODE:</td>
                                                            <td class="tddetails" width="50%"><span id="ecode"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="thdetails">Branch:</td>
                                                            <td class="tddetails" width="50%"><span id="branch"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="thdetails">Department:</td>
                                                            <td class="tddetails" width="100%"><span id="department"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="thdetails">Position:</td>
                                                            <td class="tddetails" width="50%"><span id="position"></span></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                            <hr style="background-color:black;border:1px solid #CFD8DC;" id="hremp">
                                        <div class="row" style="margin-bottom: 10px;margin-top: 30px;">
                                            <div class="form-group">
                                                <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                    Employee
                                                </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="employee_id_dt" id="employee_id_dt" data-error-msg="Please Select Employee" required style="width: 100% !important;">
                                                    <option value="">[ Select Employee ]</option>
                                                        <?php
                                                        foreach($employee_list as $row)
                                                        {
                                                            echo '<option value="'.$row->employee_id  .'" dept="'.$row->department.'" branch="'.$row->branch.'" ecode="'.$row->ecode.'">'.$row->ecode.'&nbsp&nbsp&nbsp&nbsp'.$row->full_name.'</option>';
                                                        }
                                                        ?>
                                                    </select>

                                                    <input type="hidden" id="authorization_stat" value="<?php echo $chck_authorization_stat; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="form-group">
                                                <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                    Pay Period
                                                </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="pay_period_id_dt" id="pay_period_id_dt" style="width: 100% !important;">
                                                    <option value="">Select Pay Period</option>
                                                        <?php
                                                        foreach($pay_period as $row)
                                                            {
                                                            echo '<option value="'.$row->pay_period_id  .'">'.$row->pay_period_start.'&nbsp - &nbsp'.$row->pay_period_end.'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="row" style="margin-bottom: 60px;">
                                                <div class="form-group">
                                                    <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                        Schedule Date
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" name="schedule_date_dt" id="schedule_date_dt" data-error-msg="Please Select Employee" required style="width: 100% !important;">
                                                            <option value="">Select Schedule</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="box_shadow_panel">
                                    <div class="panel_header">
                                    Override Details
                                    </div>
                                    <div class="panel_details">
                                    <input type="hidden" name="schedule_employee_id">
                                    <form id="frm_time">
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                Day
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="day" id="day" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                Date
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="date" id="date" class="form-control" disabled>
                                                <input type="hidden" name="frm_date" id="frm_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                Shift
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="shift" id="shift" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                Day Type
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="daytype" id="daytype" class="form-control" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                Clock In
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="clock_in" class="form-control timepicker2 clock_in" disabled>

                                                <input type="hidden" name="frm_clock_in" id="frm_clock_in">
                                                <input type="hidden" name="clock_inDate" class="clock_inDate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                Clock Out
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="text" name="clock_out" class="form-control timepicker2 clock_out" disabled>

                                                <input type="hidden" name="frm_clock_out" id="frm_clock_out">
                                                <input type="hidden" name="clock_outDate" class="clock_outDate">
                                                <input type="hidden" name="break_time" id="break_time">
                                                <input type="hidden" name="total" id="total">
                                                <input type="hidden" name="time_in" id="time_in">
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                        <div id="div_actions">
                                        <hr style="background-color:black;border:1px solid #CFD8DC;">
                                        <div class="row">
                                           <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                        UPDATE
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <button type="button" class="btn btn-success" style="width: 50%; padding: 10px;" id="btn_edit_timein" data-toggle="tooltip" data-placement="top" title="Update Time In"><span class="fa fa-edit"></span> Time In</button>
                                                            <button type="button" class="btn btn-success" style="width: 48%; padding: 10px;" id="btn_edit_timeout" data-toggle="tooltip" data-placement="top" title="Update Time Out"><span class="fa fa-edit"></span> Time Out</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                        CANCEL
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <button type="button" class="btn btn-danger" style="width: 50%; padding: 10px;" id="btn_cancel_timein" data-toggle="tooltip" data-placement="top" title="Cancel Time In"><span class="fa fa-times-circle"></span> Time In</button>
                                                            <button type="button" class="btn btn-danger" style="width: 48%; padding: 10px;" id="btn_cancel_timeout" data-toggle="tooltip" data-placement="top" title="Cancel Time Out"><span class="fa fa-times-circle"></span> Time Out</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr style="background-color:black;border:1px solid #CFD8DC;">
                                            <div class="row" style="margin-bottom: 8px;">
                                                <div class="form-group">
                                                    <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">
                                                       
                                                    </label>
                                                    <div class="col-sm-8">
                                                        <button type="button" class="btn btn-primary" style="width: 50%; padding: 10px;background-color: #CFD8DC !important; color: black;" id="btn_apply"><span class="fa fa-check-circle"></span> Apply</button>
                                                        <button type="button" class="btn btn-primary" style="width: 48%; padding: 10px;background: #CFD8DC !important; color: black !important;" id="btn_cancel"><span class="fa fa-times"></span> Cancel</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                           </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->
        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->

<div class="modal fade" id="modal_authorization" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-m" style="margin-top: 200px;">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#2980b9;">
          <h4 class="modal-title" style="color:white;"><span class="fa fa-lock"></span> Authorization</h4>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="col-md-12">
                <div style="font-size: 11pt;">
                    Please Enter the authorization password.
                    <hr>
                </div>
                    <input type="password" name="authorizationpwd" id="authorizationpwd" class="form-control" style="height: 50px !important; font-size: 15pt !important;">
                </div>
            </div>
        </div>
        <div class="modal-footer" style="background: #ECEFF1;">
            <div style="margin-right: 30px;">
            <button type="button" id="btnauthenticate" class="btn btn-primary" style="width: 100px; height: 38px; font-size: 13pt;"><span class="fa fa-check-circle"></span> OK</button>
            <a href="dashboard"><button type="button" class="btn" style="width: 100px; height: 38px; font-size: 13pt; background: #c62828; color: #fff;"> Cancel</button></a>
            </div>
        </div>
      </div>
    </div>
  </div>

<link href="assets/plugins/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="assets/plugins/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>

<link href="assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<script src="assets/plugins/sweet-alert/sweetalert.min.js"></script>
<?php echo $_rights; ?>
<script>
$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _period_id; var _selectedIDschedtemplate;
    var _txnModetemplate; var _selectRowObjtemplate; var _sched_refshift_id; var _typestate = 0; var _date;
    var _data;
    var empname; var _schedule_date_dt;

    var _selectedIDdt = $('#schedule_date_dt').val();
    var stat = $('#authorization_stat').val();

    if (stat == 1){
        setTimeout(function() {
            $('#modal_authorization').modal('show');
            $('#authorizationpwd').focus(300);
        }, 1000);
    }

    $(document).bind("contextmenu", function (e) {
            e.preventDefault();
    });

    $(document).keydown(function(event){
        if(event.keyCode == 123){
          //return false;  //Prevent from F12
      }
      else if(event.ctrlKey && event.shiftKey && event.keyCode == 73){
          return false;  //Prevent from ctrl+shift+i
      }
      else if(event.ctrlKey && event.keyCode == 85){
          return false;  //Prevent from ctrl+u
      }
      else if(event.ctrlKey && event.keyCode == 84){
          return false;  //Prevent from ctrl+t
      }
      else if(event.ctrlKey && event.keyCode == 83){
          return false;  //Prevent from ctrl+s
      }
      else if(event.keyCode == 113){
          $('#txtsearch').focus();  //Prevent from ctrl+s
      }
    });

    var processpwd = function(){
        var pwd = $('#authorizationpwd').val();
        if (pwd == ""){
            showNotification({title:"Error!",stat:"error",msg:"Enter authorization password!"});
            $('#authorizationpwd').focus();
        }else{
        authorization().done(function(response){
         var checking = response['stat'];
             if (checking == "success"){
                showNotification(response);
                $('#modal_authorization').modal('hide');
             }else{
                showNotification(response);
                $('#authorizationpwd').focus().select();
             }
          });
        }
    };

    $('#btnauthenticate').click(function(){
        processpwd();
    });

    $('#authorizationpwd').keypress(function(evt){
        if(evt.keyCode==13){ 
            processpwd();
        }
    });

    var authorization=(function(){
       var _data={pword : $('input[name="authorizationpwd"]').val()};
               return $.ajax({
                   "dataType":"json",
                   "type":"POST",
                   "url":"Employee/transaction/chck_authorization_override",
                   "data" : _data,
                   "beforeSend": function(){
                   }
         });
   });

    $('#div_actions').hide();
    $('#divemployeedetails').hide();
    $('#hremp').hide();


    var bindEventHandlers=(function(){
        var detailRows = [];

        $("#employee_id_dt").change(function() {
            selectPayPeriod();
            changeemployeedetails();
            $('#divemployeedetails').hide();
            $('#hremp').hide();
            $('#divemployeedetails').slideDown(400); 
            $('#hremp').slideDown(400);
        });

        $("#pay_period_id_dt").change(function() {
            selectPayPeriod();
        });

        $('#btn_edit_timein').click(function(){
            $('.clock_in').prop('disabled', false);
            $('.clock_out').prop('disabled', true);
            $('.clock_in').focus();
        });

        $('#btn_edit_timeout').click(function(){
            $('.clock_out').prop('disabled', false);
            $('.clock_in').prop('disabled', true);
            $('.clock_out').focus();
        });

        $('#btn_cancel_timein').click(function(){
            showSpinningProgressLoading();
            $('.clock_in').val('00:00:00');
            $('#frm_clock_in').val('00:00:00');
            $('.clock_inDate').val('0000-00-00');
            setTimeout(function(){
                $.unblockUI();
            }, 320);
        });

        $('#btn_cancel_timeout').click(function(){
            showSpinningProgressLoading();
            $('.clock_out').val('00:00:00');
            $('#frm_clock_out').val('00:00:00');
            $('.clock_outDate').val('0000-00-00');
            setTimeout(function(){
                $.unblockUI();
            }, 320);
        });

        $('#btn_cancel').click(function(){
            $('.clock_out').prop('disabled', true);
            $('.clock_in').prop('disabled', true);
            selectsched();
            showNotification({title:"Success!",stat:"success",msg:"Successfully Canceled!"});
        });

        $('#btn_apply').click(function(){
            applyOverride().done(function(response){
            $('.clock_out').prop('disabled', true);
            $('.clock_in').prop('disabled', true);
                showNotification(response);
            }).always(function(){
                $.unblockUI();
            });
        });

        $('.clock_in').change(function(){
            $('#frm_clock_in').val($(this).val());
        });

        $('.clock_out').change(function(){
            $('#frm_clock_out').val($(this).val());
        });

        var selectPayPeriod=function(){
            var _employee_id = $("#employee_id_dt").val();
            var _pay_period_id = $("#pay_period_id_dt").val();
            $.ajax({
                url : 'SchedEmployee/transaction/schedules_per_payperiod/'+_employee_id+'/'+_pay_period_id+'',
                type : "GET",
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                success : function(response){
                    $.unblockUI();
                    var rows=response.data;
                        $("#schedule_date_dt option").remove();
                        $.each(rows,function(i,value){
                           $("#schedule_date_dt").append('<option value="'+ value.schedule_employee_id +'">'+ value.date +'</option>');
                        });
                            $('#schedule_date_dt').val("").trigger("change")
                    }
                });
        };

        var clearfieldoverridedetails = function(){
            $('#schedule_employee_id').val("");
            $('#day').val("");
            $('#date').val("");
            $('#shift').val("");
            $('#daytype').val("");
            $('.clock_in').val("");
            $('.clock_out').val("");
        }


        $("#schedule_date_dt").change(function() {
            $('.clock_in').prop('disabled', true);
            $('.clock_out').prop('disabled', true);
            selectsched();
        });

        var selectsched = function(){
            clearfieldoverridedetails();
            selectscheduleid().done(function(response){
                    if (response.data.length > 0){
                        $('#schedule_employee_id').val(response.data[0].schedule_employee_id);
                        $('#day').val(response.data[0].day);
                        $('#date').val(response.data[0].date);
                        $('#shift').val(response.data[0].shift);
                        $('#daytype').val(response.data[0].daytype);
                        $('#break_time').val(response.data[0].break_time);
                        $('#total').val(response.data[0].total);
                        $('#frm_date').val(response.data[0].date);
                        $('#time_in').val(response.data[0].time_in);
                        //clock in split
                        if (response.data[0].clock_in != null){
                            var dateTimeSplit = response.data[0].clock_in.split(' ');
                            var dateSplit = dateTimeSplit[0].split('-');
                            var clockinDate = dateSplit[0] + '-' + dateSplit[1] + '-' + dateSplit[2];
                            var clockin = dateTimeSplit[1];

                            $('.clock_in').val(clockin);
                            $('.clock_inDate').val(clockinDate);
                            $('#frm_clock_in').val(clockin);
                        }else{
                            $('.clock_in').val('00:00:00');
                            $('#frm_clock_in').val('00:00:00');
                            $('.clock_inDate').val('0000-00-00');
                        }

                        //clock out split
                        if (response.data[0].clock_out != null){
                            var dateTimeSplitClockOut = response.data[0].clock_out.split(' ');
                            var dateSplitClockOut = dateTimeSplitClockOut[0].split('-');
                            var clockoutDate = dateSplitClockOut[0] + '-' + dateSplitClockOut[1] + '-' + dateSplitClockOut[2];
                            var clockout = dateTimeSplitClockOut[1];
                            $('.clock_out').val(clockout);
                            $('#frm_clock_out').val(clockout);
                            $('.clock_outDate').val(clockoutDate);
                        }else{
                            $('.clock_out').val('00:00:00');
                            $('#frm_clock_out').val('00:00:00');
                            $('.clock_outDate').val('0000-00-00');
                        }
                        $('#div_actions').slideDown(400);
                    }else{
                        $('#div_actions').slideUp(400);
                    }
                    setTimeout(function(){
                        $.unblockUI();
                    }, 320);
                });
        }

        var changeemployeedetails = function(){
            getemployeedetails().done(function(response){
                if (response.employee_list.length > 0){
                    $('#image_name').attr('src',response.employee_list[0].image_name);
                    $('#ecode').text(response.employee_list[0].ecode);
                    $('#branch').text(response.employee_list[0].branch);
                    $('#department').text(response.employee_list[0].department); 
                    $('#position').text(response.employee_list[0].position);
                }
            });
        }

        var getemployeedetails=function(){
            var _data=$('#').serializeArray();
            _data.push({name : "employee_id" ,value : $('#employee_id_dt').val()});
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"SchedEmployee/transaction/getemployeedetails",
                "data":_data
            });
        };

        var applyOverride=function(){
            var _data = $('#frm_time').serializeArray();
            _data.push({name : "schedule_id" ,value : $('#schedule_date_dt').val()});
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"SchedEmployee/transaction/update_overridesched",
                "data":_data,
                "beforeSend": showSpinningProgressLoading($('#'))
            });
        };

        var selectscheduleid=function(){
            var _data=$('#').serializeArray();
            _data.push({name : "schedule_id" ,value : $('#schedule_date_dt').val()});
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"SchedEmployee/transaction/override_sched",
                "data":_data,
                "beforeSend": showSpinningProgress($('#'))
            });
        };


        _schedule_date_dt=$("#schedule_date_dt").select2({
            placeholder: "Select Schedule",
            allowClear: true
        });

        _schedule_date_dt.select2('val', null);

        _pay_period_id_dt=$("#pay_period_id_dt").select2({
            placeholder: "Select Pay Period",
            allowClear: true
        });

        _pay_period_id_dt.select2('val', null);

        _employeesdt=$("#employee_id_dt").select2({
            placeholder: "Select Employee",
            allowClear: true
        });

        _employeesdt.select2('val', null);

        _employees=$("#employee_id").select2({
            dropdownParent: $("#modal_create_schedule"),
            placeholder: "Select Employee",
            allowClear: true
        });

        _employees.select2('val', null);

    })();

    var validateRequiredFields=function(f){
        var stat=true;

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){


                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }

        });

        return stat;
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
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Loading Data</h4>',
            css: {
            border: 'none',
            padding: '15px',
            backgroundColor: 'none',
            opacity: 1,
            zIndex: 20000,
        } });
        $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
    };

    var showSpinningProgressLoading=function(e){
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Saving Data</h4>',
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
        $('input,textarea,select',f).val('');
        $(f).find('input:first').focus();
        $('#employee_id').val('').trigger("change");
    };

    $('.timepicker2').timepicker({
        minuteStep: 1,
        appendWidgetTo: 'body',
        showSeconds: true,
        showMeridian: false,
        defaultTime: false
    });
});

</script>
</body>

</html>
