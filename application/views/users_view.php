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
    <?php echo $_def_js_files; ?>
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
        .email-title{
            margin-top: 10px !important; 
            margin-left: 20px;
        }
        .hr-email-title{
            margin-top: 20px !important;
        }

    </style>

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
                        <li><a href="Users">User Account</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <button class="btn right_useracccount_create"  id="btn_new" style="width:185px;background-color:#2ecc71;color:white;" title="Create New Leave" >
                                        <i class="fa fa-file"></i> New User Account</button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">User Accounts List</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_users" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Username</th>
                                                    <th>Fullname</th>
                                                    <th>Address</th>
                                                    <th>Mobile #</th>
                                                    <th>User Group</th>
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
            <div id="modal_create_leave" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>User Account : <transaction class="transaction_type"></transaction></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_users">
                                <div class="row">
                              <div class="col-md-8" style="margin-bottom: 20px;">
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Username :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-users"></i>
                                                                </span>
                                                               <input type="text" name="user_name" class="form-control" placeholder="User Name" data-error-msg="User name is required!" required>
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">User Type :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                   <i class="fa fa-list" aria-hidden="true"></i>
                                                                </span>
                                                               <select class="form-control" name="user_group_id" id="user_group_id" data-error-msg="User group is required." required>
                                                               <option value="0">[ Select User Group ]</option>
                                                               <?php foreach($user_groups as $group){ ?>
                                                                        <option value="<?php echo $group->user_group_id; ?>"><?php echo $group->user_group; ?></option>
                                                               <?php } ?>
                                                           </select>
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group" id="password">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Password :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </span>
                                                               <input type="password" id="user_pword" name="user_pword" class="form-control" placeholder="Password" data-error-msg="Password is required!" required>
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group" id="confpassword">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Confirm Password :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </span>
                                                               <input type="password" id="user_confirm_pword" name="user_confirm_pword" class="form-control" placeholder="Confirm Password" data-error-msg="Please confirm password!" required>
                                                           </div>

                                                           <span class="help-block m-b-none">Please make sure password match.</span>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">First Name :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-users"></i>
                                                                </span>
                                                               <input type="text" name="user_fname" class="form-control" placeholder="Firstname" data-error-msg="Firstname is required!" required>
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Middle Name :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-users"></i>
                                                                </span>
                                                               <input type="text" name="user_mname" class="form-control" placeholder="Middlename">
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Last Name :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-users"></i>
                                                                </span>
                                                               <input type="text" name="user_lname" class="form-control" placeholder="Lastname" data-error-msg="Lastname is required!" required>
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Birthdate :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                               <input id="txt_bdate" name="user_bdate" type="text" class="form-control date-picker">
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Address :</label>
                                        <div class="col-sm-8">
                                                               <textarea name="user_address" class="form-control"></textarea>

                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Landline :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                                </span>
                                                               <input type="text" name="user_telephone" class="form-control" placeholder="Landline">
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Mobile No :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                                                </span>
                                                               <input type="text" name="user_mobile" class="form-control" placeholder="Mobile No">
                                                           </div>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Email Address :</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                               <input type="text" name="user_email" id="user_email" class="form-control" placeholder="Email Address" data-error-msg="Email Address is required!" required>
                                           </div>
                                        </div>
                                </div>

                              </div>
                                <div class="col-md-4">
                                    <div style="width:100%; height:300px;border:2px solid #34495e;border-radius:5px;">
                                        <center><label class="control-label boldlabel" style="text-align:center;margin-top:5px;">Employee Image</label></center>
                                                                <hr style="margin-top:0px !important;height:2px;background-color:#34495e;">
                                                        <center><img name="img_user" src="assets/img/anonymous-icon.png" height="150px;"width="150px;"></img></center>
                                                        <hr style="margin-top:0px !important;height:2px;background-color:#34495e;"></hr>
                                                        <center>
                                                             <button type="button" id="btn_browse" style="width:150px;margin-bottom:5px;" class="btn btn-primary">Browse Photo</button>
                                                             <button type="button" id="btn_remove_photo" style="width:150px;" class="btn btn-danger">Remove</button>
                                                             <input type="file" name="file_upload[]" class="hidden">
                                                        </center>
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



<?php echo $_switcher_settings; ?>



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


