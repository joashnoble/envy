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
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet"><!-- iCheck -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/_all.css" rel="stylesheet"><!-- Custom Checkboxes / iCheck -->
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
        #tbl_overtime_entry td{
            cursor: pointer;
        }
        .tbl-header{
            background-color: #222d32;
            color:white;
        }
        .sub-header{
            background-color: #37474F;
            color:white;  
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
                        <li><a href="OvertimeEntry">Overtime Entry</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:bold;">Overtime Entry</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <div class="row" style="margin:10px;">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Pay Period : </label>
                                                        <select class="form-control" name="period_id" id="period_id" data-error-msg="Please Select Employee" required>
                                                        <option value="">[ Select Pay Period ]</option>
                                                       <?php
                                                            foreach($pay_period as $row)
                                                            {
                                                                echo '<option value="'.$row->pay_period_id  .'">'.$row->pay_period_start.'&nbsp ~ &nbsp'.$row->pay_period_end.'</option>';
                                                            }
                                                        ?>
                                                      </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Department : </label>
                                                        <select class="form-control" name="department_id" id="department_id" data-error-msg="Please Select Employee" required>
                                                        <option value="">[ Select Department ]</option>
                                                        <?php
                                                            foreach($department as $row)
                                                            {
                                                                echo '<option value="'.$row->ref_department_id  .'">'.$row->department.'</option>';
                                                            }
                                                        ?>
                                                      </select>
                                                    </div>
                                                </div>                                           
                                            </div>
                                        </div>
                                        <hr>
<!--                                         <div style="margin: 10px;">
                                            <table width="100%" cellspacing="0">
                                                <tr>
                                                    <td colspan="2"><h3>List of Employee in the Department will be listed here</h3></td>
                                                </tr>
                                            </table>
                                        </div> -->
                                        <table id="tbl_overtime_entry" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead class="tbl-header">
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="6"><center><strong>Overtime</strong></center></td>
                                                    <td colspan="6"><center><strong>Night Shift Differential</strong></center></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="sub-header"></td>
                                                    <td colspan="3" class="sub-header"><center><strong>Regular</strong></center></td>
                                                    <td colspan="3" class="sub-header"><center><strong>Sunday</strong></center></td>
                                                    <td colspan="3" class="sub-header"><center><strong>Regular</strong></center></td>
                                                    <td colspan="3" class="sub-header"><center><strong>Sunday</strong></center></td>
                                                </tr>
                                                <tr>
                                                    <th width=".5%"></th>
                                                    <th width="20%">Employee</th>
                                                    <th><center>Regular</center></th>
                                                    <th><center>Regular Holiday </center></th>
                                                    <th><center>Special Holiday </center></th>
                                                    <th><center>Regular Sunday </center></th>
                                                    <th><center>Regular Sunday Holiday</center></th>
                                                    <th><center>Special Sunday Holiday</center></th>
                                                    <th><center>Regular </center></th>
                                                    <th><center>Regular Holiday </center></th>
                                                    <th><center>Special Holiday </center></th>
                                                    <th><center>Regular Sunday </center></th>
                                                    <th><center>Regular Sunday Holiday </center></th>
                                                    <th><center>Special Sunday Holiday </center></th>
                                                 </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>

                                <div class="panel-footer" id="foot-table">
                                  <button class="btn" style="background-color:#388E3C;color:#FFF; width: 100px;" id="ot_save"><span class="fa fa-check-circle"></span> Save</button>
                                  <btnupdate class="btnupdate"></btnupdate>
                                  <?php if ($this->session->right_overtimeentry_edit > 0 ){?>
                                  <button class="btn" style="background-color:#e74c3c;color:#FFF;width: 100px;" id="ot_edit"><span class="fa fa-edit"></span> Update</button>
                                  <?php }?>

                                  <button class="btn" style="background-color:#F57C00;color:#FFF;width: 100px;" id="ot_cancel"><span class="fa fa-times-circle"></span> Cancel</button>
                                </div>
                            </div> <!--panel default -->

                        </div> <!--rates and duties list -->
                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->

<link href="assets/plugins/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="assets/plugins/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>

<link href="assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">
<script src="assets/plugins/sweet-alert/sweetalert.min.js"></script>
<?php echo $_rights; ?>
<script>
$(document).ready(function(){
    var _departmentOT; var _payperiodid; var _selectedDeptId; var _selectedPayPeriodId; var dt; var rowcount;
    // SELECT2 - Department
    _departmentOT=$("#department_id").select2({
        placeholder: "Select Department",
        allowClear: false
    });
    _departmentOT.select2('val', null);
    // ## 

    // ## SELECT2 - Pay Period 
    _payperiodid=$("#period_id").select2({
        placeholder: "Select Pay Period",
        allowClear: false
    });
    _payperiodid.select2('val', null);
    // ##
    _selectedDeptId = $('#department_id').val();
    _selectedPayPeriodId = $('#period_id').val();
    // ## Overtime Entry Table

    var hideBtn=function(){
        $('#ot_cancel').hide();
        $('#ot_save').hide();
        $('#ot_edit').hide();
        $('#ot_apply').hide();
    };

    var overtime_entry=function(){
        hideBtn();
        dt=$('#tbl_overtime_entry').DataTable({
            "bStateSave": true,
            "bPaginate": false,
            "bInfo" : false,            
            "ajax": {
            "url": "OvertimeEntry/transaction/list",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "department_id": _selectedDeptId,
                    "period_id": _selectedPayPeriodId
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "dtr_id",
                     render: function (data, type, full, meta){
                        return "<center><input type='hidden' style='text-align: right;' class='form-control numeric' id='id' name='id[]' value='"+data+"' disabled></center>";

                    }
                },
                { targets:[1],data: "full_name" },
                { targets:[2],data: "ot_reg",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='ot_reg' name='ot_reg[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[3],data: "ot_reg_reg_hol",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='ot_reg_reg_hol' name='ot_reg_reg_hol[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[4],data: "ot_reg_spe_hol",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='ot_reg_spe_hol' name='ot_reg_spe_hol[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[5],data: "ot_sun",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='ot_sun' name='ot_sun[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[6],data: "ot_sun_reg_hol",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='ot_sun_reg_hol' name='ot_sun_reg_hol[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[7],data: "ot_sun_spe_hol",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='ot_sun_spe_hol' name='ot_sun_spe_hol[]' value='"+data+"' disabled></center>";
                    }
                },                
                { targets:[8],data: "nsd_reg",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='nsd_reg' name='nsd_reg[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[9],data: "nsd_reg_reg_hol",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='nsd_reg_reg_hol' name='nsd_reg_reg_hol[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[10],data: "nsd_reg_spe_hol",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='nsd_reg_spe_hol' name='nsd_reg_spe_hol[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[11],data: "nsd_sun",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='nsd_sun' name='nsd_sun[]' value='"+data+"' disabled></center>";
                    }
                },                                
                { targets:[12],data: "nsd_sun_reg_hol",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='nsd_sun_reg_hol' name='nsd_sun_reg_hol[]' value='"+data+"' disabled></center>";
                    }
                },
                { targets:[13],data: "nsd_sun_spe_hol",
                    render: function (data, type, full, meta){
                        return "<center><input type='text' style='text-align: right;' class='form-control numeric' id='nsd_sun_spe_hol' name='nsd_sun_spe_hol[]' value='"+data+"' disabled></center>";
                    }
                },
            ],
            language: {
                         searchPlaceholder: "Search Overtime"
                      },
            "drawCallback": function (oSettings, json) {
               // $.unblockUI();
            },
            "rowCallback":function( row, data, index ){

            },
            "initComplete": function(settings, json) {
                $.unblockUI();
            }
        });

        setTimeout(function(){
            countTable();
            $('.numeric').autoNumeric('init');
        }, 320);
    };

    overtime_entry();

    $('#ot_edit').click(function(){
        showSpinningProgressLoading();
        $('#ot_edit').fadeOut(500);
        $('#ot_save').fadeIn(500);
        $('#ot_cancel').fadeIn(500);
        $('#department_id').prop('disabled', true);
        $('#period_id').prop('disabled', true);
        $('#tbl_overtime_entry :input').prop('disabled', false);
        setTimeout(function(){
            $.unblockUI();
        }, 320);
    });

    $('#ot_cancel').click(function(){
        showSpinningProgressLoading();
        togglebtn();
        $('#tbl_overtime_entry').DataTable().ajax.reload();
        setTimeout(function(){
            $.unblockUI();
        }, 320);
    });

    $('#ot_save').click(function(){
        updateOvertimeEntry().done(function(response){
            showNotification(response);
            $('#tbl_overtime_entry').DataTable().ajax.reload();
        }).always(function(){
            togglebtn();
            $.unblockUI();
        });
    });

    var getOTentry=function(){
        $('#tbl_overtime_entry').dataTable().fnDestroy();
        _selectedDeptId = $('#department_id').val();
        _selectedPayPeriodId = $('#period_id').val();
        showSpinningProgressLoading();
        overtime_entry();
    };

    var togglebtn = function(){
        $('#ot_save').fadeOut(500);
        $('#ot_cancel').fadeOut(500);
        $('#ot_edit').fadeIn(500);
        $('#department_id').prop('disabled', false);
        $('#period_id').prop('disabled', false);
        $('#tbl_overtime_entry :input').prop('disabled', true);
    };

    var updateOvertimeEntry = function(){
      var OT_id = $('#tbl_overtime_entry').dataTable();
      var data = $('input', OT_id.fnGetNodes()).serializeArray();
      return $.ajax({
          "dataType":"json",
          "type":"POST",
          "url":"OvertimeEntry/transaction/updateOvertimeEntry",
          "data":data,
          beforeSend: showSpinningProgressLoading(),
                }).done(function(response){
                    $.unblockUI();
                });
    };

    var countTable = function(){
        var table = $('#tbl_overtime_entry').dataTable();
        rowcount = table.fnGetData().length;    
        if (rowcount == 0){
            $('#ot_cancel').fadeOut(500);
            $('#ot_save').fadeOut(500);
            $('#ot_edit').fadeOut(500);
        }else{
            $('#ot_edit').fadeIn(500);
        }
    };

    $("#period_id").on('change', function() {
        getOTentry();

    });

    $("#department_id").on('change', function() {
        getOTentry();
    });

    $('#tbl_overtime_entry tbody').on('click','tr',function(){
          $('#tbl_overtime_entry tbody tr').css('background-color','#FFF');
          $('#tbl_overtime_entry tbody tr').css('font-weight','normal');
          row=$(this).closest('tr');
          row.css('background-color','#CFD8DC');
          row.css('font-weight','600');
    });

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

    var showSpinningProgressLoading=function(e){
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

});

</script>
</body>

</html>
