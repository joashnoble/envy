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
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $_def_css_files; ?>

    <!--<link rel="stylesheet" href="assets/plugins/spinner/dist/ladda-themeless.min.css">-->

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

    <!-- twitter typehead
    <script src="assets/plugins/twittertypehead/handlebars.js"></script>
    <script src="assets/plugins/twittertypehead/bloodhound.min.js"></script>
    <script src="assets/plugins/twittertypehead/typeahead.bundle.min.js"></script>
    <script src="assets/plugins/twittertypehead/typeahead.jquery.min.js"></script>
    -->
    <!-- touchspin
    <script type="text/javascript" src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>
    -->
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
        .sorting{
            background-color:#2980b9 !important;
            color:white;
        }
        .sorting_asc{
            background-color:#2980b9 !important;
            color:white;
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
                        <li><a href="ProcessPayroll">Process Payroll</a></li>
                    </ol>

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
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> Select Pay Period (Payroll: DTR Verification List) </h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_search_dtr">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Year : </label>
                                    <select class="form-control" id="year" data-error-msg="This Field is Required!" required>
                                        <?php $minyear=1990; $maxyear=2500;
                                            while($minyear!=$maxyear){
                                                echo '<option value='.$minyear.'>'.$minyear.'</option>';
                                                $minyear++;
                                            }
                                        ?>
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
                                          <label class="boldlabel" style="margin-bottom:0px;">Branch:</label>
                                          <select class="form-control" id="ref_branch_id" name="ref_branch_id" id="sel1">
                                            <option value="all">All Branch</option>
                                           <?php
                                                                foreach($ref_branch as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_branch_id  .'">'.$row->branch.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="select_dtr" type="button" class="btn btn-success">Select</button>
                            <button id="btn_close_dtr" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>


                <div id="modal_dtr_verification_list" class="modal fade"  role="dialog"><!--modal-->
                <div class="modal-dialog modal-lg reports">
                    <div class="modal-content reports-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode">  DTR : Verification List </h4>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid" id="dtr_verification_preview" style="overflow:scroll;width:100%;">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="print_verificationlist" type="button" class="btn btn-success">PRINT</button>
                            <!-- <button id="download_verificationlist" type="button" class="btn btn-success">Download PDF</button> -->
                            <button id="btn_close_dtr" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>
<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _txnModeRate; var _selectedID;
    var _selectedDateCovered; var _selectedYear; var _periodstart; var _periodend; var _selectedIDDepartment="all"; var _selectedIDBranch="all";
    var _selectedemprate; var _selectedEmpget; var _pusheddata; var _selectRowObjtempdeduct; var _selectedIDtempdeduct;
    var _selectRowObjProcess;


    var bindEventHandlers=(function(){
        var detailRows = [];
         var detailRows1 = [];

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

        $('#ref_branch_id').change(function() {
            _selectedIDBranch=$(this).val();
            //alert(_selectedIDBranch);
            });

        $('#select_dtr').click(function(){
            if(validateRequiredFields($('#frm_search_dtr'))){
            // showSpinningProgressLoading();
            var _deptId = $('#ref_department_id').val();
            var _brachId = $('#ref_branch_id').val();
            $.ajax({
            "dataType":"html",
            "type":"POST",
            "url":"DtrReports/dtrreports/dtr-verification-list/"+_selectedYear+"/"+_deptId+"/"+_brachId+"/fullview",
            beforeSend : function(){
                        $('#dtr_verification_preview').html("<center><img src='assets/img/loader/preloaderimg.gif'><h3>Loading...</h3></center>");
                    },
            }).done(function(response){
                $('#dtr_verification_preview').html(response);
            });
            //$('#modal_filter').modal('toggle');
            $('#modal_dtr_verification_list').modal('toggle');


        }
        });




    })();

    var processPayroll=function(){
        var _data = dt_process_payroll.$('input, select').serialize();
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"DailyTimeRecord/transaction/processpayroll",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save_temp_deduction'))
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

    $("#download_verificationlist").click(function(){
        var _deptId = $('#ref_department_id').val();
        var _brachId = $('#ref_branch_id').val();
                window.location = "DtrReports/dtrreports/dtr-verification-list/"+_selectedYear+"/"+_deptId+"/"+_brachId+"/pdf";
            //alert(_selectedID);
        });

    /*$("#print_verificationlist").click(function(){
        var _deptId = $('#ref_department_id').val();
        var _brachId = $('#ref_branch_id').val();
                window.open('DtrReports/dtrreports/dtr-verification-list/'+_selectedYear+'/'+_deptId+'/'+_brachId+'/preview', '_blank');
            //alert(_selectedID);
    });*/

    $('#print_verificationlist').click(function(event){
            /*printing_notif();*/
            var currentURL = window.location.href;
            var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
            output = output+"/assets/css/css_special_files.css";
            $("#dtr_verification_preview").printThis({
                debug: false,
                importCSS: true,
                importStyle: false,
                printContainer: false,
                loadCSS: output,
                formValues:false
            });

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
