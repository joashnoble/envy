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
            text-align: left;
            width: 100%;
        }


    </style>
    <?php echo $loaderscript; ?>
</head>

<body class="animated-content" >

<?php echo $_top_navigation; ?>

<div id="wrapper">
    <div id="layout-static">

        <?php echo $_side_bar_navigation;?>

        <div class="static-content-wrapper white-bg">
            <div class="static-content" >
                <div class="page-content">

                    <ol class="breadcrumb" style="margin-bottom:0px;">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li><a href="LeaveRequest">Leave Request</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <div class="panel-heading" style="margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">Leave Request List</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive removecroll" style="padding-top:8px;">
                                        <table id="tbl_leave_request" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Date Filed</th>
                                                    <th>Employee</th>
                                                    <th>Type of Leave</th>
                                                    <th width="15%">Leave Request</th>
                                                    <th width="25%">Action</th>
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
                <div class="modal-dialog modal-m" style="top: 20%;">
                    <div class="modal-content"><!---content-->
                        <div class="modal-header">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title"><span id="modal_mode"> </span></h4>
                        </div>

                        <div class="modal-body">
                            <img src="assets/img/question_mark.png" style="width: 50px; position: absolute;margin-left: 30px;"> 
                            <p id="modal-body-message" style="width: 80%; margin-left: 100px; font-weight: 400;"></p>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_yes" type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!--content-->
                </div>
                </div>
            </div><!---modal-->
