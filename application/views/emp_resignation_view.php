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
        input[type=radio]{
            width: 15px;
            height: 15px;
            margin-left: 5px;
            cursor: pointer;
        }
        label[for=radio]{
            line-height: 20px;
            cursor: pointer;
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
            supported by Chrome and Opera */
        }
        .row{
            margin-bottom: 5px;
        }
        .select2-dropdown{ z-index:10060!important; }

        #tbl_resignation td.view_info {
            cursor: pointer;
        }

        #tbl_resignation td.view_info:hover {
            color: #0D47A1;
        }

        #tbl_resignation td {
            font-weight: 500;
        }    

        #tbl_resignation tr:hover {
            color: #0D47A1;
            cursor: pointer;
            font-weight: 500;            
            background: #F5F5F5;
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
                        <li><a href="EmployeeResignation">Employee Resignation</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <button class="btn right_emp_resignation_create"  id="btn_new" style="width:185px;background-color:#2ecc71;color:white;" title="Create New Resignation" >
                                        <i class="fa fa-file"></i> New Resignation</button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px">
                                             <center><h2 style="color:white;font-weight:300;">Resignation List</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_resignation" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Employee</th>
                                                    <th>Approved By</th>
                                                    <th width="5%">Clearance</th>
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
                    <div class="modal-content"><!---content-->
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
                    </div><!--content-->
                </div>
                </div>
            </div><!---modal-->
            <div id="modal_create_resignation" class="modal fade" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Resignation Form : <transaction class="transaction_type"></transaction></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_resignation">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                            <label>Employee : </label>
                                        </div>
                                        <div class="col-md-10">
                                            <div id="employee_info_panel">
                                                <select class="form-control" name="employee_id" id="employee_id" data-error-msg="Employee is required!">
                                                    <option value="">[ Select Employee ]</option>
                                                    <?php foreach ($employee as $row) { ?>
                                                        <option value="<?php echo $row->employee_id; ?>" data-ecode="<?php echo $row->ecode; ?>" data-department="<?php echo $row->department; ?>" data-position="<?php echo $row->position; ?>" data-hired="<?php echo $row->employment_date;  ?>">
                                                            <?php echo $row->full_name; ?>
                                                        </option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div id="employee_info_panel1">
                                                <input type="text" id="emp_name" class="form-control" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label>ECode : </label>
                                            <input type="text" name="ecode" id="ecode" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Department : </label>
                                            <input type="text" name="department" id="department" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Position : </label>
                                            <input type="text" name="position" id="position" class="form-control" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Date Hired : </label>
                                            <input type="text" name="date_hired" id="date_hired" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <label>Reason of Leave : </label>
                                            <textarea class="form-control" id="reason_of_leave" name="reason_of_leave" rows="5" required data-error-msg="Reason of leave is required!"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label>Effectivity Date : </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="date-picker form-control" name="effectivity_date" id="effectivity_date" required data-error-msg="Effectivity date is required!">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label>Approved By : </label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" id="approved_by" name="approved_by" required data-error-msg="Approved by is required!">
                                                <option value="">[ Select Employee ]</option>
                                                <?php foreach ($employee as $row) { ?>
                                                    <option value="<?php echo $row->employee_id; ?>">
                                                        <?php echo $row->full_name; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label>Final Approval : </label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="final_approve" id="final_approve" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label>Clearance : </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="radio" name="is_cleared" value="1" id="rd_cleared">
                                            <label for="radio" id="lbl_cleared">Cleared</label>
                                            <input type="radio" name="is_cleared" value="0" id="rd_uncleared">
                                            <label for="radio" id="lbl_uncleared">Uncleared</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label>Note : </label>
                                        </div>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="resignation_note" id="resignation_note" rows="3"></textarea>
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
        dt=$('#tbl_resignation').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "EmployeeResignation/transaction/list",
            "columns": [        
                {
                    "targets": [0],
                    "class":          "view_info",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": "<center><span class='fa fa-print' style='font-size: 18pt;'></span></center>"
                },
                { targets:[1],data: "emp_fullname" },
                { targets:[2],data: "emp_aprrv_fullname" },
                { targets:[3],data: null,
                    render: function (data, type, full, meta){
                        if (data.is_cleared == 1){
                            return '<center><b><i class="fa fa-check-circle" style="color: #558B2F;font-size: 15pt;"></i></center>';
                        }else{
                            return '<center><b><i class="fa fa-times-circle" style="color: red;font-size: 15pt;"></i></center>';
                        }
                    }
                },
                {
                    targets:[4],
                    render: function (data, type, full, meta){

                        return '<center>'+right_emp_resignation_edit+right_emp_resignation_delete+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Resignation"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(5).attr({
                    "align": "right"
                });
            }
        });
        $('.numeric').autoNumeric('init');
        $('#rd_uncleared').prop('checked', true);
        $('#rd_cleared').prop('checked', false);
    }();


    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_position tbody').on( 'click', 'tr td.details-control', function () {
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

        $('#tbl_resignation tbody').on( 'click', 'tr td.view_info', function () {
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.emp_resignation_id;
            window.open('EmployeeResignation/transaction/print_emp_resignation/'+_selectedID+'/','_blank');
        });

        function get_current_date(){
            var fullDate = new Date()
            //Thu May 19 2011 17:25:38 GMT+1000 {}
             
            //convert month to 2 digits
            var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
             
            var currentDate = twoDigitMonth + "/" + fullDate.getDate() + "/" + fullDate.getFullYear();
            return currentDate;
        };


        $('#tbl_resignation tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            $('.transaction_type').text('Edit');
            $('#modal_create_resignation').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.emp_resignation_id;
            _employee_id =data.employee_id;

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

            getEmpInfo(_employee_id).done(function(response){
                var row = response.data[0];
                var rowlength = response.data.length;

                if (rowlength > 0){
                    $('#emp_name').val(row.full_name);
                    $('#ecode').val(row.ecode);
                    $('#department').val(row.department); 
                    $('#position').val(row.position);
                    $('#date_hired').val(row.employment_date);
                }

            $('#employee_info_panel').hide();
            $('#employee_info_panel1').show();
            $('#employee_id').attr('required', false);

            $('#approved_by').val(data.approved_by).trigger('change');

            if (data.is_cleared == 1){
                $('#rd_cleared').prop('checked', true);
            }else{
                $('#rd_uncleared').prop('checked', true);
            }

            }).always(function(){
                $.unblockUI();
            });


        });

        $('#tbl_resignation tbody').on('click','button[name="view_info"]',function(){
            _txnMode="view";

            $('#modal_create_resignation').modal('show');

            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.emp_resignation_id;
            _employee_id =data.employee_id;

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

            getEmpInfo(_employee_id).done(function(response){
                var row = response.data[0];
                var rowlength = response.data.length;

                if (rowlength > 0){
                    $('#emp_name').val(row.full_name);
                    $('#ecode').val(row.ecode);
                    $('#department').val(row.department); 
                    $('#position').val(row.position);
                    $('#date_hired').val(row.employment_date);
                }

            $('#employee_info_panel').hide();
            $('#employee_info_panel1').show();
            $('#employee_id').attr('required', false);

            $('#approved_by').val(data.approved_by).trigger('change');

            if (data.is_cleared == 1){
                $('#rd_cleared').prop('checked', true);
            }else{
                $('#rd_uncleared').prop('checked', true);
            }

            }).always(function(){
                $.unblockUI();
            });


        });

        $('#tbl_resignation tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.emp_resignation_id;
            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            removeResignation().done(function(response){
                showNotification(response);
                if(response.false==0){
                }
                else{
                    dt.row(_selectRowObj).remove().draw();
                }
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
            $('.transaction_type').text('New');
            $('#modal_create_resignation').modal('show');
            setTimeout(function(){
                $('#effectivity_date').val(get_current_date());
            },100);

            $('#employee_id').val("").trigger('change')
            $('#approved_by').val("").trigger('change')
            $('#rd_uncleared').prop('checked', true);
            clearFields($('#frm_resignation'));

            $('#employee_info_panel').show();
            $('#employee_info_panel1').hide();
            $('#employee_id').attr('required',true);

            getEmplist_forResignation().done(function(response){
            var rows=response.data;

                $("#employee_id option").remove();
                $("#employee_id").append('<option value="">[ Select Employee ]</option>');
                $.each(rows,function(i,value){
                   $("#employee_id").append('<option value="'+value.employee_id+'" data-position="'+value.position+'" data-department="'+value.department+'" data-hired="'+value.employment_date+'" data-ecode="'+value.ecode+'">'+value.full_name+'</option>');
                });
                    $('#employee_id').val("").trigger("change")


                $("#approved_by option").remove();
                $("#approved_by").append('<option value="">[ Select Employee ]</option>');
                $.each(rows,function(i,value){
                   $("#approved_by").append('<option value="'+value.employee_id+'">'+value.full_name+'</option>');
                });
                    $('#approved_by').val("").trigger("change")

            });         

        });

        $('#employee_id').on('change', function(){
                $('#ecode').val($('#employee_id option:selected').attr('data-ecode'));
                $('#department').val($('#employee_id option:selected').attr('data-department'));
                $('#position').val($('#employee_id option:selected').attr('data-position'));
                $('#date_hired').val($('#employee_id option:selected').attr('data-hired'));
        });

        $('#lbl_cleared').click(function(){
            $('#rd_cleared').prop('checked', true);
            $('#rd_uncleared').prop('checked', false);
        });

        $('#lbl_uncleared').click(function(){
            $('#rd_cleared').prop('checked', false);
            $('#rd_uncleared').prop('checked', true);
        });

        _employeesdt=$("#employee_id").select2({
            value: "[ Select Employee ]",
            allowClear: true
        });

        _employeesdt.select2('val', null);

        _employeedt=$("#approved_by").select2({
            value: "[ Select Employee ]",
            allowClear: true
        });

        _employeedt.select2('val', null);        

        $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_resignation'))){
                if(_txnMode==="new"){
                    createResignation().done(function(response){
                        showNotification(response);
                        if(response.stat=="error"){
                            $.unblockUI();
                        }
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_resignation'))
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_resignation').modal('toggle');
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    updateResignation().done(function(response){
                        showNotification(response);
                        if(response.stat=="error"){
                            $.unblockUI();
                        }
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_resignation').modal('toggle');
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

    var createResignation=function(){
        var _data=$('#frm_resignation').serializeArray();

        var isChecked = $('#rd_cleared').prop('checked');

        if (isChecked == 1){
            _data.push({name : "is_cleared" ,value : '1'});
        }else{
            _data.push({name : "is_cleared" ,value : '0'});
        }

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"EmployeeResignation/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var getEmpInfo=function(employee_id){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"EmployeeResignation/transaction/getEmpInfo_forResignation",
            "data":{employee_id : employee_id},
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var getEmplist_forResignation=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"EmployeeResignation/transaction/getEmplist_forResignation"
        });
    };   

    var updateResignation=function(){
        var _data=$('#frm_resignation').serializeArray();
        _data.push({name : "emp_resignation_id" ,value : _selectedID});

        var isChecked = $('#rd_cleared').prop('checked');

        if (isChecked == 1){
            _data.push({name : "is_cleared" ,value : '1'});
        }else{
            _data.push({name : "is_cleared" ,value : '0'});
        }

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"EmployeeResignation/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removeResignation=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"EmployeeResignation/transaction/delete",
            "data":{emp_resignation_id : _selectedID},
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
