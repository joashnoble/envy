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
                        <li><a href="UserGroups">User Groups</a></li>
                    </ol>

                    <div class="container-fluid">

                        <div id="div_product_list">
                            <div class="panel panel-default">
                                        <button class="btn right_usergroup_create"  id="btn_new" style="width:185px;background-color:#2ecc71;color:white;" title="Create New Leave" >
                                        <i class="fa fa-file"></i> New User Group</button>
                                        <div class="panel-heading" style="background-color:#2c3e50 !important;margin-top:2px;">
                                             <center><h2 style="color:white;font-weight:300;">User Group List</h2></center>
                                        </div>
                                    <div class="panel-body table-responsive" style="padding-top:8px;">
                                        <table id="tbl_user_groups" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>User Group</th>
                                                    <th>Description</th>
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
            <div id="modal_create_rights" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#2ecc71;">
                            <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                            <h4 class="modal-title" style="color:#ecf0f1;"><span id="modal_mode"> </span>User Group : <transaction class="transaction_type"></transaction></h4>
                        </div>

                        <div class="modal-body">
                            <form id="frm_user_group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" id="usergroup">
                                            <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">User Group Name :</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-file-text"></i>
                                                    </span>
                                                    <input type="text" id="user_group" name="user_group" class="form-control" placeholder="User Group Name" data-error-msg="Password is required!" required>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" id="description">
                                            <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Description :</label>
                                            <div class="col-sm-8">
                                                    <textarea name="user_group_desc" class="form-control" data-error-msg="Description is required!" required></textarea>

                                            </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <center><h3 class="box-title" style="font-weight:bold;">User Rights / Permissions</h3></center>

                                  <div class="form-group">
                                      <label class="col-sm-4 inlinecustomlabel-sm" for="inputEmail1">Allow :</label>
                                      <div class="col-sm-8" id="toggleevent">
                                        <input class="checkorno" type="checkbox" id="toggle-two" data-width="100%">

                                      </div>
                                  </div>

                            <div class="panel-group" id="accordion">

<!--                                 <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#rightannouncement">Announcement</a>
                                    </h4>
                                  </div>
                                  <div id="rightannouncement" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_announcement_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_announcement_create" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_announcement_edit" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_announcement_delete" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div> -->

                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#rightemployee">Employee Information</a>
                                    </h4>
                                  </div>
                                  <div id="rightemployee" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_employee_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Activate :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_employee_active" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Email :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_employee_email" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_employee_create" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_employee_edit" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_employee_delete" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightleaveentitlement"> - Leave Entitlement</a>
                                            </h4>
                                          </div>
                                          <div id="rightleaveentitlement" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leaveentitlement_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leaveentitlement_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leaveentitlement_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leaveentitlement_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightapplyleave"> - Apply Leave</a>
                                            </h4>
                                          </div>
                                          <div id="rightapplyleave" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_applyleave_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Apply Leave :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_applyleave_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightrates"> - Rates and Duties</a>
                                            </h4>
                                          </div>
                                          <div id="rightrates" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_rates_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_rates_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_rates_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_rates_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightmemo"> - Memorandum</a>
                                            </h4>
                                          </div>
                                          <div id="rightmemo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_memorandum_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_memorandum_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_memorandum_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_memorandum_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightcommendation"> - Commendation</a>
                                            </h4>
                                          </div>
                                          <div id="rightcommendation" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_commendation_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_commendation_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_commendation_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_commendation_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightseminar"> - Seminars and Training</a>
                                            </h4>
                                          </div>
                                          <div id="rightseminar" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_seminar_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_seminar_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_seminar_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_seminar_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#employeequicksetup">Employee Quick Setup</a>
                                    </h4>
                                  </div>
                                  <div id="employeequicksetup" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_employeequicksetup_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default" style="margin:0px;">
                                    <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#empresignation"> Employee Resignation</a>
                                        </h4>
                                      </div>
                                      <div id="empresignation" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                            <select class="form-control" name="right_emp_resignation_view" >
                                                                <option value="0">Off</option>
                                                                <option value="1">On</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                            <select class="form-control" name="right_emp_resignation_create" >
                                                                <option value="0">Off</option>
                                                                <option value="1">On</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                            <select class="form-control" name="right_emp_resignation_edit" >
                                                                <option value="0">Off</option>
                                                                <option value="1">On</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                            <select class="form-control" name="right_emp_resignation_delete" >
                                                                <option value="0">Off</option>
                                                                <option value="1">On</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#leavemgmt">Leave Management</a>
                                    </h4>
                                  </div>
                                  <div id="leavemgmt" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_leavemgmt_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
