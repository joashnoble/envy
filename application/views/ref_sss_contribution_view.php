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
            text-align: right;
            width: 60%;
        }

        .sss_logo {
            width:60px;
            height:35px;
            padding-right:15px;
            margin-bottom:5px;
        }

        #div_product_list h2 {
            padding-top:15px;
        }

        /*#salary_range_from {
            width:250px !important;
        }

        #salary_range_to {
            width:250px !important;
        }

        #monthly_salary_credit {
            width:250px !important;
        }

        #employee {
            width:250px !important;
        }

        #employer {
            width:250px !important;
        }

        #employer_contribution {
            width:250px !important;
        }*/

        .left {
            float:left;
        }

        .right {
            float:left;
            padding-left:70px !important;
        }

        #border-bottom {
            margin:0 !important;
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
                        <li><a href="RefSSS_Contribution">SSS Contribution</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <button class="btn right_sss_create"  id="btn_new" style="width:230px;background-color:#2ecc71;color:white;" title="Create New SSS Contribution" >
                                        <i class="fa fa-file"></i> New SSS Contribution</button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;"><img class="sss_logo" src="assets/img/SSS.png"><b>SOCIAL SECURITY SYSTEM</b></h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_sss_contribution_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" style="background-color:#f66156;color:#FFF;"><center>Range of Compensation</center></th>
                                                    <th colspan="1">&nbsp;</th>
                                                    <th colspan="3" style="background-color:#f66156;color:#FFF;"><center>Social Security</center></th>
                                                    <th colspan="1">&nbsp;</th>
                                                    <th colspan="2" style="background-color:#f66156;color:#FFF;"><center>Mandatory Provident Fund</center></th>
                                                    <th colspan="2">&nbsp;</th>
                                                </tr>
                                                <tr>
                                                    <th style="background-color:#7c8618;color:#FFF;">Salary Range From</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">Salary Range To</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">Monthly Salary Credit</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">Employer</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">Employee</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">Sub Total</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">EC</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">ER</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">EE</th>
                                                    <th style="background-color:#7c8618;color:#FFF;">Total</th>
                                                    <th style="background-color:#7c8618;color:#FFF;"><center>Action</center></th>
                                                    <th class="hidden"></th>
                                                 </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                <div class="panel-footer"></div>
                            </div> <!--panel default -->

                        </div> <!--rates and duties list -->
                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->

            <div id="modal_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-sm">
                    <div class="modal-content"><!---content--->
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
                    </div><!---content---->
                </div>
                </div>
            </div><!---modal-->
            <div id="modal_create_sss_contribution" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>SSS Contribution : New</h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_sss_contribution">
                                <div class="container" style="width:100% !important;">
                                    <div class="form-group">
                                        <label class="boldlabel"><i class="fa fa-info-circle"></i> RANGE OF COMPENSATION</label><br>
                                        <label class="col-sm-5 inlinecustomlabel" for="inputEmail1"><i class="red">*</i> Salary Range From :</label>
                                        <div class="col-sm-7">
                                            <input class="form-control numeric" id="salary_range_from" name="salary_range_from" placeholder="" data-error-msg="Salary Range From Field is Required!" required>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-bottom:15px !important;">
                                      <label class="col-sm-5 inlinecustomlabel" for="inputPassword1"><i class="red">*</i> Salary Range To :</label>
                                        <div class="col-sm-7">
                                            <input class="form-control numeric" id="salary_range_to" name="salary_range_to" placeholder="" data-error-msg="Salary Range To Field is Required!" required>
                                        </div>
                                    </div>
                                    <hr style="border-bottom:1px solid;">
                                    <div class="form-group" style="padding-bottom:15px !important;">
                                      <label class="col-sm-5 inlinecustomlabel" for="inputPassword1"><i class="red">*</i> Monthly Salary Credit :</label>
                                        <div class="col-sm-7">
                                            <input class="form-control numeric" id="monthly_salary_credit" name="monthly_salary_credit" placeholder="" data-error-msg="Monthly Salary Credit Field is Required!" required>
                                        </div>
                                    </div>
                                    <hr style="border-bottom:1px solid;">
                                    <div class="form-group">
                                    <label class="boldlabel"><i class="fa fa-info-circle"></i> REGULAR SOCIAL SECURITY</label><br>
                                      <label class="col-sm-5 inlinecustomlabel" for="inputPassword1"><i class="red">*</i> Employer :</label>
                                        <div class="col-sm-7">
                                            <input class="form-control numeric" id="employer" name="employer" placeholder="" data-error-msg="Employer Field is Required!" required>
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-bottom:15px !important;">
                                      <label class="col-sm-5 inlinecustomlabel" for="inputPassword1"><i class="red">*</i> Employee :</label>
                                        <div class="col-sm-7">
                                           <input class="form-control numeric" id="employee" name="employee" placeholder="" data-error-msg="Employee Field is Required!" required>
                                        </div>
                                    </div>

                                    <hr style="border-bottom:1px solid;">
                                    <div class="form-group" style="padding-bottom:15px !important;">
                                    <label class="boldlabel"><i class="fa fa-info-circle"></i> EMPLOYEES' COMPENSATION</label><br>
                                      <label class="col-sm-5 inlinecustomlabel" for="inputPassword1"><i class="red">*</i> Employer's Contribution  :</label>
                                        <div class="col-sm-7">
                                            <input class="form-control numeric" id="employer_contribution" name="employer_contribution" placeholder="" data-error-msg="Employer's Contribution Field is Required!" required>
                                        </div>
                                    </div>


                                    <hr style="border-bottom:1px solid;">
                                    <div class="form-group">
                                    <label class="boldlabel"><i class="fa fa-info-circle"></i> MANDATORY PROVIDENT FUND</label><br>
                                      <label class="col-sm-5 inlinecustomlabel" for="inputPassword1"><i class="red">*</i> Employer :</label>
                                        <div class="col-sm-7">
                                            <input class="form-control numeric" id="er_provident_fund" name="er_provident_fund" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding-bottom:15px !important;">
                                      <label class="col-sm-5 inlinecustomlabel" for="inputPassword1"><i class="red">*</i> Employee :</label>
                                        <div class="col-sm-7">
                                           <input class="form-control numeric" id="ee_provident_fund" name="ee_provident_fund" placeholder="" data-error-msg="Employee Field is Required!" required>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_create" type="button" class="btn" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancel" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content-->
                </div>
            </div><!---modal-->
