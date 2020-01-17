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
            text-align: right;
            width: 60%;
        }

        .odd{
            background-color:#eeeeee !important;
        }

        .dataTables_filter input {
            width:200px !important;
        }

        #deductcheck {
            color:green;
            font-size:20px;
            font-weight:bold;
        }

        #deductdash {
            color:gray;
            font-size:12px;
            font-weight:bold;
        }
        .sub-head th{
            background-color: #CFD8DC!important;
            color: black;
            border-bottom: 1px solid gray !important;
            border-top: 1px solid gray !important;
        }
    </style>


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
                        <li><a href="AdvancedSettings">Advanced Settings</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px">
                                             <center><h2 style="color:white;font-weight:300;">Deduction Setup</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_advanced_settings" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                              <thead class="tbl-header"> 
                                                <tr class="sub-head">
                                                    <th>Deduction Description</th>
                                                    <th><center>1</center></th>
                                                    <th><center>2</center></th>
                                                    <th><center>3</center></th>
                                                    <th><center>4</center></th>
                                                    <th><center>5</center></th>
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
                    <div class="modal-content"><!--content--->
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
                    </div><!---content -->
                </div>
                </div>
            </div><!---modal-->
            <div id="modal_create_Advanced_Setting" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Deduction Setup</h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_advanced_setting">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel" style="font-size: 10pt!important;">Deduction Description :</label>
                                    <input type="text" class="form-control" id="deduction_desc" name="deduction_desc" disabled>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <center>   
                                  <div class="col-md-2">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">1 :</label>
                                        <input type="checkbox" class="form-control" id="check1" name="check1">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">2 :</label>
                                        <input type="checkbox" class="form-control" id="check2" name="check2">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">3 :</label>
                                        <input type="checkbox" class="form-control" id="check3" name="check3">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">4 :</label>
                                        <input type="checkbox" class="form-control" id="check4" name="check4">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">5 :</label>
                                        <input type="checkbox" class="form-control" id="check5" name="check5">
                                    </div>
                                  </div>
                                </center>
                            </div>
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
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _check1=0; var _check2=0; var _check3=0; var _check4=0;

    var initializeControls=function(){
        dt=$('#tbl_advanced_settings').DataTable({
            "dom": '<"toolbar">frtip',

            "bLengthChange":false,
            "ajax" : "AdvancedSettings/transaction/list",
            "columns": [

                { targets:[1],data: "deduction_desc" },
                { targets:[2],data: getCheck1 },
                { targets:[3],data: getCheck2 },
                { targets:[4],data: getCheck3 },
                { targets:[5],data: getCheck4 },
                { targets:[6],data: getCheck5 },
                {
                    targets:[7],
                    render: function (data, type, full, meta){

                        return '<center>'+right_deductionperiod_edit+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Deduction Description"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(1).attr({
                    "align": "center"
                });

                $(row).find('td').eq(2).attr({
                    "align": "center"
                });

                $(row).find('td').eq(3).attr({
                    "align": "center"
                });

                $(row).find('td').eq(4).attr({
                    "align": "center"
                });

                $(row).find('td').eq(5).attr({
                    "align": "center"
                });
            }
        });

        $('.numeric').autoNumeric('init');


    }();


    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_advanced_settings tbody').on( 'click', 'tr td.details-control', function () {
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


        $('#tbl_advanced_settings tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            $('#modal_create_Advanced_Setting').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.default_id;
            $('#default_id').val(data.default_id);
            $('#deduction_id').val(data.deduction_id);
            $('#deduction_cycle').val(data.deduction_cycle);
            $('#check1').val(data.check1);
            $('#check2').val(data.check2);
            $('#check3').val(data.check3);
            $('#check4').val(data.check4);
            $('#check5').val(data.check5);

            if(data.check1==1){
                $('#check1').prop('checked', true);
                _check1 = 1;
            } else{
                $('#check1').prop('checked', false);
                _check1 = 0;
            }

            if(data.check2==2){
                $('#check2').prop('checked', true);
                _check2 = 2;
            } else{
                $('#check2').prop('checked', false);
                _check2 = 0;
            }

            if(data.check3==3){
                $('#check3').prop('checked', true);
                _check3 = 3;
            } else{
                $('#check3').prop('checked', false);
                _check3 = 0;
            }

            if(data.check4==4){
                $('#check4').prop('checked', true);
                _check4 = 4;
            } else{
                $('#check4').prop('checked', false);
                _check4 = 0;
            }

            if(data.check5==5){
                $('#check5').prop('checked', true);
                _check5 = 5;
            } else{
                $('#check5').prop('checked', false);
                _check5 = 0;
            }
            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });
        });

        $('#tbl_advanced_settings tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.default_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            remove_AdvancedSettings().done(function(response){
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
            $('#modal_create_Advanced_Setting').modal('show');
            clearFields($('#frm_advanced_setting'));
            $('#default_id').val(0);
        });

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
            if(validateRequiredFields($('#frm_advanced_setting'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    create_AdvancedSettings().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_advanced_setting'));
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_Advanced_Setting').modal('toggle');
                    });
                    return;
                }

                else if(_txnMode==="edit"){
                    //alert("update");
                    update_AdvancedSettings().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_Advanced_Setting').modal('toggle');
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

    var create_AdvancedSettings=function(){
        var _data=$('#frm_advanced_setting').serializeArray();
        _data.push({name : "check4" ,value : check4});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"AdvancedSettings/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var update_AdvancedSettings=function(){
        var _data=$('#frm_advanced_setting').serializeArray();
        _data.push({name : "check1" ,value : _check1});
        _data.push({name : "check2" ,value : _check2});
        _data.push({name : "check3" ,value : _check3});
        _data.push({name : "check4" ,value : _check4});
        _data.push({name : "check5" ,value : _check5});

        console.log(_data);
        _data.push({name : "default_id" ,value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"AdvancedSettings/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var remove_AdvancedSettings=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"AdvancedSettings/transaction/delete",
            "data":{default_id : _selectedID},
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
        ('#check1',f).prop('checked', false);
        ('#check2',f).prop('checked', false);
        ('#check3',f).prop('checked', false);
        ('#check4',f).prop('checked', false);
        ('#check5',f).prop('checked', false);
    };

    function getCheck1(data, type, dataToSet) {
        if(data.check1 == 1) {
            return "<i class='fa fa-check' id='deductcheck'></i>";
        } else {
            return "<i class='fa fa-minus' id='deductdash'></i>";
        }
    }

    function getCheck2(data, type, dataToSet) {
        if(data.check2 == 2) {
            return "<i class='fa fa-check' id='deductcheck'></i>";
        } else {
            return "<i class='fa fa-minus' id='deductdash'></i>";
        }
    }

    function getCheck3(data, type, dataToSet) {
        if(data.check3 == 3) {
            return "<i class='fa fa-check' id='deductcheck'></i>";
        } else {
            return "<i class='fa fa-minus' id='deductdash'></i>";
        }
    }

    function getCheck4(data, type, dataToSet) {
        if(data.check4 == 4) {
            return "<i class='fa fa-check' id='deductcheck'></i>";
        } else {
            return "<i class='fa fa-minus' id='deductdash'></i>";
        }
    }

    function getCheck5(data, type, dataToSet) {
        if(data.check5 == 5) {
            return "<i class='fa fa-check' id='deductcheck'></i>";
        } else {
            return "<i class='fa fa-minus' id='deductdash'></i>";
        }
    }

    $('#frm_advanced_setting').on('click','input[id="check1"]',function(){
        if(_check1==0) {
            this.checked = true;
            _check1 = 1;
            //alert(_check1);
        } else {
            this.checked = false;
            _check1 = 0;
            //alert(_check1);
        }
    });

    $('#frm_advanced_setting').on('click','input[id="check2"]',function(){
        if(_check2==0) {
            this.checked = true;
            _check2 = 2;
            //alert(_check2);
        } else {
            this.checked = false;
            _check2 = 0;
            //alert(_check2);
        }
    });

    $('#frm_advanced_setting').on('click','input[id="check3"]',function(){
        if(_check3==0) {
            this.checked = true;
            _check3 = 3;
            //alert(_check3);
        } else {
            this.checked = false;
            _check3 = 0;
            //alert(_check3);
        }
    });

    $('#frm_advanced_setting').on('click','input[id="check4"]',function(){
        if(_check4==0) {
            this.checked = true;
            _check4 = 4;
            //alert(_check4);
        } else {
            this.checked = false;
            _check4 = 0;
            //alert(_check4);
        }
    });

    $('#frm_advanced_setting').on('click','input[id="check5"]',function(){
        if(_check5==0) {
            this.checked = true;
            _check5 = 5;
        } else {
            this.checked = false;
            _check5 = 0;
        }
    });



});

</script>




</body>

</html>
