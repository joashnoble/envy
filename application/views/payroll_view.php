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
    <!-- Select2 -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->    <script src="assets/js/plugins/fullcalendar/moment.min.js"></script>
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

        td.details-control1 {
            background: url('assets/img/Folder_Closed.png') no-repeat center center !important;
            cursor: pointer;
        }
        tr.details1 td.details-control1 {
            background: url('assets/img/Folder_Opened.png') no-repeat center center;
        }

        td.details-control2 {
            background: url('assets/img/Folder_Closed.png') no-repeat center center !important;
            cursor: pointer;
        }
        tr.details2 td.details-control2 {
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
        .numeric{
            text-align: left;
            width: 100%;
        }
        .odd{
            background-color: #eeeeee !important;
        }
        .boldlabel1{
            font-weight:bold;
            font-size: 12px;
        }
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td{
            padding:0px;
        }




    </style>
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
                        <li><a href="Payroll">Payroll</a></li>
                    </ol>

                    <div class="container-fluid">
                        <div id="div_employee_list">
                            <!-- <button class="btn btn_dtr right_dtr_view" style="background-color:#27ae60;color:white;">Open Daily Time Record</button> -->
                            <div class="panel panel-default">
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:1px;">
                                             <center><h2 style="color:white;font-weight:bold;">Employee List</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_employee_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                    <th style="padding:8px;"></th>
                                                    <th  style="padding:8px;">Full Name</th>
                                                    <th  style="padding:8px;">E-Code</th>
                                                    <th  style="padding:8px;">ID Number</th>
                                                 </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                <div class="panel-footer">
                                    <div class="col-sm-6 text-center" style="margin:0;padding:2px;">
                                        <a style="width:350px;border-radius:7px;" class="btn btn-success btn_dtr right_dtr_view">Open Daily Time Record</a>
                                    </div>
                                    <div class="col-sm-6 text-center" style="margin:0;padding:2px;">
                                        <ted style="color:#2c3e50;font-weight:bold;color:white;width:350px;border-radius:7px;" class="btn btn-success">
                                                <?php
                                                        foreach($emp_leave_year as $row)
                                                        {
                                                            echo $row->year_type.' :';
                                                            echo " ";
                                                            echo $row->date_start;
                                                            echo " TO ";
                                                             echo $row->date_end;
                                                        }
                                                ?>
                                        </ted>
                                    </div>
                                </div>
                            </div> <!--panel default -->

                        </div> <!--emp list -->
                    </div>

                    <div id="div_dtr_entry" style="display:none;">

                            <div class="panel panel-default">
                                <button class="btn delete"  id="btn_canceldtr" title="Create New Employee" >
                                    <span class="glyphicon glyphicon-arrow-left"></span></button>

                                <button class="btn btn_newdtr add right_dtr_create"  id="btn_newdtr" title="Create New Employee" >
                                    <span class="glyphicon glyphicon-plus"></span></button>

                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <h2 style="color:white;font-weight:bold;">Employee with DTR  </h2><br>
                                             <left><h5 style="color:white;font-weight:400;line-height:1px;margin-top:2px;"><period id="" class="periodcoveredtext"></period></h5></left>
                                              </div>

                                    <div class="panel-body table-responsive" style="padding-top:5px;">
                                        <table id="tbl_employee_dtr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th  style="padding:8px;">E-CODE</th>
                                                    <th  style="padding:8px;">Fullname</th>
                                                    <th  style="padding:8px;">Department</th>
                                                    <th  style="padding:8px;"><center>Action</center></th>
                                                 </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                <div class="panel-footer"></div>
                            </div> <!--panel default -->

                        </div> <!--Seminars and training list -->

                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->
            <div id="modal_employee_details" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2c3e50;">
                            <button type="button" class="close" style="color:white;"  data-dismiss="modal" aria-hidden="true">X</button>
                            <center><h3 class="modal-title" style="color:white;font-weight:450;"><datafullname id="datafullname"></datafullname></h3>
                            <h5  class="modal-title" style="color:white;font-size:15px;">[ ECODE : <dataecode id="dataecode"></dataecode> ] [ ID : <dataid id="dataid"></dataid> ]</h5></center>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <center><img class="loadingimg" id="dataimage" style="margin-top:4px;width:150px;height:150px;" src=""></img></center>
                                    </div>
                                    <div class="col-md-3"><p class="nomargin"><b>Gender</b> : <datagender id="datagender"></datagender></p>
                                        <p class="nomargin"><b>Birthdate</b> : <databirthdate id="databirthdate"></databirthdate></p>
                                        <p class="nomargin"><b>Civil Status</b> : <datacivilstatus id="datacivilstatus"></datacivilstatus></p>
                                        <p class="nomargin"><b>Blood Type</b> : <databloodtype id="databloodtype"></databloodtype></p>
                                        <p class="nomargin"><b>Height</b> : <dataheight id="dataheight"></dataheight></p>
                                        <p class="nomargin"><b>Weight</b> : <dataweight id="dataheight"></dataweight></p>
                                        <p class="nomargin"><b>Religion</b> : <datareligion id="dataheight"></datareligion></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="nomargin"><b>SSS</b> : <datasss id="datasss"></datasss></p>
                                        <p class="nomargin"><b>Phil Health</b> : <dataphilhealth id="dataphilhealth"></dataphilhealth></p>
                                        <p class="nomargin"><b>Pag-Ibig :</b> : <datapagibig id="datapagibig"></datapagibig></p>
                                        <p class="nomargin"><b>TIN :</b> : <datatin id="datatin"></datatin></p>
                                        <p class="nomargin"><b>Account No.</b> : <dataaccountnumber id="dataaccountnumber"></dataaccountnumber></p>
                                        <p class="nomargin"><b>Tax Code</b> : <datataxcode id="datataxcode"></datataxcode></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="boldlabel"><h4 class="boldlabel"><span class="glyphicon glyphicon-info-sign fa-lg"></span> Employee Information</h4><hr style="height:1px;background-color:black;"></hr></div>
                                <div class="row"> <!-- 2nd row -->
                                    <div class="col-md-3">
                                        <center></center>
                                    </div>
                                    <div class="col-md-4"><p class="nomargin"><b>Employee Type</b> : <dataemploymenttype id="dataemploymenttype"></dataemploymenttype></p>
                                        <p class="nomargin"><b>Remarks</b> : <dataremarks id="dataremarks"></dataremarks></p>
                                        <p class="nomargin"><b>Department</b> : <datadepartment id="datadepartment"></datadepartment></p>
                                        <p class="nomargin"><b>Position</b> : <dataposition id="dataposition"></dataposition></p>
                                        <p class="nomargin"><b>Branch</b> : <databranch id="databranch"></databranch></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="nomargin"><b>Section</b> : <datasection id="datasection"></datasection></p>
                                        <p class="nomargin"><b>Pay Type</b> :<datapaytype id="datapaytype"></datapaytype></p>
                                        <p class="nomargin"><b>Employment Date</b> : <dataemploymentdate id="dataemploymentdate"></dataemploymentdate></p>
                                        <p class="nomargin"><b>Date Regular</b> : <datadateregular id="datadateregular"></datadateregular></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="boldlabel"><h4 class="boldlabel"><span class="glyphicon glyphicon-info-sign fa-lg"></span> Contact Information</h4><hr style="height:1px;background-color:black;"></hr></div>
                                <div class="row"> <!--2nd row -->
                                    <div class="col-md-3">
                                        <center></center>
                                    </div>
                                    <div class="col-md-4"><p class="nomargin"><b>Address 1</b> : <dataaddress1 id="dataaddress1"></dataaddress1></p>
                                        <p class="nomargin"><b>Address 2</b> : <dataaddress2 id="dataaddress2"></dataaddress2></p>
                                        <p class="nomargin"><b>Email Address</b> : <dataemailaddress id="dataemailaddress"></dataemailaddress></p>
                                    </div>
                                    <div class="col-md-4"><p class="nomargin"><b>Mobile No.</b> : <datamobilenumber id="datamobilenumber"></datamobilenumber></p>
                                        <p class="nomargin"><b> Phone No.</b> : <dataphonenumber id="dataphonenumber"></dataphonenumber></p>
                                    </div>
                                </div>
                                </div>
                                </div>

                        <div class="modal-footer">
                            <button id="" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="modal_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
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
                    </div>
                </div>
                </div>

                <div id="modal_dtr" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> Daily Time Record </h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_search_dtr">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Year : </label>
                                    <select class="form-control" id="year" data-error-msg="This Field is Required!" required>
                                        <?php $minyear=1990; $maxyear=2500;
                                            while($minyear!=$maxyear){
                                                echo '<option value='.$minyear.'>'.$minyear.'</option>';
                                                $minyear++;
                                            }

                                        ?>
                                        <!-- <option value="0">[ Select Year ]</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option> -->
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Pay Period : </label>
                                    <select id='pay_period' class='form-control' name='emp_leaves_entitlement_id'>

                                </select>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Period Start:</label>
                                    <input type="text" class="form-control" id="period_start" name="pay_period_start" placeholder="" data-error-msg="This Field is Required!" disabled required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Period End:</label>
                                    <input type="text" class="form-control" id="period_end" name="pay_period_end" placeholder="" data-error-msg="This Field is Required!" disabled required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">Department:</label>
                                          <select class="form-control" id="ref_department_id" name="ref_department_id" id="sel1">
                                            <option value="all">All Departments</option>
                                           <?php
                                                                foreach($ref_department as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_department_id  .'">'.$row->department.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">Branch:</label>
                                          <select class="form-control" id="ref_branch_id" name="ref_branch_id" id="sel1">
                                            <option value="all">All Branch</option>
                                           <?php
                                                                foreach($ref_branch as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_branch_id  .'">'.$row->branch.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_select_dtr" type="button" class="btn btn-success">Select</button>
                            <button id="btn_close_dtr" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_references" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> </span><texttitle id="title_modal"></texttitle></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_references">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel"><texttitle id="name_modal"></texttitle> :</label>
                                    <input type="text" class="form-control" id="postname" name="postname" placeholder="" data-error-msg="This Field is Required!" required>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel"><texttitle id="description_modal"></texttitle> :</label>
                                    <textarea type="text" class="form-control" id="postdescription" name="postdescription" placeholder="Department Description"></textarea>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_new_create_reference" type="button" class="btn btn-success">Save</button>
                            <button id="btn_close_reference" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_new_dtr" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"><dtr style="font-weight:bold;">DTR:</dtr> <empname id="empname" style="font-weight:400;"></empname></span><textdailytimerecord id="textdailytimerecord"></textdailytimerecord></h4>
                            <p style="color:white;margin:0px;">
                            <?php
                                                                    foreach($emp_leave_year as $row)
                                                                    {
                                                                        echo "[ Current Year : ";
                                                                        echo $row->year_type;
                                                                        echo " FROM : ";
                                                                        echo $row->date_start;
                                                                        echo " TO : ";
                                                                         echo $row->date_end;
                                                                    }
                                                                    ?> ]
                            </p>
                        </div>

                        <div class="modal-body" style="padding-top:3px;">

                            <div class="tab-content">
                              <div id="home" class="tab-pane fade in active">
                                <form id="frm_dtr">
                            <div class="row" id="editmode">
                              <div class="col-md-5">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel inlinecustomlabel-sm2">Employee :</label>
                                    <select class="form-control" style="height:30px;font-size:12px;" id="employee_wo_dtr" data-error-msg="Employee is Required!" required>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel inlinecustomlabel-sm2" >Ecode :</label>
                                    <input type="text" class="form-control inputcustom" id="ecode" name="ecode" placeholder="" data-error-msg="This Field is Required!" disabled>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel inlinecustomlabel-sm2">Department :</label>
                                    <input type="text" class="form-control inputcustom" id="ref_dept_dtr" name="ref_dept_dtr" placeholder="" data-error-msg="This Field is Required!" disabled>
                                    </select>
                                </div>
                              </div>
                            </div>
                            <div class="row" style="margin-top:2px;">
                              <div class="col-md-3">
                                <div style="margin-top:4px;width:5px;height:25px;background-color:#2c3e50;width:100%;text-align:center;color:white;border-radius:5px;">
                                    <p style="padding-top:2px;font-weight:bold;">REGULAR DAY</p>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">REGULAR</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="reg" name="reg" placeholder="Hours" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">SUNDAY</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="sun" name="sun" placeholder="Hours" data-error-msg="This Field is Required!">
                                        </div>
                                </div>

                                <div style="margin-top:4px;width:5px;height:25px;background-color:#2c3e50;width:100%;text-align:center;color:white;border-radius:5px;">
                                    <p style="padding-top:2px;font-weight:bold;">HOLIDAYS</p>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">REG.HOLIDAY</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="reg_hol" name="reg_hol" placeholder="Hours" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">SPE.HOLIDAY</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="spe_hol" name="spe_hol" placeholder="Hours" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div style="margin-top:4px;width:5px;height:25px;background-color:#2c3e50;width:100%;text-align:center;color:white;border-radius:5px;">
                                    <p style="padding-top:2px;font-weight:bold;">SUNDAY HOLIDAYS</p>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">REG.HOLIDAY</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="sun_reg_hol" name="sun_reg_hol" placeholder="Hours" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">SPE.HOLIDAY</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="sun_spe_hol" name="sun_spe_hol" placeholder="Hours" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div style="margin-top:4px;width:5px;height:25px;background-color:#2c3e50;width:100%;text-align:center;color:white;border-radius:5px;">
                                    <p style="padding-top:2px;font-weight:bold;">EXCUSED LEAVE</p>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">W/O PAY</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="days_wout_pay" name="days_wout_pay" placeholder="Days" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">W/ PAY</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="days_with_pay" name="days_with_pay" placeholder="Days" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-6 inlinecustomlabel-sm2" for="inputPassword1">LATE</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control numeric inputcustom" id="minutes_late" name="minutes_late" placeholder="Minutes" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                              </div>
                              <div class="col-md-5">
                                <div style="margin-top:4px;width:5px;height:25px;background-color:#2c3e50;width:100%;text-align:center;color:white;border-radius:5px;">
                                    <p style="padding-top:2px;font-weight:bold;">OVERTIME</p>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">REGULAR (Hrs) :</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control numeric inputcustom" id="ot_reg" name="ot_reg" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">REGULAR HOLIDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="ot_reg_reg_hol" name="ot_reg_reg_hol" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">SPECIAL HOLIDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="ot_reg_spe_hol" name="ot_reg_spe_hol" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <hr style="height:2px;background-color:#2c3e50;width:100%;margin:0px;padding:0px;"></hr>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">SUNDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="ot_sun" name="ot_sun" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">REGULAR HOLIDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric" id="ot_sun_reg_hol" name="ot_sun_reg_hol" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">SPECIAL HOLIDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="ot_sun_spe_hol" name="ot_sun_spe_hol" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>

                              </div>
                              <div class="col-md-4">
                                <div style="margin-top:4px;width:5px;height:25px;background-color:#2c3e50;width:100%;text-align:center;color:white;border-radius:5px;">
                                    <p style="padding-top:2px;font-weight:bold;">NIGHT SHIFT DIFFERENTIAL</p>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">REGULAR (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="nsd_reg" name="nsd_reg" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">REGULAR HOLIDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="nsd_reg_reg_hol" name="nsd_reg_reg_hol" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">SPECIAL HOLIDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="nsd_reg_spe_hol" name="nsd_reg_spe_hol" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <hr style="height:2px;background-color:#2c3e50;width:100%;margin:0px;padding:0px;"></hr>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">SUNDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="nsd_sun" name="nsd_sun" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">REGULAR HOLIDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="nsd_sun_reg_hol" name="nsd_sun_reg_hol" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                                <div class="form-group">
                                      <label class="col-sm-8 inlinecustomlabel-sm2" for="inputPassword1">SPECIAL HOLIDAY (Hrs) :</label>
                                        <div class="col-sm-4">
                                             <input type="text" class="form-control numeric inputcustom" id="nsd_sun_spe_hol" name="nsd_sun_spe_hol" placeholder="" data-error-msg="This Field is Required!">
                                        </div>
                                </div>
                              </div>
                              <div class="col-md-9">
                                    <table id="tbl_dtr_deduction" class="table table-striped table-bordered customtable" style="padding:0px !important;margin:0px !important;" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="customth" style="width:1px;"style="padding:0px !important;margin:0px !important;"></th>
                                                    <th class="customth" style="width:1px;"style="padding:0px !important;margin:0px !important;"></th>
                                                    <th class="customth" style="padding:0px !important;margin:0px !important;">Description</th>
                                                    <th class="customth" style="padding:0px !important;margin:0px !important;">Deducted Amount</th>
                                                    <th class="customth" style="padding:0px !important;margin:0px !important;">Deduct Status</th>
                                                    <th class="customth" style="padding:0px !important;margin:0px !important;">Is Deduct</th>
                                                 </tr>
                                            </thead>
                                            <tbody id="deduction_body" style="padding:0px !important;margin:0px !important;font-size:8pt;scroll;height: 100px;">

                                            </tbody>
                                        </table>
                              </div>
                            </div>
                            </form>
                              </div>
                              <!-- <div id="menu1" class="tab-pane fade">
                                <br>
                                    <table id="tbl_dtr_deduction" class="table table-striped table-bordered customtable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="customth" style="width:5px;"></th>
                                                    <th class="customth">Description</th>
                                                     <th class="customth">Deducted Amount</th>
                                                    <th class="customth">Is Deduct?</th>
                                                 </tr>
                                            </thead>
                                            <tbody id="deduction_body">

                                            </tbody>
                                        </table>
                              </div> -->
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button id="btn_new_dtr_save" type="button" class="btn btn-success">Save</button>
                            <button id="btn_close_new_dtr" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>
<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _txnModeRate; var _selectedID;
    var _selectedDateCovered; var _selectedYear; var _periodstart; var _periodend; var _selectedIDDepartment="all"; var _selectedIDBranch="all";
    var _selectedemprate; var _selectedEmpget; var _pusheddata; var _selectRowObjdtr; var _selectedIDdtr;
    var _pay_period_sequence;
    var initializeControls=function(){
        dt=$('#tbl_employee_list').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Employee/transaction/list",
            "type": "POST",
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "active": 1,
                    "inactive": 0
                    });
                }
            },
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                { targets:[2],data: "full_name" },
                { targets:[3],data: "ecode" },
                { targets:[4],data: "id_number" },

            ],
            language: {
                         searchPlaceholder: "Search Employee"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "9px"
                });
            }
        });


        $('.numeric').autoNumeric('init');


    }();

    var getDtr=function(){
                    dt_dtr=$('#tbl_employee_dtr').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "order": [[ 1, "asc" ]],
            "bLengthChange":false,
            "ajax": {
            "url": "DailyTimeRecord/transaction/getdtrlist",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "pay_period_id": _selectedYear,//id of pay period
                    "ref_department_id": _selectedIDDepartment,
                    "ref_branch_id": _selectedIDBranch
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "ecode" },
                { targets:[1],data: "full_name" },
                { targets:[2],data: "department" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){

                        return '<center>'+right_dtr_edit+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Employee Dtr"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "9px"
                });
            }

        });

    }

    var getDtrDeduction=function(){
        dt_dtr_deductions=$('#tbl_dtr_deduction').DataTable({
            "dom": '<"toolbar">frtip',
            "pageLength": 10,
            "bLengthChange":false,
            "scrollY":        "100px",
            "scrollCollapse": true,
            "paging":         false,
            "searching": false,
            "ajax": {
            "url": "RefDeductionSetup/transaction/getdeductionlist",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID,
                    "pay_period_id": _selectedYear, //id of the user
                    "pay_period_sequence": _pay_period_sequence

                    } );
                }
            },
            "columns": [
                { targets:[0],data: "deduction_id",
                    render: function (data, type, full, meta){

                            return "<center><input type='checkbox' id='deduction_id' name='deduction_id[]' value="+data+" checked='checked' hidden></center>";

                    }
                },
                { targets:[1],data: "deduction_regular_id",
                    render: function (data, type, full, meta){

                            return "<center><input type='checkbox' id='deduction_id' name='deduction_regular_id[]' value="+data+" checked='checked' hidden></center>";

                    }
                },
                { targets:[2],data: "deduction_desc" },
                { targets:[3],data: "deduction_per_pay_amount",
                    render: $.fn.dataTable.render.number( ',', '.', 2 )
                },
                { targets:[4],data: "is_deduct",
                    render: function (data, type, full, meta){
                        //alert(data);return "<center><input type='checkbox' id='dtr_deduction_checkbox' name='dtr_deduction_checkbox[]' value="+data+"></center>";
                        if(data == 1){
                            return "<center><span style='color:#37d077' class='glyphicon glyphicon-ok'></span></center>";
                        }

                        else{
                            return "<center><span style='color:#e74c3c' class='glyphicon glyphicon-remove'></span></center>";
                        }
                    }
                },
                { targets:[5],data: "deduction_id",
                    render: function (data, type, full, meta){
                        //alert(data);


                            return "<center><input type='checkbox' id='dtr_deduction_checkbox' name='dtr_deduction_checkbox[]' value="+data+"></center>";




                    }
                },

            ],
            language: {
                         searchPlaceholder: "Search Deduction"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "0px"
                });
            }
        });


    }

    var getDtrDeductionEdit=function(){
        dt_dtr_deductions=$('#tbl_dtr_deduction').DataTable({
            "dom": '<"toolbar">frtip',
            "pageLength": 10,
            "bLengthChange":false,
            "scrollCollapse": true,
            "paging":         false,
            "searching": false,
            "ajax": {
            "url": "RefDeductionSetup/transaction/getdeductionlistedit",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedIDdtremployee,
                    "dtr_id": _selectedIDdtr

                    } );
                }
            },
            "columns": [
                { targets:[0],data: "deduction_id",
                    render: function (data, type, full, meta){

                            return "<center><input type='checkbox' id='deduction_id' name='deduction_id[]' value="+data+" checked='checked' hidden></center>";

                    }
                },
                { targets:[1],data: "deduction_regular_id",
                    render: function (data, type, full, meta){

                            return "<center><input type='checkbox' id='deduction_id' name='deduction_regular_id[]' value="+data+" checked='checked' hidden></center>";

                    }
                },
                { targets:[2],data: "deduction_desc" },
                { targets:[3],data: "deduction_per_pay_amount",
                    render: $.fn.dataTable.render.number( ',', '.', 2 )
                },
                { targets:[4],data: "is_deduct",
                    render: function (data, type, full, meta){
                        //alert(data);return "<center><input type='checkbox' id='dtr_deduction_checkbox' name='dtr_deduction_checkbox[]' value="+data+"></center>";
                        if(data == 1){
                            return "<center><span style='color:#37d077' class='glyphicon glyphicon-ok'></span></center>";
                        }

                        else{
                            return "<center><span style='color:#e74c3c' class='glyphicon glyphicon-remove'></span></center>";
                        }
                    }
                },
                { targets:[5],data: null,
                    render: function (data, type, full, meta){
                        //alert(data);
                            /*if(data!=null){
                                return "<center><input type='checkbox' id='dtr_deduction_checkbox' name='dtr_deduction_checkbox[]' checked='checked' value="+data+"></center>";
                            }
                            else{*/
                            if (data.is_deduct == 1){
                                return "<center><input type='checkbox' id='dtr_deduction_checkbox' name='dtr_deduction_checkbox[]' value="+data.deduction_id+" checked></center>";
                            }
                            else{
                                return "<center><input type='checkbox' id='dtr_deduction_checkbox' name='dtr_deduction_checkbox[]' value="+data.deduction_id+"></center>";
                            }
                           // }

                    }
                },

            ],
            language: {
                         searchPlaceholder: "Search Deduction"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').css({
                    "padding": "0px"
                });
            }
        });


    }


    var bindEventHandlers=(function(){
        var detailRows = [];
         var detailRows1 = [];

        /*$('#tbl_employee_list tbody').on( 'click', 'tr td.details-control', function () {
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
        } );*/

        $('#tbl_employee_list tbody').on( 'click', 'tr td.details-control', function () {
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();

            /*_selectedID=data.emp_rates_duties_id;*/
            /*alert("aw");*/
            $('#datafullname').text(' '+data.full_name);
            $('#dataecode').text(' '+data.ecode);
            $('#dataid').text(' '+data.id_number);
            $('#dataimage').attr('src',data.image_name);
            $('#datagender').text(' '+data.gender);
            $('#databirthdate').text(' '+data.birthdate);
            $('#datacivilstatus').text(' '+data.civil_status);
            $('#databloodtype').text(' '+data.blood_type);
            $('#dataheight').text(' '+data.height);
            $('#dataweight').text(' '+data.weight);
            $('#datareligion').text(' '+data.religion);
            $('#datasss').text(' '+data.sss);
            $('#dataphilhealth').text(' '+data.phil_health);
            $('#datapagibig').text(' '+data.pag_ibig);
            $('#datatin').text(' '+data.tin);
            $('#dataaccountnumber').text(' '+data.bank_account);
            $('#datataxcode').text(' '+data.tax_code);
            $('#dataemploymenttype').text(' '+data.employment_type);
            $('#dataremarks').text(' '+data.status);
            $('#datadepartment').text(' '+data.department);
            $('#dataposition').text(' '+data.position);
            $('#databranch').text(' '+data.branch);
            $('#datasection').text(' '+data.section);
            $('#datapaytype').text(' '+data.payment_type);
            $('#dataemploymentdate').text(' '+data.employment_date);
            $('#dataphilhealth').text(' '+data.date_regularization);
            $('#dataaddress1').text(' '+data.address_one);
            $('#dataaddress2').text(' '+data.address_two);
            $('#dataemailaddress').text(' '+data.email_address);
            $('#datamobilenumber').text(' '+data.cell_number);
            $('#dataphonenumber').text(' '+data.telphone_number);
            $('#modal_employee_details').modal('toggle');

        } );

        $('#year').change(function() {
            _selectedYear=$(this).val();
            //alert(_selectedYear);
            getpayperiod().done(function(response){
                        var show2select="";
                        if(response.data.length==0){
                            $('#pay_period').html("<option>No Result</option>");
                            $('#period_start').val("");
                            $('#period_end').val("");
                            return;
                        }
                        var jsoncount=response.data.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option value='+response.data[i].pay_period_start+'~'+response.data[i].pay_period_end+'~'+response.data[i].pay_period_id+'~'+response.data[i].pay_period_sequence+'>'+response.data[i].pay_period_start+' - '+response.data[i].pay_period_end+'</option>';
                         }
                         $('#pay_period').html(show2select);
                         var temppayperiod = $('#pay_period').val();
                        var payperiod = temppayperiod.split(/~/)
                        $('#period_start').val(payperiod[0]);
                        $('#period_end').val(payperiod[1]);
                        _selectedYear=payperiod[2];
                        _pay_period_sequence=payperiod[3];
                        //alert(_pay_period_sequence);
                        $('.periodcoveredtext').text('Period Covered : '+payperiod[0]+' '+payperiod[1]);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                        $('.modal_file_leave').modal('show');
                    });


            });

        $('#pay_period').change(function() {
            _payperiod=$(this).val();

            //alert(_yearperiod);
            var payperiod = _payperiod.split(/~/)
            $('#period_start').val(payperiod[0]);
            $('#period_end').val(payperiod[1]);
            _selectedYear=payperiod[2];
            _pay_period_sequence=payperiod[3];
            //alert(_pay_period_sequence);
            $('.periodcoveredtext').text('Period Covered : '+payperiod[0]+'-'+payperiod[1]);
            });

        $('#ref_department_id').change(function() {
            _selectedIDDepartment=$(this).val();
            //alert(_selectedIDDepartment);
            });

        $('#ref_branch_id').change(function() {
            _selectedIDBranch=$(this).val();
            //alert(_selectedIDGroup);
            });


        $('#btn_new').click(function(){
            clearFields($('#frm_employee'))
            _txnMode="new";
            $('#emp_religion').val(1);
            $('#emp_civilstatus').val("Single");
            $('#emp_processaccount').val(0);
            $('#emp_exemptss').val(0);
            $('#emp_exemptphilhealth').val(1);
            $('#emp_exemptpagibig').val(0);
            $('#emp_taxcode').val(0);
            $(".date-picker").val('<?php echo date("m/d/Y"); ?>');
            hideemployeeList();
            showemployeeFields();
        });

        $('#tbl_employee_list tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.employee_id;

            $('#emp_civilstatus').val(data.civil_status);
            $('#emp_religion').val(data.ref_religion_id);
            $('#emp_processaccount').val(data.bank_account_isprocess);
            $('#emp_taxcode').val(data.tax_code);
            $('#emp_exemptss').val(data.exmpt_sss);
            $('#emp_exemptphilhealth').val(data.exmpt_philhealth);
            $('#emp_exemptpagibig').val(data.exmpt_pagibig);
            if(data.image_name==""){
                 $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
            }
            else{
                $('img[name="img_user"]').attr('src',data.image_name);
            }

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

            hideemployeeList();
            showemployeeFields();

        });

        $('#tbl_employee_list tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.employee_id;

            $('#modal_confirmation').modal('show');
        });


        $('#btn_yes').click(function(){
            removeEmployee().done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).remove().draw();
                $.unblockUI();
            });
        });

        $('#btn_remove_photo').click(function(event){
                event.preventDefault();
                $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
            });

                //CREATE NEW EMPLOYEEE
        $('#btn_save').click(function(){
            if(validateRequiredFields($('#frm_employee'))){
                if(_txnMode=="new"){
                    createEmployee().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_employee'))
                    }).always(function(){
                        $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode=="edit"){
                    updateEmployee().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        clearFields($('#frm_employee'))
                        hideemployeeFields();
                        showemployeeList();
                    }).always(function(){
                        $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
                        $.unblockUI();
                    });
                    return;
                }
            }
        });


        $('#btn_dtr').click(function(){

            var d = new Date();
            var n = d.getFullYear();
            /*var d = new Date();*/
            /*var n = 2017;*/
             $('#year').val(n);
             _selectedYear=n;
            //alert(_selectedYear);
            getpayperiod().done(function(response){
                        var show2select="";
                        if(response.data.length==0){
                            $('#pay_period').html("<option>No Result</option>");
                            $('#period_start').val("");
                            $('#period_end').val("");
                            return;
                        }
                        var jsoncount=response.data.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option value='+response.data[i].pay_period_start+'~'+response.data[i].pay_period_end+'~'+response.data[i].pay_period_id+'~'+response.data[i].pay_period_sequence+'>'+response.data[i].pay_period_start+' - '+response.data[i].pay_period_end+'</option>';
                         }
                         $('#pay_period').html(show2select);
                         var temppayperiod = $('#pay_period').val();
                        var payperiod = temppayperiod.split(/~/)
                        $('#period_start').val(payperiod[0]);
                        $('#period_end').val(payperiod[1]);
                        _selectedYear=payperiod[2];
                        _pay_period_sequence=payperiod[3];
                        $('.periodcoveredtext').text('Period Covered : '+payperiod[0]+'-'+payperiod[1]);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                        $('.modal_file_leave').modal('show');
                    });

            $('#modal_dtr').modal('toggle');
            $('#payperiodhere').html("<option>aw</option>"); //noresult for option
        });

        $('.btn_dtr').click(function(){

            var d = new Date();
            var n = d.getFullYear();
            /*var d = new Date();*/
            /*var n = 2017;*/
             $('#year').val(n);
             _selectedYear=n;
            //alert(_selectedYear);
            getpayperiod().done(function(response){
                        var show2select="";
                        if(response.data.length==0){
                            $('#pay_period').html("<option>No Result</option>");
                            $('#period_start').val("");
                            $('#period_end').val("");
                            return;
                        }
                        var jsoncount=response.data.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option value='+response.data[i].pay_period_start+'~'+response.data[i].pay_period_end+'~'+response.data[i].pay_period_id+'~'+response.data[i].pay_period_sequence+'>'+response.data[i].pay_period_start+' - '+response.data[i].pay_period_end+'</option>';
                         }
                         $('#pay_period').html(show2select);
                         var temppayperiod = $('#pay_period').val();
                        var payperiod = temppayperiod.split(/~/)
                        $('#period_start').val(payperiod[0]);
                        $('#period_end').val(payperiod[1]);
                        _selectedYear=payperiod[2];
                        _pay_period_sequence=payperiod[3];
                        $('.periodcoveredtext').text('Period Covered : '+payperiod[0]+'-'+payperiod[1]);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                        $('.modal_file_leave').modal('show');
                    });

            $('#modal_dtr').modal('toggle');
            $('#payperiodhere').html("<option>aw</option>"); //noresult for option
        });

        $('#btn_select_dtr').click(function(){
            if(validateRequiredFields($('#frm_search_dtr'))){
            showSpinningProgressLoading();
            //_selectedDateCovered = 'Period Covered: Oct 15, 2016 - Oct 30,2016';
            //$('.periodcoveredtext').text(_selectedDateCovered);
            showdtr();
            getDtr();
            $('#modal_dtr').modal('toggle');

        }
        });

        $('#employee_wo_dtr').change(function() {
            var tempdept = $('#employee_wo_dtr option:selected').attr('id');
            $('#ref_dept_dtr').val(tempdept);
            //var tempwodtrval = $('#employee_wo_dtr').val();
            var tempwodtr = $('#employee_wo_dtr option:selected').text();
            var wodtr = tempwodtr.split(/ ~ /)
            //var wodtrval = tempwodtrval.split(/~/)
            var tempwodtrval = $('#employee_wo_dtr').val();
            var wodtrval = tempwodtrval.split(/~/)
            _selectedID=wodtrval[0];
            _selectedIDdtremployee = _selectedID;
            
            // chckstatus().done(function(response){
            //   var chck_id = response[0].ref_payment_type_id;

            //   if (chck_id == 2){
            //     $('input[name=reg]').prop('disabled',true);
            //     $('input[name=reg]').val('Auto');
            //   }
            //   else {
            //     $('input[name=reg]').prop('disabled',false);
            //     $('input[name=reg]').val('');
            //   }

            // }).always(function(){
            // });
            /*alert(_selectedID);*/
            $('#tbl_dtr_deduction').dataTable().fnDestroy();
            getDtrDeduction();
            $('#ecode').val(wodtr[0]);
            //alert(wodtr[0]);
           /* var tempempid=$(this).val();
            var empidsplit = tempempid.split(/~/)
            _selectedID=empidsplit[0];
            _selectedemprate=empidsplit[2];
            console.log(_selectedemprate);
            //alert(_selectedID);
            getempwodtrgetdept().done(function(response){
                        if(response.data[0]==null || response.data[0].department==null){
                        console.log('walang laman');
                        $('#ref_dept_dtr').val('Not Set');
                        }
                        else{
                            $('#ref_dept_dtr').val(response.data[0].department);
                        }
                        //$('#period_start').val(payperiod[0]);
                        //$('#period_end').val(payperiod[1]);
                        //_selectedYear=payperiod[2];
                        //$('.periodcoveredtext').text(temppayperiod);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }
                        //console.
                    }).always(function(){
                        $.unblockUI();
                    });
                    */
            });

        $('#btn_canceldtr').click(function(){
            hidedtr();


            $('#tbl_employee_dtr').dataTable().fnDestroy();
            $('#tbl_employee_dtr').fnClearTable();
        });

        $('#btn_newdtr').click(function(){
            _txnMode="newdtr";
            $('#employee_wo_dtr').attr('required',true);
            clearFields($('#frm_dtr'))
            $('#editmode').show();
            $('#tbl_dtr_deduction').dataTable().fnClearTable();
            $('#tbl_dtr_deduction').dataTable().fnDestroy();
            $('input[name=reg]').prop('disabled',false);
            $('#empname').text("New");
            getempwodtr().done(function(response){
                        var show2select="";
                        if(response.data.length==0){
                            $('#employee_wo_dtr').html("<option value='0'>No Result</option>");
                            return;
                        }
                        var jsoncount=response.data.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option id='+response.data[i].department+' value='+response.data[i].employee_id+'~'+response.data[i].department+'~'+response.data[i].emp_rates_duties_id+'>'+response.data[i].ecode+' ~ '+response.data[i].first_name+' '+response.data[i].middle_name+' '+response.data[i].last_name+'</option>';
                         }
                         $('#employee_wo_dtr').html(show2select);
                        var tempwodtrval = $('#employee_wo_dtr').val();
                        var tempwodtr = $('#employee_wo_dtr').text();
                        var wodtr = tempwodtr.split(/ ~ /)
                        var wodtrval = tempwodtrval.split(/~/)
                        $('#ecode').val(wodtr[0]);
                        var tempdept = $('#employee_wo_dtr option:selected').attr('id');
                        $('#ref_dept_dtr').val(tempdept);
                        //$('#ref_dept_dtr').val(wodtrval[1]);
                        _selectedID=wodtrval[0];
                        _selectedIDdtremployee = _selectedID;
                        // chckstatus().done(function(response){
                        //   var chck_id = response[0].ref_payment_type_id;

                        //   if (chck_id == 2){
                        //     $('input[name=reg]').prop('disabled',true);
                        //     $('input[name=reg]').val('Auto');
                        //   }
                        //   else {
                        //     $('input[name=reg]').prop('disabled',false);
                        //   }

                        // }).always(function(){
                        // });
                        _selectedEmpget=wodtr[0];
                        getDtrDeduction();
                        //$('#period_start').val(payperiod[0]);
                        //$('#period_end').val(payperiod[1]);
                        //_selectedYear=payperiod[2];
                        //$('.periodcoveredtext').text(temppayperiod);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                    });
            $('#modal_new_dtr').modal('toggle');
        });

        $('#tbl_employee_dtr tbody').on('click','button[name="dtr_edit"]',function(){
            _txnMode="editdtr";
            $('#employee_wo_dtr').removeAttr('required');
            $('#tbl_dtr_deduction').dataTable().fnDestroy();
            _selectRowObjdtr=$(this).closest('tr');
            var data=dt_dtr.row(_selectRowObjdtr).data();
            _selectedIDdtr=data.dtr_id;
            $('#empname').text(data.full_name);
            _selectedIDdtremployee=data.employee_id;
            getDtrDeductionEdit();


            // chckstatus().done(function(response){
            //       var chck_id = response[0].ref_payment_type_id;

            //       if (chck_id == 2){
            //         $('input[name=reg]').prop('disabled',true);
            //         $('input[name=reg]').val('Auto');
            //       }
            //       else {
            //         $('input[name=reg]').prop('disabled',false);
            //       }

            //     }).always(function(){
            // });

            $('#modal_new_dtr').modal('toggle');
            $('#editmode').hide();

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


        });



        $('#btn_new_dtr_save').click(function(){
            if(validateRequiredFields($('#frm_dtr'))){
                if(_txnMode=="newdtr"){
                    createDtr().done(function(response){
                    showNotification(response);
                    dt_dtr.row.add(response.row_added[0]).draw();
                    }).always(function(){
                        $.unblockUI();
                        var selectwodtr = document.getElementById("employee_wo_dtr");
                        selectwodtr.remove(selectwodtr.selectedIndex);
                        $('#modal_new_dtr').modal('toggle');
                    });
                    return;
                }
                if(_txnMode=="editdtr"){
                    updateDtr().done(function(response){
                    showNotification(response);
                    dt_dtr.row(_selectRowObjdtr).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_new_dtr').modal('toggle');
                    });
                    return;
                }
            }
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
                url : 'Employee/transaction/upload',
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


    })();


    $('#btn_browse').click(function(event){
                    event.preventDefault();
                    $('input[name="file_upload[]"]').click();
             });

    _employees=$("#employee_wo_dtr").select2({
        dropdownParent: $("#modal_new_dtr"),
            placeholder: "Select Employee",
            allowClear: true
        });


    var createEmployee=function(){
        var _data=$('#frm_employee').serializeArray();
        _data.push({name : "image_name" ,value : $('img[name="img_user"]').attr('src')});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var chckstatus=function(){
        var _data=$('#').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedIDdtremployee});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"DailyTimeRecord/transaction/chckstatus",
            "data":_data
        });
    };

    var updateEmployee=function(){
        var _data=$('#frm_employee').serializeArray();
        _data.push({name : "image_name" ,value : $('img[name="img_user"]').attr('src')});

        console.log(_data);
        _data.push({name : "employee_id" ,value : _selectedID});
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removeEmployee=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/delete",
            "data":{employee_id : _selectedID},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var getpayperiod=function(){
        var _data=$('#').serializeArray();
        _data.push({name : "year" ,value : _selectedYear});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefPayPeriodSetup/transaction/getpayperiod",
            "data":_data,
            "beforeSend": showSpinningProgressLoading()
        });
    };

    var getempwodtr=function(){
        var _data=$('#').serializeArray();
        _data.push({name : "pay_period_id" ,value : _selectedYear});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"DailyTimeRecord/transaction/getdtr",
            "data":_data,
            "beforeSend": showSpinningProgressLoading()
        });
    };

    var getempwodtrgetdept=function(){
        var _data=$('#').serializeArray();
        //_data.push({name : "emp_rates_duties_id" ,value : _selectedemprate});
        _data.push({name : "employee_id" ,value : _selectedID});


        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/getdept",
            "data":_data,
            "beforeSend": showSpinningProgressLoading()
        });
    };

    var getDeduct=function(){
        //var _data=$('#tbl_dtr_deduction').serializeArray();
        //_data.push({name : "emp_rates_duties_id" ,value : _selectedemprate});


        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/list",
            "data":data,
            "beforeSend": showSpinningProgressLoading()
        });
    };

    var createDtr=function(){
       //var params = $("#tbl_dtr_deduction :input").serializeArray();
       var oTable = $('#tbl_dtr_deduction').dataTable();
        var data = $('input', oTable.fnGetNodes()).serialize();
       var _data=$('#frm_dtr').serialize()+'&'+$.param({'pay_period_id':_selectedYear,'employee_id':_selectedID}); //trick to merge 2 serialize and add additional data
      //var aww={name : "pay_period_id" ,value : _selectedYear};
       //_pusheddata.push({name : "employee_id" ,value : _selectedID  });
       console.log(data);
       var newdata = data + '&' + _data;
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"DailyTimeRecord/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgressLoading()
        });
    };

    var updateDtr=function(){
       var _data=$('#frm_dtr').serialize()+'&'+$.param({'dtr_id':_selectedIDdtr,'employee_id':_selectedIDdtremployee}); //trick to merge 2 serialize and add additional data
      //var aww={name : "pay_period_id" ,value : _selectedYear};
       //_pusheddata.push({name : "employee_id" ,value : _selectedID  });

       var newdata = _pusheddata + '&' + _data;
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"DailyTimeRecord/transaction/update",
            "data":newdata,
            "beforeSend": showSpinningProgressLoading()
        });
    };


    var showList=function(b){
        if(b){
            $('#div_employee_list').show();
            $('#div_employee_fields').hide();
        }else{
            $('#div_employee_list').hide();
            $('#div_employee_fields').show();
        }
    };

    var hideemployeeList=function(){
         $('#div_employee_list').hide();
    };

    var showemployeeList=function(){
        $('#div_employee_list').show();
        $('#icon_new_employee').show();
    };

    var hideemployeeFields=function(){
        $('#div_employee_fields').hide();
        $('#icon_new_employee').show();
    };

    var showemployeeFields=function(){
        $('#div_employee_fields').show();
        $('#icon_new_employee').hide();
    };

    var showdtr=function(){
        $('#div_dtr_entry').show();
        $('#div_employee_list').hide();
        $('#icon_new_employee').hide();
        $('#btn_dtr').hide();
    };

    var hidedtr=function(){
        $('#div_dtr_entry').hide();
        $('#btn_dtr').show();
        $('#icon_new_employee').show();
        $('#div_employee_list').show();
    };
    /*
    var getdeptfunction=function(){
        getempwodtrgetdept().done(function(response){
                        if(response.data[0]==null || response.data[0].department==null){
                        console.log('walang laman');
                        $('#ref_dept_dtr').val('Not Set');
                        }
                        else{
                            $('#ref_dept_dtr').val(response.data[0].department);
                        }
                        //$('#period_start').val(payperiod[0]);
                        //$('#period_end').val(payperiod[1]);
                        //_selectedYear=payperiod[2];
                        //$('.periodcoveredtext').text(temppayperiod);

                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }
                        //console.
                    });
    }*/

    var validateRequiredFields=function(f){
        var stat=true;

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                if($(this).val()==0 || $(this).val()==null){
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
        return '<div class="container-fluid">'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><span class="glyphicon glyphicon-user fa-lg"></span> ' + d.first_name +' ' + d.middle_name + ' ' +d.last_name + '</h3>'+
        '<p>[ ECODE : '+d.ecode+' ] [ ID : '+d.id_number+' ]</p>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '</div>'+ //First Row//
        '<div class="row">'+
        '<div class="col-md-3">'+
        '<center><img class="loadingimg" src="'+d.image_name+'"></img></center>'+
        '</div>'+
        '<div class="col-md-4"><p class="nomargin"><b>Gender</b> : '+d.gender+'</p>'+
        '<p class="nomargin"><b>Birthdate</b> : '+d.birthdate+'</p>'+
        '<p class="nomargin"><b>Civil Status</b> : '+d.civil_status+'</p>'+
        '<p class="nomargin"><b>Blood Type</b> : '+d.blood_type+'</p>'+
        '<p class="nomargin"><b>Height</b> : '+d.height+'</p>'+
        '<p class="nomargin"><b>Weight</b> : '+d.weight+'</p>'+
        '<p class="nomargin"><b>Religion</b> : '+d.religion+'</p>'+
        '</div>'+
        '<div class="col-md-4">'+
        '<p class="nomargin"><b>SSS</b> : '+d.sss+'</p>'+
        '<p class="nomargin"><b>Phil Health</b> : '+d.phil_health+'</p>'+
        '<p class="nomargin"><b>Pag-Ibig :</b> : '+d.pag_ibig+'</p>'+
        '<p class="nomargin"><b>TIN :</b> : '+d.tin+'</p>'+
        '<p class="nomargin"><b>Account No.</b> : '+d.bank_account+'</p>'+
        '<p class="nomargin"><b>Tax Code</b> : '+d.tax_code+'</p>'+
        '</div>'+
        '</div>'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><h4 class="boldlabel"><span class="glyphicon glyphicon-info-sign fa-lg"></span> Employee Information</h4><hr style="height:1px;background-color:black;"></hr></div>'+
        '<div class="row">'+ //Second Row//
        '<div class="col-md-3">'+
        '<center></center>'+
        '</div>'+
        '<div class="col-md-4"><p class="nomargin"><b>Employee Type</b> : '+d.employment_type+'</p>'+
        '<p class="nomargin"><b>Remarks</b> : '+d.status+'</p>'+
        '<p class="nomargin"><b>Department</b> : '+d.department+'</p>'+
        '<p class="nomargin"><b>Position</b> : '+d.position+'</p>'+
        '<p class="nomargin"><b>Branch</b> : '+d.branch+'</p>'+
        '</div>'+
        '<div class="col-md-4">'+
        '<p class="nomargin"><b>Section</b> : '+d.section+'</p>'+
        '<p class="nomargin"><b>Pay Type</b> : '+d.payment_type+'</p>'+
        '<p class="nomargin"><b>Employment Date</b> : '+d.employment_date+'</p>'+
        '<p class="nomargin"><b>Date Regular</b> : '+d.emp_philhealth+'</p>'+
        '</div>'+
        '</div>'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><h4 class="boldlabel"><span class="glyphicon glyphicon-info-sign fa-lg"></span> Contact Information</h4><hr style="height:1px;background-color:black;"></hr></div>'+
        '<div class="row">'+ //Third Row//
        '<div class="col-md-3">'+
        '<center></center>'+
        '</div>'+
        '<div class="col-md-4"><p class="nomargin"><b>Address 1</b> : '+d.address_one+'</p>'+
        '<p class="nomargin"><b>Address 2</b> : '+d.address_two+'</p>'+
        '<p class="nomargin"><b>Email Address</b> : '+d.email_address+'</p>'+
        '</div>'+
        '<div class="col-md-4"><p class="nomargin"><b>Mobile No.</b> : '+d.cell_number+'</p>'+
        '<p class="nomargin"><b> Phone No.</b> : '+d.telphone_number+'</p>'+
        '</div>'+
        '</div>'+
        '</div>';
    };

;



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