<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj;

    var initializeControls=function(){
        dt=$('#tbl_sss_contribution_list').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "RefSSS_Contribution/transaction/list",
            "order": [[ 11, 'asc' ]],
            "columns": [
                {
                    className: "text-right",
                    targets:[0],data: "salary_range_from",
                    render: function(data){
                        if(data == "1.00") {
                            return "Below";
                        } else if (data == "999999.00") {
                            return "and above";
                        }else{
                            return accounting.formatNumber(data,2);
                        }
                    }
                },
                {
                    className: "text-right",
                    targets:[1],data: "salary_range_to",
                    render: function(data){
                        if(data == "0.00") {
                            return "and below";
                        } else if (data == "999999.00") {
                            return "and above";
                        }else{
                            return accounting.formatNumber(data,2);
                        }
                    }
                },
                {
                    className: "text-right",
                    targets:[2],data: "monthly_salary_credit",
                    render: function(data){
                        return accounting.formatNumber(data,2);
                    }
                },
                {
                    className: "text-right",
                    targets:[3],data: "employer",
                    render: function(data){
                        return accounting.formatNumber(data,2);
                    }
                },
                {
                    className: "text-right",
                    targets:[4],data: "employee",
                    render: function(data){
                        return accounting.formatNumber(data,2);
                    }
                },
                {
                    className: "text-right",
                    targets:[5],data: "sub_total",
                    render: function(data){
                        return accounting.formatNumber(data,2);
                    }
                },
                {
                    className: "text-right",
                    targets:[6],data: "employer_contribution",
                    render: function(data){
                        return accounting.formatNumber(data,2);
                    }
                },
                {
                    className: "text-right",
                    targets:[7],data: "er_provident_fund",
                    render: function(data){
                        return accounting.formatNumber(data,2);
                    }
                },
                {
                    className: "text-right",
                    targets:[8],data: "ee_provident_fund",
                    render: function(data){
                        return accounting.formatNumber(data,2);
                    }
                },
                {
                    className: "text-right",
                    targets:[9],data: "total",
                    render: function(data){
                        return accounting.formatNumber(data,2);
                    }
                },
                {
                    targets:[10],
                    render: function (data, type, full, meta){

                        return '<center>'+right_sss_edit+right_sss_delete+'</center>';
                    }
                },
                { visible:false, targets:[11],data: "ref_sss_contribution_id"}

            ],
            language: {
                         searchPlaceholder: "Search SSS Contribution"
                     },
            "rowCallback":function( row, data, index ){

            }
        });

        $('.numeric').autoNumeric('init');
    }();

    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_sss_contribution_list tbody').on( 'click', 'tr td.details-control', function () {
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


        $('#tbl_sss_contribution_list tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            $('#modal_create_sss_contribution').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.ref_sss_contribution_id;

            //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

           // alert($('input[name="tax_exempt"]').length);
            //$('input[name="tax_exempt"]').val(0);
            //$('input[name="inventory"]').val(data.is_inventory);

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        if(_elem.hasClass('numeric')){
                            _elem.val(accounting.formatNumber(value,2));
                        }else{
                            _elem.val(value);
                        }
                    }
                });
            });

            hideRatesduties();
            hideemployeeList();
            showemployeeFields();

        });

        $('#tbl_sss_contribution_list tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.ref_sss_contribution_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            remove_SSS_Contribution().done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).remove().draw();
                $.unblockUI();
            });
        });

        $('input[name="file_upload[]"]').change(function(event){
            var _files=event.target.files;

            $('#div_img_product').hide();
            $('#div_img_loader').show();

            var data=new FormData();
            $.each(_files,function(key,value){
                data.append(key,value);
            });

            console.log(_files);

            $.ajax({
                url : 'Products/transaction/upload',
                type : "POST",
                data : data,
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                success : function(response){
                    $('#div_img_loader').hide();
                    $('#div_img_product').show();
                }
            });
        });

        $('#btn_new').click(function(){
            _txnMode="new";
            $('#modal_create_sss_contribution').modal('show');
            clearFields($('#frm_sss_contribution'));
        });

        $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_sss_contribution'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    create_SSS_Contribution().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_sss_contribution'))
                    }).always(function(){
                        $('#modal_create_sss_contribution').modal('toggle');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    update_SSS_Contribution().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $('#modal_create_sss_contribution').modal('toggle');
                        $.unblockUI();
                    });
                    return;
                }
            }
            else{}
        });



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

    var create_SSS_Contribution=function(){
        var _data=$('#frm_sss_contribution').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefSSS_Contribution/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var update_SSS_Contribution=function(){
        var _data=$('#frm_sss_contribution').serializeArray();

        console.log(_data);
        _data.push({name : "ref_sss_contribution_id" ,value : _selectedID});
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefSSS_Contribution/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var remove_SSS_Contribution=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefSSS_Contribution/transaction/delete",
            "data":{ref_sss_contribution_id : _selectedID},
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

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $(f).find('input:first').focus();
    };


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
