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
    <link href="assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
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
                        <li><a href="Attrition">Attrition</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_2316_list">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                     <center><h2 style="color:white;font-weight:300;">Attrition</h2></center>
                                </div>
                                <div class="panel-body table-responsive">
                                    <form id="frm_attrition">
                                        <div>
                                            <div class="row" style="margin: 15px;">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;" for="inputEmail1">Employee Position :</label>
                                                        <select class="form-control" name="position" id="position_filter">
                                                            <option value="all">All</option>
                                                            <?php foreach($position as $row){?>
                                                                <option value="<?php echo $row->ref_position_id; ?>">
                                                                    <?php echo $row->position; ?>
                                                                </option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;" for="inputEmail1">From Date Filter :</label>
                                                        <input type="text" class="date-picker form-control" name="from_date_filter" id="from_date_filter" data-error-msg="From Date Filter is required!" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label style="font-weight: bold;" for="inputEmail1">To Date Filter :</label>
                                                        <input type="text" class="date-picker form-control" name="to_date_filter" id="to_date_filter" data-error-msg="To Date Filter is required!" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    
                                                        <button type="button" class="btn col-sm-12 form-control" id="print_attrition" style="background-color:#27ae60; color:white;width: 100px;margin-top: 30px;"><i class="fa fa-print"></i> PRINT</button>

                                                        <button type="button" class="btn btn-primary col-sm-12 form-control" id="export_attrition" style="color:white;margin-left: 10px;margin-top: 30px;width: auto;"> <i class="fa fa-file-excel-o"></i> EXPORT EXCEL</button>

                                                        <button type="button" class="btn btn-info col-sm-12 form-control" id="email_attrition" style="color:white;margin-left: 10px;margin-top: 30px; width: 100px;"><i class="fa fa-envelope"></i> EMAIL</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="p_preview" style="overflow: scroll;">
                                        </div>
                                    </from>
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
    var _position;

    _position=$("#position_filter").select2({
        placeholder: "[ Select Position ]",
        allowClear: false
    });

    _position.select2('val', '');

    var fullDate = new Date()
    var currentYear = fullDate.getFullYear();

    $('#from_date_filter').val('01/01/'+currentYear);
    $('#to_date_filter').val(get_current_date());

    filter_position = $('#position_filter').val();
    filter_from_date = $.datepicker.formatDate('yy-mm-d', new Date($('#from_date_filter').val()));
    filter_to_date = $.datepicker.formatDate('yy-mm-d', new Date($('#to_date_filter').val()));

    $.ajax({
        "dataType":"html",
        "type":"POST",
        "url":"Hris_Reports/reports/attrition/"+filter_from_date+"/"+filter_to_date+"/"+filter_position,
        beforeSend : function(){
                    $('#p_preview').html("<center><img src='assets/img/loader/preloaderimg.gif'><h3>Loading...</h3></center>");
                },
            }).done(function(response){
                $('#p_preview').html(response);
            });

    $("#from_date_filter").change(function(){
        process_attrition();
    });

    $("#to_date_filter").change(function(){
        process_attrition();
    });

    $("#position_filter").change(function(){
        process_attrition();
    });
    

    function process_attrition(){
        filter_position = $('#position_filter').val();
        filter_from_date = $.datepicker.formatDate('yy-mm-dd', new Date($('#from_date_filter').val()));
        filter_to_date = $.datepicker.formatDate('yy-mm-dd', new Date($('#to_date_filter').val()));

                $.ajax({
                "dataType":"html",
                "type":"POST",
                "url":"Hris_Reports/reports/attrition/"+filter_from_date+"/"+filter_to_date+"/"+filter_position,
                beforeSend : showSpinningProgressLoading(),
                    }).done(function(response){
                        $.unblockUI();
                        $('#p_preview').html(response);
                    });
    };

    $('#print_attrition').click(function(event){
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

    $('#export_attrition').on('click', function() {
        filter_position = $('#position_filter').val();
        filter_from_date = $.datepicker.formatDate('yy-mm-dd', new Date($('#from_date_filter').val()));
        filter_to_date = $.datepicker.formatDate('yy-mm-dd', new Date($('#to_date_filter').val()));
        window.open("Hris_Reports/reports/export-attrition/"+filter_from_date+"/"+filter_to_date+"/"+filter_position,"_self");

    });

    $('#email_attrition').on('click', function() {
        filter_position = $('#position_filter').val();
        filter_from_date = $.datepicker.formatDate('yy-mm-dd', new Date($('#from_date_filter').val()));
        filter_to_date = $.datepicker.formatDate('yy-mm-dd', new Date($('#to_date_filter').val()));
        showNotification({title:"Sending!",stat:"info",msg:"Please wait for a few seconds."});

        var btn=$(this);
        $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Hris_Reports/reports/email_attrition/"+filter_from_date+"/"+filter_to_date+"/"+filter_position,
            "beforeSend": showSpinningProgress(btn)
        }).done(function(response){
            showNotification(response);
            showSpinningProgress(btn);
        });
    });

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

    function get_current_date(){
        var fullDate = new Date()
        //Thu May 19 2011 17:25:38 GMT+1000 {}
         
        //convert month to 2 digits
        var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
         
        var currentDate = twoDigitMonth + "/" + fullDate.getDate() + "/" + fullDate.getFullYear();
        return currentDate;
    };


    var showSpinningProgress=function(e){
        $(e).toggleClass('disabled');
        $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
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
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true

    });
});

</script>
</body>

</html>
