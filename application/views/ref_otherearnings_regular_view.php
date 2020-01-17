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

        .numeric{
            text-align: left;
            width:100% !important;
        }

        .odd{
            background-color:#eeeeee !important;
        }

        .dataTables_filter input {
        	width:210px !important;
        }

        #is_taxable {
        	width:25px !important;
        	height:25px !important;
        	cursor:pointer;
        }

        #taxCheck {
        	color:green;
        	font-size:20px;
        	font-weight:bold;
        }

    </style>

<script type="text/javascript">
    $(window).load(function(){
        setTimeout(function() {
            $('#loading').fadeOut( 400, "linear" );
        }, 300);
    });
</script>
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
                        <li><a href="RefOtherEarningRegular">Other Earnings Regular</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <button class="btn right_otherregearnings_create"  id="btn_new" style="width:278px;background-color:#2ecc71;color:white;" title="Create New Other Earnings Regular" >
                                        <i class="fa fa-file"></i> New Other Earnings Regular</button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">Other Earnings Regular</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_otherearnings_regular_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ECode</th>
                                                    <th>Full Name</th>
                                                    <th>Description</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Earnings Cycle</th>
                                                    <th>Is Taxable ?</th>
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
            <div id="modal_create_OtherEarnings_Regular" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Other Earnings Regular : New</h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_otherearnings_regular">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Employee :</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="employee_id" name="employee_id" data-error-msg="Employee is Required!" required>
                                            <option value="0">[ Select Employee ]</option>
                                            <?php

                                                foreach($employee_list as $row) {

                                                    echo '<option value="'.$row->employee_id.'">'.$row->ecode. '&nbsp;&nbsp;' .$row->full_name. '</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Earning Description :</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="earnings_id" name="earnings_id" data-error-msg="Earnings Type is Required!" required>
                                            <option value="0">[ Select Earnings ]</option>
                                            <?php
                                                foreach($refotherearnings as $row)
                                                {
                                                    echo '<option value="'. $row->earnings_id  .'">'. $row->earnings_desc .'</option>';
                                                }
                                            ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Amount :</label>
                                        <div class="col-sm-8">
                                            <input class="form-control numeric" id="oe_regular_amount" name="oe_regular_amount" placeholder="Amount" data-error-msg="Amount is Required!" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Earnings Cycle :</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="oe_cycle" name="oe_cycle" data-error-msg="Earnings Cycle is Required!" required>
                                                <option value="0">[ Select Earnings Cycle ]</option>
                                                <option value="1">1st Week</option>
                                                <option value="2">2nd Week</option>
                                                <option value="3">3rd Week</option>
                                                <option value="4">4th Week</option>
                                                <option value="5">5th Week</option>
                                                <option value="6">1st Period</option>
                                                <option value="7">2nd Period</option>
                                                <option value="8">Whole Month</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Is Taxable?</label>
                                        <div class="col-sm-8">
                                            <input type="checkbox" class="formn-control" id="is_taxable" name="is_taxable">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Remarks</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="oe_regular_remarks" name="oe_regular_remarks" placeholder="Remarks" ></textarea>
                                        </div>
                                </div>
                              </div>
                            <!-- </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Balance :</label>
                                    <input class="form-control numeric" id="balance" name="balance" placeholder="Balance">
                                </div>
                              </div>
                            </div><br> -->
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_create" type="button" class="btn" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancel" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content---->
                </div>
            </div><!---modal-->
<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _istaxable=0;

    var initializeControls=function(){
        dt=$('#tbl_otherearnings_regular_list').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bStateSave": true,
            "fnStateSave": function (oSettings, oData) {
                localStorage.setItem('DataTables_' + window.location.pathname, JSON.stringify(oData));
            },
            "fnStateLoad": function (oSettings) {
                var data = localStorage.getItem('DataTables_' + window.location.pathname);
                return JSON.parse(data);
            },
            "ajax" : "RefOtherEarningRegular/transaction/list",
            "columns": [

                { targets:[1],data: "ecode" },
                { targets:[2],data: "full_name" },
                { targets:[3],data: "earnings_desc" },
                { targets:[4],data: "earnings_type_desc" },
                { targets:[5],data: "oe_regular_amount" },
                { targets:[6],data: "oe_cycle",
                    render: function (data, type, full, meta){
                        //alert(data);

                        if(data == 1){
                            return "<center>1st Week</span></center>";
                        }
                        if(data == 2){
                            return "<center>2nd Week</span></center>";
                        }
                        if(data == 3){
                            return "<center>3rd Week</span></center>";
                        }
                        if(data == 4){
                            return "<center>4th Week</center>";
                        }
                        if(data == 5){
                            return "<center>5th Week</center>";
                        }
                        if(data == 6){
                            return "<center>1st Period</center>";
                        }
                        if(data == 7){
                            return "<center>2nd Period</center>";
                        }
                        if(data == 8){
                            return "<center>Whole Month</center>";
                        }
                        if(data == 9){
                            return "<center>1st and 2nd Period</center>";
                        }
                        else{
                            return "Not Set";
                        }
                    }
                },

                { targets:[7],data: getCheck },
                { targets:[8],data: "oe_regular_remarks" },
                {
                    targets:[9],
                    render: function (data, type, full, meta){

                        return '<center>'+right_otherregearnings_edit+right_otherregearnings_delete+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Other Earnings Regular"
                     },

            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(5).attr({
                    "align": "center"
                });
            }

        });

        $('.numeric').autoNumeric('init');
    }();


    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_otherearnings_regular_list tbody').on( 'click', 'tr td.details-control', function () {
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


        $('#tbl_otherearnings_regular_list tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            $('#modal_create_OtherEarnings_Regular').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.oe_regular_id;
            $('#oe_regular_id').val(data.oe_regular_id);
            $('#employee_id').val(data.employee_id).trigger("change");
            /*$('#employee_id').val(data.employee_id);*/
            $('#earnings_id').val(data.earnings_id);
            $('#pay_period_id').val(data.pay_period_id);
            $('#oe_regular_amount').val(data.oe_regular_amount);
            $('#oe_cycle').val(data.oe_cycle);
            $('#is_taxable').val(data.is_taxable);
            $('#oe_regular_remarks').val(data.oe_regular_remarks);

            if(data.is_taxable==1){
                $('#is_taxable').prop('checked', true);
                _istaxable = 1;
            }

            else{
                $('#is_taxable').prop('checked', false);
                _istaxable = 0;
            }

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

            hideRatesduties();
            hideemployeeList();
            showemployeeFields();

        });

        $('#tbl_otherearnings_regular_list tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.oe_regular_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            remove_OtherEarnings_Regular().done(function(response){
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
            $('#employee_id').select2('val','');
            $('#modal_create_OtherEarnings_Regular').modal('show');
            clearFields($('#frm_otherearnings_regular'));
            $('#oe_regular_id').val(0);
        });

        _employees=$("#employee_id").select2({
        dropdownParent: $("#modal_create_OtherEarnings_Regular"),
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

        $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_otherearnings_regular'))){
                if(_txnMode==="new"){
                    //alert("aw");

                    create_OtherEarnings_Regular().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_otherearnings_regular'));
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_OtherEarnings_Regular').modal('toggle');
                    });
                    return;
                }

                else if(_txnMode==="edit"){
                    //alert("update");
                    update_OtherEarnings_Regular().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                       //clearFields($('#frm_otherearnings_regular'))
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_OtherEarnings_Regular').modal('toggle');
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

    var create_OtherEarnings_Regular=function(){
        var _data = $('#frm_otherearnings_regular').serializeArray();
        _data.push({name : "is_taxable" ,value : _istaxable});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefOtherEarningRegular/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var update_OtherEarnings_Regular=function(){
        var _data=$('#frm_otherearnings_regular').serializeArray();
        _data.push({name : "is_taxable" ,value : _istaxable});

        console.log(_data);
        _data.push({name : "oe_regular_id" ,value : _selectedID});
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefOtherEarningRegular/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var remove_OtherEarnings_Regular=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefOtherEarningRegular/transaction/delete",
            "data":{oe_regular_id : _selectedID},
            "beforeSend": showSpinningProgress($('#'))
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
        $('select',f).val(0);
        $('#is_taxable',f).prop('checked', false);
        $(f).find('input:first').focus();
    };

    function getFullName(data, type, dataToSet) {
        return data.emp_fname + "&nbsp;" + data.emp_mname + "&nbsp;" + data.emp_lname;
    }

    function getCheck(data, type, dataToSet) {
        if(data.is_taxable == 1){
                            return "<center><span style='color:#37d077' class='glyphicon glyphicon-ok'></span></center>";
                        }

                        else{
                            return "<center><span style='color:#e74c3c' class='glyphicon glyphicon-remove'></span></center>";
                        }
    }

    $(document).ready(function(){
        $('#deduction_total_amount').keyup(function(){
          $("#balance").val($("#deduction_total_amount").val()).change();
        });
    });

    $('#frm_otherearnings_regular').on('click','input[id="is_taxable"]',function(){
        //$('.single-checkbox').attr('checked', false);
        if(_istaxable==0) {
            this.checked = true;
            _istaxable = 1;
            //alert(_isactive);
        } else {
            this.checked = false;
            _istaxable = 0;
            //alert(_isactive);
        }
    });



});

</script>
</body>

</html>