<!--                                         <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightleaverequest"> - Leave Request</a>
                                            </h4>
                                          </div>
                                          <div id="rightleaverequest" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leaverequest_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Approve :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leaverequest_approve" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Decline :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leaverequest_decline" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div> -->
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightleavetype"> - Leave Type</a>
                                            </h4>
                                          </div>
                                          <div id="rightleavetype" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leavetype_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leavetype_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leavetype_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_leavetype_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightyearsetup"> - Year Setup</a>
                                            </h4>
                                          </div>
                                          <div id="rightyearsetup" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_yearsetup_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_yearsetup_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#empref">Employee References</a>
                                    </h4>
                                  </div>
                                  <div id="empref" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_empreference_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightpaymenttype"> - Payment Type</a>
                                            </h4>
                                          </div>
                                          <div id="rightpaymenttype" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_paymenttype_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_paymenttype_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_paymenttype_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_paymenttype_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightdepartment"> - Department</a>
                                            </h4>
                                          </div>
                                          <div id="rightdepartment" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_department_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_department_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_department_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_department_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightposition"> - Position</a>
                                            </h4>
                                          </div>
                                          <div id="rightposition" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_position_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_position_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_position_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_position_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightbranch"> - Branch</a>
                                            </h4>
                                          </div>
                                          <div id="rightbranch" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_branch_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_branch_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_branch_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_branch_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightgroup"> - Group</a>
                                            </h4>
                                          </div>
                                          <div id="rightgroup" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_group_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_group_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_group_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_group_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightsection"> - Section</a>
                                            </h4>
                                          </div>
                                          <div id="rightsection" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_section_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_section_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_section_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_section_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightreligion"> - Religion</a>
                                            </h4>
                                          </div>
                                          <div id="rightreligion" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_religion_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_religion_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_religion_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_religion_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightcourse"> - Course / Degree</a>
                                            </h4>
                                          </div>
                                          <div id="rightcourse" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_course_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_course_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_course_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_course_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightrelationship"> - Relationship</a>
                                            </h4>
                                          </div>
                                          <div id="rightrelationship" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_relationship_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_relationship_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_relationship_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_relationship_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightduration"> - Duration</a>
                                            </h4>
                                          </div>
                                          <div id="rightduration" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_duration_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_duration_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_duration_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_duration_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#rightdocumentref">Document References</a>
                                    </h4>
                                  </div>
                                  <div id="rightdocumentref" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_docreference_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightcertificate"> - Certificate</a>
                                            </h4>
                                          </div>
                                          <div id="rightcertificate" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_certificate_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_certificate_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_certificate_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_certificate_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightactiontaken"> - Action Taken</a>
                                            </h4>
                                          </div>
                                          <div id="rightactiontaken" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_actiontaken_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_actiontaken_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_actiontaken_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_actiontaken_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightdisciplinary"> - Disciplinary Action Policy</a>
                                            </h4>
                                          </div>
                                          <div id="rightdisciplinary" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_disciplinary_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_disciplinary_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_disciplinary_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_disciplinary_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#rightcompensation">Compensation References</a>
                                    </h4>
                                  </div>
                                  <div id="rightcompensation" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_compensation_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_compensation_create" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_compensation_edit" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_compensation_delete" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#rightcontrib">Contribution References</a>
                                    </h4>
                                  </div>
                                  <div id="rightcontrib" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_contribution_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightsss">SSS Contribution</a>
                                            </h4>
                                          </div>
                                          <div id="rightsss" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_sss_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_sss_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_sss_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_sss_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightphilhealth">Contribution Reference : Philhealth</a>
                                            </h4>
                                          </div>
                                          <div id="rightphilhealth" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_philhealth_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_philhealth_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_philhealth_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_philhealth_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#righthrisreports">HRIS Reports</a>
                                    </h4>
                                  </div>
                                  <div id="righthrisreports" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_hrisreports_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightpersonnellist"> - Personnel List</a>
                                            </h4>
                                          </div>
                                          <div id="rightpersonnellist" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_personnel_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightmanpower"> - Manpower List</a>
                                            </h4>
                                          </div>
                                          <div id="rightmanpower" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_manpower_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightbdaycelebrant"> - Birthday Celebrant</a>
                                            </h4>
                                          </div>
                                          <div id="rightbdaycelebrant" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_birthdaycelebrant_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightemployeetenure"> - Employee Tenure</a>
                                            </h4>
                                          </div>
                                          <div id="rightemployeetenure" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_employeetenure_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightplantilla"> - Plantilla (Monitoring)</a>
                                            </h4>
                                          </div>
                                          <div id="rightplantilla" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_plantilla_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#right201record"> - 201 Record</a>
                                            </h4>
                                          </div>
                                          <div id="right201record" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_201records_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightexpiringpersonnel"> - Expiring Personnel</a>
                                            </h4>
                                          </div>
                                          <div id="rightexpiringpersonnel" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_expiringpersonnel_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightattritionreport"> - Attrition Report</a>
                                            </h4>
                                          </div>
                                          <div id="rightattritionreport" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_attrition_view">
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#rightdeductions">Deductions</a>
                                    </h4>
                                  </div>
                                  <div id="rightdeductions" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_deductionsparent_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightregulardeduct"> - Regular Deduction</a>
                                            </h4>
                                          </div>
                                          <div id="rightregulardeduct" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_regdeduction_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_regdeduction_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_regdeduction_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_regdeduction_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#righttempdeductions"> - Temporary Deduction</a>
                                            </h4>
                                          </div>
                                          <div id="righttempdeductions" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_tempdeduction_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_tempdeduction_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_tempdeduction_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_tempdeduction_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#rightotherearnings">Other Earnings</a>
                                    </h4>
                                  </div>
                                  <div id="rightotherearnings" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_otherearningsparent_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightearningregular"> - Other Earning Regular</a>
                                            </h4>
                                          </div>
                                          <div id="rightearningregular" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_otherregearnings_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_otherregearnings_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_otherregearnings_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_otherregearnings_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightearningtemp"> - Other Earning Temporary</a>
                                            </h4>
                                          </div>
                                          <div id="rightearningtemp" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_othertempearnings_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_othertempearnings_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_othertempearnings_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_othertempearnings_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightovertimeentry"> - Overtime Entry</a>
                                            </h4>
                                          </div>
                                          <div id="rightovertimeentry" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_overtimeentry_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_overtimeentry_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="panel panel-default" style="margin:0px;">
                                  <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #2ecc71;">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#accordion" href="#rightadmin">Settings</a>
                                    </h4>
                                  </div>
                                  <div id="rightadmin" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                        <select class="form-control" name="right_adminparent_view" >
                                                            <option value="0">Off</option>
                                                            <option value="1">On</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightuseracc"> - User Account</a>
                                            </h4>
                                          </div>
                                          <div id="rightuseracc" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_useracccount_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_useracccount_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_useracccount_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_useracccount_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightusergroup"> - User Group</a>
                                            </h4>
                                          </div>
                                          <div id="rightusergroup" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_usergroup_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_usergroup_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_usergroup_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_usergroup_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightcompanysetup"> - Company Setup</a>
                                            </h4>
                                          </div>
                                          <div id="rightcompanysetup" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_companysetup_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_companysetup_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightfactorfile"> - Factor File</a>
                                            </h4>
                                          </div>
                                          <div id="rightfactorfile" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_reffactorfile_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_reffactorfile_edit" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel panel-default" style="margin:0px;">
                                          <div class="panel-heading" style="background-color:white !important;padding:10px;border-bottom:3px solid #d35400;">
                                            <h4 class="panel-title">
                                              <a data-toggle="collapse" style="color:#2c3e50;" data-parent="#subaccordion" href="#rightbackuprestore"> - Backup & Restore</a>
                                            </h4>
                                          </div>
                                          <div id="rightbackuprestore" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_backup_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Backup Database:</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_backup_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Restore Database:</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select class="form-control" name="right_backup_restore" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>

                            </div>
                            </form>
                    </div>

                        <div class="modal-footer">
                            <button id="btn_create" type="button" class="btn" style="background-color:#2ecc71;color:white;">Save</button>
                            <button id="btn_cancel" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div><!---content---->
                </div>
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
<link href="assets/plugins/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="assets/plugins/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>

