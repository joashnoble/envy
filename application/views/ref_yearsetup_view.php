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
    <?php echo $loaderscript ?>
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
                        <li><a href="RefYearSetup">Leave Year Setup</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <button class="btn right_yearsetup_create"  id="btn_new" style="width:185px;background-color:#2ecc71;color:white;" title="Create New Position" >
                                        <i class="fa fa-file"></i> Create Year Setup</button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">Leave Year Setup</h2></center>
                                             <a href="pdf/year_setup.pdf" target="_blank"><i class="fa fa-question-circle help" style="color: white!important; font-size: 15pt!important;float: right;margin-top: 15px!important;" data-toggle="tooltip" data-placement="top" title="Help"></i></a>
                                             <br>
                                             <left><h5 style="color:white;font-weight:300;line-height:1px;margin-top:2px;">Manage the current (Calendar/Fiscal) year</h5></left>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_leave_year" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Year Type</th>
                                                    <th>Year</th>
                                                    <th>Date Start</th>
                                                    <th>Date End</th>
                                                    <th>Note</th>
                                                    <th>Active Year</th>
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

            <div id="modal_create_yearsetup" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Year Setup</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frm_yeartype">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                            <label class="boldlabel">Year Type :</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-file-code-o"></i>
                                                </span>
                                                <select class="form-control" id="year_type" name="year_type" data-error-msg="Process Account is required!">
                                                    <option value="Calendar Year">Calendar Year</option>
                                                    <option value="Fiscal Year">Fiscal Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                            <label class="boldlabel"><i class="red">*</i> Date Start :</label>
                                            <input type="text" id="date_start" name="date_start" class="date-picker form-control" value="" placeholder="Date Start" data-error-msg="Date Start is required!" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">Date End :</label>
                                        <input type="text" id="date_end" name="date_end" class="form-control" value="" placeholder="Date End" data-error-msg="Date End is required!" readonly>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">Note :</label>
                                        <textarea type="text" class="form-control" id="note" name="note" placeholder="Note"></textarea>
                                    </div>
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">Active Year Status :</label>
                                        <input type="checkbox" id="active_year" value="" style="vertical-align:top;display:inline-block;white-space:nowrap;width:18px;height:18px;" disabled>
                                    </div>
                                  </div>
                                </div><br>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                            <i class="fa fa-cog"></i> <label class="boldlabel">13 Month Pay Setup</label>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                            <label class="boldlabel">Applicable Year :</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-file-code-o"></i>
                                                </span>
                                                <select class="form-control" id="year" name="year" data-error-msg="Year is required!">
                                                  <option value="">Select Year</option>
                                                    <?php $minyear=1990; $maxyear=2500;
                                                        while($minyear!=$maxyear){
                                                            echo '<option value='.$minyear.'>'.$minyear.'</option>';
                                                            $minyear++;
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group" style="margin-bottom:0px;">
                                            <label class="boldlabel">Start 13th Month Date :</label>
<!--                                             <select class="form-control" id="start_month" name="start_month" data-error-msg="Start Month is required!">
                                              <option value="0">Select Month</option>
                                                <?php foreach($month as $smonth){?>
                                                    <option value="<?php echo $smonth->month_id; ?>">
                                                        <?php echo $smonth->month_name; ?>
                                                    </option>
                                                <?php }?>
                                            </select> -->
                                            <input type="text" id="start_13thmonth_date" name="start_13thmonth_date" class="date-picker form-control" value="" placeholder="Date Start" data-error-msg="Date Start is required!">
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">End 13th Month Date:</label>
                                        <!-- <select class="form-control" id="end_month" name="end_month" data-error-msg="Start Month is required!">
                                          <option value="0">Select Month</option>
                                            <?php foreach($month as $emonth){?>
                                                <option value="<?php echo $emonth->month_id; ?>">
                                                    <?php echo $emonth->month_name; ?>
                                                </option>
                                            <?php }?>
                                        </select> -->
                                        <input type="text" id="end_13thmonth_date" name="end_13thmonth_date" class="date-picker form-control" value="" placeholder="Date End" data-error-msg="Date End is required!">
                                    </div>
                                  </div>
                                </div>   

                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">Factor :</label>
                                        <input type="text" id="factor_setup" name="factor_setup" class="numeric form-control" placeholder="Factor" data-error-msg="Date End is required!" style="width : 100%;">
                                    </div>
                                  </div>
                                </div><br>                                 
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
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _isactive=0; var _isChecked=0; var a;
    var _year; var _year_type;

    var initializeControls=function(){
        dt=$('#tbl_leave_year').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "RefYearSetup/transaction/list",
            "columns": [
                { targets:[0],data: "year_type" },
                { targets:[1],data: "year" },
                { targets:[2],data: "date_start" },
                { targets:[3],data: "date_end" },
                { targets:[4],data: "note" },
                { targets:[5],data: "active_year",
                    render: function (data, type, full, meta){
                        //alert(data);

                        if(data == 1){
                            return "<center><span style='color:#37d077' class='glyphicon glyphicon-ok'></span></center>";
                        }

                        else{
                            return "<center><span style='color:#e74c3c' class='glyphicon glyphicon-remove'></span></center>";
                        }
                    }
                },
                {

                    targets:[6],
                    render: function (data, type, full, meta){

                        return "<center><button class='btn btn-primary' name='edit_info' style='margin-right: 5px;'><i class='fa fa-edit'></i></button></center>";
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Year Type"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(5).attr({
                    "align": "right"
                });
            }
        });

        $('.numeric').autoNumeric('init');

        _year=$("#year").select2({
            dropdownParent: $("#modal_create_yearsetup"),
            placeholder: "Select Year",
            allowClear: false
        });

        _year_type=$("#year_type").select2({
            dropdownParent: $("#modal_create_yearsetup"),
            placeholder: "Select Year Type",
            minimumResultsForSearch: Infinity,
            allowClear: false
        });

    }();


    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_leave_year tbody').delegate('tr', 'click', function() {

            $('.odd').closest("tr").css('background-color','white');
            $('.even').closest("tr").css('background-color','white');


            $(this).closest("tr").css('background-color','#bdc3c7');
                _selectRowObj=$(this).closest('tr');
                var data=dt.row(_selectRowObj).data();
                _selectedID=data.emp_leave_year_id;
                //alert(_selectedID);
                _isChecked = this.checked = true; //for checking if there is any highlighted field
                _isChecked = 1;
            });

        $('#btn_active').click(function(){
            if(_isChecked==1){
                setActiveYear().done(function(response){
                        showNotification(response); //dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        _isChecked=0;
                    }).always(function(){
                        $('#tbl_leave_year').DataTable().ajax.reload();
                        $.unblockUI();
                    });
            }
            else
            {
                alert("nothing Checked");
            }


        });

        $('#date_start').change(function() {
            _datestartvalue=$(this).val();
            getNextYear().done(function(response){
                        $('#date_end').val(response.next_year);
                        _dateendvalue=response.next_year;
                    }).always(function(){
                        $.unblockUI();
                    });
            });

        $('#tbl_leave_year tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            $('#modal_create_yearsetup').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.emp_leave_year_id;
            $('.transaction_type').text('Edit');



            $('#year').val(data.year).trigger("change");
            $('#year_type').val(data.year_type).trigger("change");


             $('#active_year').prop('disabled', true);
            if(data.active_year==1){
                $('#active_year').prop('checked', true);
                //alert(data.active_year);
                _isactive = 1;
            }

            else{
                $('#active_year').prop('checked', false);
                //alert(data.active_year);
                _isactive = 0;
            }

            //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

           // alert($('input[name="tax_exempt"]').length);
            //$('input[name="tax_exempt"]').val(0);
            //$('input[name="inventory"]').val(data.is_inventory);

            $('date,input,textarea,checkbox,select').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

        }); 

        $('#tbl_leave_year tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.emp_leave_year_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            removeYeartype().done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).remove().draw();
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

        $('.pagination').click(function(){
            _selectRowObj="";
            _isChecked = this.checked = false; //setting ischecked to no
            $('.odd').closest("tr").css('background-color','white');
            $('.even').closest("tr").css('background-color','white');
        });

        $('#frm_yeartype').on('click','input[id="active_year"]',function(){
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
            $('#modal_create_yearsetup').modal('show');
            clearFields($('#frm_yeartype'));
            $('#active_year').attr('checked', false);

            var active_year = new Date().getFullYear();
            $('#year').val(active_year).trigger("change");

        });

        $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_yeartype'))){
                if(_txnMode==="new"){
                    createYeartype().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_yeartype'))
                    }).always(function(){
                        $('#modal_create_yearsetup').modal('hide');
                        $.unblockUI();
                        $('.datepicker').hide();
                    });

                    $("input[type='checkbox']").on('change', function(){
                      $(this).val(this.checked ? "TRUE" : "FALSE");
                    })

                    return;
                }
                if(_txnMode==="edit"){
                    updateYeartype().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        clearFields($('#frm_yeartype'))
                    }).always(function(){

                        $('#modal_create_yearsetup').modal('hide');
                        $.unblockUI();
                        $('.datepicker').hide();
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

    var createYeartype=function(){
        var _data=$('#frm_yeartype').serializeArray();
        _data.push({name : "active_year" ,value : _isactive});
        _data.push({name : "date_end" ,value : _dateendvalue});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefYearSetup/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var updateYeartype=function(){

        var _data=$('#frm_yeartype').serializeArray();
        _data.push({name : "active_year" ,value : _isactive});
        _data.push({name : "emp_leave_year_id" ,value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefYearSetup/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var setActiveYear=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefYearSetup/transaction/activeyear",
            "data":({active_year : 1,emp_leave_year_id : _selectedID}),
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removeYeartype=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefYearSetup/transaction/delete",
            "data":{emp_leave_year_id : _selectedID}
        });
    };

    var getNextYear=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefYearSetup/transaction/getnextyear",
            "data":{date_start : _datestartvalue},
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
