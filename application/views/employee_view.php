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


    <link href="assets/plugins/datapicker/datepicker3.css" rel="stylesheet">
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
    <script src="assets/plugins/fullcalendar/moment.min.js"></script>


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

        .red{
            color: red;
        }

        .numeric{
            text-align: left;
            width: 100%;
        }
        #tbl_employee_list tbody tr{
          cursor:pointer;
        }
        .mycheckbox{
            opacity: 1;
        }
        .c-active{
            width: 17px; height: 17px;
        }
        .c-active-title{
            margin-top: 2px !important;
            left: 40px;
            position: absolute;
            font-weight: 500;
            color: black;
        }
        #chckbx_block{
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        #chckbx_block_label{
            margin-top: 2px!important;
            margin-left: 5px;
            position: absolute;
            font-size: 12pt;
            cursor: pointer;
            -moz-user-select: none; 
            -webkit-user-select: none; 
            -ms-user-select:none; 
            user-select:none;
            -o-user-select:none;
        }
    </style>

<?php echo $loaderscript; ?>
</head>


<body class="animated-content" style="font-weight:500;">
<?php echo $loader; ?>
<div class="se-pre-con"></div>
<?php echo $_top_navigation; ?>

<div id="wrapper">

    <div id="layout-static">

        <?php echo $_side_bar_navigation;?>

        <div class="static-content-wrapper white-bg">
            <div class="static-content" >
                <div class="page-content">

                    <ol class="breadcrumb" style="margin-bottom:0px;">
                        <li><a href="dashboard">Dashboard</a></li>
                        <li><a href="employee">Employee</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                <div class="panel-heading emp-panel-header">
                                    <span id="emp-tbl-title">Employee List</span>
                                    <div class="active-panel">
                                        <div class="chckbx-active-panel">
                                            <div class="checkboxThree">
                                                <input type="checkbox" value="1" id="checkboxThreeInput" name="chck-active"/>
                                                    <label for="checkboxThreeInput"></label>
                                                    <span class="cbActive-Title">Active</span>
                                            </div>
                                        </div>
                                        <div class="chckbx-inactive-panel">
                                            <div class="checkboxThree chckbxInactive">
                                                <input type="checkbox" value="2" id="checkboxThreeInput1" name="chck-inactive"/>
                                                    <label for="checkboxThreeInput1"></label>
                                                    <span class="cbInactive-Title">Inactive</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel-body table-responsive" style="padding:0px;">
                                    <table id="tbl_employee_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th hidden></th>
                                                <th>Full Name</th>
                                                <th>E-Code</th>
                                                <th>Pin Number</th>
                                                <th>Group</th>
                                                <th>Status</th>
                                                <th width="10%"><center>Action</center></th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="col-sm-4 text-center" style="margin:0;padding:2px;">
                                        <a href="Employee/transaction/export-employee-masterlist" style="width:350px;border-radius:7px;border-radius: 2em!important;" class="btn btn-success">EXPORT EMPLOYEE MASTERLIST TO EXCEL</a>
                                    </div>
                                    <div class="col-sm-4 text-center" style="margin:0;padding:2px;">
                                        <a href="Employee/transaction/export-employee-rates-masterlist" style="width:350px;border-radius:7px;border-radius: 2em!important;" class="btn btn-success">EXPORT EMPLOYEE RATES &amp; DUTIES</a>
                                    </div>
                                    <div class="col-sm-4 text-center" style="margin:0;padding:2px;">
                                        <ted class="btn-success" style="padding: 8px 10px; border-radius: 2em;">
                                                <?php
                                                    foreach($emp_leave_year as $row)
                                                    {   
                                                        echo '<b>'.$row->year_type.' </b>:';
                                                        echo " ";
                                                        echo $row->date_start;
                                                        echo "<b> to </b>";
                                                         echo $row->date_end;
                                                    }
                                                ?>
                                        </ted>
                                    </div>
                                </div>
                            </div> <!--panel default -->
                        </div> <!--rates and duties list -->

                        <div id="div_product_fields" style="display: none;">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:#2ecc71 !important;margin-top:5px;border-radius:5px;">
                                    <center><h2 style="color:white;font-weight:bold;">Personal Information</h2></center><br>
                                    <left><h5 id="newempdisplayname" style="color:white;font-weight:bold;line-height:1px;margin-top:2px;">Name: <displayname class="display_name"></displayname></h5></left>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#personal_info_field">Personal Info</a></li>
                                            <li><a data-toggle="tab" href="#course" class="course otherul">Course</a></li>
                                            <li><a data-toggle="tab" href="#children_dependent" class="children_dependent otherul">Children/Dependent</a></li>
                                            <li><a data-toggle="tab" href="#family_details" class="family_details otherul">Family Details</a></li>
                                            <li><a data-toggle="tab" href="#emergency_contact" class="emergency_contact otherul">Emergency Contact</a></li>
                                            <li><a data-toggle="tab" href="#work_experience" class="work_experience otherul">Work Experience</a></li>
                                            <li><a href="#" class="confidential_status">Confidential Status</a></li>
                                        </ul>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div id="personal_info_field" class="tab-pane fade in active">
                                                <form id="frm_employee" role="form" class="form-horizontal row-border">
                                                <div class="container-fluid">
                                                    <div class="col-md-9">
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">
                                                                <span class="red">*</span>
                                                                ID Number
                                                             </label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="id_number" class="form-control" value="" data-error-msg="ID Number is required!" required>
                                                                </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-10" id="pin_panel">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">
                                                                Pin Number
                                                            </label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" id="pin_number" name="pin_number" class="form-control" value="" data-error-msg="Pin Number is required!">
                                                                </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">
                                                                <span class="red">*</span>
                                                                First Name
                                                             </label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="first_name" class="form-control" value="" data-error-msg="First Name is required!" required>
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Middle Name</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="middle_name" class="form-control" value="" data-error-msg="Middle Name is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">
                                                                <span class="red">*</span>
                                                                Last Name
                                                            </label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="last_name" class="form-control" value="" data-error-msg="Last Name is required!" required>
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Address 1:</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="address_one" class="form-control" value="" data-error-msg="Address 1 is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Address 2:</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="address_two" class="form-control" value="" data-error-msg="Address 2 is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Email Address:</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="email_address" class="form-control" value="" data-error-msg="Email Address 1 is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Gender:</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                               <select class="form-control" id="gender" name="gender" data-error-msg="Gender is required!">
                                                                  <option value="Male">Male</option>
                                                                  <option value="Female">Female</option>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                             <label class="control-label boldlabel" style="text-align:left;">Cell No:</label>
                                                        </div>
                                                        <div class="col-md-3.5">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="cell_number" class="form-control" value="" data-error-msg="Cell No is required!">
                                                                </div>
                                                          </div>
                                                        </div>

                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Birthdate:</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="birthdate" class="date-picker form-control" value="" placeholder="Birthdate" data-error-msg="Birth Date is required!">
                                                                </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                             <label class="control-label boldlabel" style="text-align:left;">Tel No:</label>
                                                        </div>
                                                        <div class="col-md-3.5">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="telphone_number" class="form-control" value="" data-error-msg="TelePhone Number is required!">
                                                                </div>
                                                          </div>
                                                        </div>

                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Religion:</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select class="form-control" id="emp_religion" name="ref_religion_id" data-error-msg="Religion is required!" required>
                                                                      <option value="0">[Create Religion]</option>
                                                                      <?php
                                                                    foreach($ref_religion as $row)
                                                                    {
                                                                        echo '<option value="'.$row->ref_religion_id  .'">'.$row->religion.'</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                             <label class="control-label boldlabel" style="text-align:left;">Blood:</label>
                                                        </div>
                                                        <div class="col-md-3.5">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="blood_type" class="form-control" value="" data-error-msg="Blood Type is required!">
                                                                </div>
                                                          </div>
                                                        </div>

                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Civil Status:</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select class="form-control" id="emp_civilstatus" name="civil_status" data-error-msg="Civil Status is required!" required>
                                                                  <option value="Single">Single</option>
                                                                  <option value="Married">Married</option>
                                                                  <option value="Divorced">Divorced</option>
                                                                  <option value="Widowed">Widowed</option>
                                                                  <option value="Separated">Separated</option>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                             <label class="control-label boldlabel" style="text-align:left;">Height:</label>
                                                        </div>
                                                        <div class="col-md-3.5">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="height" class="form-control" value="" data-error-msg="Height is required!">
                                                                </div>
                                                          </div>
                                                        </div>

                                                        </div>
                                                        <div class="col-md-10">
                                                        <div class="col-md-3">

                                                        </div>
                                                        <div class="col-md-4">

                                                        </div>

                                                        <div class="col-md-2">
                                                             <label class="control-label boldlabel" style="text-align:left;">Weight:</label>
                                                        </div>
                                                        <div class="col-md-3.5">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="weight" class="form-control" value="" data-error-msg="Weight is required!">
                                                                </div>
                                                          </div>
                                                        </div>

                                                        </div>

                                                    </div><!--end of 1st date entry -->

                                                    <div class="col-md-3">

                                                        <div class="col-md-12">
                                                              <label class="control-label boldlabel" style="text-align:left;"><i class="fa fa-user" aria-hidden="true"></i> Employee Image</label>
                                                                <hr style="margin-top:0px !important;height:1px;background-color:black;"></hr>
                                                        </div>
                                                        <div style="width:100%; height:100%; padding-bottom: 10px;border:2px solid #34495e;border-radius:5px;">
                                                        <center><img name="img_user" id="img_user" src="assets/img/anonymous-icon.png" height="130px;" width="130px;"></img></center>
                                                        <hr style="margin-top:0px !important;height:1px;background-color:black;"></hr>
                                                        <center>
                                                             <button type="button" id="btn_browse" style="width:150px;margin-bottom:5px;" class="btn btn-primary">Browse Photo</button>
                                                             <button type="button" id="btn_remove_photo" style="width:150px;" class="btn btn-danger">Remove</button>
                                                             <input type="file" name="file_upload[]" class="hidden">

                                                    </div>

                                                    </div> <!--end of 1st date entry -->

                                                        <div class="col-md-12">

                                                              <label class="control-label boldlabel" ><i class="fa fa-calendar" aria-hidden="true"></i> Employment Date</label>
                                                        <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                        </hr>


                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="col-md-3">
                                                                 <label class="control-label boldlabel" style="text-align:left;">
                                                                    <span class="red">*</span>
                                                                    Date Employment:
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                     <input type="text" name="employment_date" class="date-picker form-control" value="" placeholder="Employment Date" data-error-msg="Employment Date is required!" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="col-md-3">
                                                                 <label class="control-label boldlabel" style="text-align:left;">1 Month Contract:</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <select name="month_contract_1" id="month_contract_1" class="form-control">
                                                                        <option value="0">No</option>
                                                                        <option value="1">Yes</option>
                                                                    </select>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="col-md-3">
                                                                 <label class="control-label boldlabel" style="text-align:left;">5 Months Contract:</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <select name="month_contract_5" id="month_contract_5" class="form-control">
                                                                        <option value="0">No</option>
                                                                        <option value="1">Yes</option>
                                                                    </select>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="col-md-9">
                                                            <div class="col-md-3">
                                                                 <label class="control-label boldlabel" style="text-align:left;">Regularization Contract:</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <select name="reg_contract" id="reg_contract" class="form-control">
                                                                        <option value="0">No</option>
                                                                        <option value="1">Yes</option>
                                                                    </select>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                        </div>                                                        
                                                        <div class="col-md-9">
                                                            <div class="col-md-3">
                                                                 <label class="control-label boldlabel" style="text-align:left;">Performance Evaluation 1:</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <select name="perfomance_eval_1" id="perfomance_eval_1" class="form-control">
                                                                        <option value="0">No</option>
                                                                        <option value="1">Yes</option>
                                                                    </select>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="col-md-3">
                                                                 <label class="control-label boldlabel" style="text-align:left;">Performance Evaluation 2:</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <select name="perfomance_eval_2" id="perfomance_eval_2" class="form-control">
                                                                        <option value="0">No</option>
                                                                        <option value="1">Yes</option>
                                                                    </select>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                        </div>


                                                       <div class="col-md-12">

                                                              <label class="control-label boldlabel" ><i class="fa fa-user" aria-hidden="true"></i> Other Information</label>
                                                        <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                        </hr>


                                                        </div>
                                                        <!--input1-->
                                                        <div class="col-md-8">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">SSS Number:</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="sss" class="form-control" value="" data-error-msg="SSS is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <!--input1-->


                                                        <div class="col-md-8">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Phil. Health:</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="phil_health" class="form-control" value="" data-error-msg="Phil. Health is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Pag Ibig:</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="pag_ibig" class="form-control" value="" data-error-msg="Pag Ibig is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">TIN:</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="tin" class="form-control" value="" data-error-msg="Tin is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Barangay ID:</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select name="barangay_id" id="barangay_id" class="form-control">
                                                                    <option value="0">No</option>
                                                                    <option value="1">Yes</option>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                             <label class="control-label boldlabel" style="text-align:left;">Health ID:</label>
                                                        </div>
                                                        <div class="col-md-3.5">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select name="health_id" id="health_id" class="form-control">
                                                                    <option value="0">No</option>
                                                                    <option value="1">Yes</option>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>

                                                        </div>
                                                        <div class="col-md-8">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Bank Account No.:</label>
                                                        </div>
                                                        <div class="col-md-4">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <input type="text" name="bank_account" class="form-control" value="" data-error-msg="Account Number is required!">
                                                                </div>
                                                          </div>
                                                        </div>

                                                        <div class="col-md-2">
                                                             <label class="control-label boldlabel" style="text-align:left;">Process?</label>
                                                        </div>
                                                        <div class="col-md-3.5">
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select class="form-control" id="emp_processaccount" name="bank_account_isprocess" data-error-msg="Process Account is required!">
                                                                  <option value="0">No</option>
                                                                  <option value="1">Yes</option>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>

                                                        </div>
                                                        <div class="col-md-8">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Tax Pay Type</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select class="form-control" id="tax_pay_type" name="tax_pay_type" data-error-msg="Tax Pay Type is required!" required>
                                                                  <?php foreach($ref_payment as $row)
                                                                    {
                                                                        echo '<option value="'.$row->ref_payment_type_id  .'">'.$row->payment_type.'</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12">

                                                              <label class="control-label boldlabel" ><i class="fa fa-user" aria-hidden="true"></i> Exemption</label>
                                                        <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                        </hr>


                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="col-md-4">
                                                             <label class="control-label boldlabel" style="text-align:left;">SSS :</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select class="form-control" id="emp_exemptss" name="exmpt_sss" data-error-msg="SSS exempt is required!">
                                                                  <option value="0">No</option>
                                                                  <option value="1">Yes</option>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="col-md-4">
                                                             <label class="control-label boldlabel" style="text-align:left;">Phil Health :</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select class="form-control" id="emp_exemptpagibig" name="exmpt_philhealth" data-error-msg="Pag-Ibig is required!">
                                                                  <option value="0">No</option>
                                                                  <option value="1">Yes</option>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="col-md-4">
                                                             <label class="control-label boldlabel" style="text-align:left;">Pag-Ibig :</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                <select class="form-control" id="emp_exemptphilhealth" name="exmpt_pagibig" data-error-msg="Phil health is required!">
                                                                  <option value="0">No</option>
                                                                  <option value="1">Yes</option>
                                                                </select>
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                              <label class="control-label boldlabel" ><i class="fa fa-user" aria-hidden="true"></i> Status</label>
                                                            <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                            </hr>
                                                            <div class="col-md-6">
                                                            <div class="col-md-4">
                                                                 <label class="control-label boldlabel" style="text-align:left;">Retired :</label>
                                                            </div>
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <select class="form-control" id="is_retired" name="is_retired" data-error-msg="Pag-Ibig is required!">
                                                                      <option value="0">No</option>
                                                                      <option value="1">Yes</option>
                                                                    </select>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="col-md-4">
                                                                 <label class="control-label boldlabel" style="text-align:left;">Date Retired :</label>
                                                            </div>
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <input type="text" id="date_retired" name="date_retired" class="date-picker form-control" value="" placeholder="Date Retired" data-error-msg="Retired Date is required!">
                                                                    </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="col-md-4">
                                                                 <label class="control-label boldlabel" style="text-align:left;">Status :</label>
                                                            </div>
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <select class="form-control" id="status" name="status">
                                                                      <option value="Active">Active</option>
                                                                      <option value="Inactive">Inactive</option>
                                                                    </select>
                                                                    </div>
                                                              </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" style="padding-bottom: 20px;" id="empstatus"> 
                                                              <label class="control-label boldlabel" ><i class="fa fa-user" aria-hidden="true"></i> Status</label>
                                                            <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                            <div class="col-md-6">
                                                                <div class="col-md-3" class="gg">
                                                                    <input type="checkbox" id="emp_cbo_active" class="c-active" name="emp_status_active"> <label class="c-active-title">Active</label>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="checkbox" id="emp_cbo_inactive" class="c-active" name="emp_status_inactive"> <label class="c-active-title">Inactive</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" style="padding-bottom: 20px;">
                                                              <label class="control-label boldlabel" ><i class="fa fa-calendar" aria-hidden="true"></i> Date End</label>
                                                            <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                            </hr>
                                                            <div class="col-md-6">
                                                            <div class="col-md-4">
                                                                 <label class="control-label boldlabel" style="text-align:left;">Date End :</label>
                                                            </div>
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <input type="text" name="" readonly id="date_end" class="form-control" placeholder="Date End">
                                                                    </div>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="col-md-4">
                                                                 <label class="control-label boldlabel" style="text-align:left;">Reason :</label>
                                                            </div>
                                                              <div class="form-group">

                                                                    <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-file-code-o"></i>
                                                                     </span>
                                                                    <input type="text" id="date_end_reason" class="form-control" readonly placeholder="Reason">
                                                                    </div>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-12">

                                                              <label class="control-label boldlabel" ><i class="fa fa-user" aria-hidden="true"></i> Loan</label>
                                                        <hr style="margin-top:0px !important;height:1px;background-color:black;">
                                                        </hr>


                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Loan Date:</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                 <input type="text" name="loan_date" class="date-picker form-control" value="" placeholder="Loan Date" data-error-msg="Employment Date is required!">
                                                                </div>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="col-md-3">
                                                             <label class="control-label boldlabel" style="text-align:left;">Amount :</label>
                                                        </div>
                                                          <div class="form-group">

                                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-file-code-o"></i>
                                                                 </span>
                                                                 <input type="text" name="loan_amount" class="form-control" value="" placeholder="Loan Amount" data-error-msg="Loan Amount is required!">
                                                                </div>
                                                          </div>
                                                        </div> -->


                                                    <br/>
                                                </form>
                                            </div>
                                        </div>
                                            <div id="course" class="tab-pane fade in ">
                                                <button class="btn"  id="btn_newcoursedegree" style="width:150px;background-color:#2ecc71;color:white;margin-bottom:4px;" title="Create New Course/Degree" >
                                                <i class="fa fa-file"></i> New Course </button>
                                                <table id="tbl_course_degree_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                            <th>Course Degree</th>
                                                            <th>Year Graduate</th>
                                                            <th><center>Action</center></th>
                                                         </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="children_dependent" class="tab-pane fade in ">
                                                <button class="btn"  id="btn_newchildren" style="width:250px;background-color:#2ecc71;color:white;margin-bottom:4px;" title="Create New Children/Dependent" >
                                                <i class="fa fa-file"></i> New Children/Dependent </button>
                                                <table id="tbl_children_dependent_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                            <th>Name</th>
                                                            <th>Relationship</th>
                                                            <th>Birthdate</th>
                                                            <th><center>Action</center></th>
                                                         </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="family_details" class="tab-pane fade in ">
                                                <button class="btn"  id="btn_newfamilydetails" style="width:200px;background-color:#2ecc71;color:white;margin-bottom:4px;" title="Create New Children/Dependent" >
                                                <i class="fa fa-file"></i> New Family Details </button>
                                                <table id="tbl_family_details_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                            <th>Name</th>
                                                            <th>Relationship</th>
                                                            <th>Relationship</th>
                                                            <th><center>Action</center></th>
                                                         </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="emergency_contact" class="tab-pane fade in ">
                                                <button class="btn"  id="btn_newemergencycontact" style="width:250px;background-color:#2ecc71;color:white;margin-bottom:4px;" title="Create New Children/Dependent" >
                                                <i class="fa fa-file"></i> New Emergency Contact </button>
                                                <table id="tbl_emergency_contact_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                            <th>Name</th>
                                                            <th>Relationship</th>
                                                            <th>Contact #1</th>
                                                            <th>Contact #2</th>
                                                            <th>Address</th>
                                                            <th><center>Action</center></th>
                                                         </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="work_experience" class="tab-pane fade in ">
                                                <button class="btn"  id="btn_newworkexperience" style="width:200px;background-color:#2ecc71;color:white;margin-bottom:4px;" title="Create New Work Experience" >
                                                <i class="fa fa-file"></i> New Work Experience </button>
                                                <table id="tbl_work_experience" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                            <th>Previous Company</th>
                                                            <th>Job Title</th>
                                                            <th>From Date</th>
                                                            <th>To Date</th>
                                                            <th>Job Description</th>
                                                            <th><center>Action</center></th>
                                                         </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>

                                    </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <button id="btn_save" class="btn-primary btn" style="text-transform: capitalize;"><span></span>Save Changes</button>
                                            <button id="btn_cancelempfields" class="btn-default btn" style="text-transform: capitalize;">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of div employee fields -->
                    </div>


                        <div id="div_rates_duties_list" style="display:none;">

                            <div class="panel panel-default">
                                <button class="btn delete right_employee_create"  id="btn_cancelratesandduties" title="Back" >
                                    <span class="glyphicon glyphicon-arrow-left"></span></button>

                                <button class="btn add right_rates_create"  id="btn_newratesandduties" title="Create New Rates" >
                                    <span class="glyphicon glyphicon-plus"></span></button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;"><displayname id="display_name" class="display_name"></displayname></h2></center>
                                        </div>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;">Rates and Duties</h2></center>
                                             <div class="pull-right"><strong>[ <a id="btn_activate_rate" href="#" style="text-decoration: underline;color:white;">Activate Rate</a> ]</strong></div>
                                        </div>

                                    <div class="panel-body table-responsive">
                                        <table id="tbl_rates_duties_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th ></th>
                                                    <th>Employment Type</th>
                                                    <th>Date Start</th>
                                                    <th>Date End</th>
                                                    <th>Status</th>
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

                        <div id="div_entitlement_list" style="display:none;">

                            <div class="panel panel-default">
                                <button class="btn delete"  id="btn_cancelentitlement" title="Back" >
                                    <span class="glyphicon glyphicon-arrow-left"></span></button>

                                <button class="btn btn_newentitlement name add right_leaveentitlement_create"  id="btn_newentitlement"  title="Create New Entitlement" >
                                     <span class="glyphicon glyphicon-plus"></span></button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;"><displayname id="display_name" class="display_name"></displayname></h2></center>
                                        </div>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;">Leave Entitlement Module  </h2></center>
                                        </div>

                                    <div class="panel-body table-responsive" style="padding-top:5px;">
                                        <table id="tbl_entitlement" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="background-color:#dd3500;color:white;"></th>
                                                    <th style="background-color:#dd3500;color:white;">Leave Type</th>
                                                    <th>Short name</th>
                                                    <th>Is Payable</th>
                                                    <th>Is Forwardable</th>
                                                    <th>Total Grant</th>
                                                    <th>Received Balance</th>
                                                    <th>Current Balance</th>
                                                    <th><center>Action</center></th>
                                                 </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                <div class="panel-footer"></div>
                            </div> <!--panel default -->

                        </div> <!--entitlement list -->

                        <div id="div_apply_leave" style="display:none;">

                            <div class="panel panel-default">
                                <button class="btn delete"  id="btn_cancelapplyleave" title="Back" >
                                    <span class="glyphicon glyphicon-arrow-left"></span></button>

                                <button class="btn btn_apply_leave add right_applyleave_create"  id="btn_apply_leave" title="File a Leave" >
                                    <span class="glyphicon glyphicon-plus"></span></button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;"><displayname id="display_name" class="display_name"></displayname></h2></center>
                                        </div>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;">Leave Application  </h2></center>
                                             <div class="pull-right"><strong>[ <a id="btn_open_leave" href="#" style="text-decoration: underline;color:white;">Show Available Leave</a> ]</strong></div>
                                        </div>

                                    <div class="panel-body table-responsive" style="padding-top:5px;">
                                        <table id="tbl_apply_leave" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Leave Type</th>
                                                    <th>Date Filed</th>
                                                    <th>Date Granted</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Purpose</th>
                                                    <th>Total</th>
                                                 </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                <div class="panel-footer"></div>
                            </div> <!--panel default -->

                        </div> <!--Applied Leaved list -->
                                <!--Memorandum list -->
                        <div id="div_memorandum_list" style="display:none;">

                            <div class="panel panel-default">
                                <button class="btn delete"  id="btn_cancelmemorandum" title="Back" >
                                    <span class="glyphicon glyphicon-arrow-left"></span></button>

                                <button class="btn btn_newmemo add right_memorandum_create"  id="btn_newmemo" title="Create New Memo" >
                                    <span class="glyphicon glyphicon-plus"></span></button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;"><displayname id="display_name" class="display_name"></displayname></h2></center>
                                        </div>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;">Memorandum List  </h2></center>
                                              </div>

                                    <div class="panel-body table-responsive" style="padding-top:5px;">
                                        <table id="tbl_memo" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Memo #</th>
                                                    <th>Disciplinary Action</th>
                                                    <th>Action Taken</th>
                                                    <th>Date Granted</th>
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

                        </div> <!--Memorandum list -->

                        <div id="div_commendation_list" style="display:none;">

                            <div class="panel panel-default">
                                <button class="btn delete"  id="btn_cancelcommendation" title="Back" >
                                    <span class="glyphicon glyphicon-arrow-left"></span></button>

                                <button class="btn btn_newcommendation add right_commendation_create"  id="btn_newcommendation" title="Create New Commendation" >
                                   <span class="glyphicon glyphicon-plus"></span></button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;"><displayname id="display_name" class="display_name"></displayname></h2></center>
                                        </div>

                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;">Commendation List  </h2></center>
                                              </div>

                                    <div class="panel-body table-responsive" style="padding-top:5px;">
                                        <table id="tbl_commendation" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Memo #</th>
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

                        </div> <!--Memorandum list -->

                        <div id="div_seminartraining_list" style="display:none;">

                            <div class="panel panel-default">
                                <button class="btn delete"  id="btn_cancelseminarstraining" title="Back" >
                                    <span class="glyphicon glyphicon-arrow-left"></span></button>

                                <button class="btn btn_newseminartraining add right_seminar_create"  id="btn_newseminartraining" title="Create New Seminar & Training" >
                                    <span class="glyphicon glyphicon-plus"></span></button>

                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;"><displayname id="display_name" class="display_name"></displayname></h2></center>
                                        </div>

                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:500;">Seminars And Training List  </h2></center>
                                              </div>

                                    <div class="panel-body table-responsive" style="padding-top:5px;">
                                        <table id="tbl_seminarstraining" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Title</th>
                                                    <th>Given By</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Venue</th>
                                                    <th>Certificate</th>
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
                            <h5  class="modal-title" style="color:white;font-size:15px;">[ ECODE : <dataecode id="dataecode"></dataecode> ] [ ECODE : <datapinnumber id="datapinnumber"></datapinnumber> ][ ID : <dataid id="dataid"></dataid> ]</h5></center>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <center><img class="loadingimg" id="dataimage" style="margin-top:4px;width:150px;height:150px;box-shadow: 1px 1px 15px black !important;
                                  			border-radius: 20px;" src=""></img></center>
                                    </div>
                                    <div class="col-md-3"><p class="nomargin"><b>Gender</b> : <datagender id="datagender"></datagender></p>
                                        <p class="nomargin"><b>Birthdate</b> : <databirthdate id="databirthdate"></databirthdate></p>
                                        <p class="nomargin"><b>Civil Status</b> : <datacivilstatus id="datacivilstatus"></datacivilstatus></p>
                                        <p class="nomargin"><b>Blood Type</b> : <databloodtype id="databloodtype"></databloodtype></p>
                                        <p class="nomargin"><b>Height</b> : <dataheight id="dataheight"></dataheight></p>
                                        <p class="nomargin"><b>Weight</b> : <dataweight id="dataweight"></dataweight></p>
                                        <p class="nomargin"><b>Religion</b> : <datareligion id="datareligion"></datareligion></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="nomargin"><b>SSS</b> : <datasss id="datasss"></datasss></p>
                                        <p class="nomargin"><b>Phil Health</b> : <dataphilhealth id="dataphilhealth"></dataphilhealth></p>
                                        <p class="nomargin"><b>Pag-Ibig </b>: <datapagibig id="datapagibig"></datapagibig></p>
                                        <p class="nomargin"><b>TIN :</b> <datatin id="datatin"></datatin></p>
                                        <p class="nomargin"><b>Health ID :</b> <datahealth id="datahealth"></datahealth></p>
                                        <p class="nomargin"><b>Barangay ID :</b> <databarangay id="databarangay"></databarangay></p>
                                        <p class="nomargin"><b>Account No.</b> : <dataaccountnumber id="dataaccountnumber"></dataaccountnumber></p>
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
                                <div class="col-md-12">
                                    <h3 class="boldlabel"><h4 class="boldlabel"><span class="fa fa-barcode fa-lg"></span> Barcode</h4><hr style="height:1px;background-color:black;"></hr></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                      <center>
                                        <div class="barcode_print">
                                          <img style="height:80px;" title="Download Barcode" id="barcode1"/>
                                        </div>
                                      </center>
                                    </div>
                                </div>
                                </div>

                        <div class="modal-footer">
                            <button id="donwload_bcode" type="button" class="btn btn-primary">Download Barcode</button>
                            <button id="print_barcode" type="button" class="btn btn-success">Print Barcode</button>
                            <button id="" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="modal_please_select_employee" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#e74c3c;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> </span>NOTICE:</h4>
                        </div>

                        <div class="modal-body">
                            <h4 id="modal-body-message" style="color:#c0392b;">Please Select Employee..</h4>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

            <div id="modal_activate_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title"><span id="modal_mode"> </span>Confirm Activation?</h4>
                        </div>

                        <div class="modal-body">

                            <img src="assets/img/question_mark.png" style="width: 50px; position: absolute;margin-left: 30px;"> 
                            <p id="modal-body-message" style="font-size: 12pt;width: 80%;font-weight: normal!important;margin-left: 100px; font-weight: 400;margin-top: 10px;">Are you sure you want to activate <emp id="empname"></emp>?</p>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_yes_activate" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="modal_email_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title"><span id="modal_mode"> </span>Confirm Resend?</h4>
                        </div>

                        <div class="modal-body">

                            <img src="assets/img/question_mark.png" style="width: 50px; position: absolute;margin-left: 30px;"> 
                            <p id="modal-body-message" style="font-size: 12pt;width: 80%;font-weight: normal!important;margin-left: 100px; font-weight: 400;margin-top: 10px;">Are you sure you want to resend email of <emp id="empnameemail"></emp>?</p>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_yes_email" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>

                <div id="modal_confirmation_course" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_course" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="modal_confirmation_workexp" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_workexp" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>


                <div id="modal_confirmation_children" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_children" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>

                <div id="modal_confirmation_family" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_family" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_confirmation_emergency" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_emergency" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_confirmation_rates" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_rates" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close_rates" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_confirmation_entitlement" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_entitlement" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close_entitlement" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_confirmation_memo" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_memo" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close_memo" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_confirmation_commendation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_commendation" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close_commendation" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_confirmation_seminarstraining" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
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
                            <button id="btn_yes_seminarstraining" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                            <button id="btn_close_seminarstraining" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_create_religion" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> </span>Create Religion</h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_religion">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Religion Name :</label>
                                    <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion" data-error-msg="Religion is Required!" required>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Description :</label>
                                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Description"></textarea>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_new_religion" type="button" class="btn btn-success">Create</button>
                            <button id="btn_close_religion" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_course_degree_new" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> </span><coursedegreetitle id="coursedegreetitle"></coursedegreetitle></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_course_degree">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Course Degree :</label>
                                    <select class="form-control ref_course_degree_id" id="ref_course_degree_id" name="ref_course_degree_id" id="sel1">   
                                            <option value="0">[ Create Course/Degree ]</option>
                                            <?php
                                                                foreach($ref_course_degree as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_course_degree_id  .'">'.$row->course_degree.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Year Graduate :</label>
                                    <input type="text" class="form-control date-picker" id="year_graduate" name="year_graduate" data-error-msg="Year Graduate is Required!" placeholder="Year Graduate" required>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_save_course_degree" type="button" class="btn btn-success" >Save</button>
                            <button id="btn_close_course_degree" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_children_dependent_new" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> </span><childrengreettitle id="childrengreettitle"></childrengreettitle></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_children_dependent">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Name :</label>
                                    <input type="text" class="form-control" id="name" name="name" data-error-msg="Name is Required!" placeholder="Name" required>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Relationship :</label>
                                    <select class="form-control ref_relationship_id" id="ref_relationship_id" name="ref_relationship_id" data-error-msg="Relationship is Required!" required>
                                            <option value="0">[ Create Children/Dependent ]</option>
                                            <?php
                                                                foreach($ref_relationship as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_relationship_id  .'">'.$row->relationship.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Birthdate :</label>
                                    <input type="text" class="form-control date-picker" id="birthdate" name="birthdate" data-error-msg="Birthdate is Required!" placeholder="Birthdate" required>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_save_children_dependent" type="button" class="btn btn-success" >Save</button>
                            <button id="btn_close_children_dependent" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_family_details_new" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> </span><familygreettitle id="familygreettitle"></familygreettitle></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_family_details">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Name :</label>
                                    <input type="text" class="form-control" id="name" name="name" data-error-msg="Name is Required!" placeholder="Name" required>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Relationship :</label>
                                    <select class="form-control ref_relationship_id" id="ref_relationship_id1" name="ref_relationship_id" id="sel1" data-error-msg="Relationship is Required!" required>
                                            <option value="0">[ Create Children/Dependent ]</option>
                                            <?php
                                                                foreach($ref_relationship as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_relationship_id  .'">'.$row->relationship.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Birthdate :</label>
                                    <input type="text" class="form-control date-picker" id="birthdate" name="birthdate" data-error-msg="Birthdate is Required!" placeholder="Birthdate" required>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_save_family_details" type="button" class="btn btn-success" >Save</button>
                            <button id="btn_close_family_details" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_emergency_contact_new" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"> </span><emergencycontactgreettitle id="emergencycontactgreettitle"></emergencycontactgreettitle></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_emergency_details">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Name :</label>
                                    <input type="text" class="form-control" id="name" name="name" data-error-msg="Name is Required!" placeholder="Name" required>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Relationship :</label>
                                    <select class="form-control ref_relationship_id" id="ref_relationship_id2" name="ref_relationship_id" id="sel1" data-error-msg="Relationship is Required!" required>
                                            <option value="0">[ Create Children/Dependent ]</option>
                                            <?php
                                                                foreach($ref_relationship as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_relationship_id  .'">'.$row->relationship.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Contact # 1 :</label>
                                    <input type="text" class="form-control" id="contact_number_one" name="contact_number_one" data-error-msg="Contact #1 is Required!" placeholder="Contact 1" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Contact # 2 :</label>
                                    <input type="text" class="form-control" id="contact_number_two" name="contact_number_two" data-error-msg="Contact #2 is Required!" placeholder="Contact 2" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Address :</label>
                                    <input type="text" class="form-control" id="address" name="address" data-error-msg="Address is Required!" placeholder="Address" required>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_save_emergency_contact" type="button" class="btn btn-success" >Save</button>
                            <button id="btn_close_emergency_contact" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_work_experience_new" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"></span><workexperiencegreettitle id="workexperiencegreettitle"></workexperiencegreettitle></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_work_experience">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Company :</label>
                                    <input type="text" class="form-control" id="company" name="company" data-error-msg="Company Name is Required!" placeholder="Company Name" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Job Title :</label>
                                    <input type="text" class="form-control" id="job_title" name="job_title" data-error-msg="Job Title is Required!" placeholder="Job Title" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">From Date :</label>
                                    <input type="text" class="date-picker form-control" id="from_date" name="from_date" data-error-msg="From Date is Required!" placeholder="From Date" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">To Date :</label>
                                    <input type="text" class="date-picker form-control" id="to_date" name="to_date" data-error-msg="To Date is Required!" placeholder="To Date" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Job Description :</label>
                                    <textarea class="form-control" rows="5" id="job_description" name="job_description" data-error-msg="Job Description is Required!" placeholder="Job Description" required></textarea>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_save_work_experience" type="button" class="btn btn-success" >Save</button>
                            <button id="btn_close_work_experience" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_confidential_status" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-sm" style="margin-top:10%;">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#27ae60;">
                            <button type="button" style="color:white;" class="close"  data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:white;"><span id="modal_mode"></span>Confidential Status</h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_confidential_status">
                            <div class="row">
                              <div class="col-md-12">
                                    <input type="checkbox" id="chckbx_block" name="chckbx_block">
                                    <label id="chckbx_block_label">Block Listed</label>
                                    <hr>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                        <label>Effectivity Date :</label>
                                        <input type="text" class="date-picker form-control" name="confidential_status_date" id="confidential_status_date" placeholder="Effectivity Date" data-error-msg="Effectivity Date is Required.">
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: -30px;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Reason :</label>
                                        <textarea class="form-control" rows="3" name="confidential_reason" id="confidential_reason" placeholder="Reason" data-error-msg="Reason is Required."></textarea>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <button id="btn_save_confidential_status" type="button" class="btn btn-success" style="width: 100%;">Save</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button id="btn_close_confidential_status" type="button" class="btn btn-default" data-dismiss="modal" style="width: 100%;">Cancel</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_create_relationship" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#2ecc71;">
                                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                                <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Relationship : <transaction class="transaction_type"></transaction></h4>
                            </div>

                            <div class="modal-body">
                                <form id="frm_relationship">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">*Relationship Name :</label>
                                        <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Relationship Name" data-error-msg="Relationship name is Required!" required>
                                    </div>
                                  </div>
                                </div><br>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group" style="margin-bottom:0px;">
                                        <label class="boldlabel">Description :</label>
                                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Relationship Description"></textarea>
                                    </div>
                                  </div>
                                </div>
                                </form>
                            </div>

                            <div class="modal-footer">
                                <button id="btn_create_relationship" type="button" class="btn" style="background-color:#2ecc71;color:white;">Save</button>
                                <button id="btn_cancel" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div><!---content---->
                    </div>
                </div><!---modal-->

            <div id="modal_create_course" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Course : <transaction class="transaction_type"></transaction></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_refcourse">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">*Course Name :</label>
                                    <input type="text" class="form-control" id="course" name="course_degree" placeholder="Course Name" data-error-msg="Course name is Required!" required>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group" style="margin-bottom:0px;">
                                    <label class="boldlabel">Description :</label>
                                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Course Description"></textarea>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_create_refcourse" type="button" class="btn" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancel" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content---->
                </div>
            </div><!---modal-->

                <div id="modal_rates_details" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#34495e;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true" style="color:#ecf0f1;">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Rates and Duties Details</h4>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                <h3 class="boldlabel"><span class="fa fa-circle fa-lg"></span> <text id="employment_type"></text></h3>
                                <p class="boldlabel">[ Position : <text id="position"> </text>] [ Department : <text id="department"></text>]</p>
                                <hr style="height:1px;background-color:black;"></hr>
                                </div>

                                <div class="col-md-12">

                                <div class="col-md-4"><p class="nomargin"><b>Date Start</b> : <text id="date_start"></p>
                                <p class="nomargin"><b>Date End</b> : <text id="date_end"></text></p>
                                <p class="nomargin"><b>Section</b> : <text id="section"></text></p>
                                <p class="nomargin"><b>Group</b> : <text id="group"></text></p>
                                <p class="nomargin"><b>Branch</b> : <text id="branch"></text></p>
                                <p class="nomargin"><b>Payment Type</b> : <text id="payment_type"></text></p>
                                <p class="nomargin"><b>Level</b> : <text id="level"></text></p>
                                </div>
                                <div class="col-md-4">
                                <p class="nomargin"><b>Salary Reg Rates :</b><text id="salary_reg_rates"></text></p>
                                <p class="nomargin"><b>Daily Rate :</b> :<text id="daily_rate"></text></p>
                                <p class="nomargin"><b>Rate Factor </b> :<text id="daily_rate_factor"></text> </p>
                                <p class="nomargin"><b>SSS PHIC Salary Credit</b> :<text id="sss_phic_salary_credit"></text></p>
                                <p class="nomargin"><b>Philhealth Salary Credit</b> :<text id="philhealth_salary_credit"></text></p>
                                <p class="nomargin"><b>Pagibig Salary Credit</b> :<text id="pagibig_salary_credit"></text></p>
                                <p class="nomargin"><b>Tax Shield</b> :<text id="tax_shield"></text></p>
                                </div>
                                <div class="col-md-4">
                                <p class="nomargin"><b>Remarks :</b><br><text id="remarks"></text><br></p>
                                </div>
                                </div>
                                </div>
                        </div>

                        <div class="modal-footer" style="padding:10px;">
                            <button id="btn_close_details" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_entitlement_details" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#34495e;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true" style="color:#ecf0f1;">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Leave Entitlement Details</h4>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                <h3 class="boldlabel"><span class="fa fa-circle fa-lg"></span> <text id="leave_type"></text></h3>
                                <p class="boldlabel">[ Shortname : <text id="leave_type_short_name"> </text>]</p>
                                <hr style="height:1px;background-color:black;"></hr>
                                </div>

                                <div class="col-md-12">

                                <div class="col-md-6">
                                <p class="nomargin"><b>Payable</b> : <text id="is_payable_detail"></text></p>
                                <p class="nomargin"><b>Forwardable</b> : <text id="is_forwardable_detail"></text></p>
                                <p class="nomargin"><b>Total Grant</b> : <text id="total_grant_detail"></text></p>
                                <p class="nomargin"><b>Received Balance</b> : <text id="received_balance_detail"></text></p>
                                <p class="nomargin"><b>Current Balance</b> : <text id="current_balance_detail"></text></p>
                                </div>
                                <div class="col-md-4">
                                <p class="nomargin"><b>Remarks :</b><br><text id="remark"></text><br></p>
                                </div>
                                </div>
                                </div>
                        </div>

                        <div class="modal-footer" style="padding:10px;">
                            <button id="btn_close_details" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                </div>

                <div id="modal_leave_show" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#34495e;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true" style="color:#ecf0f1;">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Available Leave</h4>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <div id="showavailableleave"></div>
                            </div>
                        </div>

                        <div class="modal-footer" style="padding:10px;">
                            <button id="btn_close_details" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                </div>


            <div id="modal_create_ratesandduties" class="modal fade modal_create_ratesandduties" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Rates and Duties : <ratestransactiontext class="ratestransactiontext"></ratestransactiontext></h4>
                            <p style="color:white;margin:0px;" id="dataname" class="dataname"></p>
                        </div>

                        <div class="modal-body">
                            <form id="frm_ratesandduties">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">* Employee Type:</label>
                                          <select class="form-control" id="ref_employment_type_id" name="ref_employment_type_id" id="sel1" data-error-msg="Employee Type is Required!" required>
                                            <option value="0">[ Create Employment Type ]</option>
                                            <?php
                                                                foreach($ref_emptype as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_employment_type_id  .'">'.$row->employment_type.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">* Department:</label>
                                          <select class="form-control" id="ref_department_id" name="ref_department_id" id="sel1" data-error-msg="Department is Required!" required>
                                            <option value="0">[ Create Department ]</option>
                                           <?php
                                                                foreach($ref_department as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_department_id  .'">'.$row->department.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">* Position:</label>
                                          <select class="form-control" id="ref_position_id" name="ref_position_id" id="sel1" data-error-msg="Position is Required!" required>
                                            <option value="0">[ Create Position Type ]</option>
                                            <?php
                                                                foreach($ref_position as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_position_id  .'">'.$row->position.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">* Branch:</label>
                                          <select class="form-control"  id="ref_branch_id" name="ref_branch_id" id="sel1" data-error-msg="Branch is Required!" required>
                                            <option value="0">[ Create Branch ]</option>
                                            <?php
                                                                foreach($ref_branch as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_branch_id  .'">'.$row->branch.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">* Section:</label>
                                          <select class="form-control" id="ref_section_id"  name="ref_section_id" id="sel1" data-error-msg="Section is Required!" required>
                                            <option value="0">[ Create Section ]</option>
                                            <?php
                                                                foreach($ref_section as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_section_id  .'">'.$row->section.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">* Group:</label>
                                          <select class="form-control" id="group_id"  name="group_id" id="sel1" data-error-msg="Group is Required!" required>
                                            <option value="0">[ Create Group Type ]</option>
                                            <?php
                                                                foreach($ref_group as $row)
                                                                {
                                                                    echo '<option value="'.$row->group_id  .'">'.$row->group_desc.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-bottom:2px; !important">
                                                  <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Date Start:</label>
                                                  <input type="text" name="date_start" class="date-picker form-control" value="" placeholder="Date Start" data-error-msg="Date Start is required!">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-bottom:2px; !important">
                                                  <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Date End:</label>
                                                  <input type="text" name="date_end" class="date-picker form-control" value="" placeholder="Date End" data-error-msg="Date End is required!">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Duration:</label>
                                          <select name="duration_id" id="duration" class="form-control" data-error-msg="Duration is required!">
                                            <option value="0">None</option>
                                                <?php
                                                    foreach($ref_duration as $row)
                                                    {
                                                        echo '<option value="'.$row->duration_id.'" data-no="'.$row->no_of_duration.'" data-duration-type="'.$row->duration_type.'">'.$row->duration_desc.'</option>';
                                                    }
                                                ?>
                                          </select>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">* Pay Type:</label>
                                          <select class="form-control" id="ref_payment_type_id" name="ref_payment_type_id" id="sel1" data-error-msg="Payment Type is Required!" required>
                                            <option value="0">[ Create Payment Type ]</option>
                                          <?php
                                                                foreach($ref_payment as $row)
                                                                {
                                                                    echo '<option id="'.$row->pay_type_factor.'" value="'.$row->ref_payment_type_id  .'">'.$row->payment_type.'</option>';
                                                                }
                                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">* Hours Per Day:</label>
                                          <input type="text" name="hour_per_day" id="hour_per_day" class="form-control numeric" placeholder="Hours Per Day" data-error-msg="Hours Per Day is required!" required>
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px!important;" id="salaryregratespanel">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">* Salary Reg Rates:</label>
                                          <input type="text" name="salary_reg_rates" id="salary_reg_rates_compute" class="form-control numeric" placeholder="Salary Reg Rates" data-error-msg="Basic Rate / Salary Reg Rates is required!" required>
                                        </div>         

                                        <div class="row" id="weeklyratespanel">
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-bottom:2px; !important">
                                                  <label for="employeetype" class="boldlabel" style="margin-bottom:0px;font-size: 9pt;">* Salary Reg Rates:</label>
                                                  <input type="text" name="salary_reg_rates" id="salary_reg_rates_compute_1" class="form-control numeric" placeholder="Salary Reg Rates" data-error-msg="Basic Rate / Salary Reg Rates is required!" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group" style="margin-bottom:2px; !important">
                                                  <label for="employeetype" class="boldlabel" style="margin-bottom:0px;font-size: 9pt;">* Monthly Salary:</label>
                                                  <input type="text" name="monthly_based_salary" id="monthly_based_salary" class="form-control numeric" placeholder="Monthly Based Salary" data-error-msg="Monthly Based Salary is required!">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Cola Per Hour:</label>
                                          <input type="text" name="cola_per_hour" class="form-control numeric" placeholder="Cola Per Hour" data-error-msg="Cola Per Hour is required!">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                              <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Per Day</label>
                                              <input type="text" name="per_day_pay" class="form-control numeric per_day_pay" data-error-msg="Per Day is required!" data-error-msg="Per Day is required!" readonly required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                              <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Per Hour:</label>
                                              <input type="text" name="per_hour_pay" class="form-control numeric per_hour_pay" placeholder="Factor" data-error-msg="Per Hour is required!" readonly required>
                                            </div>
                                        </div>
                                    </div>  

                                    <div class="form-group" style="margin-bottom:2px!important;">
                                          <label class="boldlabel" style="margin-bottom:0px;">Sunday Premium:</label>
                                          <select class="form-control" id="sunday_premium" name="sunday_premium" id="sel1">
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                          </select>
                                    </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">SSS PHIC Salary Credit:</label>
                                          <input type="text" name="sss_phic_salary_credit"class="form-control numeric" placeholder="SSS PHIC Salary Credit">
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">PhilHealth Salary Credit:</label>
                                          <input type="text" name="philhealth_salary_credit"class="form-control numeric" placeholder="Philhealth Salary Credit">
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Pag-Ibig Salary Credit:</label>
                                          <input type="text" name="pagibig_salary_credit" class="form-control numeric" placeholder="Pag-Ibig Salary Credit">
                                        </div>
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Tax Shield:</label>
                                          <input type="text" name="tax_shield" class="form-control numeric" placeholder="Tax Shield">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                          <label for="employeetype" class="boldlabel" style="margin-bottom:0px;">Remarks:</label>
                                          <textarea type="text" name="remarks" class="form-control" placeholder="Remarks"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_createratesandduties" type="button" class="btn" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancelcreateratesandduties" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content---->
                </div>
                </div>
            </div><!---modal-->

            <div id="modal_create_entitlement" class="modal fade modal_create_entitlement" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>Leave Entitletment : <texttitle id="entitlementtittle"></texttitle></h4>
                            <p style="color:white;margin:0px;" id="dataname" class="dataname">name</p>
                        </div>

                        <div class="modal-body">
                            <form id="frm_entitlement">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                                  <label class="boldlabel" style="margin-bottom:0px;">Leave Type:</label>
                                                  <select class="form-control" id="ref_leave_type_id" name="ref_leave_type_id" id="sel1" required>
                                                    <option value="slt">[ Select Leave Type ]</option>
                                                    <?php
                                                                        foreach($ref_leave_type as $row)
                                                                        {
                                                                            echo '<option value="'.$row->ref_leave_type_id  .'">'.$row->leave_type.'</option>';
                                                                        }
                                                                        ?>
                                                  </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                                  <label class="boldlabel" style="margin-bottom:0px;">Short Name:</label>
                                                  <input type="text" class="form-control" placeholder="Short Name" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                            <div class="checkbox" style="margin-top:25px;">
                                                 <label><input id="payable" type="checkbox" value=""><b>Is Payable?</b></label>
                                                 <label style="margin-left:20px;"><input id="forwardable" type="checkbox" value=""><b>Is Forwardable?</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                            <label class="boldlabel">Total Grant :</label>
                                            <input type="text" class="form-control numeric" id="total_grant" name="total_grant" placeholder="Total Grant" data-error-msg="Total Grant is Required!">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                            <label class="boldlabel">Received Balance :</label>
                                            <input type="text" class="form-control numeric" id="received_balance" name="received_balance" placeholder="Total Grant" data-error-msg="Received Balance is Required!" required readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-bottom:2px; !important">
                                            <label class="boldlabel">Current Balance :</label>
                                            <input type="text" class="form-control numeric" id="current_balance" name="current_balance" placeholder="Current Balance" data-error-msg="Current Balance is Required!" required readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_createentitlement" type="button" class="btn btn_createentitlement" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancelcreateentitlement" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content---->
                </div>
            </div><!---modal-->

            <div id="modal_file_leave" class="modal fade modal_file_leave" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span><texttitle id="applyleavetitle"></texttitle></h4>
                            <p style="color:white;margin:0px;" id="dataname" class="dataname">name</p>
                        </div>

                        <div class="modal-body">
                            <form id="frm_apply_leave">
                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                  <label class="boldlabel" style="margin-bottom:0px;">Leave Type:</label>
                                                  <availleavetype id="showavailableleave2select"></availleavetype>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:10px;margin-top:10px;">
                                                    <label class="boldlabel" style="margin-bottom:0px;">Date Filed:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                        <i class="fa fa-file-code-o"></i></span>
                                                            <input type="text" name="date_filed" class="date-picker form-control" value="" placeholder="Date Filed" data-error-msg="Date Filed is required!" required>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:10px;">
                                                    <label class="boldlabel" style="margin-bottom:0px;margin-top:10px;">Date Granted:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                        <i class="fa fa-file-code-o"></i></span>
                                                            <input type="text" name="date_granted" class="date-picker form-control" value="" placeholder="Date Granted" data-error-msg="Date Granted is required!" required>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                           <div class="form-group" style="margin-bottom:10px;">
                                                    <label class="boldlabel" style="margin-bottom:0px;">From:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                        <i class="fa fa-file-code-o"></i></span>
                                                            <input type="text" name="date_time_from" class="date-picker form-control" value="" placeholder="From Date" data-error-msg="From Date is required!" required>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                             <div class="form-group" style="margin-bottom:10px;">
                                                    <label class="boldlabel" style="margin-bottom:0px;">To:</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                        <i class="fa fa-file-code-o"></i></span>
                                                            <input type="text" name="date_time_to" class="date-picker form-control" value="" placeholder="To Date" data-error-msg="To Date is required!" required>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Purpose" class="boldlabel" style="margin-bottom:0px;">Total:</label>
                                                <input type="text" class="form-control numeric" name="total" placeholder="total">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Purpose" class="boldlabel" style="margin-bottom:0px;">Purpose:</label>
                                                <textarea type="text" name="purpose" class="form-control" placeholder="Purpose" required></textarea>
                                            </div>
                                        </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_create_filed_leave" type="button" class="btn btn_createentitlement" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancel_filed_leave" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content-->
                </div>
            </div><!---modal-->

            <div id="modal_create_memo" class="modal fade modal_create_memo" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span><texttitle id="memotitle"></texttitle></h4>
                            <p style="color:white;margin:0px;" id="dataname" class="dataname">name</p>
                        </div>

                        <div class="modal-body">
                            <form id="frm_memo">
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Purpose" class="boldlabel" style="margin-bottom:0px;">Date:</label>
                                                <input type="text" name="date_memo" class="date-picker form-control" value="" placeholder="Date of Memo" data-error-msg="Date is required!" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Memo #" class="boldlabel" style="margin-bottom:0px;">Memo #:</label>
                                                <input type="text" class="form-control" name="memo_number" placeholder="Memo #" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">Disciplinary Action Policy:</label>
                                          <select class="form-control" id="ref_disciplinary_action_policy_id" name="ref_disciplinary_action_policy_id" id="sel1"  data-error-msg="Displinary Action!" required>
                                            <option value="0">[ Create Disciplinary Policy ]</option>
                                            <?php
                                                foreach($ref_disciplinary_action_policy as $row)
                                                {
                                                    echo '<option value="'.$row->ref_disciplinary_action_policy_id  .'">'.$row->disciplinary_action_policy.'</option>';
                                                }
                                            ?>
                                          </select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">Action Taken:</label>
                                          <select class="form-control" id="ref_action_taken_id" name="ref_action_taken_id" id="sel1">
                                            <option value="0">[ Create Action Taken ]</option>
                                            <?php
                                                foreach($ref_action_taken as $row)
                                                {
                                                    echo '<option value="'.$row->ref_action_taken_id  .'">'.$row->action_taken.'</option>';
                                                }
                                            ?>
                                          </select>
                                        </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Purpose" class="boldlabel" style="margin-bottom:0px;">Date Granted:</label>
                                                <input type="text" name="date_granted" class="date-picker form-control" value="" placeholder="Date Granted" data-error-msg="Date Granted is required!" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Remarks" class="boldlabel" style="margin-bottom:0px;">Remarks:</label>
                                                <textarea type="text" name="remarks" class="form-control" placeholder="Remarks"></textarea>
                                            </div>
                                        </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="btn_creatememo" type="button" class="btn btn_creatememo" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancelmemo" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content-->
                </div>
            </div><!---modal create memo-->

            <div id="modal_create_commendation" class="modal fade modal_create_commendation" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span><texttitle id="commendationtitle"></texttitle></h4>
                            <p style="color:white;margin:0px;" id="dataname" class="dataname">name</p>
                        </div>

                        <div class="modal-body">
                            <form id="frm_commendation">
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px!important;">
                                                <label for="Purpose" class="boldlabel" style="margin-bottom:0px;">Date:</label>
                                                <input type="text" name="date_commendation" class="date-picker form-control" value="" placeholder="Date of Memo" data-error-msg="Date is required!" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px!important;">
                                                <label for="Memo #" class="boldlabel" style="margin-bottom:0px;">Memo #:</label>
                                                <input type="text" class="form-control" name="memo_number" placeholder="Memo #" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="margin-bottom:2px!important;">
                                                <label for="Remarks" class="boldlabel" style="margin-bottom:0px;">Remarks:</label>
                                                <textarea type="text" name="remarks" class="form-control" placeholder="Remarks"></textarea>
                                            </div>
                                        </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_createcommendation" type="button" class="btn btn_createcommendation" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancelcommendation" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content---->
                </div>
            </div><!---modal create memo-->


            <div id="modal_create_seminarstraining" class="modal fade modal_create_seminarstraining" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span><texttitle id="seminarstrainingtitle"></texttitle></h4>
                            <p style="color:white;margin:0px;" id="dataname" class="dataname">name</p>
                        </div>

                        <div class="modal-body">
                            <form id="frm_seminarstraining">
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Date" class="boldlabel" style="margin-bottom:0px;">Date:</label>
                                                <input type="text" name="date" class="date-picker form-control" value="" placeholder="Date of Seminar" data-error-msg="Date of Seminar is required!" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Seminar Title" class="boldlabel" style="margin-bottom:0px;">Title:</label>
                                                <input type="text" class="form-control" name="seminar_title" placeholder="Seminar Title " data-error-msg="Title of Seminar is required!" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Given By" class="boldlabel" style="margin-bottom:0px;">Given By:</label>
                                                <input type="text" class="form-control" name="given_by" placeholder="Give By" data-error-msg="Given By is required!" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Venue" class="boldlabel" style="margin-bottom:0px;">Venue:</label>
                                                <input type="text" class="form-control" name="venue" placeholder="Venue" data-error-msg="Venue is required!" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Date From" class="boldlabel" style="margin-bottom:0px;">Date From:</label>
                                                <input type="text" name="date_from" class="date-picker form-control" value="" placeholder="Date From" data-error-msg="Date From is required!" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Date To " class="boldlabel" style="margin-bottom:0px;">Date To:</label>
                                                <input type="text" name="date_to" class="date-picker form-control" value="" placeholder="Date From" data-error-msg="Date To is required!" required>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                          <label class="boldlabel" style="margin-bottom:0px;">Certificate:</label>
                                          <select class="form-control" id="ref_certificate_id" name="ref_certificate_id" id="sel1" data-error-msg="Certificate is required!" required>
                                            <option value="0">[ Create Seminars And Training ]</option>
                                            <?php
                                                                foreach($ref_certificate as $row)
                                                                {
                                                                    echo '<option value="'.$row->ref_certificate_id  .'">'.$row->certificate.'</option>';
                                                                }
                                                                ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group" style="margin-bottom:2px; !important">
                                                <label for="Remarks" class="boldlabel" style="margin-bottom:0px;">Remarks:</label>
                                                <textarea type="text" name="remarks" class="form-control" placeholder="Remarks"></textarea>
                                            </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="modal-footer">
                            <button id="btn_createseminarstraining" type="button" class="btn btn_createseminarstraining" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancelseminarstraining" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content---->
                </div>
            </div><!---modal create-->

            <div id="modal_references" class="modal fade modal_references" tabindex="-1" role="dialog"><!--modal-->
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

<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _txnMode2; var _txnModeRate; var _txnModereligion; var _selectedID; var _selectedIDrates; var _selectedIDentitlement; var _selectRowObj;
    var _selectRowObjrates; var _selectRowObjentitlement; var _isChecked; var _ispayable=0; var _isforwardable=0; var _Leave_type_value;
    var _selectRowObjmemorandum; var _selectedIDmemo; var _selectRowObjcommendation; var _selectedIDcommendation;
    var _selectRowObjseminarstraining; var _selectedIDseminarstraining; var _isCheckedrates; var _selectRowObjcourse; var _selectedIDcourse;
    var _selectRowObjchildren; var _selectedIDchildren; var _selectRowObjfamily; var _selectedIDfamily; var _selectRowObjemergency; var _selectedIDemergency;
    var _cbo_active_mode = 1; var _cbo_inactive_mode = 0;
    var _cbo_mode;var emp_ecode;var emp_fullname;var _selectedEcode; var _selectedPinNumber;var _selectedEmail;

    getactiveratespanel(0);

    $('input[name="chck-active"]').prop('checked',true);

    $('input[name="chck-active"]').on('change',function(){

        if ($(this).prop('checked')==true){ 
            _cbo_active_mode = 1;
        }
        else{
            _cbo_active_mode = 0;
        }

        check_inactivity_checkbox();

    });

    $('input[name="chck-inactive"]').on('change',function(){

        if ($(this).prop('checked')==true) { 
            _cbo_inactive_mode = 1;
        }
        else{
            _cbo_inactive_mode = 0;
        }
        
        check_inactivity_checkbox();
    });

    var check_inactivity_checkbox = function(parm,mode){
        $('#tbl_employee_list').DataTable().destroy();
        get_employee_list_mode(_cbo_active_mode,_cbo_inactive_mode);
    };

    function getactiveratespanel(code){
        if (code == 4){
            $('#salaryregratespanel').hide(200);
            $('#weeklyratespanel').show(200);
            $('#monthly_based_salary').attr('required',true);
        }else{
            $('#salaryregratespanel').show(200);
            $('#weeklyratespanel').hide(200);
            $('#monthly_based_salary').attr('required',false);
        }
        $('#monthly_based_salary').val("0.00");
    }

    var get_employee_list_mode = function(activemode,inactivemode){

    dt=$('#tbl_employee_list').DataTable({

            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bStateSave": true,
            "orderFixed": [ 1, 'asc' ],
            "fnStateSave": function (oSettings, oData) {
                localStorage.setItem('DataTables_' + window.location.pathname, JSON.stringify(oData));
            },
            "ajax": {
            "url": "Employee/transaction/list",
            "type": "POST",
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "active": activemode,
                    "inactive": inactivemode
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
                { visible: false, targets:[1],data: "last_name"},
                { targets:[2],data: "full_name" },
                { targets:[3],data: "ecode" },
                { targets:[4],data: "pin_number" },
                { targets:[5],data: "group_desc" },
                { targets:[6],data: "status" },
                {
                    targets:[7],data: null,
                    render: function (data, type, full, meta){

                        if (data.status == "Inactive"){
                            return '<center>'+right_employee_active+right_employee_edit+right_employee_delete+'</center>';
                        }
                        else if (data.is_retired == 1){
                            return '<center>'+right_employee_edit+right_employee_delete+'</center>';     
                        }
                        else{
                            return '<center>'+right_employee_email+right_employee_edit+right_employee_delete+'</center>';
                        }

                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Employee"
                     }
        });
        $('.numeric').autoNumeric('init');
    };

    var initializeControls=function(){
        dt=$('#tbl_employee_list').DataTable({

            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bStateSave": true,
            "orderFixed": [ 1, 'asc' ],
            "fnStateSave": function (oSettings, oData) {
                localStorage.setItem('DataTables_' + window.location.pathname, JSON.stringify(oData));
            },
            "ajax": {
            "url": "Employee/transaction/list",
            "type": "POST",
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "active": _cbo_active_mode,
                    "inactive": _cbo_inactive_mode
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
                { visible: false, targets:[1],data: "last_name"},
                { targets:[2],data: "full_name" },
                { targets:[3],data: "ecode" },
                { targets:[4],data: "pin_number" },
                { targets:[5],data: "group_desc" },
                { targets:[6],data: "status" },
                {
                    targets:[7],data: null,
                    render: function (data, type, full, meta){

                        if (data.status == "Inactive"){
                            return '<center>'+right_employee_active+right_employee_edit+right_employee_delete+'</center>';
                        }
                        else if (data.is_retired == 1){
                            return '<center>'+right_employee_edit+right_employee_delete+'</center>';     
                        }
                        else{
                            return '<center>'+right_employee_email+right_employee_edit+right_employee_delete+'</center>';
                        }

                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Employee"
                     },
            "rowCallback":function( row, data, index ){

                // $(row).find('td').eq(5).attr({
                //     "align": "right"
                // });
            }

        });

        $('.numeric').autoNumeric('init');


    }();

    $('#duration').on('change',function(){
        getDuration();
    });

    $('#chckbx_block_label').click(function(){
        getChckBoxStatus();
    });

    $('#chckbx_block').click(function(){
        // getChckBoxStatus();
    });    

    var getChckBoxStatus = function(){

        var stat = $('#chckbx_block').is(':checked');

        if(stat == false){
            $('#chckbx_block').prop('checked', true);
            $('#confidential_status_date').attr('required', true);
            $('#confidential_reason').attr('required', true);
        }else{
            $('#chckbx_block').prop('checked', false);
            $('#confidential_status_date').attr('required', false);
            $('#confidential_reason').attr('required', false);
        }

    };

    var getDuration=function(){

        var startDate = $("input[name*='date_start']").val();
        var endDate = $("input[name*='date_end']").val();

        var duration_value = $('#duration').val();   
        var data_no = $('#duration').find('option:selected').attr('data-no');   
        var data_duration_type = $('#duration').find('option:selected').attr('data-duration-type');

        if (startDate == ""){
            showNotification({title:"Error!",stat:"error",msg:"Start date is empty!"});   
            $("input[name*='date_start']").focus();
        }
        else{

            var date = new Date(startDate);

            if (duration_value == 0){
                $("input[name*='date_end']").val("");
            }
            else{
                if (data_duration_type == 1){ // days
                    date.setDate(date.getDate() + parseInt(data_no));
                  $("input[name*='date_end']").val(date.toInputFormat());
                }
                else if (data_duration_type == 2){ // Week
                    date.setDate(date.getDate() + parseInt(data_no*7));
                  $("input[name*='date_end']").val(date.toInputFormat());
                }
                else if (data_duration_type == 3){ // Month
                    getMonthDuration();
                }
                else if (data_duration_type == 4){ // Year
                    getYearDuration();
                }
            }
        }
    }

    var getMonthDuration = function(){

        var str = new Date($("input[name*='date_start']").val());
        var data_no = parseInt($('#duration').find('option:selected').attr('data-no'),10);   
        var result = str.addMonths(data_no);
        var gmD = new Date(result);
        var month = gmD.getMonth();
        var day = gmD.getDate();
        var year = gmD.getFullYear();
        var date = new Date(month + "/" + day + "/" + year);
        var ff = date.toInputFormat();
         $("input[name*='date_end']").val(ff);
    }

    Date.isLeapYear = function (year) { 
        return (((year % 4 === 0) && (year % 100 !== 0)) || (year % 400 === 0)); 
    };

    Date.getDaysInMonth = function (year, month) {
        return [31, (Date.isLeapYear(year) ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month];
    };

    Date.prototype.isLeapYear = function () { 
        return Date.isLeapYear(this.getFullYear()); 
    };

    Date.prototype.getDaysInMonth = function () { 
        return Date.getDaysInMonth(this.getFullYear(), this.getMonth());
    };

    Date.prototype.addMonths = function (value) {
        var n = this.getDate();
        this.setDate(1);
        this.setMonth(this.getMonth() + value);
        this.setDate(Math.min(n, this.getDaysInMonth()));
        return this;
    };

    var getYearDuration = function(){

            var str = $("input[name*='date_start']").val();

            if( /^\d{2}\/\d{2}\/\d{4}$/i.test( str ) ) {

                var parts = str.split("/");

                var month = parts[1] && parseInt( parts[0], 10 );
                var day = parts[0] && parseInt( parts[1], 10 );
                var year = parts[2] && parseInt( parts[2], 10 );

                var duration = parseInt($('#duration').find('option:selected').attr('data-no'),10);

                if( day <= 31 && day >= 1 && month <= 12 && month >= 1 ) {

                    var expiryDate = new Date( year, month - 1, day );
                    expiryDate.setFullYear( expiryDate.getFullYear() + duration );

                    var day = ( '0' + expiryDate.getDate() ).slice( -2 );
                    var month = ( '0' + ( expiryDate.getMonth() + 1 ) ).slice( -2 );
                    var year = expiryDate.getFullYear();

                var date = new Date(month + "/" + day + "/" + year);
                var ff = date.toInputFormat();
                $("input[name*='date_end']").val(ff);

                }
            }
    } 

      Date.prototype.toInputFormat = function() {
       var yyyy = this.getFullYear().toString();
       var mm = (this.getMonth() + 1).toString(); // getMonth() is zero-based
       var dd  = this.getDate().toString();
       // return yyyy + "-" + (mm[1]?mm:"0"+mm[0]) + "-" + (dd[1]?dd:"0"+dd[0]); // padding
       return (mm[1]?mm:"0"+mm[0]) + "/" + (dd[1]?dd:"0"+dd[0]) + "/" + yyyy;
    };

    Date.prototype.getWeek = function (dowOffset) {

        dowOffset = typeof(dowOffset) == 'int' ? dowOffset : 0; //default dowOffset to zero
        var newYear = new Date(this.getFullYear(),0,1);
        var day = newYear.getDay() - dowOffset; //the day of week the year begins on
        day = (day >= 0 ? day : day + 7);
        var daynum = Math.floor((this.getTime() - newYear.getTime() - 
        (this.getTimezoneOffset()-newYear.getTimezoneOffset())*60000)/86400000) + 1;
        var weeknum;
        //if the year starts before the middle of a week
        if(day < 4) {
            weeknum = Math.floor((daynum+day-1)/7) + 1;
            if(weeknum > 52) {
                nYear = new Date(this.getFullYear() + 1,0,1);
                nday = nYear.getDay() - dowOffset;
                nday = nday >= 0 ? nday : nday + 7;
                /*if the next year starts before the middle of
                  the week, it is week #1 of that year*/
                weeknum = nday < 4 ? 1 : 53;
            }
        }
        else {
            weeknum = Math.floor((daynum+day-1)/7);
        }
        return weeknum;
    };

    var getratesandduties=function(){
                    dt_rates=$('#tbl_rates_duties_list').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "RatesDuties/transaction/testlist",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control1",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": "",
                    "bDestroy": true,
                },
                { targets:[1],data: "employment_type" },
                { targets:[2],data: "date_start" },
                { targets:[3],data: "date_end" },
                { targets:[4],data: "active_rates_duties",
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
                    targets:[5],
                    render: function (data, type, full, meta){

                        return '<center>'+right_rates_edit+right_rates_delete+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Rates and Duties"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getentitlement=function(){
                    dt_entitlement=$('#tbl_entitlement').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Entitlement/transaction/getresult",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control2",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": "",
                    "bDestroy": true,
                },
                { targets:[1],data: "leave_type" },
                { targets:[2],data: "leave_type_short_name" },
                { targets:[3],data: "is_payable",
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
                { targets:[4],data: "is_forwardable",
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
                { targets:[5],data: "total_grant" },
                { targets:[6],data: "received_balance" },
                { targets:[7],data: "current_balance" },
                {
                    targets:[8],
                    render: function (data, type, full, meta){

                        return '<center>'+right_leaveentitlement_edit+right_leaveentitlement_delete+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Entitlements"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getFiledLeave=function(){
                    dt_apply_leave=$('#tbl_apply_leave').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Leavefiled/transaction/getfiledleave",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "leave_type" },
                { targets:[1],data: "date_filed" },
                { targets:[2],data: "date_granted" },
                { targets:[3],data: "date_time_from" },
                { targets:[4],data: "date_time_to" },
                { targets:[5],data: "purpose" },
                { targets:[6],data: "total" },
            ],
            language: {
                         searchPlaceholder: "Search Filed Leave"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getMemo=function(){
                    dt_memo=$('#tbl_memo').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Memorandum/transaction/getmemorandum",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "date_memo" },
                { targets:[1],data: "memo_number" },
                { targets:[2],data: "disciplinary_action_policy" },
                { targets:[3],data: "action_taken" },
                { targets:[4],data: "date_granted" },
                { targets:[5],data: "remarks" },
                {
                    targets:[6],
                    render: function (data, type, full, meta){

                        return '<center>'+right_memorandum_edit+right_memorandum_delete+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Memorandum"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getCommendation=function(){
                    dt_commendation=$('#tbl_commendation').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Commendation/transaction/getcommendation",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "date_commendation" },
                { targets:[1],data: "memo_number" },
                { targets:[2],data: "remarks" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){

                        return '<center>'+right_commendation_edit+right_commendation_delete+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Commendation"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getSeminarsTraining=function(){
                    dt_seminarstraining=$('#tbl_seminarstraining').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "SeminarsTraining/transaction/getseminarstraining",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "date" },
                { targets:[1],data: "seminar_title" },
                { targets:[2],data: "given_by" },
                { targets:[3],data: "date_from" },
                { targets:[4],data: "date_to" },
                { targets:[5],data: "venue" },
                { targets:[6],data: "certificate" },
                { targets:[7],data: "remarks" },
                {
                    targets:[8],
                    render: function (data, type, full, meta){

                        return '<center>'+right_seminar_edit+right_seminar_delete+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Seminars and Training"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getCourseDegree=function(){
                    dt_course_degree=$('#tbl_course_degree_list').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Emp_EducationalAttainment/transaction/listcourseofemployee",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "course_degree" },
                { targets:[1],data: "year_graduate" },
                {
                    targets:[2],
                    render: function (data, type, full, meta){
                        var btn_edit='<button class="btn btn-default btn-sm btnedit" name="coursedegree_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                        var btn_trash='<button class="btn btn-default btn-sm btndelete" name="coursedegree_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                        return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Education"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getChildrenDependent=function(){
                    dt_children_dependent=$('#tbl_children_dependent_list').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
           "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Emp_ChildrenDependent/transaction/listchildrendependent",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "name" },
                { targets:[1],data: "relationship" },
                { targets:[2],data: "birthdate" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){
                        var btn_edit='<button class="btn btn-default btn-sm btnedit" name="childrendependent_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                        var btn_trash='<button class="btn btn-default btn-sm btndelete" name="childrendependent_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                        return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Children Dependent"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getFamilyDetails=function(){
                    dt_family_details=$('#tbl_family_details_list').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Emp_FamilyDetails/transaction/listfamilydetails",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "name" },
                { targets:[1],data: "relationship" },
                { targets:[2],data: "birthdate" },
                {
                    targets:[3],
                    render: function (data, type, full, meta){
                        var btn_edit='<button class="btn btn-default btn-sm btnedit" name="familydetails_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                        var btn_trash='<button class="btn btn-default btn-sm btndelete" name="familydetails_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                        return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Family"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getEmergencyContact=function(){
                    dt_emergency_contact=$('#tbl_emergency_contact_list').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Emp_EmergencyContact/transaction/listemergencycontact",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "name" },
                { targets:[1],data: "relationship" },
                { targets:[2],data: "contact_number_one" },
                { targets:[3],data: "contact_number_two" },
                { targets:[4],data: "address" },
                {
                    targets:[5],
                    render: function (data, type, full, meta){
                        var btn_edit='<button class="btn btn-default btn-sm btnedit" name="emergencycontact_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                        var btn_trash='<button class="btn btn-default btn-sm btndelete" name="emergencycontact_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                        return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Emergency Contact"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }

        });

    }

    var getWorkExperience=function(){
                    dt_work_experience=$('#tbl_work_experience').DataTable({
            "fnInitComplete": function (oSettings, json) {
                $.unblockUI();
                },
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
            "url": "Emp_WorkExperience/transaction/listworkexperience",
            "type": "POST",
            "bDestroy": true,
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "employee_id": _selectedID //id of the user
                    } );
                }
            },
            "columns": [
                { targets:[0],data: "company" },
                { targets:[1],data: "job_title" },
                { targets:[2],data: "from_date" },
                { targets:[3],data: "to_date" },
                { targets:[4],data: "job_description" },
                {
                    targets:[5],
                    render: function (data, type, full, meta){
                        var btn_edit='<button class="btn btn-default btn-sm btnedit" name="workexperience_edit"   data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                        var btn_trash='<button class="btn btn-default btn-sm btndelete" name="workexperience_remove"  data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                        return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }
            ],
            language: {
                         searchPlaceholder: "Search Work Ezperience"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
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
            emp_ecode = data.ecode;
            emp_fullname = data.full_name;
            $('#datafullname').text(' '+data.full_name);
            $('#dataecode').text(' '+data.ecode);
            $('#datapinnumber').text(' '+data.pin_number);
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
            $('#datahealth').text(' '+data.health_id);
            $('#databarangay').text(' '+data.barangay_id);
            $('#dataaccountnumber').text(' '+data.bank_account);
            $('#dataemploymenttype').text(' '+data.employment_type);
            $('#dataremarks').text(' '+data.status);
            $('#datadepartment').text(' '+data.department);
            $('#dataposition').text(' '+data.position);
            $('#databranch').text(' '+data.branch);
            $('#datasection').text(' '+data.section);
            $('#datapaytype').text(' '+data.payment_type);
            $('#dataemploymentdate').text(' '+data.employment_date);
            $('#datadateregular').text(' '+data.date_regularization);
            $('#dataaddress1').text(' '+data.address_one);
            $('#dataaddress2').text(' '+data.address_two);
            $('#dataemailaddress').text(' '+data.email_address);
            $('#datamobilenumber').text(' '+data.cell_number);
            $('#dataphonenumber').text(' '+data.telphone_number);
            JsBarcode("#barcode1", data.ecode);
            $('#modal_employee_details').modal('toggle');

        } );

            //detailed modal view of rates and duties
     $('#tbl_rates_duties_list tbody').on( 'click', 'tr td.details-control1', function () {
            _selectRowObjrates=$(this).closest('tr');
            var data=dt_rates.row(_selectRowObjrates).data();
            _selectedIDrates=data.emp_rates_duties_id;

            $('#employment_type').text(data.employment_type);
            $('#position').text(data.position);
            $('#department').text(data.department);
            $('#date_start').text(data.date_start);
            $('#date_end').text(data.date_end);
            $('#section').text(data.section);
            $('#group').text(data.group_desc);
            $('#branch').text(data.branch);
            $('#payment_type').text(data.payment_type);
            $('#level').text(data.level);
            $('#salary_reg_rates').text(data.salary_reg_rates);
            $('#daily_rate').text(data.daily_rate);
            $('#daily_rate_factor').text(data.daily_rate_factor);
            $('#sss_phic_salary_credit').text(data.sss_phic_salary_credit);
            $('#philhealth_salary_credit').text(data.philhealth_salary_credit);
            $('#pagibig_salary_credit').text(data.pagibig_salary_credit);
            $('#tax_shield').text(data.tax_shield);
            $('#remarks').text(data.remarks);

            $('#modal_rates_details').modal('toggle');

        } );
                //detailed modal view of entitlement
        $('#tbl_entitlement tbody').on( 'click', 'tr td.details-control2', function () {
            _selectRowObjentitlement=$(this).closest('tr');
            var data=dt_entitlement.row(_selectRowObjentitlement).data();
            _selectedIDentitlement=data.emp_leaves_entitlement_id
                if(data.is_payable==1){
                    var  payable_detail = "<span style='color:#37d077' class='glyphicon glyphicon-ok'></span>";
                }
                else{
                    var  payable_detail = "<span style='color:#e74c3c' class='glyphicon glyphicon-remove'></span>";
                }
                if(data.is_forwardable==1){
                    var forwardable_detail = "<span style='color:#37d077' class='glyphicon glyphicon-ok'></span>";
                }
                else{
                    var forwardable_detail = "<span style='color:#e74c3c' class='glyphicon glyphicon-remove'></span>";
                }
            $('#leave_type').text(data.leave_type);
            $('#leave_type_short_name').text(data.leave_type_short_name);
            $('#is_payable_detail').html(payable_detail);
            $('#is_forwardable_detail').html(forwardable_detail);
            $('#total_grant_detail').text(data.total_grant);
            var current_balance = parseInt(data.total_grant) + parseInt(data.received_balance);
            $('#received_balance_detail').text(accounting.formatNumber("0",2));
            $('#current_balance_detail').text(accounting.formatNumber(current_balance,2));
            $('#modal_entitlement_details').modal('toggle');

        } );

     /*   $('#tbl_rates_duties_list tbody').on( 'click', 'tr td.details-control1', function () {
            var tr = $(this).closest('tr');
            var row = dt_rates.row( tr );
            var idx1 = $.inArray( tr.attr('id'), detailRows1 );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details1' );
                row.child.hide();

                detailRows1.splice( idx1, 1 );
            }
            else {
                tr.addClass( 'details1' );

                row.child( format1( row.data() ) ).show();

                if ( idx1 === -1 ) {
                    detailRows1.push( tr.attr('id') );
                }
            }
        } );*/
            //checkbox value for payable
        $('#frm_entitlement').on('click','input[id="payable"]',function(){
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
             //checkbox value for forwardable
        $('#frm_entitlement').on('click','input[id="forwardable"]',function(){
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



            //function for destroying info course/degree child family emergency contact
            $('.course').click(function(){
            $('#tbl_course_degree_list').dataTable().fnDestroy();
            getCourseDegree();
            });

            $('.children_dependent').click(function(){
            $('#tbl_children_dependent_list').dataTable().fnDestroy();
            getChildrenDependent();
            });

            $('.family_details').click(function(){
            $('#tbl_family_details_list').dataTable().fnDestroy();
            getFamilyDetails();
            });

            $('.emergency_contact').click(function(){
            $('#tbl_emergency_contact_list').dataTable().fnDestroy();
            getEmergencyContact();
            });

            $('.work_experience').click(function(){
            $('#tbl_work_experience').dataTable().fnDestroy();
            getWorkExperience();
            });

            $('.confidential_status').click(function(){

                getEmpConfidentialStatus().done(function(response){

                    var row = response.data[0];
                    var rowlength = response.data.length;

                    if (rowlength > 0){
                        $('#chckbx_block').prop('checked', true);
                        $('#confidential_status_date').val(row.effectivity_date);
                        $('#confidential_reason').val(row.confidential_reason);

                        $('#confidential_status_date').attr('required', true);
                        $('#confidential_reason').attr('required', true);
                    }else{
                        $('#chckbx_block').prop('checked', false);
                        $('#confidential_status_date').val("");
                        $('#confidential_reason').val("");
                        $('#confidential_status_date').attr('required', false);
                        $('#confidential_reason').attr('required', false);
                    }

                });
                    
                $('#modal_confidential_status').modal('toggle');

            });

            $('#btn_newcoursedegree').click(function(){
                _txnMode2="newcoursedegree";
                $('#coursedegreetitle').text("Create Course/Degree");
                $('#modal_course_degree_new').modal('toggle');

            });

            $('#btn_newchildren').click(function(){
                _txnMode2="newchildren";
                $('#childrengreettitle').text("Create Childen/Dependent");
                $('#modal_children_dependent_new').modal('toggle');

            });

            $('#btn_newfamilydetails').click(function(){
                _txnMode2="newfamily";
                $('#familygreettitle').text("Create Childen/Dependent");
                $('#modal_family_details_new').modal('toggle');

            });

            $('#btn_newemergencycontact').click(function(){
                _txnMode2="newcontact";
                $('#emergencycontactgreettitle').text("Create Emergency Contact");
                $('#modal_emergency_contact_new').modal('toggle');

            });

            $('#btn_newworkexperience').click(function(){
                _txnMode2="newworkexperience";
                $('#workexperiencegreettitle').text("Create Work Experience");
                $('#modal_work_experience_new').modal('toggle');
                clearFields($('#frm_work_experience'))

            });


            $('#btn_save_course_degree').click(function(){
                        if(validateRequiredFields($('#frm_course_degree'))){
                            if(_txnMode2=="newcoursedegree"){
                                createCourseDegree().done(function(response){
                                    showNotification(response);
                                    dt_course_degree.row.add(response.row_added[0]).draw();
                                    clearFields($('#frm_course_degree'))
                                }).always(function(){
                                    $('#modal_course_degree_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                            if(_txnMode2=="editcoursedegree"){
                                updateCourseDegree().done(function(response){
                                    showNotification(response);
                                    dt_course_degree.row(_selectRowObjcourse).data(response.row_updated[0]).draw();
                                    clearFields($('#frm_course_degree'))
                                }).always(function(){
                                    $('#modal_course_degree_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                        }
                    });

            $('#btn_save_children_dependent').click(function(){
                        if(validateRequiredFields($('#frm_children_dependent'))){
                            if(_txnMode2=="newchildren"){
                                createChildrenDependent().done(function(response){
                                    showNotification(response);
                                    dt_children_dependent.row.add(response.row_added[0]).draw();
                                    clearFields($('#frm_children_dependent'))
                                }).always(function(){
                                    $('#modal_children_dependent_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                            if(_txnMode2=="editchildren"){
                                updateChildrenDependent().done(function(response){
                                    showNotification(response);
                                    dt_children_dependent.row(_selectRowObjchildren).data(response.row_updated[0]).draw();
                                    clearFields($('#frm_children_dependent'))
                                }).always(function(){
                                    $('#modal_children_dependent_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                        }
                    });

            $('#btn_save_family_details').click(function(){
                        if(validateRequiredFields($('#frm_family_details'))){
                            if(_txnMode2=="newfamily"){
                                createFamilyDetails().done(function(response){
                                    showNotification(response);
                                    dt_family_details.row.add(response.row_added[0]).draw();
                                    clearFields($('#frm_family_details'))
                                }).always(function(){
                                    $('#modal_family_details_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                            if(_txnMode2=="editfamily"){
                                updateFamilyDetails().done(function(response){
                                    showNotification(response);
                                    dt_family_details.row(_selectRowObjfamily).data(response.row_updated[0]).draw();
                                    clearFields($('#frm_family_details'))
                                }).always(function(){
                                    $('#modal_family_details_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                        }
                    });

            $('#btn_save_emergency_contact').click(function(){
                        if(validateRequiredFields($('#frm_emergency_details'))){
                            if(_txnMode2=="newcontact"){
                                createEmergencyContact().done(function(response){
                                    showNotification(response);
                                    dt_emergency_contact.row.add(response.row_added[0]).draw();
                                    clearFields($('#frm_emergency_details'))
                                }).always(function(){
                                    $('#modal_emergency_contact_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                            if(_txnMode2=="editfamily"){
                                updateEmergencyContact().done(function(response){
                                    showNotification(response);
                                    dt_emergency_contact.row(_selectRowObjemergency).data(response.row_updated[0]).draw();
                                    clearFields($('#frm_emergency_details'))
                                }).always(function(){
                                    $('#modal_emergency_contact_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                        }
                    });

            $('#btn_save_work_experience').click(function(){
                        if(validateRequiredFields($('#frm_work_experience'))){
                            if(_txnMode2=="newworkexperience"){
                                createWorkExperience().done(function(response){
                                    showNotification(response);
                                    dt_work_experience.row.add(response.row_added[0]).draw();
                                    clearFields($('#frm_work_experience'))
                                }).always(function(){
                                    $('#modal_work_experience_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                            if(_txnMode2=="editworkexperience"){
                                updateWorkExperience().done(function(response){
                                    showNotification(response);
                                    dt_work_experience.row(_selectRowObjworkexp).data(response.row_updated[0]).draw();
                                    clearFields($('#frm_work_experience'))
                                }).always(function(){
                                    $('#modal_work_experience_new').modal('toggle');
                                    $.unblockUI();
                                    $('.datepicker').remove();
                                });
                                return;
                            }
                        }
                    });

            $('#btn_save_confidential_status').click(function(){
                if(validateRequiredFields($('#frm_confidential_status'))){

                    createConfidentialStatus().done(function(response){
                                        showNotification(response);
                                    }).always(function(){
                                        $('#modal_confidential_status').modal('toggle');
                                        $.unblockUI();
                                    });
                                 return;
                }
            });


            $('#tbl_course_degree_list tbody').on('click','button[name="coursedegree_edit"]',function(){
                _txnMode2="editcoursedegree";
                $('#coursedegreetitle').text("Edit Course/Degree");
                _selectRowObjcourse=$(this).closest('tr');
                var data=dt_course_degree.row(_selectRowObjcourse).data();
                _selectedIDcourse=data.emp_educational_attainment_id;
                //alert(_selectedIDcourse);

                $('#ref_course_degree_id').val(data.ref_course_degree_id);

                $('input,textarea').each(function(){
                    var _elem=$(this);
                    $.each(data,function(name,value){
                        if(_elem.attr('name')==name){
                            _elem.val(value);
                        }
                    });
                });

               $('#modal_course_degree_new').modal('toggle');
            });

            $('#tbl_children_dependent_list tbody').on('click','button[name="childrendependent_edit"]',function(){
                _txnMode2="editchildren";
                $('#childrengreettitle').text("Edit Children/Dependent");
                _selectRowObjchildren=$(this).closest('tr');
                var data=dt_children_dependent.row(_selectRowObjchildren).data();
                _selectedIDchildren=data.emp_children_dependent_id;
                //alert(_selectedIDcourse);

                $('#ref_relationship_id').val(data.ref_relationship_id);

                $('input,textarea').each(function(){
                    var _elem=$(this);
                    $.each(data,function(name,value){
                        if(_elem.attr('name')==name){
                            _elem.val(value);
                        }
                    });
                });

               $('#modal_children_dependent_new').modal('toggle');
            });

            $('#tbl_family_details_list tbody').on('click','button[name="familydetails_edit"]',function(){
                _txnMode2="editfamily";
                $('#familygreettitle').text("Edit Family Details");
                _selectRowObjfamily=$(this).closest('tr');
                var data=dt_family_details.row(_selectRowObjfamily).data();
                _selectedIDfamily=data.emp_family_details_id;
                //alert(_selectedIDcourse);

                $('#ref_relationship_id1').val(data.ref_relationship_id);
                //alert(data.ref_relationship_id);
                $('input,textarea').each(function(){
                    var _elem=$(this);
                    $.each(data,function(name,value){
                        if(_elem.attr('name')==name){
                            _elem.val(value);
                        }
                    });
                });

               $('#modal_family_details_new').modal('toggle');
            });

            $('#tbl_emergency_contact_list tbody').on('click','button[name="emergencycontact_edit"]',function(){
                _txnMode2="editfamily";
                $('#emergencycontactgreettitle').text("Edit Emergency Contact");
                _selectRowObjemergency=$(this).closest('tr');
                var data=dt_emergency_contact.row(_selectRowObjemergency).data();
                _selectedIDemergency=data.emp_emergency_contact_details_id;
                //alert(_selectedIDcourse);

                $('#ref_relationship_id2').val(data.ref_relationship_id);
                //alert(data.ref_relationship_id);
                $('input,textarea').each(function(){
                    var _elem=$(this);
                    $.each(data,function(name,value){
                        if(_elem.attr('name')==name){
                            _elem.val(value);
                        }
                    });
                });

               $('#modal_emergency_contact_new').modal('toggle');
            });

            $('#tbl_work_experience tbody').on('click','button[name="workexperience_edit"]',function(){
                _txnMode2="editworkexperience";
                $('#workexperiencegreettitle').text("Edit Work Experience");
                _selectRowObjworkexp=$(this).closest('tr');
                var data=dt_work_experience.row(_selectRowObjworkexp).data();
                _selectedIDworkexp=data.ref_work_experience_id;

                $('input,textarea').each(function(){
                    var _elem=$(this);
                    $.each(data,function(name,value){
                        if(_elem.attr('name')==name){
                            _elem.val(value);
                        }
                    });
                });

               $('#modal_work_experience_new').modal('toggle');
            });

            $('#tbl_work_experience tbody').on('click','button[name="workexperience_remove"]',function(){
                _selectRowObjworkexp=$(this).closest('tr');
                var data=dt_work_experience.row(_selectRowObjworkexp).data();
                _selectedIDworkexp=data.ref_work_experience_id;

               $('#modal_confirmation_workexp').modal('show');
            });

            $('#tbl_course_degree_list tbody').on('click','button[name="coursedegree_remove"]',function(){
                _selectRowObjcourse=$(this).closest('tr');
                var data=dt_course_degree.row(_selectRowObjcourse).data();
                _selectedIDcourse=data.emp_educational_attainment_id;
                //console.log(_selectedIDrates);

               $('#modal_confirmation_course').modal('show');
            });

            $('#tbl_children_dependent_list tbody').on('click','button[name="childrendependent_remove"]',function(){
                _selectRowObjchildren=$(this).closest('tr');
                var data=dt_children_dependent.row(_selectRowObjchildren).data();
                _selectedIDchildren=data.emp_children_dependent_id;
                //console.log(_selectedIDrates);

               $('#modal_confirmation_children').modal('show');
            });

            $('#tbl_family_details_list tbody').on('click','button[name="familydetails_remove"]',function(){
                _selectRowObjfamily=$(this).closest('tr');
                var data=dt_family_details.row(_selectRowObjfamily).data();
                _selectedIDfamily=data.emp_family_details_id;
                //console.log(_selectedIDrates);

               $('#modal_confirmation_family').modal('show');
            });

            $('#tbl_emergency_contact_list tbody').on('click','button[name="emergencycontact_remove"]',function(){
                _selectRowObjemergency=$(this).closest('tr');
                var data=dt_emergency_contact.row(_selectRowObjemergency).data();
                _selectedIDemergency=data.emp_emergency_contact_details_id;
                //console.log(_selectedIDrates);

               $('#modal_confirmation_emergency').modal('show');
            });

            $('#btn_yes_course').click(function(){
                removeCourse().done(function(response){
                    showNotification(response);
                    dt_course_degree.row(_selectRowObjcourse).remove().draw();
                    $.unblockUI();
                });
            });

            $('#btn_yes_workexp').click(function(){
                removeWorkExperience().done(function(response){
                    showNotification(response);
                    dt_work_experience.row(_selectRowObjworkexp).remove().draw();
                    $.unblockUI();
                });
            });

            $('#btn_yes_children').click(function(){
                removeChildren().done(function(response){
                    showNotification(response);
                    dt_children_dependent.row(_selectRowObjchildren).remove().draw();
                    $.unblockUI();
                });
            });

            $('#btn_yes_family').click(function(){
                removeFamilyDetails().done(function(response){
                    showNotification(response);
                    dt_family_details.row(_selectRowObjfamily).remove().draw();
                    $.unblockUI();
                });
            });

            $('#btn_yes_emergency').click(function(){
                removeEmergencyContact().done(function(response){
                    showNotification(response);
                    dt_emergency_contact.row(_selectRowObjemergency).remove().draw();
                    $.unblockUI();
                });
            });


            //function for getting details of leave type//
            $('#ref_leave_type_id').change(function() {
            _Leave_type_value=$(this).val();
            if(_Leave_type_value==0){
                alert("create leave type");
                return;
            }
            getLeaveTypeDetails().done(function(response){
                        $('#total_grant').val(response.data[0].total_grant);
                        $('#ref_leave_type_short_name').val(response.data[0].ref_leave_type_short_name);
                        currentBalance();
                        if(response.data[0].is_payable==1){
                            $('#payable').prop('checked', true);
                            //alert(data.is_payable);
                            _ispayable = 1;
                        }
                        else{
                            $('#payable').prop('checked', false);
                            //alert(data.is_payable);
                            _ispayable = 0;
                        }
                        if(response.data[0].is_forwardable==1){
                            $('#forwardable').prop('checked', true);
                            //alert(data.is_forwardable);
                            _isforwardable = 1;
                        }
                        else{
                            $('#forwardable').prop('checked', false);
                            //alert(data.is_forwardable);
                            _isforwardable = 0;

                        }
                        //alert("done");
                        clearFields($('#'))
                    }).always(function(){
                        $.unblockUI();
                    });
            });

            $("#hour_per_day").keyup(function(){
                computeperdayandperhour();
            });

            $("#salary_reg_rates_compute").keyup(function(){
                var srrc = $('#salary_reg_rates_compute').val();
                $('#salary_reg_rates_compute_1').val(srrc);
                computeperdayandperhour();
            });


            $("#salary_reg_rates_compute_1").keyup(function(){
                var srrc1 = $('#salary_reg_rates_compute_1').val();
                $('#salary_reg_rates_compute').val(srrc1);
                computeperdayandperhour();
            });

            var computeperdayandperhour=function(){
                var payment_factor = $('#ref_payment_type_id option:selected').attr('id');
                var hour_per_day_temp = $('#hour_per_day').val();
                var hour_per_day = hour_per_day_temp.replace(/,/g, "");
                var salary_reg_rates_compute_temp = $('#salary_reg_rates_compute').val();
                var salary_reg_rates_compute = salary_reg_rates_compute_temp.replace(/,/g, "");

                //finalize compute
                var per_day_pay =  parseFloat(salary_reg_rates_compute) / parseFloat(payment_factor);
                var per_hour_pay =  parseFloat(salary_reg_rates_compute) / parseFloat(hour_per_day) / parseFloat(payment_factor);

                $('.per_day_pay').val(accounting.formatNumber(per_day_pay,2));
                $('.per_hour_pay').val(accounting.formatNumber(per_hour_pay,2));
            };


            $("#total_grant").keyup(function(){
                currentBalance();
            });

            var currentBalance=function(){
                var total_grant = $('#total_grant').val();
                var received_balance = $('#received_balance').val();
                var current_balance = parseFloat(total_grant) + parseFloat(received_balance);
                $('#current_balance').val(current_balance);
            };
            //synchronize total grant and current balance//

            //high light row EZ trick by jbpv
            $('#tbl_employee_list tbody').delegate('tr', 'click', function() {

            $('.odd').css('background-color','#eeeeee');
            $('.odd').css('color','#616161');
            $('.even').css('background-color','white');
            $('.even').css('color','#616161');


            $(this).closest("tr").css('background-color','#e74c3c');
            $(this).closest("tr").css('color','white');
                _selectRowObj=$(this).closest('tr');
                var data=dt.row(_selectRowObj).data();
                _selectedID=data.employee_id;
                _selectedname= '[Name : ' + data.first_name +' ' + data.middle_name + ' ' + data.last_name + ']';
                _selectedname1= data.first_name +' ' + data.middle_name + ' ' + data.last_name;
                //alert(_selectedID);
                _isChecked = this.checked = true; //for checking if there is any highlighted field

            });

            $('#tbl_rates_duties_list tbody').delegate('tr', 'click', function() {

            $('.odd').css('background-color','#eeeeee');
            $('.odd').css('color','#616161');
            $('.even').css('background-color','white');
            $('.even').css('color','#616161');


            $(this).closest("tr").css('background-color','#16a085');
            $(this).closest("tr").css('color','white');
                _selectRowObjrates=$(this).closest('tr');
                var data=dt_rates.row(_selectRowObjrates).data();
                _selectedIDrates=data.emp_rates_duties_id;
                //alert(_selectedID);
                _isCheckedrates = this.checked = true; //for checking if there is any highlighted field in rates

            });


            //to remove higlight when going to the next page
        $('.pagination').click(function(){
            _isChecked = this.checked = false; //setting ischecked to no
            $('.odd').closest("tr").css('background-color','white');
            $('.even').closest("tr").css('background-color','white');
            $('.odd').css('background-color','#eeeeee !important');
            $('.even').css('background-color','white !important');
            $('.odd').css('color','#616161');
            $('.even').css('color','#616161');
        });



        $('#btn_activate_rate').click(function(){
           if(_isCheckedrates == true){
                setActiveRates().done(function(response){
                        showNotification(response); //
                        dt.row(_selectRowObj).data(response.row_update[0]).draw();
                        _isCheckedrates=0;
                    }).always(function(){
                        $('#tbl_rates_duties_list').DataTable().ajax.reload();
                        $.unblockUI();
                    });
           }
           else{
                alert("must select rate to activate");
           }
        });
            //the following codes are for buttons at top navigations
        $('.edit_duties').click(function(){
            if(_isChecked == true){
               _txnMode="ratesduties";
                $('#dataname').text(_selectedname);
                $('.display_name').text(_selectedname1);
                $('.ratestransactiontext').text('Edit');
                //alert(_selectedID);
                hideemployeeList();
                hideemployeeFields();
                hideEntitlement();
                hideApplyLeave();
                showRatesduties();
                showSpinningProgressLoading();
                getratesandduties();
            }
            else{
                $('#modal_please_select_employee').modal('toggle');
            }

        });

        $('.edit_entitlement').click(function(){
            if(_isChecked == true){
               _txnMode="entitlement";
                $('.dataname').text(_selectedname);
                $('.display_name').text(_selectedname1);
                //alert(_selectedname1);
                hideemployeeList();
                hideemployeeFields();
                hideRatesduties();
                hideApplyLeave();
                showEntitlement();
                showSpinningProgressLoading();
                getentitlement();
            }
            else{
                $('#modal_please_select_employee').modal('toggle');
            }

        });

        $('.edit_memorandum').click(function(){
            if(_isChecked == true){
               _txnMode="memorandum";
                $('.dataname').text(_selectedname);
                $('.display_name').text(_selectedname1);
                //alert(_selectedname1);
                hideemployeeList();
                hideemployeeFields();
                hideRatesduties();
                hideApplyLeave();
                hideEntitlement();
                showMemorandum();
                showSpinningProgressLoading();
                getMemo();
            }
            else{
                $('#modal_please_select_employee').modal('toggle');
            }

        });

        $('.edit_commendation').click(function(){
            if(_isChecked == true){
               _txnMode="commendation";
                $('.dataname').text(_selectedname);
                $('.display_name').text(_selectedname1);
                //alert(_selectedname1);
                hideemployeeList();
                hideemployeeFields();
                hideRatesduties();
                hideApplyLeave();
                hideEntitlement();
                hideMemorandum();
                showCommendation();
                showSpinningProgressLoading();
                getCommendation();
            }
            else{
                $('#modal_please_select_employee').modal('toggle');
            }

        });

        $('.edit_seminar').click(function(){
            if(_isChecked == true){
               _txnMode="seminartraining";
                $('.dataname').text(_selectedname);
                $('.display_name').text(_selectedname1);
                //alert(_selectedname1);
                hideemployeeList();
                hideemployeeFields();
                hideRatesduties();
                hideApplyLeave();
                hideEntitlement();
                hideMemorandum();
                hideCommendation();
                showSeminarTraining();
                showSpinningProgressLoading();
                getSeminarsTraining();
            }
            else{
                $('#modal_please_select_employee').modal('toggle');
            }

        });

        $('.apply_leave').click(function(){
            if(_isChecked == true){
               _txnMode="applyleave";
                $('.dataname').text(_selectedname);
                $('.display_name').text(_selectedname1);
                //alert(_selectedname1);
                hideemployeeList();
                hideemployeeFields();
                hideRatesduties();
                hideEntitlement();
                showApplyLeave();
                showSpinningProgressLoading();
                getFiledLeave();

            }
            else{
                $('#modal_please_select_employee').modal('toggle');
            }

        });
            //end of top navigation buttons

//SELECT CREATE OPTION WITH TXNMODE
        $('#emp_religion').change(function() {
            var a = $('#emp_religion').val();
            if(a=="0"){
                _txnModereligion="religion";
                $('#emp_religion').val(1);
                $('#modal_create_religion').modal('show');
                return;
            }
            else{

            }
        });

        $('.ref_relationship_id').click(function() {
            if($('#ref_relationship_id').val() == 0){
                _txnModereligion="religion";
                $('.ref_relationship_id').val(1);
                $('#modal_create_relationship').modal('show');
                return;
            }
            if($('#ref_relationship_id1').val() == 0){
                _txnModereligion="religion";
                $('.ref_relationship_id').val(1);
                $('#modal_create_relationship').modal('show');
                return;
            }
            if($('#ref_relationship_id2').val() == 0){
                $('.ref_relationship_id').val(1);
                $('#modal_create_relationship').modal('show');
                return;
            }
            else{

            }
        });

        $('.ref_course_degree_id').click(function() {
            if($('#ref_course_degree_id').val() == 0){
                $('.ref_course_degree_id').val(1);
                $('#modal_create_course').modal('show');
                return;
            }
            else{

            }
        });


        $('#btn_create_relationship').click(function(){
            if(validateRequiredFields($('#frm_relationship'))){
                    createRelationship().done(function(response){
                        showNotification(response);
                         if(response.stat=="error"){
                            $.unblockUI();
                             }
                        $("#ref_relationship_id").append('<option value='+response.row_added[0].ref_relationship_id+'>'+response.row_added[0].relationship+'</option>');
                        $("#ref_relationship_id").val(response.row_added[0].ref_relationship_id);


                        $("#ref_relationship_id1").append('<option value='+response.row_added[0].ref_relationship_id+'>'+response.row_added[0].relationship+'</option>');
                        $("#ref_relationship_id1").val(response.row_added[0].ref_relationship_id);


                        $("#ref_relationship_id2").append('<option value='+response.row_added[0].ref_relationship_id+'>'+response.row_added[0].relationship+'</option>');
                        $("#ref_relationship_id2").val(response.row_added[0].ref_relationship_id);

                        clearFields($('#frm_relationship'))
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_relationship').modal('toggle');
                    });
                    return;
            }
            else{}
        });

        var createRelationship=function(){
            var _data=$('#frm_relationship').serializeArray();

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"RefRelationship/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

        $('#btn_create_refcourse').click(function(){
            if(validateRequiredFields($('#frm_refcourse'))){
                    createRefCourse().done(function(response){
                        showNotification(response);
                         if(response.stat=="error"){
                            $.unblockUI();
                             }
                        $(".ref_course_degree_id").append('<option value='+response.row_added[0].ref_course_degree_id+'>'+response.row_added[0].course_degree+'</option>');
                        $('.ref_course_degree_id').val(response.row_added[0].ref_course_degree_id);

                        clearFields($('#frm_refcourse'))
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_course').modal('toggle');
                    });
                    return;
            }
            else{}
        });

        var createRefCourse=function(){
            var _data=$('#frm_refcourse').serializeArray();

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"RefCourse/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

        $('#ref_employment_type_id').change(function() {
            var a = $('#ref_employment_type_id').val();
            if(a=="0"){
                _txnModeRate="employment";
                $('#ref_employment_type_id').val(1);
                $('#title_modal').text('Create Employment Type');
                $('#name_modal').text('Employment Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');

                return;
            }
            else{

            }
        });

        $('#ref_payment_type_id').change(function() {

            var a = $('#ref_payment_type_id').val();
            if(a=="0"){
                _txnModeRate="paymenttype";
                $('#ref_payment_type_id').val(1);
                $('#title_modal').text('Create Payment Type');
                $('#name_modal').text('Payment Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{
                if (a == 4){getactiveratespanel(4);}else{getactiveratespanel(0);}
                computeperdayandperhour();
            }
        });

        $('#ref_department_id').change(function() {
            var a = $('#ref_department_id').val();
            if(a=="0"){
                _txnModeRate="department";
                $('#ref_department_id').val(1);
                $('#title_modal').text('Create Department');
                $('#name_modal').text('Department Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{

            }
        });

        $('#ref_position_id').change(function() {
            var a = $('#ref_position_id').val();
            if(a=="0"){
                _txnModeRate="position";
                $('#ref_position_id').val(1);
                $('#title_modal').text('Create Position');
                $('#name_modal').text('Position Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{

            }
        });

        $('#ref_branch_id').change(function() {
            var a = $('#ref_branch_id').val();
            if(a=="0"){
                _txnModeRate="branch";
                $('#ref_branch_id').val(1);
                $('#title_modal').text('Create Branch');
                $('#name_modal').text('Branch Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{

            }
        });

        $('#ref_section_id').change(function() {
            var a = $('#ref_section_id').val();
            if(a=="0"){
                _txnModeRate="section";
                $('#ref_section_id').val(1);
                $('#title_modal').text('Create Section');
                $('#name_modal').text('Section Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{

            }
        });

        $('#group_id').change(function() {
            var a = $('#group_id').val();
            if(a=="0"){
                _txnModeRate="group";
                $('#group_id').val(1);
                $('#title_modal').text('Create Group');
                $('#name_modal').text('Group Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{

            }
        });

        $('#ref_disciplinary_action_policy_id').change(function() {
            var a = $('#ref_disciplinary_action_policy_id').val();
            if(a=="0"){
                _txnModeRate="actionpolicy";
                $('#ref_disciplinary_action_policy_id').val(1);
                $('#title_modal').text('Create Disciplinary Action Policy');
                $('#name_modal').text('Disciplinary Action Policy Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{

            }
        });

        $('#ref_action_taken_id').change(function() {
            var a = $('#ref_action_taken_id').val();
            if(a=="0"){
                _txnModeRate="actiontaken";
                $('#ref_action_taken_id').val(1);
                $('#title_modal').text('Create Action Taken');
                $('#name_modal').text('Action Taken Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{

            }
        });

        $('#ref_certificate_id').change(function() {
            var a = $('#ref_certificate_id').val();
            if(a=="0"){
                _txnModeRate="certificatecreate";
                $('#ref_certificate_id').val(1);
                $('#title_modal').text('Create Certificate');
                $('#name_modal').text('Certificate Name');
                $('#description_modal').text('Description');
                $('#modal_references').modal('show');
                return;
            }
            else{

            }
        });

        $('.btn_new').click(function(){
            clearFields($('#frm_employee'))
            $('.otherul').hide();
            _txnMode="new";
            $('#pin_panel').hide();
            $('#newempdisplayname').hide();
            $('#emp_religion').val(1);
            $('#emp_civilstatus').val("Single");
            $('#emp_processaccount').val(0);
            $('#emp_exemptss').val(0);
            $('#emp_exemptphilhealth').val(0);
            $('#emp_exemptpagibig').val(0);
            $('#status').val('Active');
            $(".date-picker").val('<?php echo date("m/d/Y"); ?>');
            $('#date_retired').val('');
            $('#img_user').attr('src','assets/img/anonymous-icon.png');
            $('#health_id').val(0);
            $('#barangay_id').val(0);
            $('#month_contract_1').val(0);
            $('#month_contract_5').val(0);
            $('#reg_contract').val(0);
            $('#perfomance_eval_1').val(0);
            $('#perfomance_eval_2').val(0);

            $('#empstatus').hide();

            hideemployeeList();
            hideRatesduties();
            showemployeeFields();

        });

        $('#btn_newentitlement').click(function(){
            $('#entitlementtittle').text("New");
            clearFields($('#frm_entitlement'));
            _txnMode="newentitlement";
            $('#ref_leave_type_id').val(0);
            $('#received_balance').val("0.00");

           // $('#ref_employment_type_id').val(1);//

            $('.modal_create_entitlement').modal('show');

        });

        $('#btn_apply_leave').click(function(){
            $('#applyleavetitle').text("File a Leave");
            clearFields($('#frm_apply_leave'));
            _txnMode="newfileleave";
            $(".date-picker").val('<?php echo date("m/d/Y"); ?>');
            getAvailLeave().done(function(response){
                        var show1todiv="";
                        var show2select="<select class='form-control' name='emp_leaves_entitlement_id'>";
                        if(response.available_leave.length==0||response.available_leave.length==null){
                                //alert("no data");
                                $('#showavailableleave').html('<center><h1>No Available Leave</h1></center>');
                                return;
                            }
                        var jsoncount=response.available_leave.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show2select+='<option value='+response.available_leave[i].emp_leaves_entitlement_id+'>'+response.available_leave[i].leave_type+'</option>';
                         }
                         $('#showavailableleave2select').html(show2select+"</select>");
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
            //$('#ref_leave_type_id').val(0);
            //$('#received_balance').val("0.00");

           // $('#ref_employment_type_id').val(1);//



        });

        $('#btn_open_leave').click(function(){
            getAvailLeave().done(function(response){
                        var show1todiv="";
                        if(response.available_leave.length==0||response.available_leave.length==null){
                                //alert("no data");
                                $('#showavailableleave').html('<center><h1>No Available Leave</h1></center>');
                                return;
                            }
                        var jsoncount=response.available_leave.length-1;
                         for(var i=0;parseInt(jsoncount)>=i;i++){
                            //alert(response.available_leave[i].leave_type);
                            show1todiv+='<div class="col-md-4"><div style="width:100%;background-color:#2c3e50;border-radius:5px; padding-bottom: 10px;" id="test">'+
                            '<h2 class="boldlabel" style="padding:10px;color:#ecf0f1;font-size: 13pt;"><leavetypeshow id="leavetypeshow">'+response.available_leave[i].leave_type+
                            '</leavetypeshow></h2><hr><div style="background-color: #455A64;"><p style="padding-left:10px;margin:0px;color:#ecf0f1;">Total Grant : <totalgrantshow id="totalgrantshow">'+response.available_leave[i].total_grant+
                            '</totalgrantshow></p><p style="padding-left:10px;margin:0px;color:#ecf0f1;">Balance : <balanceshow id="balanceshow">'+response.available_leave[i].current_balance+'</balanceshow></p></div></div></div>';
                         }
                         $('#showavailableleave').html(show1todiv);
                        /*alert(data.religion);
                        var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_leave_show').modal('show');
                    });
        })

        $('#btn_newmemo').click(function(){
            $('#memotitle').text("New");
            clearFields($('#frm_memo'));
            _txnMode="newmemo";
            $(".date-picker").val('<?php echo date("m/d/Y"); ?>');

            $('#ref_disciplinary_action_policy_id').val(1);
            $('#ref_action_taken_id').val(1);
            $('.modal_create_memo').modal('show');

        });

        $('#btn_newcommendation').click(function(){
            $('#commendationtitle').text("New commendation");
            clearFields($('#frm_commendation'));
            _txnMode="newcommendation";
            $(".date-picker").val('<?php echo date("m/d/Y"); ?>');
            $('.modal_create_commendation').modal('show');

        });

        $('#btn_newseminartraining').click(function(){
            $('#seminarstrainingtitle').text("New Seminar and Training");
            clearFields($('#frm_seminarstraining'));
            $(".date-picker").val('<?php echo date("m/d/Y"); ?>');
            _txnMode="newseminarstraining";

            $('#ref_certificate_id').val(1);
            $('.modal_create_seminarstraining').modal('show');

        });

        $('#btn_newratesandduties').click(function(){
            clearFields($('#frm_ratesandduties'));
            _txnMode="newrateandduties";
            $(".date-picker").val('<?php echo date("m/d/Y"); ?>');
            $('.ratestransactiontext').text("New");
            $('#ref_employment_type_id').val(1);
            $('#ref_payment_type_id').val(1);
            $('#ref_department_id').val(1);
            $('#ref_position_id').val(1);
            $('#ref_branch_id').val(1);
            $('#ref_section_id').val(1);
            $('#group_id').val(1);
            getDuration();
            getactiveratespanel(1);
            $('#modal_create_ratesandduties').modal('show');

        });

        $('#tbl_employee_list tbody').on('click','button[name="edit_duties"]',function(){

            _txnMode="ratesduties";
            _selectRowObjrates=$(this).closest('tr');
            var data=dt.row(_selectRowObjrates).data();
            _selectedID=data.employee_id;
            _selectedname= '[Name : ' + data.emp_fname +' ' + data.emp_mname + ' ' + data.emp_lname + ']';
            _selectedname1= data.emp_fname +' ' + data.emp_mname + ' ' + data.emp_lname;
            $('#dataname').text(_selectedname);
            $('.display_name').text(_selectedname1);
            //alert(_selectedID);
            hideemployeeList();
            hideemployeeFields();
            showRatesduties();
            getratesandduties();
        });

        $('#tbl_employee_list tbody').on('click','button[name="email_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.employee_id;
            _selectedName = data.full_name;
            $('#empnameemail').text(_selectedName);
            $('#modal_email_confirmation').modal('show');
        });

        $('#tbl_employee_list tbody').on('click','button[name="activate_employee"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.employee_id;
            _selectedName = data.full_name;
            $('#empname').text(_selectedName);
            $('#modal_activate_confirmation').modal('show');
        });

        $('#tbl_employee_list tbody').on('click','button[name="edit_info"]',function(){
            $('.otherul').show();
            $('.nav-tabs a[href="#personal_info_field"]').tab('show');
            _txnMode="edit";
            $('#pin_panel').show();
            $('#newempdisplayname').show();
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.employee_id;
            _selectedname1= data.first_name +' ' + data.middle_name + ' ' + data.last_name;
            $('#ref_relationship_id').val(1);
            $('#ref_course_degree_id').val(1);
            $('#ref_relationship_id1').val(1);
            $('#ref_relationship_id2').val(1);
            $('#status').val(data.status);
            $('.display_name').text(_selectedname1);
            $('#emp_civilstatus').val(data.civil_status);
            $('#emp_religion').val(data.ref_religion_id);
            $('#emp_processaccount').val(data.bank_account_isprocess);
            $('#emp_exemptss').val(data.exmpt_sss);
            $('#emp_exemptphilhealth').val(data.exmpt_philhealth);
            $('#emp_exemptpagibig').val(data.exmpt_pagibig);
            $('#is_retired').val(data.is_retired);

            $('#empstatus').show();
            var chck_active = data.is_retired;
            var chck_inactive = data.status;

            $('.c-active').prop('disabled',true);
            $('#emp_cbo_active').prop('checked',false);
            $('#emp_cbo_inactive').prop('checked',false);

            $('#emp_cbo_active').css('opacity','1');

            if (chck_active == 0 && chck_inactive != "Inactive"){
                $('#emp_cbo_active').prop('checked',true);
            }else{
                $('#emp_cbo_inactive').prop('checked',true);
            }

            if(data.image_name==""){
                 $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
            }
            else{
                $('img[name="img_user"]').attr('src',data.image_name);
            }
            
            $('#tax_pay_type').val(data.tax_pay_type);

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

            $('#gender').val(data.gender);    
            $('#date_end').val(data.date_end_clearance);
            $('#date_end_reason').val(data.clearance_description);

            $('#health_id').val(data.health_id);
            $('#barangay_id').val(data.barangay_id);
            $('#month_contract_1').val(data.month_contract_1);
            $('#month_contract_5').val(data.month_contract_5);
            $('#reg_contract').val(data.reg_contract);
            $('#perfomance_eval_1').val(data.perfomance_eval_1);
            $('#perfomance_eval_2').val(data.perfomance_eval_2);

            hideRatesduties();
            hideemployeeList();
            showemployeeFields();

        });



        $('#btn_remove_photo').click(function(event){
                event.preventDefault();
                $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
            });

        $('#tbl_employee_list tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.employee_id;

            $('#modal_confirmation').modal('show');
        });

        $('#tbl_entitlement tbody').on('click','button[name="entitlement_edit"]',function(){
            _txnMode="editentitlement";
            $('#entitlementtittle').text("Edit");
            _selectRowObjentitlement=$(this).closest('tr');
            var data=dt_entitlement.row(_selectRowObjentitlement).data();
            _selectedIDentitlement=data.emp_leaves_entitlement_id;
            //alert(data.ref_leave_type_id);
            $('#ref_leave_type_id').val(data.ref_leave_type_id);

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
                        $('.modal_create_entitlement').modal('toggle');
            //console.log(_selectedID);
            //$('#ref_employment_type_id').val(data.ref_employment_type_id);//
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


        })

        $('#tbl_rates_duties_list tbody').on('click','button[name="rates_duties_edit"]',function(){
            _txnMode="editratesandduties";
            $('.modal_create_ratesandduties').modal('toggle');
            _selectRowObjrates=$(this).closest('tr');
            var data=dt_rates.row(_selectRowObjrates).data();
            _selectedIDrates=data.emp_rates_duties_id;
            //console.log(_selectedID);
            $('#ref_employment_type_id').val(data.ref_employment_type_id);
            $('#ref_payment_type_id').val(data.ref_payment_type_id);
            $('#ref_department_id').val(data.ref_department_id);
            $('#ref_position_id').val(data.ref_position_id);
            $('#ref_branch_id').val(data.ref_branch_id);
            $('#ref_section_id').val(data.ref_section_id);
            $('#group_id').val(data.group_id);
            $('#sunday_premium').val(data.is_sunday_premium);

            if (data.ref_payment_type_id == 4){
                getactiveratespanel(4);
            }else{
                getactiveratespanel(0);
            }

           // alert($('input[name="tax_exempt"]').length);
            //$('input[name="tax_exempt"]').val(0);
            //$('input[name="inventory"]').val(data.is_inventory);

            $('input,textarea,select').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });


        })

        $('#tbl_rates_duties_list tbody').on('click','button[name="rates_duties_remove"]',function(){
            _selectRowObjrates=$(this).closest('tr');
            var data=dt_rates.row(_selectRowObjrates).data();
            _selectedIDrates=data.emp_rates_duties_id;
            console.log(_selectedIDrates);

           $('#modal_confirmation_rates').modal('show');
        });

        $('#tbl_entitlement tbody').on('click','button[name="entitlement_remove"]',function(){
            _selectRowObjentitlement=$(this).closest('tr');
            var data=dt_entitlement.row(_selectRowObjentitlement).data();
            _selectedIDentitlement=data.emp_leaves_entitlement_id;

           $('#modal_confirmation_entitlement').modal('show');
        });

        $('#tbl_memo tbody').on('click','button[name="memorandum_edit"]',function(){
            _txnMode="editmemo";
            $('#memotitle').text("Edit Memo");
            _selectRowObjmemorandum=$(this).closest('tr');
            var data=dt_memo.row(_selectRowObjmemorandum).data();
            _selectedIDmemo=data.emp_memo_id;
            $('#ref_disciplinary_action_policy_id').val(data.ref_disciplinary_action_policy_id);
            $('#ref_action_taken_id').val(data.ref_action_taken_id);
            //alert(_selectedIDmemo);


            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

           $('#modal_create_memo').modal('toggle');
        });

        $('#tbl_commendation tbody').on('click','button[name="commendation_edit"]',function(){
            _txnMode="editcommendation";
            $('#commendationtitle').text("Edit Commendation");
            _selectRowObjcommendation=$(this).closest('tr');
            var data=dt_commendation.row(_selectRowObjcommendation).data();
            _selectedIDcommendation=data.emp_commendation_id;
            //alert(_selectedIDcommendation);


            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

           $('#modal_create_commendation').modal('toggle');
        });


        $('#tbl_memo tbody').on('click','button[name="memorandum_remove"]',function(){
            _selectRowObjmemorandum=$(this).closest('tr');
            var data=dt_memo.row(_selectRowObjmemorandum).data();
            _selectedIDmemo=data.emp_memo_id;

           $('#modal_confirmation_memo').modal('show');
        });

        $('#tbl_commendation tbody').on('click','button[name="commendation_remove"]',function(){
            _selectRowObjcommendation=$(this).closest('tr');
            var data=dt_commendation.row(_selectRowObjcommendation).data();
            _selectedIDcommendation=data.emp_commendation_id;
            //alert(_selectedIDcommendation);
           $('#modal_confirmation_commendation').modal('show');
        });

        $('#tbl_seminarstraining tbody').on('click','button[name="seminarstraining_edit"]',function(){
            _txnMode="editseminarstraining";
            $('#seminarstrainingtitle').text("Edit Seminar and Training");
            _selectRowObjseminarstraining=$(this).closest('tr');
            var data=dt_seminarstraining.row(_selectRowObjseminarstraining).data();
            _selectedIDseminarstraining=data.emp_seminar_training_id;
            $('#ref_certificate_id').val(data.ref_certificate_id);
            //alert(_selectedIDseminarstraining);
            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value);
                    }
                });
            });

           $('#modal_create_seminarstraining').modal('toggle');
        });

        $('#tbl_seminarstraining tbody').on('click','button[name="seminarstraining_remove"]',function(){
            _selectRowObjseminarstraining=$(this).closest('tr');
            var data=dt_seminarstraining.row(_selectRowObjseminarstraining).data();
            _selectedIDseminarstraining=data.emp_seminar_training_id;
            /*alert(_selectedIDseminarstraining);*/
           $('#modal_confirmation_seminarstraining').modal('toggle');
        });

        $('#btn_yes').click(function(){
            removeEmployee().done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).remove().draw();
                $.unblockUI();
            });
        });

        $('#btn_yes_activate').click(function(){
            activateEmployee().done(function(response){
                showNotification(response);
                dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                $.unblockUI();
            });
        });

        $('#btn_yes_email').click(function(){
            showNotification({title:"Sending!",stat:"info",msg:"Please wait for a few seconds."});

            emailEmployee().done(function(response){
                showNotification(response);
                $.unblockUI();
            });
        });

        $('#btn_yes_rates').click(function(){
            removeRates().done(function(response){
                showNotification(response);
                dt_rates.row(_selectRowObjrates).remove().draw();
                $.unblockUI();
            });
        });

        $('#btn_yes_entitlement').click(function(){
            removeEntitlement().done(function(response){
                showNotification(response);
                dt_entitlement.row(_selectRowObjentitlement).remove().draw();
                $.unblockUI();
            });
        });

        $('#btn_yes_memo').click(function(){
            removeMemo().done(function(response){
                showNotification(response);
                dt_memo.row(_selectRowObjmemorandum).remove().draw();
                $.unblockUI();
            });
        });

        $('#btn_yes_commendation').click(function(){
            removeCommendation().done(function(response){
                showNotification(response);
                dt_commendation.row(_selectRowObjcommendation).remove().draw();
                $.unblockUI();
            });
        });

        $('#btn_yes_seminarstraining').click(function(){
            removeSeminarsTraining().done(function(response){
                showNotification(response);
                dt_seminarstraining.row(_selectRowObjseminarstraining).remove().draw();
                $.unblockUI();
            });
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
        // for back and cancel buttons to destroy datatables
        $('#btn_cancelempfields').click(function(){
            hideemployeeFields();
            hideRatesduties();
            showemployeeList();
        });

        $('#btn_cancelratesandduties').click(function(){
            hideRatesduties();
            hideemployeeFields();
            showemployeeList();
            $('#tbl_rates_duties_list').dataTable().fnDestroy();
            $('#tbl_rates_duties_list').fnClearTable();
        });

        $('#btn_cancelentitlement').click(function(){
            hideRatesduties();
            hideemployeeFields();
            hideEntitlement();
            showemployeeList();
            $('#tbl_entitlement').dataTable().fnDestroy();
            $('#tbl_entitlement').fnClearTable();
        });

        $('#btn_cancelapplyleave').click(function(){
            hideRatesduties();
            hideemployeeFields();
            hideEntitlement();
            hideApplyLeave();
            showemployeeList();
            $('#tbl_apply_leave').dataTable().fnDestroy();
            $('#tbl_apply_leave').fnClearTable();
        });

        $('#btn_cancelmemorandum').click(function(){
            hideRatesduties();
            hideemployeeFields();
            hideEntitlement();
            hideApplyLeave();
            hideMemorandum();
            showemployeeList();
            $('#tbl_memo').dataTable().fnDestroy();
            $('#tbl_memo').fnClearTable();
        });

        $('#btn_cancelcommendation').click(function(){
            hideRatesduties();
            hideemployeeFields();
            hideEntitlement();
            hideApplyLeave();
            hideMemorandum();
            hideCommendation();
            showemployeeList();
            $('#tbl_commendation').dataTable().fnDestroy();
            $('#tbl_commendation').fnClearTable();
        });

        $('#btn_cancelseminarstraining').click(function(){
            hideRatesduties();
            hideemployeeFields();
            hideEntitlement();
            hideApplyLeave();
            hideMemorandum();
            hideCommendation();
            hideSeminarTraining();
            showemployeeList();
            $('#tbl_seminarstraining').dataTable().fnDestroy();
            $('#tbl_seminarstraining').fnClearTable();
        });
       /* $('#btn_save').click(function(){
            if(validateRequiredFields($('#frm_employee'))){
                if(_txnMode=="new"){
                    createEmployee().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_employee'))

                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                    });
                    return;
                }
                if(_txnMode=="edit"){
                    updateEmployee().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        clearFields($('#frm_employee'))
                        showList(true);
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                    });
                    return;
                }
            }
        }); */
                //CREATE NEW EMPLOYEEE
        $('#btn_save').click(function(){
            if(validateRequiredFields($('#frm_employee'))){
                if(_txnMode=="new"){
                    createEmployee().done(function(response){
                        showNotification(response);
                        if(response.stat=="error"){
                            $.unblockUI();
                            return;
                        }
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_employee'))
                        $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
                    }).always(function(){

                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode=="edit"){
                    updateEmployee().done(function(response){
                        showNotification(response);
                        if(response.stat=="error"){
                            $.unblockUI();
                            return;
                        }
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        clearFields($('#frm_employee'))
                        hideemployeeFields();
                        showemployeeList();
                        $('img[name="img_user"]').attr('src','assets/img/anonymous-icon.png');
                    }).always(function(){

                        $.unblockUI();
                    });
                    return;
                }
            }
        });

            //CREATE ENTITLEMENT
        $('#btn_createentitlement').click(function(){
            if(validateRequiredFields($('#frm_entitlement'))){
                if(_txnMode=="newentitlement"){
                    createEntitlement().done(function(response){
                        showNotification(response);
                        dt_entitlement.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_entitlement'))
                    }).always(function(){
                        $.unblockUI();
                        $('#modal_create_entitlement').modal('hide');
                    });
                    return;
                }
                if(_txnMode=="editentitlement"){
                    //alert(_selectedIDentitlement)
                    updateEntitlement().done(function(response){
                        if(response.stat=="error"){
                            showNotification(response);
                            $.unblockUI();
                            return false;
                            }
                        showNotification(response);
                        $('#modal_create_entitlement').modal('hide');
                        dt_entitlement.row(_selectRowObjentitlement).data(response.row_updated[0]).draw();
                        clearFields($('#frm_entitlement'))
                    }).always(function(){
                        $.unblockUI();

                    });
                    return;
                }
            }
        });

            //CREATE RATES AND DUTIES
        $('#btn_createratesandduties').click(function(){
            if(validateRequiredFields($('#frm_ratesandduties'))){
                if(_txnMode=="newrateandduties"){
                        createRatesandDuties().done(function(response){
                            showNotification(response);
                            dt_rates.row.add(response.row_added[0]).draw();
                            //dt.row(_selectRowObj).data(response.row_update[0]).draw(); //for updating employee list
                            clearFields($('#frm_ratesandduties'))
                        }).always(function(){
                            $('#modal_create_entitlement').modal('hide');
                            $.unblockUI();
                            $('.datepicker').hide();
                            $('#modal_create_ratesandduties').modal('toggle');
                        });
                    return;
                }
                if(_txnMode=="editratesandduties"){
                        updateRatesandDuties().done(function(response){
                            showNotification(response);
                            dt_rates.row(_selectRowObjrates).data(response.row_updated[0]).draw();
                            //dt.row(_selectRowObj).data(response.row_update[0]).draw(); //for updating employee list
                            clearFields($('#frm_ratesandduties'))
                        }).always(function(){
                            $.unblockUI();
                            $('.datepicker').hide();
                            $('#modal_create_ratesandduties').modal('toggle');
                        });
                    return;
                }
            }
        });

        $('#btn_create_filed_leave').click(function(){
            if(validateRequiredFields($('#frm_apply_leave'))){
                if(_txnMode=="newfileleave"){
                    createFileLeave().done(function(response){
                        if(response.stat=="error"){
                            showNotification(response);
                            $.unblockUI();
                            return false;
                            }
                        showNotification(response);
                        $('#modal_create_entitlement').modal('hide');
                        dt_apply_leave.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_apply_leave'))
                    }).always(function(){
                        $('#modal_file_leave').modal('hide');
                        $.unblockUI();
                        $('.datepicker').remove();
                    });
                    return;
                }
                if(_txnMode=="editfileleave"){
                    updateRatesandDuties().done(function(response){
                        showNotification(response);
                        dt_rates.row(_selectRowObjrates).data(response.row_updated[0]).draw();
                        clearFields($('#frm_apply_leave'))
                    }).always(function(){
                        $.unblockUI();
                    });
                    return;
                }
            }
        });

        $('#btn_creatememo').click(function(){
            if(validateRequiredFields($('#frm_memo'))){
                if(_txnMode=="newmemo"){
                    createMemo().done(function(response){
                        showNotification(response);
                        dt_memo.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_memo'))
                    }).always(function(){
                        $('#modal_create_memo').modal('hide');
                        $.unblockUI();
                        $('.datepicker').remove();
                    });
                    return;
                }
                if(_txnMode=="editmemo"){
                    updateMemo().done(function(response){
                        showNotification(response);
                        dt_memo.row(_selectRowObjmemorandum).data(response.row_updated[0]).draw();
                        clearFields($('#frm_memo'))
                    }).always(function(){
                        $('#modal_create_memo').modal('hide');
                        $.unblockUI();
                        $('.datepicker').remove();
                    });
                    return;
                }
            }
        });

        $('#btn_createcommendation').click(function(){
            if(validateRequiredFields($('#frm_commendation'))){
                if(_txnMode=="newcommendation"){
                    createCommendation().done(function(response){
                        showNotification(response);
                        dt_commendation.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_commendation'))
                    }).always(function(){
                        $('#modal_create_commendation').modal('hide');
                        $.unblockUI();
                        $('.datepicker').remove();
                    });
                    return;
                }
                if(_txnMode=="editcommendation"){
                    updateCommendation().done(function(response){
                        showNotification(response);
                        dt_commendation.row(_selectRowObjcommendation).data(response.row_updated[0]).draw();
                        clearFields($('#frm_commendation'))
                    }).always(function(){
                        $('#modal_create_commendation').modal('hide');
                        $.unblockUI();
                        $('.datepicker').remove();
                    });
                    return;
                }
            }
        });

        $('#btn_createseminarstraining').click(function(){
            if(validateRequiredFields($('#frm_seminarstraining'))){
                if(_txnMode=="newseminarstraining"){
                    createSeminarsTraining().done(function(response){
                        showNotification(response);
                        dt_seminarstraining.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_seminarstraining'))
                    }).always(function(){
                        $('#modal_create_seminarstraining').modal('hide');
                        $.unblockUI();
                        $('.datepicker').remove();
                    });
                    return;
                }
                if(_txnMode=="editseminarstraining"){
                    updateSeminarsTraining().done(function(response){
                        showNotification(response);
                        dt_seminarstraining.row(_selectRowObjseminarstraining).data(response.row_updated[0]).draw();
                        clearFields($('#frm_seminarstraining'))
                    }).always(function(){
                        $('#modal_create_seminarstraining').modal('hide');
                        $.unblockUI();
                        $('.datepicker').remove();
                    });
                    return;
                }
            }
        });


            //SELECT CREATE OPTION
        $('#btn_new_religion').click(function(){
            if(validateRequiredFields($('#frm_religion'))){
                if(_txnModereligion=="religion"){
                    createReligion().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        $('#emp_religion').append($('<option>', {value:data.ref_religion_id, text:data.religion}));
                        clearFields($('#frm_religion'))
                    }).always(function(){
                        $('#emp_religion').val(data.ref_religion_id);
                        $('#modal_create_religion').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                else{
                    //do nothing :D
                }
            }
        });

        $('#btn_new_create_reference').click(function(){
            if(validateRequiredFields($('#frm_references'))){
                if(_txnModeRate=="employment"){
                    createEmploymentType().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                       /* var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.log(arr);
                        $('#ref_employment_type_id').append($('<option>', {value:data.ref_employment_type_id, text:data.employment_type}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_employment_type_id').val(data.ref_employment_type_id);

                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnModeRate=="paymenttype"){
                    createPaymentType().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.log(arr);
                        $('#ref_payment_type_id').append($('<option>', {value:data.ref_payment_type_id, text:data.payment_type}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_payment_type_id').val(data.ref_payment_type_id);

                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnModeRate=="department"){
                    createDepartment().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.log(arr);
                        $('#ref_department_id').append($('<option>', {value:data.ref_department_id, text:data.department}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_department_id').val(data.ref_department_id);

                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnModeRate=="position"){
                    createPosition().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }*/
                        //console.log(arr);
                        $('#ref_position_id').append($('<option>', {value:data.ref_position_id, text:data.position}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_position_id').val(data.ref_position_id);

                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnModeRate=="branch"){
                    createBranch().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }
                        console.log(arr);*/
                        $('#ref_branch_id').append($('<option>', {value:data.ref_branch_id, text:data.branch}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_branch_id').val(data.ref_branch_id);
                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnModeRate=="section"){
                    createSection().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }
                        console.log(arr);*/
                        $('#ref_section_id').append($('<option>', {value:data.ref_section_id, text:data.section}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_section_id').val(data.ref_section_id);
                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnModeRate=="group"){
                    createGroup().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }
                        console.log(arr);*/
                        $('#group_id').append($('<option>', {value:data.group_id, text:data.group_desc}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#group_id').val(data.group_id);
                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnModeRate=="actionpolicy"){
                    createPolicy().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }
                        console.log(arr);*/
                        $('#ref_disciplinary_action_policy_id').append($('<option>', {value:data.ref_disciplinary_action_policy_id, text:data.disciplinary_action_policy}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_disciplinary_action_policy_id').val(data.ref_disciplinary_action_policy_id);
                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnModeRate=="actiontaken"){
                    createAction().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }
                        console.log(arr);*/
                        $('#ref_action_taken_id').append($('<option>', {value:data.ref_action_taken_id, text:data.action_taken}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_action_taken_id').val(data.ref_action_taken_id);
                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                else{
                    //do nothing :D
                }
                if(_txnModeRate=="certificatecreate"){
                    createCertificate().done(function(response){
                        showNotification(response);
                        data=response.row_added[0];
                        /*var arr = [];
                        for (var prop in data) {
                            arr.push(data[prop]);
                        }
                        console.log(arr);*/
                        $('#ref_certificate_id').append($('<option>', {value:data.ref_certificate_id, text:data.certificate}));
                        $('#postname').val('');
                        $('#postdescription').val('');
                        $('#ref_certificate_id').val(data.ref_certificate_id);
                    }).always(function(){
                        $('#modal_references').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                else{
                    //do nothing :D
                }
            }
        });


    })();


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

                var typepaytype = $('#ref_payment_type_id').val();

                if (typepaytype==4){
                    if($('#monthly_based_salary').val() == 0.00 || 0){
                        showNotification({title:"Error!",stat:"error",msg:"Invalid Monthly Salary"});
                        $('#monthly_based_salary').closest('div.form-group').addClass('has-error');
                        $('#monthly_based_salary').focus();
                        stat=false;
                        return false;
                    }
                }
            }
        });

        return stat;
    };

    $('#btn_browse').click(function(event){
                    event.preventDefault();
                    $('input[name="file_upload[]"]').click();
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

    var createRatesandDuties=function(){
        var _data=$('#frm_ratesandduties').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RatesDuties/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_createratesandduties'))
        });
    };

    var updateRatesandDuties=function(){
        var _data=$('#frm_ratesandduties').serializeArray();
        _data.push({name : "emp_rates_duties_id" ,value : _selectedIDrates});
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RatesDuties/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_createratesandduties'))
        });
    };

    var removeRates=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RatesDuties/transaction/delete",
            "data":{emp_rates_duties_id : _selectedIDrates},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var activateEmployee=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/activateEmployee",
            "data":{employee_id : _selectedID},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var emailEmployee=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/emailEmployee",
            "data":{employee_id : _selectedID},
            "beforeSend": ""
        });
    };

    var createEntitlement=function(){
        var _data=$('#frm_entitlement').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        _data.push({name : "is_payable" ,value : _ispayable});
        _data.push({name : "is_forwardable" ,value : _isforwardable});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Entitlement/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_createentitlement'))
        });
    };

    var createFileLeave=function(){
        var _data=$('#frm_apply_leave').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Leavefiled/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_create_filed_leave'))
        });
    };

    var createMemo=function(){
        var _data=$('#frm_memo').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Memorandum/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_creatememo'))
        });
    };

    var updateMemo=function(){
        var _data=$('#frm_memo').serializeArray();
        _data.push({name : "emp_memo_id" ,value : _selectedIDmemo});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Memorandum/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_creatememo'))
        });
    };

    var createCommendation=function(){
        var _data=$('#frm_commendation').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Commendation/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_createcommendation'))
        });
    };

    var updateCommendation=function(){
        var _data=$('#frm_commendation').serializeArray();
        _data.push({name : "emp_commendation_id" ,value : _selectedIDcommendation});
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Commendation/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_creatememo'))
        });
    };

    var createSeminarsTraining=function(){
        var _data=$('#frm_seminarstraining').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"SeminarsTraining/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_createseminarstraining'))
        });
    };

    var updateSeminarsTraining=function(){
        var _data=$('#frm_seminarstraining').serializeArray();
        _data.push({name : "emp_seminar_training_id" ,value : _selectedIDseminarstraining});
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"SeminarsTraining/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_createseminarstrainings'))
        });
    };

    var updateEntitlement=function(){
        var _data=$('#frm_entitlement').serializeArray();
        _data.push({name : "emp_leaves_entitlement_id" ,value : _selectedIDentitlement});
        _data.push({name : "employee_id" ,value : _selectedID});
        _data.push({name : "is_payable" ,value : _ispayable});
        _data.push({name : "is_forwardable" ,value : _isforwardable});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Entitlement/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_createentitlement'))
        });
    };

    var createCourseDegree=function(){
        var _data=$('#frm_course_degree').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_EducationalAttainment/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var getEmpConfidentialStatus=function(){
        var _data=$('#').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/chck_confidential_status",
            "data":_data
        });
    };

    var updateCourseDegree=function(){
        var _data=$('#frm_course_degree').serializeArray();
        _data.push({name : "emp_educational_attainment_id" ,value : _selectedIDcourse});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_EducationalAttainment/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var removeCourse=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_EducationalAttainment/transaction/delete",
            "data":{emp_educational_attainment_id : _selectedIDcourse},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var createChildrenDependent=function(){
        var _data=$('#frm_children_dependent').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_ChildrenDependent/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var updateChildrenDependent=function(){
        var _data=$('#frm_children_dependent').serializeArray();
        _data.push({name : "emp_children_dependent_id" ,value : _selectedIDchildren});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_ChildrenDependent/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var removeChildren=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_ChildrenDependent/transaction/delete",
            "data":{emp_children_dependent_id : _selectedIDchildren},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var createFamilyDetails=function(){
        var _data=$('#frm_family_details').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_FamilyDetails/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var updateFamilyDetails=function(){
        var _data=$('#frm_family_details').serializeArray();
        _data.push({name : "emp_family_details_id" ,value : _selectedIDfamily});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_FamilyDetails/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var removeFamilyDetails=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_FamilyDetails/transaction/delete",
            "data":{emp_family_details_id : _selectedIDfamily},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var createEmergencyContact=function(){
        var _data=$('#frm_emergency_details').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_EmergencyContact/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var updateEmergencyContact=function(){
        var _data=$('#frm_emergency_details').serializeArray();
        _data.push({name : "emp_emergency_contact_details_id" ,value : _selectedIDemergency});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_EmergencyContact/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var removeEmergencyContact=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_EmergencyContact/transaction/delete",
            "data":{emp_emergency_contact_details_id : _selectedIDemergency},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var createConfidentialStatus=function(){
        var _data=$('#frm_confidential_status').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        
        var stat = $('#chckbx_block').is(':checked');
        if(stat == true){
            _data.push({name : "block_active" ,value : "1"});
        }else{
            _data.push({name : "block_active" ,value : "0"});
        }

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/confidential_status",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var createWorkExperience=function(){
        var _data=$('#frm_work_experience').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_WorkExperience/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var updateWorkExperience=function(){
        var _data=$('#frm_work_experience').serializeArray();
        _data.push({name : "ref_work_experience_id" ,value : _selectedIDworkexp});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_WorkExperience/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var removeWorkExperience=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Emp_WorkExperience/transaction/delete",
            "data":{ref_work_experience_id : _selectedIDworkexp},
            "beforeSend": showSpinningProgress($('#'))
        });
    };



    var removeEntitlement=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Entitlement/transaction/delete",
            "data":{emp_leaves_entitlement_id : _selectedIDentitlement},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var removeMemo=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Memorandum/transaction/delete",
            "data":{emp_memo_id : _selectedIDmemo},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var removeCommendation=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Commendation/transaction/delete",
            "data":{emp_commendation_id : _selectedIDcommendation},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var removeSeminarsTraining=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"SeminarsTraining/transaction/delete",
            "data":{emp_seminar_training_id : _selectedIDseminarstraining},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var createReligion=function(){
        var _data=$('#frm_religion').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefReligion/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_new_religion'))
        });
    };

    var createEmploymentType=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefEmploymentType/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_new_religion'))
        });
    };

    var createPaymentType=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefPaymentType/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_new_payment_type'))
        });
    };

    var createDepartment=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefDepartment/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_new_department'))
        });
    };

    var createPosition=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefPosition/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_new_position'))
        });
    };

    var createBranch=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefBranch/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_new_branch'))
        });
    };

    var createSection=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefSection/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_new_section'))
        });
    };

    var createGroup=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefGroup/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_new_section'))
        });
    };

    var createPolicy=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefDiscipline/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var createAction=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefAction/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var createCertificate=function(){
        var _data=$('#frm_references').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefCertificate/transaction/createdirect",
            "data":_data,
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var getLeaveTypeDetails=function(){
        var _data=$('#').serializeArray();
        _data.push({name : "ref_leave_type_id" ,value : _Leave_type_value});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RefLeave/transaction/filterlist",
            "data":_data,
            "beforeSend": showSpinningProgressLoading()
        });
    };

    var getAvailLeave=function(){
        var _data=$('#').serializeArray();
        _data.push({name : "employee_id" ,value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Entitlement/transaction/getavailableleave",
            "data":_data,
            "beforeSend": showSpinningProgressLoading()
        });
    };

    var setActiveRates=function(){
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});
        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"RatesDuties/transaction/activaterate",
            "data":({active_rates_duties : 1,emp_rates_duties_id : _selectedIDrates,employee_id : _selectedID}),
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var showList=function(b){
        if(b){
            $('#div_product_list').fadeIn(300).show();
            $('#div_product_fields').hide();
        }else{
            $('#div_product_list').hide();
            $('#div_product_fields').fadeIn(300).show();
        }
    };

    var hideemployeeList=function(){
         $('#div_product_list').hide();
    };

    var showemployeeList=function(){
        $('#div_product_list').fadeIn(300).show();
        $('#icon_new_employee').show();
        $('#icon_entitlement').show();
        $('#icon_apply_leave').show();
        $('#icon_rates').show();
        $('#edit_memorandum').show();
        $('#edit_commendation').show();
        $('#edit_seminar').show();
    };

    var hideemployeeFields=function(){
        $('#div_product_fields').hide();
        $('#icon_new_employee').show();
        $('#icon_entitlement').show();
        $('#icon_apply_leave').show();
        $('#icon_rates').show();
        $('#edit_memorandum').show();
        $('#edit_commendation').show();
        $('#edit_seminar').show();
    };

    var showemployeeFields=function(){
        $('#div_product_fields').fadeIn(300).show();
        $('#icon_new_employee').hide();
        $('#icon_entitlement').hide();
        $('#icon_apply_leave').hide();
        $('#icon_rates').hide();
        $('#edit_memorandum').hide();
        $('#edit_commendation').hide();
        $('#edit_seminar').hide();
    };

    var hideRatesduties=function(){
        $('#div_rates_duties_list').hide();
        $('#icon_new_employee').show();
        $('#icon_entitlement').show();
        $('#icon_apply_leave').show();
        $('#icon_rates').show();
        $('#edit_memorandum').show();
        $('#edit_commendation').show();
        $('#edit_seminar').show();
    };

    var showRatesduties=function(){
        $('#div_rates_duties_list').fadeIn(300).show();
        $('#icon_new_employee').hide();
        $('#icon_entitlement').hide();
        $('#icon_apply_leave').hide();
        $('#icon_rates').hide();
        $('#edit_memorandum').hide();
        $('#edit_commendation').hide();
        $('#edit_seminar').hide();
    };

    var hideEntitlement=function(){
        $('#div_entitlement_list').hide();
        $('#icon_new_employee').show();
        $('#icon_entitlement').show();
        $('#icon_apply_leave').show();
        $('#icon_rates').show();
        $('#edit_memorandum').show();
        $('#edit_commendation').show();
        $('#edit_seminar').show();
    };

    var showEntitlement=function(){
        $('#div_entitlement_list').fadeIn(300).show();
        $('#icon_new_employee').hide();
        $('#icon_entitlement').hide();
        $('#icon_apply_leave').hide();
        $('#icon_rates').hide();
        $('#edit_memorandum').hide();
        $('#edit_commendation').hide();
        $('#edit_seminar').hide();
    };

    var hideApplyLeave=function(){
        $('#div_apply_leave').hide();
        $('#icon_new_employee').show();
        $('#icon_entitlement').show();
        $('#icon_apply_leave').show();
        $('#icon_rates').show();
        $('#edit_memorandum').show();
        $('#edit_commendation').show();
        $('#edit_seminar').show();
    };

    var showApplyLeave=function(){
        $('#div_apply_leave').fadeIn(300).show();
        $('#div_entitlement_list').hide();
        $('#icon_new_employee').hide();
        $('#icon_entitlement').hide();
        $('#icon_apply_leave').hide();
        $('#icon_rates').hide();
        $('#edit_memorandum').hide();
        $('#edit_commendation').hide();
        $('#edit_seminar').hide();
    };

    var hideMemorandum=function(){
        $('#div_memorandum_list').hide();
        $('#icon_new_employee').show();
        $('#icon_entitlement').show();
        $('#icon_apply_leave').show();
        $('#icon_rates').show();
        $('#edit_memorandum').show();
        $('#edit_commendation').show();
        $('#edit_seminar').show();
    };

    var showMemorandum=function(){
        $('#div_memorandum_list').fadeIn(300).show();
        $('#div_entitlement_list').hide();
        $('#icon_new_employee').hide();
        $('#icon_entitlement').hide();
        $('#icon_apply_leave').hide();
        $('#icon_rates').hide();
        $('#edit_memorandum').hide();
        $('#edit_commendation').hide();
        $('#edit_seminar').hide();
    };

    var hideCommendation=function(){
        $('#div_commendation_list').hide();
        $('#icon_new_employee').show();
        $('#icon_entitlement').show();
        $('#icon_apply_leave').show();
        $('#icon_rates').show();
        $('#edit_memorandum').show();
        $('#edit_commendation').show();
        $('#edit_seminar').show();
    };

    var showCommendation=function(){
        $('#div_commendation_list').fadeIn(300).show();
        $('#div_entitlement_list').hide();
        $('#icon_new_employee').hide();
        $('#icon_entitlement').hide();
        $('#icon_apply_leave').hide();
        $('#icon_rates').hide();
        $('#edit_memorandum').hide();
        $('#edit_commendation').hide();
        $('#edit_seminar').hide();
    };

    var hideSeminarTraining=function(){
        $('#div_seminartraining_list').hide();
        $('#icon_new_employee').show();
        $('#icon_entitlement').show();
        $('#icon_apply_leave').show();
        $('#icon_rates').show();
        $('#edit_memorandum').show();
        $('#edit_commendation').show();
        $('#edit_seminar').show();
    };

    var showSeminarTraining=function(){
        $('#div_seminartraining_list').fadeIn(300).show();
        $('#div_entitlement_list').hide();
        $('#icon_new_employee').hide();
        $('#icon_entitlement').hide();
        $('#icon_apply_leave').hide();
        $('#icon_rates').hide();
        $('#edit_memorandum').hide();
        $('#edit_commendation').hide();
        $('#edit_seminar').hide();
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

    $('#print_barcode').click(function(event){
            /*printing_notif();*/
            var currentURL = window.location.href;
            var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
            output = output+"/assets/css/css_special_files.css";
            $(".barcode_print").printThis({
                debug: false,
                importCSS: true,
                importStyle: true,
                printContainer: false,
                loadCSS: output,
                formValues:true
            });

    });

    $('#donwload_bcode').click(function() {
        download($('#barcode1').attr('src'),emp_ecode + ' - ' + emp_fullname,"image/png");
    });


    function format ( d ) {
        return '<div class="container-fluid">'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><span class="glyphicon glyphicon-user fa-lg"></span> ' + d.first_name +' ' + d.middle_name + ' ' +d.last_name + '</h3>'+
        '<p>[ ECODE : '+d.ecode+' ] [ ID : '+d.id_number+' ]</p>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '</div>'+ //First Row//
        '<div class="row">'+
        '<div class="col-md-3">'+
        '<center><img class="loadingimg" style="margin-top:4px;width:150px;height:150px;" src="'+d.image_name+'"></img></center>'+
        '</div>'+
        '<div class="col-md-3"><p class="nomargin"><b>Gender</b> : '+d.gender+'</p>'+
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
        '</div>'+
        '</div>'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><h4 class="boldlabel"><span class="glyphicon glyphicon-info-sign fa-lg"></span> Contact Information</h4><hr style="height:1px;background-color:black;"></hr></div>'+
        '<div class="row">'+ //Second Row//
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