<?php echo $_rights; ?>

<script>

$(document).ready(function(){
    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _ispayable=0; var _isforwardable=0;
    $('#toggle-two').bootstrapToggle({
      on: 'All',
      off: 'Specific'
    });
    $('#toggleevent').click(function(){
      if($('.checkorno').prop("checked") == false){
        // console.log(1);
        $('select').each(function() {
            $(this).val(1);
        });
      }else{
        $('select').each(function() {
            $(this).val(0);
        });
      }
    });
    var initializeControls=function(){
        dt=$('#tbl_user_groups').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "bStateSave": true,
            "fnStateSave": function (oSettings, oData) {
                localStorage.setItem('DataTables_' + window.location.pathname, JSON.stringify(oData));
            },
            "ajax" : "UserGroups/transaction/list",
            "columns": [
                { targets:[0],data: "user_group" },
                { targets:[1],data: "user_group_desc" },
                {
                    targets:[2], data: null,
                    render: function (data, type, full, meta){

                        if (data.user_group_id != 1){
                            return '<center>'+right_usergroup_edit+right_usergroup_delete+'</center>';
                        }else{
                            return '';
                        }

                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Leave"
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

        /*$('#tbl_user_groups tbody').on( 'click', 'tr td.details-control', function () {
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

        $('#tbl_user_groups tbody').on( 'click', 'tr td.details-control', function () {
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.user_group_id;
            $('.user_rights_detail').text(data.user_group);
            $('#modal_rights').modal('toggle');
        } );


        $('#tbl_user_groups tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";

            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.user_group_id;
            $('#user_group_id').val(data.user_group_id);
            $('.transaction_type').text('Edit');
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

            $('select').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name){
                        _elem.val(value==0 || value==null ? 0 : 1);
                    }
                });
            });

            $('#modal_create_rights').modal('toggle');

            hideRatesduties();
            hideemployeeList();
            showemployeeFields();

        });

        $('#tbl_user_groups tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.user_group_id;

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
            $('#modal_create_rights').modal('show');
            clearFields($('#frm_user_group'));
        });

        $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_user_group'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createUserAccount().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_user_group'))
                    }).always(function(){
                        $('#modal_create_rights').modal('hide');
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
                        $('#modal_create_rights').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
            }
            else{}
        });

        $('#btn_save_rights').click(function(){
            if(validateRequiredFields($('#frm_rights'))){
                    /*alert("aw");*/
                    saveUserRights().done(function(response){
                        showNotification(response);
                        /*dt.row.add(response.row_added[0]).draw();*/
                        /*clearFields($('#frm_user_group'))*/
                    }).always(function(){
                        /*$('#modal_create_rights').modal('hide');*/
                        $.unblockUI();
                    });
                    return;
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
            var _data=$('#frm_user_group').serializeArray();

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"UserGroups/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };


    var updateUserAccount=function(){
            var _data=$('#frm_user_group').serializeArray();
            _data.push({name : "user_group_id" ,value : _selectedID});
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"UserGroups/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

    var removeUserAccount=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"UserGroups/transaction/delete",
                "data":{user_group_id : _selectedID},
                "beforeSend": showSpinningProgress($('#'))
            });
        };

    var saveUserRights=function(){
            var _data=$('#frm_rights').serializeArray();
            _data.push({name : "user_group_id" ,value : _selectedID});
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"UserGroups/transaction/saverights",
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
        '<div class="col-md-6"><p class="nomargin"><b>Gender</b> : '+d.user_email+'</p>'+
        '<p class="nomargin"><b>Birthdate</b> : '+d.user_mobile+'</p>'+
        '<p class="nomargin"><b>Civil Status</b> : '+d.user_telephone+'</p>'+
        '<p class="nomargin"><b>Blood Type</b> : '+d.user_bdate+'</p>'+
        '<p class="nomargin"><b>Blood Type</b> : '+d.user_address+'</p>'+

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
