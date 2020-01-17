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
        .select2-dropdown{ z-index:2060 !important; }

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
        .modal-body{
            -webkit-box-shadow: 0px 5px 9px -4px rgba(163,163,163,1);
            -moz-box-shadow: 0px 5px 9px -4px rgba(163,163,163,1);
            box-shadow: 0px 5px 9px -4px rgba(163,163,163,1);
            background: #ECEFF1;
        }        

        .a-panel{
            background:#FFF;
            padding-top: 20px; 
            padding-bottom: 20px; 
           -moz-box-shadow:    inset 0 0 10px gray;
           -webkit-box-shadow: inset 0 0 10px gray;
           box-shadow:         inset 0px 0px 10px gray;
            position:relative;       
        }
        .a-panel:before, .a-panel:after{
            content:"";
            position:absolute; 
            z-index:-1;
            box-shadow:0 0 20px rgba(0,0,0,0.8);
            top:50%;
            bottom:0;
            left:10px;
            right:10px;
            border-radius:100px / 10px;
        }
        .row-filter{
            margin-bottom: 6px;
        }
        .anncmnt{
            padding: 15px;
        }
        #cbo-lbl-dept, #cbo-lbl-group{
            cursor: pointer;
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
        }
        .select2-container--default .select2-selection--single{
            height: 32px !important;
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
                        <li><a href="Announcement">Announcement</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">Announcement</h2></center>
                                            <button type="button" class="btn btn-add-announcement right_announcement_create"><span class="fa fa-plus"></span> Announcement</button>

                                       </div>
                                    <div class="panel-body table-responsive removecroll" style="padding-top:8px;">
                                        <table id="tbl_announcement" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Date / Time Announced</th>
                                                    <th>Title</th>
                                                    <th>Branch</th>
                                                    <th>Department</th>
                                                    <th>Group</th>  
                                                    <th>Action</th>
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
                <div class="modal-dialog modal-md" style="top: 20%;">
                    <div class="modal-content"><!---content-->
                        <div class="modal-header">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <center><h4 class="modal-title"><span id="modal_mode"></span></h4></center>
                        </div>

                        <div class="modal-body">
                            <img src="assets/img/question_mark.png" style="width: 50px; position: absolute;margin-left: 30px;margin-top: -10px;"> 
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
            <div id="modal_create_announcement" class="modal fade" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#388E3C;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><i class="fa fa-newspaper-o"></i> Announcement: <transaction class="transaction_type"></transaction></h4>
                        </div>
                        <div class="modal-body">
                            <form id="frm_announcement">


                                <div class="row row-filter">
                                    <div class="col-sm-12">
                                        <div style="text-align: right;margin-top: -10px;">
                                            <input type="checkbox" id="cbo_department"> <label class="boldlabel" style="margin-right: 10px;" id="cbo-lbl-dept">Department</label>
                                            
                                            <span id="cbo-group-panel">
                                                <input type="checkbox" id="cbo_group"> <label class="boldlabel" id="cbo-lbl-group"> Group</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <div class="a-panel">

                                <div class="row row-filter">
                                  <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <label class="boldlabel">Branch Filter:</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="branch-filter" name="branch-filter" data-error-msg="Branch Filter is required." required>
                                            <option value="0">All</option>
                                            <?php foreach($branch as $branch){ ?>    
                                                <option value="<?php echo $branch->ref_branch_id; ?>">
                                                    <?php echo $branch->branch; ?>                            
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="row row-filter" id="department-filter-panel">
                                  <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <label class="boldlabel">Department Filter:</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="department-filter" name="department-filter" data-error-msg="Department is required.">
                                            <option value="0">All</option>
                                            <?php foreach($department as $department) { ?>
                                                <option value="<?php echo $department->ref_department_id; ?>">
                                                    <?php echo $department->department; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="row row-filter" id="group-filter-panel">
                                  <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <label class="boldlabel">Group Filter:</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="group-filter" name="group-filter" data-error-msg="Group is required.">
                                            <option value="0">All</option>
                                            <?php foreach($group as $group) { ?>
                                                <option value="<?php echo $group->group_id; ?>">
                                                    <?php echo $group->group_desc; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row anncmnt">
                                <div class="col-sm-12 a-panel">
                                    <label class="boldlabel">Announcement Title:</label>
                                    <input type="text" name="announcement_title" class="form-control" placeholder="Announcement Title" data-error-msg="Title is required." required>
                                    <label class="boldlabel">Announcement :</label>
                                    <textarea type="text" class="form-control" id="announcement" name="announcement" placeholder="Announcement" rows="6" data-error-msg="Announcement is required." required></textarea>
                                </div>
                            </div>
                            <div class="row anncmnt attachment-panel" style="display: none;">
                              <div class="col-sm-12 a-panel">
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_create_announcement" type="button" class="btn" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancel" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content-->
                </div>
            </div><!---modal-->
<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _ispayable=0; var _isforwardable=0;
    var _selectedemp_leave_year_id; var _selectedemployee_id; var _selectedref_leave_type_id;
    var _selectedtotal; var leave_mode; var _branch_filter; var _department_filter; var _group_filter;
    var _selectedDept; var _selectedBranch; var _selectedGroup;
    var initializeControls=function(){
        dt=$('#tbl_announcement').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "Announcement/transaction/list",
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                { targets:[1],data: "datetime_created" },
                { targets:[2],data: "announcement_title" },
                { targets:[3],data: "branch" },
                { targets:[4],data: "department" },
                { targets:[5],data: "group_desc" },
                {
                    targets:[6],
                    render: function (data, type, full, meta){

                        return '<center>'+right_announcement_edit+' '+right_announcement_delete+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Leave Request"
            }
        });


        $('.numeric').autoNumeric('init');

    }();

    var bindEventHandlers=(function(){
        var detailRows = [];

        _branch_filter=$('#branch-filter').select2({
            placeholder: "Select branch.",
            allowClear: true
        });

        _branch_filter.select2('val', null);

        _department_filter=$('#department-filter').select2({
            placeholder: "Select department.",
            allowClear: true
        });

        _department_filter.select2("val", null);

        _group_filter=$('#group-filter').select2({
            placeholder: "Select group.",
            allowClear: true
        });

        _group_filter.select2('val', null);

        var _cbo_dept_chck = 0;
        var _cbo_group_chck = 0;

        $('#cbo-lbl-dept').click(function(){
            set_filter(_cbo_dept_chck, 'cbo_department' ,'department-filter-panel','department-filter');
        });

        $('#cbo_department').click(function(){
            set_filter(_cbo_dept_chck, 'cbo_department' ,'department-filter-panel','department-filter');
        });

        $('#cbo-lbl-group').click(function(){
            set_filter(_cbo_group_chck, 'cbo_group', 'group-filter-panel','group-filter');
        });

        $('#cbo_group').click(function(){
            set_filter(_cbo_group_chck, 'cbo_group', 'group-filter-panel','group-filter');
        });

        var set_filter = function(cbo_chck, cbo_id, panel, filter){
            if (cbo_chck == 0){
                $('#' + cbo_id).prop('checked',true);
                $('#' + panel).show(400);
                $('#' + filter).prop('required',true);
                    if (cbo_id == "cbo_department"){
                        _cbo_dept_chck = 1;
                        $('#cbo-group-panel').show();
                    }
                    else{
                        _cbo_group_chck = 1;
                    }
            }else{
                $('#' + cbo_id).prop('checked',false);
                $('#' + panel).hide(400);
                $('#' + filter).prop('required',false);
                    if (cbo_id == "cbo_department"){
                        _cbo_dept_chck = 0;
                        $('#cbo-group-panel').hide();
                        $('#group-filter-panel').hide();
                        _cbo_group_chck = 0;
                         $('#cbo_group').prop('checked',false);

                         $('#department-filter').select2('val', 0);
                         $('#group-filter').select2('val', 0);
                    }
                    else{
                        _cbo_group_chck = 0;
                         $('#group-filter').select2('val', 0);
                    }

            }
        };

        $('#tbl_announcement tbody').on( 'click', 'tr td.details-control', function () {
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
                    "url":"Announcement/transaction/details/"+ d.announcement_post_id,
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

        $('#tbl_announcement tbody').on('click','button[name="remove_announcement"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.announcement_post_id;
            _selectedTitle=data.announcement_title;
            $('#modal_confirmation').modal('show');
            $('#modal_mode').text('Remove Announcement?');
            $('#modal-body-message').text('Are you sure you want to remove '+ _selectedTitle +' announcement?');
        });

        $('#tbl_announcement tbody').on('click','button[name="edit_announcement"]',function(){
            _txnMode="edit";
            clearFields($('#frm_announcement'))
            $('#department-filter-panel').hide();
            $('#group-filter-panel').hide();
            $('#modal_create_announcement').modal('toggle');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.announcement_post_id;

            _selectedDept = data.department_id;
            _selectedBranch = data.branch_id;
            _selectedGroup = data.group_id;

            $('.transaction_type').text('Edit');

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            }); 

            $('#branch-filter').select2('val', ''+_selectedBranch+'');

            if(_selectedGroup == null){
                $('#group-filter-panel').hide();
                $('#cbo-group-panel').hide();
                $('#cbo_group').prop('checked',false);
            }
            else if (_selectedGroup >= 0){
                $('#group-filter-panel').show();
                $('#cbo_group').prop('checked',true);
                _group_filter.select2('val', ''+_selectedGroup+'');
            }

            if(_selectedDept == null){
                $('#department-filter-panel').hide();
                $('#cbo_department').prop('checked',false);
            }
            else if (_selectedDept >= 0){
                $('#department-filter-panel').show();
                $('#cbo_department').prop('checked',true);
                $('#department-filter').select2('val', ''+_selectedDept+'');
            }
        });

        $('#btn_yes').click(function(){
                removeAnnouncement().done(function(response){
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

        $('.btn-add-announcement').click(function(){
            _txnMode="new";
            clearFields($('#frm_announcement'))
            $('#department-filter-panel').hide();
            $('#group-filter-panel').hide();
            $('#cbo-group-panel').hide();
            $('#modal_create_announcement').modal('show');
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

        $('#btn_create_announcement').click(function(){
            if(validateRequiredFields($('#frm_announcement'))){
                if(_txnMode==="new"){
                    createAnnouncement().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_announcement'))
                    }).always(function(){
                        $('#modal_create_announcement').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    updateAnnouncement().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $('#modal_create_announcement').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
            }
        });        


    })();


    var validateRequiredFields=function(f){
        var stat=true;

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

            if ($('#branch-filter').val() == null){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('div.form-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }

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

    var createAnnouncement=function(){
        var _data=$('#frm_announcement').serializeArray();
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Announcement/transaction/create_announcement",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var updateAnnouncement = function(){
        var _data=$('#frm_announcement').serializeArray();
        _data.push({name : "announcement_post_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Announcement/transaction/update_announcement",
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


    var removeAnnouncement = function(){
        var _data=$('#').serializeArray();
        _data.push({name : "announcement_post_id" , value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Announcement/transaction/delete_announcement",
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

        $('#cbo_department').prop('checked',false);
        $('#cbo_group').prop('checked',false);

        $('#branch-filter').select2('val', 0);
        $('#department-filter').select2('val', 0);
        $('#group-filter').select2('val', 0);
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