<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _ispayable=0; var _isforwardable=0;

    var initializeControls=function(){
        dt=$('#tbl_users').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bStateSave": true,
            // "fnStateSave": function (oSettings, oData) {
            //     localStorage.setItem('DataTables_' + window.location.pathname, JSON.stringify(oData));
            // },
            "ajax" : "Users/transaction/list",
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                { targets:[1],data: "user_name" },
                { targets:[2],data: "full_name" },
                { targets:[3],data: "user_address" },
                { targets:[4],data: "user_mobile" },
                { targets:[5],data: "user_group" },
                {

                    targets:[6],
                    render: function (data, type, full, meta){

                        return '<center>'+right_useracccount_edit+right_useracccount_delete+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Users"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }
        });

        $('.numeric').autoNumeric('init');


    }();


    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_users tbody').on( 'click', 'tr td.details-control', function () {
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


        $('#tbl_users tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";

            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.user_id;

            $('#user_group_id').val(data.user_group_id);
            $('#user_pword').val('nochanges');
            $('#user_confirm_pword').val('nochanges');
            $('.transaction_type').text('Edit');
            
            if(data.image_name==""){
                 $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
            }
            else{
                $('img[name="img_user"]').attr('src',data.photo_path);
            }

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

            $('#modal_create_leave').modal('toggle');

        });

        $('#tbl_users tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.user_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            removeUserAccount().done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).remove().draw();
                $.unblockUI();
            });
        });

        $('#btn_browse').click(function(event){
                    event.preventDefault();
                    $('input[name="file_upload[]"]').click();
             });

        $('#btn_remove_photo').click(function(event){
                event.preventDefault();
                $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
            });

        $('input[name="file_upload[]"]').change(function(event){
            var _files=event.target.files;

            //$('#div_img_product').hide();
           // $('#div_img_loader').show();
           showSpinningProgressUpload();

            var data=new FormData();
            $.each(_files,function(key,value){
                data.append(key,value);
            });

            console.log(_files);

            $.ajax({
                url : 'Users/transaction/upload',
                type : "POST",
                data : data,
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                success : function(response){
                            //console.log(response);
                            //alert(response.path);
                           // $('#div_img_loader').hide();
                           // $('#div_img_user').show();
                            $.unblockUI();
                            $('img[name="img_user"]').attr('src',response.path);

                        }
            });
        });



        $('#btn_new').click(function(){
            _txnMode="new";
            $('.transaction_type').text('New');
            $('#modal_create_leave').modal('show');
            clearFields($('#frm_users'));
        });

        $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_users'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createUserAccount().done(function(response){
                        showNotification(response);
                        $.unblockUI();
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_users'))
                    }).always(function(){
                        $('#modal_create_leave').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updateUserAccount().done(function(response){
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
        var pword=$('#user_pword').val();
        var cpword=$('#user_confirm_pword').val();

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
                if($('#user_group_id').val() == 0){
                    showNotification({title:"Error!",stat:"error",msg:$('#user_group_id').data('error-msg')});
                    $('#user_group_id').closest('div.form-group').addClass('has-error');
                    $('#user_group_id').focus();
                    stat=false;
                    return false;
                }
                if(pword!=cpword){
                    showNotification({title:"Error!",stat:"error",msg:"Pasword Doesnt Match"});
                    $('#password').addClass('has-error');
                    $('#confpassword').addClass('has-error');
                    $('#user_confirm_pword').focus();
                    stat=false;
                    return false;
                }
        });

        return stat;
    };

    var createUserAccount=function(){
            var _data=$('#frm_users').serializeArray();
            _data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Users/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };


    var updateUserAccount=function(){
            var _data=$('#frm_users').serializeArray();
            _data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});
            _data.push({name : "user_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Users/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

    var removeUserAccount=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Users/transaction/delete",
                "data":{user_id : _selectedID},
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



    function format ( d ) {
        return '<div class="container-fluid" style="margin:10px;">'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><span class="glyphicon glyphicon-user fa-lg"></span> ' + d.full_name+ '</h3>'+
        '<p>[ Username : '+d.user_name+' ] [ Account Type : '+d.user_group+' ]</p>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '</div>'+ //First Row//
        '<div class="row">'+
        '<div class="col-md-3">'+
        '<center><img class="loadingimg" style="margin-top:4px;width:150px;height:150px;" src="'+d.photo_path+'"></img></center>'+
        '</div>'+
        '<div class="col-md-6"><p class="nomargin"><b>Email Address</b> : '+d.user_email+'</p>'+
        '<p class="nomargin"><b>Mobile #</b> : '+d.user_mobile+'</p>'+
        '<p class="nomargin"><b>Telephone #</b> : '+d.user_telephone+'</p>'+
        '<p class="nomargin"><b>Birthday</b> : '+d.user_bdate+'</p>'+
        '<p class="nomargin"><b>Address</b> : '+d.user_address+'</p>'+

        '</div>'+
        '</div>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
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
<?php echo $loaderscript; ?>
</html>
