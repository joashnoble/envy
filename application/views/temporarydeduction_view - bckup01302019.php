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

    <!-- touchspin -->
    <script type="text/javascript" src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>

    <!-- numeric formatter -->
    <script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
    <script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>
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

        td.details-control1 {
            background: url('assets/img/Folder_Closed.png') no-repeat center center !important;
            cursor: pointer;
        }
        tr.details1 td.details-control1 {
            background: url('assets/img/Folder_Opened.png') no-repeat center center;
        }

        td.details-control2 {
            background: url('assets/img/Folder_Closed.png') no-repeat center center !important;
            cursor: pointer;
        }
        tr.details2 td.details-control2 {
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
            text-align: left;
            width: 100%;
        }
        .numeric{
            text-align: left;
            width: 100%;
        }
        .odd{
            background-color: #eeeeee !important;
        }
        .boldlabel1{
            font-weight:bold;
            font-size: 12px;
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
                        <li><a href="TemporaryDeduction">Temporary Deduction</a></li>
                    </ol>



                    <div id="div_dtr_entry" style="display:none;">

                            <div class="panel panel-default">
                                <button class="btn delete"  id="btn_canceldtr" title="Create New Employee" >
                                    <span class="glyphicon glyphicon-arrow-left"></span></button>

                                <button class="btn btn_new_temp_deduction add right_tempdeduction_create"  id="btn_new_temp_deduction" title="Create New Employee" >
                                    <span class="glyphicon glyphicon-plus"></span></button>

                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">Deductions (Temporary) </h2></center>
                                             <div class="pull-right"><strong>[ <a id="" href="#" style="text-decoration: underline;color:white;"><displayname id="" class="periodcoveredtext"></displayname></a> ]</strong></div>
                                              </div>

                                    <div class="panel-body table-responsive" style="padding-top:5px;">
                                        <table id="tbl_temporary_deduction" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>E-CODE</th>
                                                    <th>Fullname</th>
                                                    <th>Deduction Description</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Remarks</th>
                                                    <th><center>Action</center></th>
                                                 </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                <div class="panel-footer"></div>
                            </div> <!--panel default -->

                        </div> <!--list -->

                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->


            <div id="modal_filter" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> Temporary Deductions </h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_search_dtr">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Year : </label>
                                    <select class="form-control" id="year" data-error-msg="This Field is Required!" required>
                                        <!--YOU-->
                                        <?php $minyear=1990; $maxyear=2500;
                                            while($minyear!=$maxyear){
                                                echo '<option value='.$minyear.'>'.$minyear.'</option>';
                                                $minyear++;
                                            }
                                        ?>
                                        <!--VS-->
                                        <!-- <option value="0">[ Select Year ]</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option> -->
                                        <!--THE GUY SHE TELLS YOU NOT TO WORRY ABOUT IT-->
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Pay Period : </label>
                                    <select id='pay_period' class='form-control' name='emp_leaves_entitlement_id'>

                                </select>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Period Start:</label>
                                    <input type="text" class="form-control" id="period_start" name="pay_period_start" placeholder="" data-error-msg="This Field is Required!" disabled >
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Period End:</label>
                                    <input type="text" class="form-control" id="period_end" name="pay_period_end" placeholder="" data-error-msg="This Field is Required!" disabled >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">Department:</label>
                                          <select class="form-control" id="ref_department_id" name="ref_department_id" id="sel1">
                                            <option value="all">All Departments</option>
                                           <?php
                                                                foreach($ref_department as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_department_id  .'">'.$row->department.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">Department:</label>
                                          <select class="form-control" id="group_id" name="group_id" id="sel1">
                                            <option value="all">All Groups</option>
                                           <?php
                                                                foreach($ref_group as $row)
                                                                {
                                                                    echo '<option value="'.$row->group_id  .'">'.$row->group_desc.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_select_dtr" type="button" class="btn btn-success">Select</button>
                            <button id="btn_close_dtr" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_temp_deduction" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> Temporary Deductions : <transactionlabel id="transactionlabel"></transactionlabel></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_new_tempdeduction">
                                <div class="container" style="width:100% !important;">
                                    <div class="form-group">
                                        <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">Employee :</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="employee_id" id="employee_id" data-error-msg="Please Select Employee" required>
                                            <option value="">[ Select Employee ]</option>
                                           <?php
                                                                foreach($employee_list as $row)
                                                                {
                                                                    echo '<option value="'.$row->employee_id  .'">'.$row->ecode.'&nbsp&nbsp&nbsp&nbsp'.$row->full_name.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">Deduction Desc :</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="deduction_id" id="deduction_id" data-error-msg="Please Select Employee" required>
                                            <option value="">[ Select Deduction Description ]</option>
                                           <?php
                                                                foreach($refdeduction as $row)
                                                                {
                                                                    echo '<option value="'.$row->deduction_id  .'">'.$row->deduction_desc.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">Amount :</label>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                              <span class="input-group-addon" id=""><i class="fa fa-money" aria-hidden="true"></i></span>
                                              <input type="text" class="form-control numeric" name="deduction_per_pay_amount" placeholder="Amount" aria-describedby="sizing-addon2" data-error-msg="Amount is required" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">Remarks :</label>
                                        <div class="col-sm-6">
                                            <textarea type="text" class="form-control" name="deduction_regular_remarks" placeholder="Remarks" aria-describedby="sizing-addon2" data-error-msg="Remarks is Required" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_save_temp_deduction" type="button" class="btn btn-success">Save</button>
                            <button id="btn_close_temp_deduction" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title"><span id="modal_mode"> </span>Confirm Deletion</h4>
                        </div>

                        <div class="modal-body">
                            <p id="modal-body-message">Are you sure ?</p>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_yes" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
                </div>
<?php echo $_rights; ?>
<script>
$(document).ready(function(){
    var dt; var _txnMode; var _txnModeRate; var _selectedID;
    var _selectedDateCovered; var _selectedYear; var _periodstart; var _periodend; var _selectedIDDepartment="all"; var _selectedIDGroup="all";
    var _selectedemprate; var _selectedEmpget; var _pusheddata; var _selectRowObjtempdeduct; var _selectedIDtempdeduct;

    var getDtr=function(){
                    dt_temporary_deduction=$('#tbl_temporary_deduction').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bStateSave": true,
            "orderFixed": [ 1, 'asc' ],
            "fnStateSave": function (oSettings, oData) {
                localStorage.setItem('DataTables_' + window.location.pathname, JSON.stringify(oData));
            },
            "fnStateLoad": function (oSettings) {
                var data = localStorage.getItem('DataTables_' + window.location.pathname);
                return JSON.parse(data);
            },
            "ajax": {
            "url": "TemporaryDeduction/transaction/gettemporarydeduction",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "pay_period_id": _selectedYear,//id of pay period
                    "ref_department_id": _selectedIDDepartment,
                    "group_id": _selectedIDGroup
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "ecode" },
                { targets:[1],data: "full_name" },
                { targets:[2],data: "deduction_desc" },
                { targets:[3],data: "deduction_type_desc" },
                { targets:[4],data: "deduction_per_pay_amount",
                    render: $.fn.dataTable.render.number( ',', '.', 2 )
                },
                { targets:[5],data: "deduction_regular_remarks" },
                {
                    targets:[6],
                    render: function (data, type, full, meta){

                        return '<center>'+right_tempdeduction_edit+right_tempdeduction_delete+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Employee Dtr"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    $('.numeric').autoNumeric('init');

    var bindEventHandlers=(function(){
        var detailRows = [];
         var detailRows1 = [];

        $('#tbl_employee_list tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );

                row.child( format( row.data() ) ).show();

                if ( idx === -1 ) {
                    detailRows.push( tr.attr('id') );
                }
            }
        } );

        $('#year').change(function() {
            _selectedYear=$(this).val();
            //alert(_selectedYear);
            getpayperiod().done(function(response){
                        var show2select="";
                        if(response.data.length==0){
                            $('#pay_period').html("<option>No Result</option>");
                            $('#period_start').val("");
                            $('#period_end').val("");
                            return;
                        }
                        var jsoncount=response.data.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option value='+response.data[i].pay_period_start+'~'+response.data[i].pay_period_end+'~'+response.data[i].pay_period_id+'>'+response.data[i].pay_period_start+' - '+response.data[i].pay_period_end+'</option>';
                         }
                         $('#pay_period').html(show2select);
                         var temppayperiod = $('#pay_period').val();
                        var payperiod = temppayperiod.split(/~/)
                        $('#period_start').val(payperiod[0]);
                        $('#period_end').val(payperiod[1]);
                        _selectedYear=payperiod[2];
                        $('.periodcoveredtext').text('Period Covered : '+payperiod[0]+' '+payperiod[1]);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                        $('.modal_file_leave').modal('show');
                    });


            });

        $('#pay_period').change(function() {
            _payperiod=$(this).val();

            //alert(_yearperiod);
            var payperiod = _payperiod.split(/~/)
            $('#period_start').val(payperiod[0]);
            $('#period_end').val(payperiod[1]);
            _selectedYear=payperiod[2];
            $('.periodcoveredtext').text('Period Covered : '+payperiod[0]+'-'+payperiod[1]);
            });

        $('#ref_department_id').change(function() {
            _selectedIDDepartment=$(this).val();
            //alert(_selectedIDDepartment);
            });

        $('#group_id').change(function() {
            _selectedIDGroup=$(this).val();
            //alert(_selectedIDGroup);
            });

                //CREATE NEW EMPLOYEEE


        $('#btn_dtr').click(function(){
             _selectedYear=2016;
            var d = new Date();
            var n = d.getFullYear();
             $('#year').val(n);
            //alert(_selectedYear);
            getpayperiod().done(function(response){
                        var show2select="";
                        if(response.data.length==0){
                            $('#pay_period').html("<option>No Result</option>");
                            $('#period_start').val("");
                            $('#period_end').val("");
                            return;
                        }
                        var jsoncount=response.data.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option value='+response.data[i].pay_period_start+'~'+response.data[i].pay_period_end+'~'+response.data[i].pay_period_id+'>'+response.data[i].pay_period_start+' - '+response.data[i].pay_period_end+'</option>';
                         }
                         $('#pay_period').html(show2select);
                         var temppayperiod = $('#pay_period').val();
                        var payperiod = temppayperiod.split(/~/)
                        $('#period_start').val(payperiod[0]);
                        $('#period_end').val(payperiod[1]);
                        _selectedYear=payperiod[2];
                        $('.periodcoveredtext').text('Period Covered : '+payperiod[0]+'-'+payperiod[1]);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                        $('.modal_file_leave').modal('show');
                    });

            $('#modal_filter').modal('toggle');
            $('#payperiodhere').html("<option>aw</option>"); //noresult for option
        });

        $('#btn_select_dtr').click(function(){
            if(validateRequiredFields($('#frm_search_dtr'))){
            showSpinningProgressLoading();
            //_selectedDateCovered = 'Period Covered: Oct 15, 2016 - Oct 30,2016';
            //$('.periodcoveredtext').text(_selectedDateCovered);
            showdtr();
            getDtr();
            $('#modal_filter').modal('toggle');

        }
        });

        $('#employee_wo_dtr').change(function() {
            var tempempid=$(this).val();
            var empidsplit = tempempid.split(/~/)
            _selectedID=empidsplit[0];
            _selectedemprate=empidsplit[2];
            console.log(_selectedemprate);
            //alert(_selectedID);
            getempwodtrgetdept().done(function(response){
                        if(response.data[0]==null || response.data[0].department==null){
                        console.log('walang laman');
                        $('#ref_dept_dtr').val('Not Set');
                        }
                        else{
                            $('#ref_dept_dtr').val(response.data[0].department);
                        }
                        //$('#period_start').val(payperiod[0]);
                        //$('#period_end').val(payperiod[1]);
                        //_selectedYear=payperiod[2];
                        //$('.periodcoveredtext').text(temppayperiod);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                    });


            });

        $('#btn_canceldtr').click(function(){
            hidedtr();


            $('#tbl_temporary_deduction').dataTable().fnDestroy();
            $('#tbl_temporary_deduction').fnClearTable();
        });

        $('#btn_new_temp_deduction').click(function(){
            _txnMode="createtempdeduction"
            $('#transactionlabel').text("New");
            /*$('#employee_id').val("");*/
            $('#employee_id').select2('val','');
            $('#deduction_id').val("");
            clearFields($('#frm_new_tempdeduction'));
            $('#modal_temp_deduction').modal('toggle');
        });

        $('#btn_save_temp_deduction').click(function(){
            if(validateRequiredFields($('#frm_new_tempdeduction'))){
                if(_txnMode=="createtempdeduction"){
                    createTemporaryDeduction().done(function(response){
                    showNotification(response);
                    dt_temporary_deduction.row.add(response.row_added[0]).draw();
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_temp_deduction').modal('toggle');
                    });
                    return;
                }
                if(_txnMode=="edittempdeduction"){
                    updateTemporaryDeduction().done(function(response){
                    showNotification(response);
                    dt_temporary_deduction.row(_selectRowObjtempdeduct).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_temp_deduction').modal('toggle');
                    });
                    return;
                }
            }
        });





        $('#tbl_temporary_deduction tbody').on('click','button[name="temp_deduction_edit"]',function(){
            _txnMode="edittempdeduction";

            $('#modal_temp_deduction').modal('toggle');
            $('#transactionlabel').text("Edit");
            _selectRowObjtempdeduct=$(this).closest('tr');
            var data=dt_temporary_deduction.row(_selectRowObjtempdeduct).data();
            _selectedIDtempdeduct=data.deduction_regular_id;

            $('#employee_id').val(data.employee_id).trigger("change");
            /*$('#employee_id').val(data.employee_id);
*/            $('#deduction_id').val(data.deduction_id);
            //alert(_selectedIDtempdeduct);
           // alert($('input[name="tax_exempt"]').length);
            //$('input[name="tax_exempt"]').val(0);
            //$('input[name="inventory"]').val(data.is_inventory);

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });


        });


        $('#tbl_temporary_deduction tbody').on('click','button[name="temp_deduction_remove"]',function(){
            _selectRowObjtempdeduct=$(this).closest('tr');
            var data=dt_temporary_deduction.row(_selectRowObjtempdeduct).data();
            _selectedIDtempdeduct=data.deduction_regular_id;
            //alert(_selectedIDtempdeduct);
            $('#modal_confirmation').modal('toggle');
        });

        $('#btn_yes').click(function(){
            removeTemporaryDeduction().done(function(response){
                showNotification(response);
                dt_temporary_deduction.row(_selectRowObjtempdeduct).remove().draw();
                $.unblockUI();
            });
        });


    })();

    var createTemporaryDeduction=function(){
        var _data=$('#frm_new_tempdeduction').serializeArray();
        _data.push({name : "pay_period_id" ,value : _selectedYear});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"TemporaryDeduction/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save_temp_deduction'))
        });
    };

    var updateTemporaryDeduction=function(){
        var _data=$('#frm_new_tempdeduction').serializeArray();
        _data.push({name : "deduction_regular_id" ,value : _selectedIDtempdeduct});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"TemporaryDeduction/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save_temp_deduction'))
        });
    };

    var removeTemporaryDeduction=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"TemporaryDeduction/transaction/delete",
            "data":{deduction_regular_id : _selectedIDtempdeduct},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var getpayperiod=function(){
        var _data=$('#').serializeArray();
        _data.push({name : "year" ,value : _selectedYear});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefPayPeriodSetup/transaction/getpayperiod",
            "data":_data,
            "beforeSend": showSpinningProgressLoading()
        });
    };

    var showdtr=function(){
        $('#div_dtr_entry').show();
    };

    var hidedtr=function(){
        $('#div_dtr_entry').hide();
        $('#modal_filter').modal('toggle');
    };

    _employees=$("#employee_id").select2({
        dropdownParent: $("#modal_temp_deduction"),
            placeholder: "Select Employee",
            allowClear: true
        });

    _employees.select2('val', null);

    var validateRequiredFields=function(f){
        var stat=true;

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                if($(this).val()==0){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }

                }else{
                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
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
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Saving Changes...</h4>',
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
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Loading Data...</h4>',
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
        $(f).find('input:first').focus();
    };
    var aw=function(){
        alert('aw');
    }

        /*_selectedYear=2016;*/
        var d = new Date();
        var n = d.getFullYear();
        _selectedYear=n;
        $('#year').val(n);
        getpayperiod().done(function(response){
                        var show2select="";
                        if(response.data.length==0){
                            $('#pay_period').html("<option>No Result</option>");
                            $('#period_start').val("");
                            $('#period_end').val("");
                            return;
                        }
                        var jsoncount=response.data.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option value='+response.data[i].pay_period_start+'~'+response.data[i].pay_period_end+'~'+response.data[i].pay_period_id+'>'+response.data[i].pay_period_start+' - '+response.data[i].pay_period_end+'</option>';
                         }
                         $('#pay_period').html(show2select);
                         var temppayperiod = $('#pay_period').val();
                        var payperiod = temppayperiod.split(/~/)
                        $('#period_start').val(payperiod[0]);
                        $('#period_end').val(payperiod[1]);
                        _selectedYear=payperiod[2];
                        $('.periodcoveredtext').text('Period Covered : '+payperiod[0]+'-'+payperiod[1]);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_filter').modal('toggle');
                    });

       function format ( d ) {
        return '<div class="container-fluid">'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><span class="glyphicon glyphicon-user fa-lg"></span> ' + d.first_name +' ' + d.middle_name + ' ' +d.last_name + '</h3>'+
        '<p>[ ECODE : '+d.ecode+' ] [ ID : '+d.id_number+' ]</p>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '</div>'+ //First Row//
        '<div class="row">'+
        '<div class="col-md-3">'+
        '<center><img style="margin-top:4px;width:150px;height:150px;" src="'+d.image_name+'"></img></center>'+
        '</div>'+
        '<div class="col-md-4"><p class="nomargin"><b>Gender</b> : '+d.gender+'</p>'+
        '<p class="nomargin"><b>Birthdate</b> : '+d.birthdate+'</p>'+
        '<p class="nomargin"><b>Civil Status</b> : '+d.civil_status+'</p>'+
        '<p class="nomargin"><b>Blood Type</b> : '+d.blood_type+'</p>'+
        '<p class="nomargin"><b>Height</b> : '+d.height+'</p>'+
        '<p class="nomargin"><b>Weight</b> : '+d.weight+'</p>'+
        '<p class="nomargin"><b>Religion</b> : '+d.religion+'</p>'+
        '</div>'+
        '<div class="col-md-4">'+
        '<p class="nomargin"><b>SSS</b> : '+d.sss+'</p>'+
        '<p class="nomargin"><b>Phil Health</b> : '+d.phil_health+'</p>'+
        '<p class="nomargin"><b>Pag-Ibig :</b> : '+d.pag_ibig+'</p>'+
        '<p class="nomargin"><b>TIN :</b> : '+d.tin+'</p>'+
        '<p class="nomargin"><b>Account No.</b> : '+d.bank_account+'</p>'+
        '<p class="nomargin"><b>Tax Code</b> : '+d.tax_code+'</p>'+
        '</div>'+
        '</div>'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><h4 class="boldlabel"><span class="glyphicon glyphicon-info-sign fa-lg"></span> Employee Information</h4><hr style="height:1px;background-color:black;"></hr></div>'+
        '<div class="row">'+ //Second Row//
        '<div class="col-md-3">'+
        '<center></center>'+
        '</div>'+
        '<div class="col-md-4"><p class="nomargin"><b>Employee Type</b> : '+d.employment_type+'</p>'+
        '<p class="nomargin"><b>Remarks</b> : '+d.status+'</p>'+
        '<p class="nomargin"><b>Department</b> : '+d.department+'</p>'+
        '<p class="nomargin"><b>Position</b> : '+d.position+'</p>'+
        '<p class="nomargin"><b>Branch</b> : '+d.branch+'</p>'+
        '</div>'+
        '<div class="col-md-4">'+
        '<p class="nomargin"><b>Section</b> : '+d.section+'</p>'+
        '<p class="nomargin"><b>Pay Type</b> : '+d.payment_type+'</p>'+
        '<p class="nomargin"><b>Employment Date</b> : '+d.employment_date+'</p>'+
        '<p class="nomargin"><b>Date Regular</b> : '+d.emp_philhealth+'</p>'+
        '</div>'+
        '</div>'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><h4 class="boldlabel"><span class="glyphicon glyphicon-info-sign fa-lg"></span> Contact Information</h4><hr style="height:1px;background-color:black;"></hr></div>'+
        '<div class="row">'+ //Third Row//
        '<div class="col-md-3">'+
        '<center></center>'+
        '</div>'+
        '<div class="col-md-4"><p class="nomargin"><b>Address 1</b> : '+d.address_one+'</p>'+
        '<p class="nomargin"><b>Address 2</b> : '+d.address_two+'</p>'+
        '<p class="nomargin"><b>Email Address</b> : '+d.email_address+'</p>'+
        '</div>'+
        '<div class="col-md-4"><p class="nomargin"><b>Mobile No.</b> : '+d.cell_number+'</p>'+
        '<p class="nomargin"><b> Phone No.</b> : '+d.telphone_number+'</p>'+
        '</div>'+
        '</div>'+
        '</div>';
    };

;



   /* $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });*/


    // apply input changes, which were done outside the plugin
    //$('input:radio').iCheck('update');

});

</script>
</body>

</html>
