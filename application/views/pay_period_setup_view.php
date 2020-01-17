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
                        <li><a href="RefPayPeriodSetup">Pay Period Setup</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <button class="btn right_payperiod_create"  id="btn_new" style="width:220px;background-color:#2ecc71;color:white;" title="Create New Position" >
                                        <i class="fa fa-file"></i> New Pay Period Setup</button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">Pay Period Setup</h2></center><br>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_payperiod_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Period Start</th>
                                                    <th>Period End</th>
                                                    <th>Period</th>
                                                    <th>Applicable Month</th>
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
                    <div class="modal-content"><!--content-->
                        <div class="modal-header">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title"><span id="modal_mode"> </span>Confirm Deletion <transaction class="transaction_type"></transaction></h4>
                        </div>

                        <div class="modal-body">
                            <p id="modal-body-message">Are you sure ?</p>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_yes" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div><!--content-->
                </div>
                </div>
            </div><!---modal-->
            <div id="modal_create_payperiod" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Pay Period Setup</h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_payperiod">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Period Start :</label>
                                    <input type="text" name="pay_period_start" class="date-picker form-control" value="" placeholder="Period Start" data-error-msg="Date Start is required!" required>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Period End :</label>
                                    <input type="text" name="pay_period_end" class="date-picker form-control" value="" placeholder="Period End" data-error-msg="Date End is required!" required>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Period :</label>
                                    <select class="form-control" id="pay_period_sequence" name="pay_period_sequence" data-error-msg="Pay Period is Required!" required>
                                        <option value="0">[ Select Deduction Cycle ]</option>
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
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Applicable Month :</label>
                                    <select class="form-control" id="month_id" name="month_id" data-error-msg="Applicable Month is required!" required>
	                                      <option>Select Month...</option>
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
                            </div><br>
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
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _isactive=0;

    var initializeControls=function(){
        dt=$('#tbl_payperiod_list').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bStateSave": true,
            "fnStateSave": function (oSettings, oData) {
                localStorage.setItem('DataTables_' + window.location.pathname, JSON.stringify(oData));
            },
            "fnStateLoad": function (oSettings) {
                var data = localStorage.getItem('DataTables_' + window.location.pathname);
                return JSON.parse(data);
            },
            "ajax" : "RefPayPeriodSetup/transaction/list",
            aaSorting: [[0, 'desc']],
            "columns": [
                { targets:[1],data: "pay_period_start" },
                { targets:[2],data: "pay_period_end" },
                { targets:[3],data: "pay_period_sequence",
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
                            return "<center>4th Week</span></center>";
                        }
                        if(data == 5){
                            return "<center>5th Week</span></center>";
                        }
                        if(data == 6){
                            return "<center>1st Period</span></center>";
                        }
                        if(data == 7){
                            return "<center>2nd Period</span></center>";
                        }
                        if(data == 8){
                            return "<center>WHOLE MONTH</span></center>";
                        }

                        else{
                            return "Not Set";
                        }
                    }
                },
                { targets:[4],data: "month_id",
                    render: function (data, type, full, meta){
                        //alert(data);

                        if(data == 1){
                            return "January";
                        }

                        else if(data == 2){
                            return "February";
                        }

                        else if(data == 3){
                            return "March";
                        }

                        else if(data == 4){
                            return "April";
                        }

                        else if(data == 5){
                            return "May";
                        }

                        else if(data == 6){
                            return "June";
                        }

                        else if(data == 7){
                            return "July";
                        }

                        else if(data == 8){
                            return "August";
                        }

                        else if(data == 9){
                            return "September";
                        }

                        else if(data == 10){
                            return "October";
                        }

                        else if(data == 11){
                            return "November";
                        }

                        else if(data == 12){
                            return "December";
                        }
                    }
                },
                {
                    targets:[5],
                    render: function (data, type, full, meta){

                        return '<center>'+right_payperiod_edit+right_payperiod_delete+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Pay Period"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(5).attr({
                    "align": "right"
                });
            }
        });






        $('.numeric').autoNumeric('init');


    }();


    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_payperiod_list tbody').on( 'click', 'tr td.details-control', function () {
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


        $('#tbl_payperiod_list tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            $('#modal_create_payperiod').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.pay_period_id;
            $('.transaction_type').text('Edit');
            $('#month_id').val(data.month_id);
            $('#pay_period_sequence').val(data.pay_period_sequence);

            //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

           // alert($('input[name="tax_exempt"]').length);
            //$('input[name="tax_exempt"]').val(0);
            //$('input[name="inventory"]').val(data.is_inventory);

            $('date,input,textarea,checkbox').each(function(){
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

        $('#tbl_payperiod_list tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.pay_period_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            removePayPeriod().done(function(response){
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

        $('#frm_payperiod').on('click','input[id="active_year"]',function(){
            //$('.single-checkbox').attr('checked', false);
            if(_isactive==0){
                this.checked = true;
                _isactive = 1;
                //alert(_isactive);
            }

            else{
                this.checked = false;
                _isactive = 0;
                //alert(_isactive);
            }

        });

        $('#btn_new').click(function(){
            _txnMode="new";
            $('.transaction_type').text('New');
            $('#modal_create_payperiod').modal('show');
            clearFields($('#frm_payperiod'));
            $('#active_year').attr('checked', false);
        });

        $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_payperiod'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createPayPeriod().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_payperiod'))
                    }).always(function(){
                        $('#modal_create_payperiod').modal('toggle');
                        $.unblockUI();
                    });

                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updatePayPeriod().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $('#modal_create_payperiod').modal('toggle');
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

    var createPayPeriod=function(){
        var _data=$('#frm_payperiod').serializeArray();
        _data.push({name : "active_year" ,value : _isactive});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefPayPeriodSetup/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var updatePayPeriod=function(){
        var _data=$('#frm_payperiod').serializeArray();
        _data.push({name : "active_year" ,value : _isactive});

        console.log(_data);
        _data.push({name : "pay_period_id" ,value : _selectedID});
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefPayPeriodSetup/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removePayPeriod=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefPayPeriodSetup/transaction/delete",
            "data":{pay_period_id : _selectedID},
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