<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _ispayable=0; var _isforwardable=0;
    var _selectedemp_leave_year_id; var _selectedemployee_id; var _selectedref_leave_type_id;
    var _selectedtotal; var leave_mode;

    var initializeControls=function(){
        dt=$('#tbl_leave_request').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "LeaveRequest/transaction/list",
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                { targets:[1],data: "date_filed" },
                { targets:[2],data: "fullname" },
                { targets:[3],data: "leave_type" },
                { targets:[4],data: "total" },
                {
                    targets:[5],
                    render: function (data, type, full, meta){

                        return '<center>'+right_leaverequest_approve+' '+right_leaverequest_decline+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Leave Request"
            },

            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(4).attr({
                    "align": "right"
                });

            }
        });


        $('.numeric').autoNumeric('init');

    }();


    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_leave_request tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();
            }
            else {
                tr.addClass( 'details' );
                var d=row.data();

                $.ajax({
                    "dataType":"html",
                    "type":"POST",
                    "url":"LeaveRequest/transaction/leavedetails/"+ d.emp_leaves_filed_id + "",
                }).done(function(response){
                    row.child( response ).show();
                    // Add to the 'open' array
                    if ( idx === -1 ) {
                        detailRows.push( tr.attr('id') );
                    }
                    $.unblockUI();
                });
            }
        } );


        $('#tbl_leave_request tbody').on('click','button[name="btn_approve"]',function(){
            leave_mode = "approve";
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.emp_leaves_filed_id;
            var fullname = data.fullname;
            var filed_date = data.date_filed;
            var from_date = data.date_time_from;
            var to_date = data.date_time_to;

            _selectedemp_leave_year_id = data.emp_leave_year_id;
            _selectedemployee_id = data.employee_id;
            _selectedref_leave_type_id = data.ref_leave_type_id
            _selectedtotal = data.total;

            $('#modal_confirmation').modal('show');
            $('#modal_mode').text('Approve Leave?');
            $('#modal-body-message').text('Are you sure you want to approve the request leave of '+ 
                                    fullname +' filed on ' + filed_date +' from '+ 
                                     from_date +' to ' + to_date + '?');

        });

        $('#tbl_leave_request tbody').on('click','button[name="btn_decline"]',function(){

            leave_mode = "decline";
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.emp_leaves_filed_id;
            var fullname = data.fullname;
            var filed_date = data.date_filed;
            var from_date = data.date_time_from;
            var to_date = data.date_time_to;

            _selectedemp_leave_year_id = data.emp_leave_year_id;
            _selectedemployee_id = data.employee_id;
            _selectedref_leave_type_id = data.ref_leave_type_id
            _selectedtotal = data.total;


            $('#modal_confirmation').modal('show');
            $('#modal_mode').text('Decline Leave?');
            $('#modal-body-message').text('Are you sure you want to decline the request leave of '+ 
                                    fullname +' filed on ' + filed_date +' from '+ 
                                     from_date +' to ' + to_date + '?');

        });

        
        $('#tbl_leave tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            $('#modal_create_leave').modal('toggle');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.ref_leave_type_id;
            $('.transaction_type').text('Edit');
            if(data.is_payable==1){
                $('#payable').prop('checked', true);
                //alert(data.is_payable);
                _ispayable = 1;
            }
            else{
                $('#payable').prop('checked', false);
                //alert(data.is_payable);
                _ispayable = 0;
            }
            if(data.is_forwardable==1){
                $('#forwardable').prop('checked', true);
                //alert(data.is_forwardable);
                _isforwardable = 1;
            }
            else{
                $('#forwardable').prop('checked', false);
                //alert(data.is_forwardable);
                _isforwardable = 0;

            }
            //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

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

            hideRatesduties();
            hideemployeeList();
            showemployeeFields();

        });

        $('#tbl_leave tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.ref_leave_type_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            if (leave_mode == "approve"){
                approveLeaveRequest().done(function(response){
                    showNotification(response);
                    if(response.stat=="success"){                    
                        dt.row(_selectRowObj).remove().draw();
                    }
                    $.unblockUI();
                });
            }else if (leave_mode == "decline"){
                declineLeaveRequest().done(function(response){
                        showNotification(response);
                        if(response.stat=="success"){
                            dt.row(_selectRowObj).remove().draw();
                        }
                        $.unblockUI();
                    });
            }
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

        $('#frm_leave').on('click','input[id="payable"]',function(){
            //$('.single-checkbox').attr('checked', false);
            if(_ispayable==0){
                this.checked = true;
                _ispayable = 1;
                //alert(_ispayable);
            }
            else{
                 this.checked = false;
                 _ispayable = 0;
                  //alert(_ispayable);
            }


        });

        $('#frm_leave').on('click','input[id="forwardable"]',function(){
            //$('.single-checkbox').attr('checked', false);
            if(_isforwardable==0){
                this.checked = true;
                _isforwardable = 1;
                //alert(_isforwardable);
            }
            else{
                 this.checked = false;
                 _isforwardable = 0;
                  //alert(_isforwardable);
            }


        });



        $('#btn_new').click(function(){
            _txnMode="new";
            $('.transaction_type').text('New');
            $('#modal_create_leave').modal('show');
            clearFields($('#frm_leave'));
            $('#payable').attr('checked', false);    //clear checkbox
            $('#forwardable').attr('checked', false);
        });

        $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_leave'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createLeave().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        _ispayable = 1;
                        _isforwardable = 1;
                        clearFields($('#frm_leave'))
                    }).always(function(){
                        $('#modal_create_leave').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updateLeave().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $('#modal_create_leave').modal('hide');
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

    var createLeave=function(){
        var _data=$('#frm_leave').serializeArray();
        _data.push({name : "is_payable" ,value : _ispayable});
        _data.push({name : "is_forwardable" ,value : _isforwardable});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefLeave/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var updateLeave=function(){
        var _data=$('#frm_leave').serializeArray();
        _data.push({name : "is_payable" ,value : _ispayable});
        _data.push({name : "is_forwardable" ,value : _isforwardable});
        console.log(_data);
        _data.push({name : "ref_leave_type_id" ,value : _selectedID});
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefLeave/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removeLeave=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefLeave/transaction/delete",
            "data":{ref_leave_type_id : _selectedID},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var approveLeaveRequest = function(){

       var _data=$('#').serializeArray();
        _data.push({name : "emp_leaves_filed_id" , value : _selectedID});
        // _data.push({name : "emp_leave_year_id" , value : _selectedemp_leave_year_id});
        // _data.push({name : "employee_id" ,value : _selectedemployee_id});
        // _data.push({name : "ref_leave_type_id" ,value : _selectedref_leave_type_id});
        // _data.push({name : "total" ,value : _selectedtotal});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"LeaveRequest/transaction/approveleave",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var declineLeaveRequest = function(){

        var _data=$('#').serializeArray();
        _data.push({name : "emp_leaves_filed_id" , value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"LeaveRequest/transaction/declineleave",
            "data":_data,
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

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $(f).find('input:first').focus();
    };



    function format ( d ) {
        return '<div class="container-fluid">'+
        '<div class="col-md-12">'+
        '<center><h4 class="boldlabel">Nothing Follows</h4></center>'+
        '</div>'+ //First Row//
        '</div>';
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
