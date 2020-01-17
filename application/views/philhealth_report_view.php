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
    <style>
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
                        <li><a href="PHILHEALTHReport">PHILHEALTH Report</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_2316_list">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                     <center><h2 style="color:white;font-weight:300;">PHILHEALTH Report </h2></center>
                                </div>
                                <div class="panel-body table-responsive" style="padding-top:10px; margin-top: 10px;">
                                    <div style="margin-left: 20px;">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label  style="float:left;margin-top:5px;margin-left: 20px;font-weight: bold;" for="inputEmail1">Pay Period Year :</label>
                                            <select class="form-control" style="margin-left: 20px;" name="payperiod_filter" id="payperiod_filter" data-error-msg="Pay Period Filter is required" required>
                                              <?php $minyear=2016; $maxyear=2050;
                                                while($minyear!=$maxyear){
                                                    echo '<option value='.$minyear.'>'.$minyear.'</option>';
                                                    $minyear++;
                                                }
                                              ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label  style="float:left;margin-top:5px;margin-left: 20px;font-weight: bold;" for="inputEmail1">Month Filter :</label>
                                            <select class="form-control" style="margin-left: 20px;" name="month_filter" id="month_filter" data-error-msg="Month Filter is required" required>
                                                <option value="all">All</option>
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
                                        <div class="col-md-3" style="margin-left: 20px;">
                                            <label  style="float:left;margin-top:5px;font-weight: bold;" for="inputEmail1">Branch Filter:</label>
                                            <select class="form-control"  name="branch_filter_list" id="branch_filter_list" data-error-msg="Branch Filter is required" required>
                                            <option value="all">All</option>
                                            <?php
                                                foreach($branch as $branch){ ?>
                                                    <option value="<?php echo $branch->ref_branch_id; ?>">
                                                        <?php echo $branch->branch; ?>
                                                    </option>
                                                       <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                   <div class="row" style="margin-top: 20px;">
                                    <div class="col-md-3">
                                        <button type="button" class="btn col-sm-12 form-control" id="print_philhealth_list" style="background-color:#27ae60; color:white;margin-left: 20px; width: 200px;">PRINT</button>
                                    </div>
                                </div>
                                    <hr>
                                    <div id="p_preview" style="overflow: scroll;">
                                    </div>
                                </div>

                                <div class="panel-footer"></div>
                            </div> <!--panel default -->
                        </div>

                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->

<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var _branch;
    var _payperiod;
    var _month;
    var d = new Date();
    
    _branch=$("#branch_filter_list").select2({
        /*dropdownParent: $("#modal_create_schedule"),*/
        placeholder: "Select Branch",
        allowClear: true
    });

    _branch.select2('val', '');

    _payperiod=$("#payperiod_filter").select2({
        /*dropdownParent: $("#modal_create_schedule"),*/
        placeholder: "Select Period",
        allowClear: true
    });

    _payperiod.select2('val', '');
    $('#payperiod_filter').val(d.getFullYear()).trigger("change")

    _month=$("#month_filter").select2({
        /*dropdownParent: $("#modal_create_schedule"),*/
        placeholder: "Select Month",
        allowClear: true
    });

    _month.select2('val', '');

    filter_pay_period = $('#payperiod_filter').val();
    filter_branch = $('#branch_filter_list').val();
    filter_month = $('#month_filter').val();

    $.ajax({
        "dataType":"html",
        "type":"POST",
        "url":"Hris_Reports/reports/philhealth-list/"+filter_branch+"/"+filter_month+"/"+filter_pay_period+"",
        beforeSend : function(){
                    $('#p_preview').html("<center><img src='assets/img/loader/preloaderimg.gif'><h3>Loading...</h3></center>");
                },
            }).done(function(response){
                $('#p_preview').html(response);
            });

    $("#branch_filter_list").change(function(){
        filter_pay_period = $('#payperiod_filter').val();
        filter_branch = $('#branch_filter_list').val();
        filter_month = $('#month_filter').val();
            $.ajax({
            "dataType":"html",
            "type":"POST",
            "url":"Hris_Reports/reports/philhealth-list/"+filter_branch+"/"+filter_month+"/"+filter_pay_period+"",
            beforeSend : showSpinningProgressLoading(),
                }).done(function(response){
                    $.unblockUI();
                    $('#p_preview').html(response);
                });
    });

    $("#payperiod_filter").change(function(){
        filter_pay_period = $('#payperiod_filter').val();
        filter_branch = $('#branch_filter_list').val();
        filter_month = $('#month_filter').val();
            $.ajax({
            "dataType":"html",
            "type":"POST",
            "url":"Hris_Reports/reports/philhealth-list/"+filter_branch+"/"+filter_month+"/"+filter_pay_period+"",
            beforeSend : showSpinningProgressLoading(),
                }).done(function(response){
                    $.unblockUI();
                    $('#p_preview').html(response);
                });
    });

        $("#month_filter").change(function(){
        filter_pay_period = $('#payperiod_filter').val();
        filter_branch = $('#branch_filter_list').val();
        filter_month = $('#month_filter').val();
            $.ajax({
            "dataType":"html",
            "type":"POST",
            "url":"Hris_Reports/reports/philhealth-list/"+filter_branch+"/"+filter_month+"/"+filter_pay_period+"",
            beforeSend : showSpinningProgressLoading(),
                }).done(function(response){
                    $.unblockUI();
                    $('#p_preview').html(response);
                });
    });

    $('#print_philhealth_list').click(function(event){
            showinitializeprint();
            var currentURL = window.location.href;
            var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
            output = output+"/assets/css/css_special_files.css";
            $("#p_preview").printThis({
                debug: false,
                importCSS: true,
                importStyle: false,
                printContainer: false,
                printDelay: 1000,
                loadCSS: output,
                formValues:true
            });
            setTimeout(function() {
                 $.unblockUI();
            }, 1000);
    });


    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
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

    var showinitializeprint=function(e){
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Initializing Printing...</h4>',
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
        $("input:checkbox").prop('checked',false);
    };

    $('.date-picker').datepicker({
      format: "yyyy",
      startView: "year",
      minViewMode: "year",
      autoclose: true
    });

});

</script>
</body>

</html>
