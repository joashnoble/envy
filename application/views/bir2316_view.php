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
        .semiboldlabel{
            font-weight: 500;
            font-size:9pt;
            text-align:left;
            color:black;
        }
        .smallboldlabel{
            font-weight: 500;
            font-size:8pt;
            text-align:left;
            color:black;
        }

        .row{
          margin:0px;
          padding:0 !important;
        }
        .custominputheight{
            height:30px;
            font-size:12px;
            margin:0;
            padding:0;
        }
        p{
            padding: 0;
            margin: 0;
            font-size:10px;
        }
        hr{
          border:1px solid black;
        }
        .row{
          margin:0px;
          padding:0 !important;
        }
        .signatureborder{
            border:0 !important;
            border-bottom:1px solid black !important;
        }
        .footerbes2{
          margin:0,20px,20px,0;
          text-align:center;
        }
        .addbold{
            font-weight:bold !important;
        }
        .semiboldlabel2{
          font-weight: 500;
            font-size:10pt;
            text-align:left;
            padding:3px;
            color:black;
        }
        .custominputheight2{
            height:30px;
            font-size:12px;
            margin:5px !important;
            padding:0;
        }
        .leftcolumn{
          border-right:2px solid black;
          background-color: #E0E0E0;
        }
        .rightcolumn{
          border-left:2px solid black;
        }
        .backcolumn{
          background-color: #E0E0E0;
        }
        .marginc{
            margin-right:50px;
        }
        .col-xs-12{
          margin:0px;
          padding:0 !important;
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
                        <li><a href="Bir2316">Bir2316</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_2316_list">
                            <div class="panel panel-default">
                                        <button class="btn new_bir_2316 right_bir2316_create"  id="btn_new" style="width:185px;background-color:#2ecc71;color:white;" title="Create New Branch" >
                                        <i class="fa fa-file"></i> New BIR 2316</button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">Branch List</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_bir2316" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Fullname</th>
                                                    <th>T.I.N</th>
                                                    <th>Date</th>
                                                    <th><center>Action</center></th>
                                                 </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>

                                <div class="panel-footer"></div>
                            </div> <!--panel default -->
                        </div> <!--bir2316 list -->
                        <div id="div_2316_fields" style="display: none;">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background-color:#2ecc71 !important;margin-top:5px;border-radius:5px;">
                                     <center><h2 style="color:white;font-weight:bold;">BIR FORM NO. 2316</h2></center>
                                </div>
                                <div class="panel-body">
                                    <form id="frm_bir2316" role="form" class="form-horizontal row-border">
                                    <div class="container-fluid" style="overflow:scroll;">
                                        <center>
                                        <div class="content2316 parentbir" id="content2316" style="width:1200px;;border:2px solid black;">
                                            <div class="row">
                                                    <img src="" id="birimage" width="50px" height:"50px" style="float:left;">
                                                        <sm style="float:left;margin-left:10px;font-size:13px;">Republika ng Pilipinas<br>
                                                        Kagawaran ng Pananalapi<br>
                                                        Kawanihan ng Rentas Internas</sm>
                                                        <medium class="medium" style="float:right;position:relative;">BIR Form No.<br>
                                                            <lg style="font-size:30px;font-weight:bold;">2316</lg><br>
                                                            <lg style="font-size:13px;">July 2008 (ENCS)</lg>
                                                        </medium>
                                                        <center>
                                                            <lg class="titlepage" style="font-size:21px;font-weight:450;position:relative;left:-50px;">Certificate of Compensation<br>
                                                            Payment/Tax Withheld
                                                            </lg>
                                                        </center>
                                                        <sm style="font-size:12px;font-weight:400;float:left;maring-left:15px;">For compensation Payment With or Without Tax Withheld</sn>

                                            </div>
                                            <hr style="padding:0px;margin:0px;">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="col-xs-6 leftcolumn" > <!-- start column 1  -->
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">1. For the Year</p>
                                                                  <input type="text" name="for_year" class="form-control custominputheight text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row" style="padding:0px;margin:0px;">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <p style="padding:0px;margin:0px;text-align:center;" class="semiboldlabel addbold">Part I (Employee Information)</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-12" style="width:93%;margin-left:18px;">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">3. Taxpayer Identification No.</p>
                                                                  <input type="text" name="taxpayer_identification_no" id="taxpayer_identification_no" class="form-control custominputheight text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">4. Employee's Name</p>
                                                                  <select type="text" name="employee_id" id="employees_names" class="form-control custominputheight text-center" placeholder="" >
                                                                        <?php foreach($employees as $row){
                                                                        ?>
                                                                            <option value="<?php echo $row->employee_id; ?>"><?php echo $row->fullname; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                  </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">5. RDO CODE</p>
                                                                  <input type="text" name="rdo_code" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">6. Registered Address</p>
                                                                  <input type="text" name="registered_address" id="registered_address" class="form-control custominputheight text-center smalltext" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">6A. Zip Code</p>
                                                                  <input type="text" name="registered_zipcode" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">6B. Local Home Address</p>
                                                                  <input type="text" name="localhome_address" id="localhome_address" class="form-control custominputheight text-center smalltext" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">6C. Zip Code</p>
                                                                  <input type="text" name="localhome_zipcode" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">6D. Foreign Address</p>
                                                                  <input type="text" name="foreign_address" class="form-control custominputheight text-center smalltext" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">6E. Zip Code</p>
                                                                  <input type="text" name="foreign_zipcode" class="form-control custominputheight text-center" placeholder= >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">7. Date of Birth</p>
                                                                  <input type="text" id="birthdate" name="birthdate" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">8. Telephone Number</p>
                                                                  <input type="text" name="telphone_number" id="telphone_number" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">9. Exemption Status</p>
                                                                  <center>
                                                                  <label class="semiboldlabel marginc"><input type="checkbox" id="single" value=""> Single</label>
                                                                  <label class="semiboldlabel"><input type="checkbox" id="married" value=""> Married</label>
                                                                  </center>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">9A. is the wife claiming the aditional exemption for qualified dependent children?</p>
                                                                  <center>
                                                                  <label class="semiboldlabel marginc"><input type="checkbox" id="wife_yes" value=""> Yes</label>
                                                                  <label class="semiboldlabel"><input type="checkbox" id="wife_no" value=""> No</label>
                                                                </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">10. Name of Qualified Dependent Children</p>
                                                                  <input type="text" name="qualified_children1 " class="form-control custominputheight text-center" placeholder="" disabled>
                                                                  <input type="text" name="qualified_children2" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                  <input type="text" name="qualified_children3" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                  <input type="text" name="qualified_children4" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">11. Date of Birth</p>
                                                                  <input type="text" name="qualified_bday1" class="form-control custominputheight date-picker text-center" placeholder="" disabled>
                                                                  <input type="text" name="qualified_bday2" class="form-control custominputheight date-picker text-center" placeholder="" disabled>
                                                                  <input type="text" name="qualified_bday3" class="form-control custominputheight date-picker text-center" placeholder="" disabled>
                                                                  <input type="text" name="qualified_bday4" class="form-control custominputheight date-picker text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">12. Statutory Minimum Wage rate per day</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <input type="text" name="stat_minimum_wage_per_day" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">13. Statutory Minimum Wage rate per month</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <input type="text" name="stat_minimum_wage_per_month" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel"><label class="semiboldlabel">14.<input type="checkbox" value=""> Minimum wage earner whose compensation is exempt from withholding tax and not subject to income tax</label></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row" style="padding:0px;margin:0px;">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <center><p style="padding:0px;margin:0px;text-align:center;" class="semiboldlabel addbold">Part II Employer Information (Present)</p></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">15. Taxpayer Identification No.</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="present_employer_tin" id="company_tin" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">16. Employer's Name</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="employer_name" id="company_name" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">17. Registered Address</p>
                                                                  <input type="text" name="employer_regadress" id="company_address" class="form-control custominputheight text-center smalltext" placeholder="" >
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                    <p class="semiboldlabel">17A. Zip Code</p>
                                                                  <input type="text" name="employer_zipcode" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <center>
                                                            <div class="col-xs-6">
                                                                  <label class="semiboldlabel"><input id="main_employer" type="checkbox" value="" disabled> Main Employer</label>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                  <label class="semiboldlabel"><input id="secondary_employer"type="checkbox" value="" disabled> Secondary Employer</label>
                                                            </div>
                                                            </center>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row" style="padding:0px;margin:0px;">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <center><p style="padding:0px;margin:0px;text-align:center;" class="semiboldlabel addbold">Part III Employer Information (Previous)</p></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">18. Taxpayer Identification No.</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">19. Employer's Name</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">20. Registered Address</p>
                                                                  <input type="text" name="" class="form-control custominputheight text-center smalltext" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                    <p class="semiboldlabel">20A. Zip Code</p>
                                                                  <input type="text" name="" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row" style="padding:0px;margin:0px;">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <center><p style="padding:0px;margin:0px;text-align:center;" class="semiboldlabel addbold">Part IV Summary</p></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">21. Gross Compensation Income from Present Employer (Item 41 plus item 55)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="gross_compensation_present_employer" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">22. Less : Total Non-Taxable/Exempt (Item 41)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="less_total_nontax_exempt" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">23. Taxable Compensation Income from Present Employer(Item 55)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="taxable_compensation_income" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">24. Add: Taxable Compensation Income from Previous Employer</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="add_taxcompensation_previous_employer" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">25. Gross Taxable Compensation Income</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="gross_taxable_compensation_income" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">26. Less Total Exemptions</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="less_total_exemption" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">27. Less: Premium Paid on Health and/or Hospital Insurance (if applicable) </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="less_premium_paid" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">28. Net Taxable Compensation Income </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="net_taxable_compensation_income" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">29. Tax Due</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="tax_due" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">30. Amount of Taxes Withheld 30A Present Employer</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="tax_withheld_present_employer" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">30B. Amount of Taxes Withheld 30B Previous Employer</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="tax_withheld_previous_employer" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">31. Total Amount of Taxes Withheld As adjusted</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-7">
                                                                <div class="form-group">
                                                                  <input type="text" name="total_amount_taxes" class="form-control custominputheight text-center" placeholder="" >
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- next half -->
                                                    <div class="col-xs-6 backcolumn" >
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">2. Period From(MM/DD)</p>
                                                                  <input type="text" name="period_from" class="form-control custominputheight text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel">Period TO(MM/DD)</p>
                                                                  <input type="text" name="period_to" class="form-control custominputheight text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row" style="padding:0px;margin:0px;">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                    <p style="padding:0px;margin:0px;text-align:center;" class="semiboldlabel addbold">Part IV-B Details of Compensation Income and Tax Withheld from Present Employer</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel addbold">A. NON-TAXABLE/EXEMPT COMPENSATION INCOME</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2 centertext" style="text-align:center;">Amount</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">32. Basic Salary/ Statutory Minimum Wage Minimum Wage Earner(MWE)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="basic_salary_minimum" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">33. Holiday Pay (MWE)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="holiday_pay" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">34. Overtime Pay (MWE)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="overtime_pay_mwe" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">35. Night Shift Differential (MWE)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="night_shift_differential" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">36. Hazard Pay (MWE)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="hazard_pay_mwe" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">37. 13th Month Pay and Other Benefits</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="13th_month_pay" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">38. De Minimis Benefits</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="de_minimis" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">39. SSS, GSIS, PHIC & Pag-Ibig Contribution, & Union Dues(Employee share only)</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="contributions_dues" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">40. Salaries & Other Forms of Compensation Income</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="compensation_salariesforms" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">41. Total Non-Taxable/Exempt compensation Income</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="total_nontax_compensation" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2 addbold">B. TAXABLE COMPENSATION INCOME REGULAR</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">42. Basic Salary</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="basic_salary" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">43. Representation</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="representation" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">44. Transportation</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="transportation" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">45. Cost of Living Allowance</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="cost_of_living" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">46. Fixed Housing Allowance</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="fixed_housing" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">47. Others Specify</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">47A.</p>
                                                                  <input type="text" name="othersa" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">47A.</p>
                                                                  <input type="text" name="othersaamount" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">47B.</p>
                                                                  <input type="text" name="" class="form-control custominputheight2 text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">47B.</p>
                                                                  <input type="text" name="" class="form-control custominputheight2 text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2 addbold">SUPPLEMENTARY</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">48. Commision</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="commision" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">49. Profit Sharing</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="profit_sharing" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">50. Fees Including Director's Fees</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="fees_director_fees" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">51. Taxable 13th Month Pay and Other Benefits</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="taxable_13th_other_benefits" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">52. Hazard Pay</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="hazard_pay" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">53. Overtime Pay</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="overtime_pay" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">

                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">54. Others (Specify)</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">54A.</p>
                                                                  <input type="text" name="" class="form-control custominputheight2 text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                    <p class="semiboldlabel2">54A.</p>
                                                                  <input type="text" name="" class="form-control custominputheight2 text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">54B.</p>
                                                                  <input type="text" name="" class="form-control custominputheight2 text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                    <p class="semiboldlabel2">54B.</p>
                                                                  <input type="text" name="" class="form-control custominputheight2 text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row xtrapadding" >
                                                            <div class="col-xs-8">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel2">55. Total Taxable Compensation Income</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <div class="form-group">
                                                                  <input type="text" name="total_taxable_compensation_income" class="form-control custominputheight2 text-center" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div><!-- end of 2nd half -->
                                                    <!-- footers -->
                                                    <!-- start of whole col -->
                                                    <div class="col-xs-12 footerbes" style="border-top:2px solid black;">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <p class="footerbes2" style="margin-left:0,10px,10px,0;">We declare, under the penalties of perjury, that this certificate hae been made in good faith, verified by us, and to the best of our knowledge and belief, is true and correct
                                                                    pursuant to the provisions of the National Internal Revenue Code, as amended, and the regulations issued under authority thereof.</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- end of whole col -->
                                                     <!-- start of half col -->
                                                    <div class="col-xs-12" >
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                  <input type="text" name="period_from" style="" class="form-control custominputheight signatureborder text-center" placeholder="">
                                                                  <p class="semiboldlabel signature" style="text-align: center;">56. Present Employer/Authorized Agent Signature Over Printed Name</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-1">
                                                                <div class="form-group">
                                                                    <p class="semiboldlabel signature" style="text-align: center;">Date Signed</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                <div class="form-group">
                                                                    <input type="text" name="" style="" class="form-control custominputheight text-center date-picker" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                  <p class="semiboldlabel conforme">CONFORME</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="form-group">
                                                                  <input type="text" name="" class="form-control custominputheight signatureborder text-center" placeholder="">
                                                                  <p class="semiboldlabel signature" style="text-align: center;">57. Employee Signature Over Printed Name</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-1">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel signature" style="text-align: center;">Date Signed</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-2">
                                                                <div class="form-group">
                                                                  <input type="text" name="" class="form-control custominputheight text-center date-picker" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel signature" style="text-align: center;">CTC No. of Employee</p>
                                                                  <input type="text" name="" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel signature" style="text-align: center;">Place of issue</p>
                                                                  <input type="text" name="" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <div class="form-group">
                                                                  <p class="semiboldlabel custommargin" style="text-align: center;">Date Issue</p>
                                                                  <input type="text" name="" style="" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <div class="form-group">
                                                                    <p class="semiboldlabel custommargin" style="text-align: center;">Amount Paid</p>
                                                                  <input type="text" name="" style="" class="form-control custominputheight text-center" placeholder="" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end of half -->
                                                    <!-- start of whole col -->
                                                    <div class="col-xs-12 " >
                                                        <hr style="padding:0px;margin:0px;">
                                                        <div class="row">
                                                            <div class="form-group">
                                                                    <center><p style="padding:0px;margin:0px;text-align:center;" class="semiboldlabel addbold">To be accomplished under substituted filing</p></center>
                                                            </div>
                                                        </div>
                                                        <hr style="padding:0px;margin:0px;">
                                                    </div><!-- end of half -->
                                                    <!-- star of half -->
                                                    <div class="col-xs-6" >
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <p class="footerbes2" style="margin-left:0,10px,10px,0;">
                                                                        I declare, under the penalties of perjury, that the information herein stated are
                                                                        reported under BIR form No. 1604CF which has been filed with the Bureau of Internal Revenue.
                                                                  </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <input type="text" name="" style="" class="form-control custominputheight signatureborder text-center" placeholder="">
                                                                  <p class="semiboldlabel signature" style="text-align: center;">58. Present Employer/Authorized Agent Signature Over Printed Name</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end of half -->
                                                    <div class="col-xs-6 rightcolumn" >
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="form-group">
                                                                  <p class="footerbes2" style="margin-left:0,10px,10px,0;">
                                                                        I declare, under the penalties of perjury that i am qualified under substituted filing of Income Tax Returns
                                                                        (BIR Form No. 1700), since i received purely compensation income from only one employer in the Phils,
                                                                        for the calendar year; that taxes have been correctly withheld by my employer (tax due equals tax withheld);
                                                                        that the BIR form No. 1604CF filed by my employer to the BIR shall constitute as my income tax return;
                                                                        and that BIR Form No. 2316 shall serve the same purpose as if BIR Form No. 1700.
                                                                  </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end of half -->

                                                </div>
                                            </div>
                                        </div>
                                        </center>
                                    </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <button id="print_bir2316" class="btn-primary btn" style="text-transform: capitalize;"><span></span>Print</button>
                                            <button id="btn_save" class="btn-primary btn" style="text-transform: capitalize;"><span></span>Save Changes</button>
                                            <button id="btn_cancelempfields" class="btn-default btn" style="text-transform: capitalize;">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of div_2316_fields -->

                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->

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

<?php echo $_rights; ?>
<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _wife; var _civilstat;

    jQuery(document).bind("keydown", function(e){
        if(e.ctrlKey && e.keyCode == 80){
            event.preventDefault();
            var currentURL = window.location.href;
            var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
            output = output+"/assets/css/css_special_files_bir.css";
            $("#content2316").printThis({
                debug: false,
                importCSS: true,
                importStyle: false,
                printContainer: false,
                loadCSS: output,
                formValues:true
            });
            return false;
        }
    });

    _employees=$("#employees_names").select2({
            placeholder: "Select Employee",
            allowClear: true
        });

    _employees.select2('val', null);

    var initializeControls=function(){
        dt=$('#tbl_bir2316').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "orderFixed": [ 1, 'asc' ],
            "ajax" : "Bir2316/transaction/list",
            "columns": [
                {
                    "targets": [0],
                    "class":          "moreinfo",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": "<center><i title='More Info'class='fa fa-info-circle' aria-hidden='true'></i></center>"
                },
                { targets:[1],data: "fullname" },
                { targets:[2],data: "taxpayer_identification_no" },
                { targets:[3],data: "for_year" },
                {
                    targets:[4],
                    render: function (data, type, full, meta){

                        return '<center>'+right_bir2316_edit+right_bir2316_delete+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search BIR 2316"
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

        /*$('#tbl_bir2316 tbody').on( 'click', 'tr td.details-control', function () {
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

        $('#tbl_bir2316 tbody').on( 'click', 'tr td.moreinfo', function () {
            clearFields($('#frm_bir2316'));
            _txnMode="edit";
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.bir_2316_id;
            _employees.select2('val', data. employee_id);
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

            if(data.wife_claiming==0){ $("#wife_no").prop("checked",true); }
            if(data.wife_claiming==1){ $("#wife_yes").prop("checked",true); }
            if(data.exemption_status==0){ $("#single").prop("checked",true); }
            if(data.exemption_status==1){ $("#married").prop("checked",true); }

            showemployeeFields();
            $('#btn_save').hide();
        } );

        var currentURL = window.location.href;
        var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
        output = output+"/assets/img/bir.png";
        $('#birimage').attr('src', output);


        $('#tbl_bir2316 tbody').on('click','button[name="edit_info"]',function(){
            $('#btn_save').show();
            clearFields($('#frm_bir2316'));
            _txnMode="edit";
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.bir_2316_id;

            _employees.select2('val', data. employee_id);

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

            if(data.wife_claiming==0){ $("#wife_no").prop("checked",true); }
            if(data.wife_claiming==1){ $("#wife_yes").prop("checked",true); }
            if(data.exemption_status==0){ $("#single").prop("checked",true); }
            if(data.exemption_status==1){ $("#married").prop("checked",true); }

            showemployeeFields();
        });

        $('#tbl_bir2316 tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.bir_2316_id;

            $('#modal_confirmation').modal('show');
        });

        $('#btn_yes').click(function(){
            removeBir().done(function(response){
                showNotification(response);
                if(response.false==0){
                }
                else{
                    dt.row(_selectRowObj).remove().draw();
                }
                $.unblockUI();
            });
        });

        $('#employees_names').change(function(){
            employeedone();

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
            $('#btn_save').show();
            _txnMode="new";
            $('.transaction_type').text('New');
            clearFields($('#frm_bir2316'));
            showemployeeFields();
            employeedone();

        });

        $('#btn_cancelempfields').click(function(){
            _txnMode="new";
            hideemployeeFields();
        });

        var showemployeeFields=function(){
            $('#div_2316_list').hide();
            $('#div_2316_fields').show();
        };

        var hideemployeeFields=function(){
            $('#div_2316_list').show();
            $('#div_2316_fields').hide();
        };

        $('#btn_save').click(function(){
            if(validateRequiredFields($('#frm_bir2316'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createBir2316().done(function(response){
                        showNotification(response);
                        if(response.stat=="error"){
                            $.unblockUI();
                             }
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_bir2316'))
                    }).always(function(){
                        hideemployeeFields();
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updateBir().done(function(response){
                        showNotification(response);
                        if(response.stat=="error"){
                            $.unblockUI();
                             }
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        hideemployeeFields();
                        $.unblockUI();
                    });
                    return;
                }
            }
            else{}
        });

    })();

    $('#wife_no').click(function(){
        $("#wife_no").prop("checked",false);
        $("#wife_yes").prop("checked",false);
         if(_wife=="false"){
            _wife = "";
            $("#wife_no").prop("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _wife = "false";
            $("#wife_no").prop("checked",true);
            /*alert(_hepatitis_stat);*/
        }

    });

    $('#wife_yes').click(function(){
        $("#wife_yes").prop("checked",false);
        $("#wife_no").prop("checked",false);
         if(_wife=="true"){
            _wife = "";
            $("#wife_yes").prop("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _wife = "true";
            $("#wife_yes").prop("checked",true);
            /*alert(_hepatitis_stat);*/
        }

    });

    $('#single').click(function(){
        $("#single").prop("checked",false);
        $("#married").prop("checked",false);
         if(_civilstat=="false"){
            _civilstat = "";
            $("#single").prop("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _civilstat = "false";
            $("#single").prop("checked",true);
            /*alert(_hepatitis_stat);*/
        }

    });

    $('#married').click(function(){
        $("#single").prop("checked",false);
        $("#married").prop("checked",false);
         if(_civilstat=="true"){
            _civilstat = "";
            $("#married").prop("checked",false);
            /*alert(_hepatitis_stat);*/
        }
        else{
            _civilstat = "true";
            $("#married").prop("checked",true);
            /*alert(_hepatitis_stat);*/
        }

    });

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



    $('#print_bir2316').click(function(event){
            /*printing_notif();*/
            // $('.select2-selection__rendered').hide();
            var currentURL = window.location.href;
            var output = currentURL.match(/^(.*)\/[^/]*$/)[1];
            output = output+"/assets/css/css_special_files_bir.css";
            $("#content2316").printThis({
                debug: false,
                importCSS: true,
                importStyle: false,
                printContainer: false,
                loadCSS: output,
                formValues:true
            });

    });

    var createBir2316=function(){
        var _data=$('#frm_bir2316').serializeArray();
        _data.push({name : "wife_claiming" ,value : _wife=="true" ? 1 : 0});
        _data.push({name : "exemption_status" ,value : _civilstat=="true" ? 1 : 0});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Bir2316/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };


    var updateBir=function(){
        var _data=$('#frm_bir2316').serializeArray();
        _data.push({name : "bir_2316_id" ,value : _selectedID});
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Bir2316/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removeBir=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Bir2316/transaction/delete",
            "data":{bir_2316_id : _selectedID},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var getemployeelist = function(){
        var employee_id = $('#employees_names').val();
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Employee/transaction/listfilter",
            "data":{employee_id : employee_id},
            "beforeSend": showSpinningProgressLoading($('#'))
        })
    }

    var employeedone = function(){
        getemployeelist().done(function(response){
        $('#taxpayer_identification_no').val(response.data[0].tin);
        $('#registered_address').val(response.data[0].address_one);
        $('#localhome_address').val(response.data[0].address_two);
        date = response.data[0].birthdate;
        var newdate = date.split("-").reverse().join("/");
        $('#birthdate').val(newdate);
        $('#telphone_number').val(response.data[0].telphone_number);
        $('#company_tin').val('<?php echo $company_setup[0]->tin_no;?>');
        $('#company_name').val('<?php echo $company_setup[0]->company_name;?>');
        $('#company_address').val('<?php echo $company_setup[0]->address;?>');

        }).always(function(){
            $.unblockUI();
        });
    }

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

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $(f).find('input:first').focus();
        $("input:checkbox").prop('checked',false);
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
