
<!DOCTYPE html>

<html lang="en">
<?php echo $loader; ?>
<head>

    <meta charset="utf-8">

    <title>JCORE HRIS : Dashboard</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="16x16">
    <?php echo $_def_css_files; ?>

    <link rel="stylesheet" href="assets/plugins/spinner/dist/ladda-themeless.min.css">
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              
    <!-- iCheck -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/_all.css" rel="stylesheet">                   
    <!-- Custom Checkboxes / iCheck -->

    <link href="assets/plugins/datapicker/datepicker3.css" rel="stylesheet">


    <?php echo $_switcher_settings; ?>
    <script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>
    <link href="assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">
    <script src="assets/plugins/sweet-alert/sweetalert.min.js"></script>

    <?php echo $_def_js_files; ?>

    <link type="text/css" href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">

    <script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

    <script type="text/javascript" src="assets/plugins/canvas.min.js"></script>

    <script type="text/javascript">
      window.onload = function () {
        var gross = [];
        var afterdeduct = [];
        <?php
            foreach($monthlygross as $row){
              echo "gross.push(  { x: new Date(".date('Y').",".$row->Month."), y: ".$row->reg_pay." });";
            }

            foreach($monthlygross as $row){
              echo "afterdeduct.push(  { x: new Date(".date('Y').",".$row->Month."), y: ".$row->net_pay." });";
            }
        ?>

        var chart = new CanvasJS.Chart("chartContainer",
        {

          animationEnabled: true,
          axisX:{

            gridColor: "Silver",
            tickColor: "silver",
            valueFormatString: "DD/MMM"

          },
                            toolTip:{
                              shared:true
                            },
          theme: "theme2",
          axisY: {
            gridColor: "Silver",
            tickColor: "silver"
          },
          legend:{
            verticalAlign: "center",
            horizontalAlign: "right"
          },
          data: [
          {
            type: "line",
            showInLegend: true,
            lineThickness: 2,
            name: "Gross",
            markerType: "square",
            color: "#20B2AA",
            dataPoints: gross
          },
          {
            type: "line",
            showInLegend: true,
            name: "Gross after deductions",
            color: "#F08080",
            lineThickness: 2,

            dataPoints: afterdeduct
          }


          ],
              legend:{
                cursor:"pointer",
                itemclick:function(e){
                  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                  }
                  else{
                    e.dataSeries.visible = true;
                  }
                  chart.render();
                }
              }
        });

      chart.render();

      var compgross = [];
      var compafterdeduct = [];
      <?php
          foreach($compensationdept as $row){
            echo "compgross.push(  { label: '".$row->department."', y: ".$row->reg_pay." });";
          }

          foreach($compensationdept as $row){
            echo "compafterdeduct.push(  { label: '".$row->department."', y: ".$row->net_pay." });";
          }
      ?>

      var chartcompensationdept = new CanvasJS.Chart("chartcompensationdept",
      {

        animationEnabled: true,
        axisX:{

          gridColor: "Silver",
          tickColor: "silver",

        },
                          toolTip:{
                            shared:true
                          },
        theme: "theme2",
        axisY: {
          gridColor: "Silver",
          tickColor: "silver"
        },
        legend:{
          verticalAlign: "center",
          horizontalAlign: "right"
        },
        data: [
        {
          type: "column",
          showInLegend: true,
          lineThickness: 2,
          name: "Gross",
          markerType: "square",
          color: "#66bb6a",
          dataPoints: compgross
        },
        {
          type: "column",
          showInLegend: true,
          name: "Gross after deductions",
          color: "#ef5350",
          lineThickness: 2,

          dataPoints: compafterdeduct
        }


        ],
            legend:{
              cursor:"pointer",
              itemclick:function(e){
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                  e.dataSeries.visible = false;
                }
                else{
                  e.dataSeries.visible = true;
                }
                chartcompensationdept.render();
              }
            }
      });

    chartcompensationdept.render();



        var dps = [];
        <?php
            foreach($empperdept as $row){
              echo "dps.push({ y: ".$row->totalperdept.", indexLabel: '".$row->department."' });";
            }
        ?>



        var chartdept = new CanvasJS.Chart("chartdept",
        {
          theme: "theme2",
          data: [
          {
            type: "pie",
            showInLegend: true,
            toolTipContent: "{y} - #percent %",
            yValueFormatString: "# Employee",
            legendText: "{indexLabel}",
            dataPoints: dps
          }
          ]
        });
        chartdept.render();

        var chartbranch = [];
        <?php
            foreach($empperbranch as $row){
              echo "chartbranch.push({ y: ".$row->totalperbranch.", indexLabel: '".$row->branch."' });";
            }
        ?>

        var chartbranch = new CanvasJS.Chart("chartbranch",
        {
          theme: "theme2",
          data: [
          {
            type: "doughnut",
            showInLegend: true,
            toolTipContent: "{y} - #percent %",
            yValueFormatString: "# Employee",
            legendText: "{indexLabel}",
            dataPoints: chartbranch
          }
          ]
        });
        chartbranch.render();

      }
    </script>
    <style>
        .demo-options{
        top:50px !important;
        }
        .datepicker{z-index:9999 !important}
        .panel-heading{
        }
        .panel-heading h3{
          font-size:11pt;
          color:white;
          font-weight: 450;
        }
        .panel-default{


        }
        .boldlabel{
        font-weight:bold;
        }
        .inputhighlight{
        border:1.5px solid #27ae60;
        opacity:0.9;
        }
        .black{
        color:black !important;
        }
        .green{
        color:#27ae60 !important;

        }
        .form-group{
        padding:2px !important;
        }
        .nomargin{
        margin:2px;
        }
        .dataTables_length{
        /*float:right;*/
        padding-left:10px;
        padding-top:5px;
        }
        .dataTables_filter {
        /*float:left;*/
        padding-right:10px;
        padding-top:5px;
        }

        .ui-pnotify{
            top:50px;
        }

        .sorting{
            background-color:#2c3e50 !important;
            color:white;
        }
        .sorting_asc{
            background-color:#2c3e50 !important;
            color:white;
        }
        .sorting_desc{
            background-color:#2c3e50 !important;
            color:white;
        }
        .sorting_disabled{
            background-color:#2c3e50 !important;
            color:white;
        }
        .customth{
            background-color:#2c3e50 !important;
            color:white;

        }
        .customtable{

        }


        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(assets/img/preloader.gif) center no-repeat #fff;
        }
        .container-fluid{
        padding:0px;
        }
        .panel-body{
        padding:0px !important;
        }
        .delete{
        width:40px;font-family: Tahoma, Georgia, Serif;background-color:#e74c3c;color:white;
        }
        .add{
        width:40px;font-family: Tahoma, Georgia, Serif;background-color:#2ecc71 !important;color:white;"
        }
        .name{
        width:120;font-family: Tahoma, Georgia, Serif;background-color:#3498db;color:white;
        }
        .inlinecustomlabel{
            font-weight: bold;
            margin-top:5px;
            font-size: 14px;

        }
        .inlinecustomlabel-sm{
            font-weight: bold;
            margin-top:5px;
            font-size: 13px;

        }
        .inlinecustomlabel-sm2{
            font-weight: bold;
            font-size: 8pt;
            margin-top:5px;

        }
        .inputcustom{
            height:30px;
        }
        .loadingimg {
          margin-top:4px;width:150px;height:150px;
          background: transparent url('assets/img/imgpreloader2.gif') center no-repeat;
        }
        .btnedit{
            background-color:#3498db !important;
            color:white;
        }
        .btndelete{
            background-color: #e74c3c !important;
            color:White;
        }
        #topnav .navbar-brand {
        width: 120px;
        }
        .modal-dialog{
            height: 750px !important;
        }
        .tile-body{
            text-align:left !important;
        }
        .text-white{
            color:white;
        }
        .activepercentage{

        }
        .select2{
        width:100%;
        }
        .tooltip {
        position: fixed;
        }


        .body-online::-webkit-scrollbar-track
        {
        -webkit-box-shadow: inset 0 0 4px rgba(0,0,0,0.3);
        background-color: white;
        border-radius: 5px;
        }

        .body-online::-webkit-scrollbar
        {
        width:7px;
        background-color: #2980b9;
        }

        .body-online::-webkit-scrollbar-thumb
        {
        border-radius: 5px;
        background-color: #2980b9;
        }
        .imguser{
        width:30px;
        height:30px;
        border-radius:50%;
        }
        .sm-text{
        font-size:10px;

        }
        .item{
        max-width: 100%;
        margin-top:20px;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        }
        .item:hover{
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
        }
        .panel-default{
          border:0 !important;
        }
        .canvasjs-chart-credit{
          display:none !important;
        }
        .button-icon{
          display:none !important;
        }

.chatbox{position:fixed;bottom:1px;right:75px;margin:0;background:#fff;padding:28px 0px 10px;z-index:100000;border:1px solid #1e88e5;}
#open-userstats{position:absolute;top:0;right:0;width:10px;height:30px;line-height:20px;cursor:pointer;z-index:2;}
#minim-chat,#maxi-chat{position:absolute;top:0;left:0;width:100%;height:30px;line-height:20px;cursor:pointer;background-color: #1e88e5;z-index:1;}
.minim-button{position:absolute;top:5px;right:1px;font-size:24px;width:20px;background:#fefefe;color:white;background-color: #1e88e5; }
.show-button{position:absolute;top:2px;right:21px;font-size:24px;width:20px;background:#fefefe;color:white;background-color: #1e88e5; }

.chat-text{position:absolute;top:5px;left:10px;font-size:16px;z-index:5;color:white;}

.usersstat{position:fixed;bottom:330px;right:110px;margin:0;background:#fff;padding:28px 0px 10px;z-index:100000;border:1px solid #1e88e5;}
#close-stat{position:absolute;top:2px;right:2px;font-size:24px;border:1px solid #dedede;width:20px;background:#fefefe;z-index:2}
#minim-stat,#maxi-chat{position:absolute;top:0;left:0;width:100%;height:30px;line-height:20px;cursor:pointer;background-color: #1e88e5;z-index:1;}
.minim-statbutton{position:absolute;top:5px;right:1px;font-size:24px;width:20px;background:#fefefe;color:white;background-color: #1e88e5; }

.stat-text{position:absolute;top:5px;left:10px;font-size:16px;z-index:5;color:white;}

@media only screen and (max-width: 500px) {
    .chatbox{
      position:fixed !important;
      right:0;
      bottom:1px !important;
      margin:20px;
      background:#fff !important;
      height:340px !important;
    }
    .chat1 {
        width:auto !important;
        height:auto !important;
    }
    .usersstat{
      position:fixed !important;
      margin:20px;
      right:35px;
      width:70% !important;
      background:#fff !important;
      height:auto !important;
    }
    .usersstatis {
        width:auto !important;
        height:auto !important;
    }
    .quickbox{
      right:80px !important;
      top:20px !important;
    }

}

.chat
{
    list-style: none;
    margin: 5px;;
    padding: 0;
}

.chat li
{
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dotted #B3A9A9;
    font-size: 9pt;
}

.chat li.left .chat-body
{
    margin-left: 35px;
}

.chat li.right .chat-body
{
    margin-right: 35px;
}


.chat li .chat-body p
{
    margin: 0;
    color: #777777;
}

.primary-font{
  font-size:9pt !important;
}


.quickbox{position:fixed;top:15px;right:120px;;margin:0;background:#fff;border-bottom:none;padding:28px 0px 10px;z-index:100000;border:1px solid #95a5a6;}
#close-quick{position:absolute;top:2px;right:2px;font-size:24px;border:1px solid #dedede;width:20px;background:#fefefe;z-index:2}
#minim-quick,#maxi-chat{position:absolute;top:0;left:0;width:100%;height:30px;line-height:20px;cursor:pointer;background-color: #424242;z-index:1;}
.minim-quickbutton{position:absolute;top:5px;right:1px;font-size:24px;width:20px;background:#fefefe;color:white;background-color: #424242; }

.quick-text{position:absolute;top:5px;left:10px;font-size:16px;z-index:5;color:white;}

body{
  background:#dedede
}

.social-links a{
  position: fixed;
  bottom: 10px;
  right: 10px;
  text-align:center;
  float: left;
  width: 50px;
  height: 50px;
  border: 2px solid white;
  border-radius: 100%;
  box-shadow: 1px 2px 15px black;
  margin-right: 7px; /*space between*/
    display: flex;
    align-items: flex-start;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    background-color:#2196F3;
}
.social-links a i{
  font-size: 20px;
    align-self:center;
    color:white !important;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    margin: 0 auto;
}
.social-links a i::before{
  display:inline-block;
  text-decoration:none;
}
.social-links a:hover{
  bottom: 20px;
  background-color: #1e88e5;
}
.scrollheight{
  width: 100% !important; height: 275px; overflow-y: scroll; margin: auto; padding: 0; border:0;
}
.quickeffect{
  transition: all 0.5s ease;
}

.quickeffect:hover{
  color:#2980b9!important;
}
.pace-progress{
  display:none;
}
.header_expiring th{
  padding: 5px;background: #ECEFF1!important;color:black;font-weight: 500;border-bottom: 1px solid #CFD8DC;
}
.tbl_expiring{
  border: 1px solid #CFD8DC;
}
.tbl_expiring td{
  padding: 5px;border-bottom: 1px solid #CFD8DC;
}
td.dataTables_empty{
  text-align: center !important;
}

    </style>
<?php echo $loaderscript; ?>
</head>

<body class="animated-content">

<?php echo $_top_navigation; ?>

<div id="wrapper">
    <div id="layout-static">

        <?php echo $_side_bar_navigation;?>

        <div class="static-content-wrapper" >
            <div class="static-content">
                    <div class="page-content">
                        <div class="container-fluid" style="margin:16px;margin-top:0;">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 style="font-weight:400;color: #263238;">Dashboard <small style="color:#263238"> Lets get a quick overview</small></h3>
                                </div>
                            </div>
                            <hr style="padding:0;margin:0;border:1px solid #ECEFF1;">
                            <div class="row">
                              <input type="hidden" id="main_directory" value="<?php echo $this->session->main_directory; ?>">
                                <div class="col-md-3">
                                    <div class="info-tile tile-orange item" style="background-color:#ECEFF1;border-top: 5px solid #CFD8DC;">
                                        <div class="tile-heading" style="color:#263238;display:block;"><span>Active Employees</span><i class="fa fa-area-chart" style="float:right;" aria-hidden="true"></i></div>
                                        <div class="tile-body" style="color:#263238;"><span><activepercentage class="activepercentage"><?php echo $active_percentage; ?></activepercentage>%</span></div>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-success progress-bar-striped active aemployeeprogress" role="progressbar"
                                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $active_percentage; ?>%">
                                          </div>
                                        </div>
                                        <div class="tile-footer"><span class="text-white" style="color: #263238;"><?php echo $active_count; ?> Employee/s <i class="fa fa-users"></i></span></div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="info-tile tile-orange item" style="background-color:#ECEFF1;border-top: 5px solid #CFD8DC;">
                                        <div class="tile-heading" style="color:#263238;display:block;"><span>Inactive Employees</span><i class="fa fa-area-chart" style="float:right;" aria-hidden="true"></i></div>
                                        <div class="tile-body" style="color:#263238;"><span><retiredpercentage class="retiredpercentage"><?php echo $retired_percentage; ?></retiredpercentage>%</span></div>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-success progress-bar-striped active iemployeeprogress" role="progressbar"
                                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $retired_percentage; ?>%">
                                          </div>
                                        </div>
                                        <div class="tile-footer"><span class="text-white" style="color: #263238;"><retiredcount class="retiredcount"><?php echo $retired_count; ?></retiredcount> Employee/s <i class="fa fa-users"></i></span></div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="info-tile tile-orange item" style="background-color:#ECEFF1;border-top: 5px solid #CFD8DC;">
                                        <div class="tile-heading" style="color:#263238;display:block;"><span>Online Users</span><i class="fa fa-users" style="float:right;" aria-hidden="true"></i></div>
                                        <div class="tile-body" style="color:#263238;"><span><percentonlineusers class="percentonlineusers"><?php echo $percent_online_users; ?></percentonlineusers>%</span></div>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-success progress-bar-striped active onlineusersprogress" role="progressbar"
                                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent_online_users; ?>%" >
                                          </div>
                                        </div>
                                        <div class="tile-footer"><span class="text-white" style="color: #263238;"><onlineusers class="onlineusers"><?php echo $online_users; ?></onlineusers> User/s <i class="fa fa-users"></i></span></div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="info-tile tile-orange item" style="background-color:#ECEFF1;border-top: 5px solid #CFD8DC;">
                                        <div class="tile-heading" style="color:#263238;display:block;"><span>Offline Users</span><i class="fa fa-users" style="float:right;" aria-hidden="true"></i></div>
                                        <div class="tile-body" style="color:#263238;"><span><percentofflineusers class="percentofflineusers"><?php echo $percent_offline_users; ?></percentofflineusers>%</span></div>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-success progress-bar-striped active offlineusersprogress" role="progressbar"
                                          aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent_offline_users; ?>%">
                                          </div>
                                        </div>
                                        <div class="tile-footer"><span class="text-white" style="color: #263238;"><offlineusers class="offlineusers"><?php echo $offline_users; ?></offlineusers> User/s <i class="fa fa-users"></i></span></div>
                                    </div>

                                </div>
                            </div>
                            <div data-widget-group="group1">
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="panel panel-default" data-widget='{"draggable": "false"}' style="">
                                          <div class="panel-heading" style="background-color:#EEEEEE !important;border-top: 1px solid #CFD8DC;border-bottom: 1px solid #CFD8DC;">
                                              <h3 style="font-weight: 500; color: #263238;">
                                                <i class="fa fa-line-chart"></i> Monthly Company Gross For Year <year class="year"></year>
                                              </h3>
                                              <div class="panel-ctrls button-icon-bg refresh"
                                                  data-actions-container=""
                                                  data-action-refresh-demo='{"type": "circular"}'
                                                  >
                                              </div>
                                          </div>
                                          <div class="panel-body body-online">
                                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                                          </div>
                                      </div>
                                   <div class="panel panel-default" data-widget='{"draggable": "false"}' style="">
                                        <div class="panel-heading" style="background-color:#EEEEEE !important;border: 1px solid #CFD8DC;border-bottom: 1px solid #CFD8DC;">
                                            <h3 style="font-weight: 500; color: #263238;">
                                              <i class="fa fa-bar-chart"></i> Compensation Distribution Per Department For Year <year class="year"></year>
                                            </h3>
                                            <div class="panel-ctrls button-icon-bg refresh"
                                                data-actions-container=""
                                                data-action-refresh-demo='{"type": "circular"}'
                                                >
                                            </div>
                                        </div>
                                        <div class="panel-body body-online">
                                          <div id="chartcompensationdept" style="height: 300px; width: 100%;"></div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="panel panel-default" >
                                        <div class="panel-heading" style="background-color:#EEEEEE !important;border: 1px solid #CFD8DC;border-bottom: 1px solid #CFD8DC;">

                                        <h3 style="font-weight: 400; color: #263238;"><i class="fa fa-calendar-o"></i> Expiring Personnel this Week</h3>
                                        </div>
                                        <div class="panel-body body-online">
                                          <div style="padding: 10px;border: 1px solid #CFD8DC;">

                                            <table id="tbl_expiring_personnel_week" class="tbl_expiring">
                                              <thead class="header_expiring">
                                                <tr>
                                                  <th>Name</th>
                                                  <th >Department</th>
                                                  <th >Date Expire</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                              </tbody>
                                          </table>

                                          </div>

                                        </div>
                                    </div>
                                    <div class="panel panel-default" >
                                      <div class="panel-heading" style="background-color:#EEEEEE !important;border: 1px solid #CFD8DC;border-bottom: 1px solid #CFD8DC;">

                                        <h3 style="font-weight: 400; color: #263238;"><i class="fa fa-calendar-o"></i> Expiring Personnel this Month</h3>
                                        </div>
                                        <div class="panel-body body-online">
                                          <div style="padding: 10px;border: 1px solid #CFD8DC;">

                                            <table id="tbl_expiring_personnel_month" class="tbl_expiring">
                                                <thead class="header_expiring">
                                                  <tr>
                                                    <th style="padding: 5px;">Name</th>
                                                    <th>Department</th>
                                                    <th>Date Expire</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>

                                          </div>

                                        </div>
                                    </div>

                                  </div>
                                </div>
                            </div>
<!--                             <div data-widget-group="group2">
                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="panel panel-default" data-widget='{"draggable": "false"}' style="">
                                          <div class="panel-heading" style="background-color:#f35b5a !important;">
                                              <h3>Employee's by Department</h3>
                                              <div class="panel-ctrls button-icon-bg refresh"
                                                  data-actions-container=""
                                                  data-action-refresh-demo='{"type": "circular"}'
                                                  >
                                              </div>
                                          </div>
                                          <div class="panel-body body-online">
                                            <div id="chartdept" style="height: 300px; width: 100%;"></div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="panel panel-default" data-widget='{"draggable": "false"}' style="">
                                          <div class="panel-heading" style="background-color:#745f86 !important;">
                                              <h3>Employee's by Branch</h3>
                                              <div class="panel-ctrls button-icon-bg refresh"
                                                  data-actions-container=""
                                                  data-action-refresh-demo='{"type": "circular"}'
                                                  >
                                              </div>
                                          </div>
                                          <div class="panel-body body-online">
                                            <div id="chartbranch" style="height: 300px; width: 100%;"></div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div id="chat" class="animated-chat tada" onclick="loadChatbox()" style=""><span class="glyphicon glyphicon-envelope"></span></div> -->
                            <div class="social-links">
                                <a id="showchatbox"><i class="glyphicon glyphicon-envelope"></i></a>
                            </div>


                        </div> <!-- .container-fluid -->
                    </div> <!-- #page-content -->
                </div>
        </div>
    </div><!--static layout -->
</div> <!--wrapper -->
<div class="container-fluid">
  <div class="chatbox " id="chatbox" style="display:none;">
    <span class="chat-text">Chats</span>
    <div class="chat1" style="width: 320px; height: 300px; margin: auto; padding: 0;">
      <div class="row">
        <div class="col-sm-12" >
          <div class="scrollheight" style="border-right:1px solid #1e88e5;">
            <ul class="chat">
              <?php
                  /*$count=0;*/

              echo '<script> chatcounts='.$count[0]->count.'; </script>';
              ?>
                <chatcontent class="chat_content"></chatcontent>
            </ul>
            <div class="bottomchat"></div>
          </div>
          <div  style="border-right:1px solid #1e88e5;margin-bottom:-10px;border-bottom:1px solid #1e88e5;">
            <div class="input-group">
                <form id="frm_wall_post">
                <input class="form-control input-group" style="height:35px;" name="post_content" placeholder="Type message..." data-error-msg="Message is required." required>
                </form>
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success" style="height:35px;" id="save_post"><i class="fa fa-paper-plane"></i></button>
                </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div id="open-userstats" title="Show Users"><span class="show-button"><i class="fa fa-users" style="font-size:11pt;"></i></span></div>
    <div id="minim-chat"><span class="minim-button">&times;</span></div>
  </div>
</div>
<div class="container-fluid">
  <div class="usersstat " id="usersstat" style="display:none;">
    <span class="chat-text">Users</span>
    <div class="usersstatis" style="width: 220px; height: auto; margin: 5px; padding: 0;">
      <div class="row">
        <div class="col-sm-12" >
          <div class="panel-body body-online" style="overflow-y:scroll;">
            <center>
              <ul class="widget-avatar online_users_box">
                  <?php foreach($online_users_box as $row){
                  ?>
                  <li class="tooltips" data-status="online" data-toggle="tooltip" title="<?php echo $row->full_name; ?>"><img src="<?php echo $row->photo_path; ?>" alt=""/></li>
                  <?php
                  }
                  ?>
                  <?php foreach($offline_users_box as $row){
                  ?>
                  <li class="tooltips" data-status="busy" data-toggle="tooltip" title="<?php echo $row->full_name; ?>"><img src="<?php echo $row->photo_path; ?>" alt=""/></li>
                  <?php
                  }
                  ?>
              </ul>
            </center>
          </div>
        </div>

      </div>

    </div>

    <div id="minim-stat"><span class="minim-statbutton">&times;</span></div>
  </div>
</div>

<!-- <div class="quickbox" style="display:none;border-radius:10px;">
  <span class="quick-text">Quick Actions</span>
  <div class="quickactions" style="width: auto; height: autol; margin: auto; padding-left: 20px; padding-right:20px;">
    <div class="container-fluid" style="margin-top:10px;">
      <div class="col-sm-4 right_employee_view">
        <center>
        <span class="" title="Employee Information"><a href="Employee" style="color:#424242;"><i class="quickeffect fa fa-users fa-4x" aria-hidden="true"></i></a></span>
        <center>
      </div>
      <div class="col-sm-4 right_payslip_view">
        <center>
          <span class="" title="PaySlip"><a href="/JDEVHR/jcore-payroll/PaySlip" style="color:#424242;"><i class="quickeffect fa fa-money fa-4x" aria-hidden="true"></i></a></span>
        <center>
      </div>
      <div class="col-sm-4 right_schedule_timeinout">
        <center>
          <span class="" title="Time In / Out"><a href="SchedTimein" style="color:#424242;"><i class="quickeffect fa fa-clock-o fa-4x" aria-hidden="true"></i></a></span>
        <center>
      </div>
    </div>
  </div>
  <div id="minim-quick" style="border:1px solid #95a5a6;border-radius:5px;"><span class="minim-quickbutton">&times;</span></div>
</div> -->


<?php echo $_rights; ?>
<script>

$(document).ready(function(){
  var user_id = <?php echo $user_id; ?>;

  var initializeControls=function(){
          dt_week=$('#tbl_expiring_personnel_week').DataTable({
              "sScrollY":'37vh',
              "bPaginate": false,
              "bInfo" : false,  
              "bFilter": false,
              "order":[[0,'desc']],
              "paging": false,
              "bAutoWidth": true,
              "ajax": {
              "url": "Dashboard/transaction/getExpiringPersonnel",
              "type": "POST",
              "data": function ( d ) {
                  return $.extend( {}, d, {
                      "type": "week",
                      });
                  }
              },
              "columns": [
                  { targets:[0],data: "fullname" },
                  { targets:[1],data: "department" },
                  { targets:[2],data: "date_expire" }

              ],
              language: {
                           searchPlaceholder: ""
              }
          });

          dt_month=$('#tbl_expiring_personnel_month').DataTable({
            "sScrollY":'37vh',
              "bPaginate": false,
              "bInfo" : false,  
              "bFilter": false,
              "order":[[0,'desc']],
              "paging": false,
              "bAutoWidth": true,
              "ajax": {
              "url": "Dashboard/transaction/getExpiringPersonnel",
              "type": "POST",
              "data": function ( d ) {
                  return $.extend( {}, d, {
                      "type": "month",
                      });
                  }
              },
              "columns": [
                  { targets:[0],data: "fullname" },
                  { targets:[1],data: "department" },
                  { targets:[2],data: "date_expire" }

              ],
              language: {
                           searchPlaceholder: ""
              }
          });
  }();


  $('.triggerquick').click(function(){
    $('.quickbox').show(500);
  });

  $('#minim-quick').click(function(){
    $('.quickbox').hide(500);
  });

  $('#showchatbox').click(function(){
    $('#chatbox').show(500);
    $('.chatbox, .chat1, .scrollheight, .browsers, .chat_content').animate({
        scrollTop: $(".bottomchat").offset().top
    }, 200);
  });

  $('#minim-chat').click(function(){
    $('#chatbox').hide(500);
    $('#usersstat').hide(500);
  });

  $('#open-userstats').click(function(){
    $('#usersstat').show(500);
  });

  $('#minim-stat').click(function(){
    $('#usersstat').hide(500);
  });

  $('.year').text(new Date().getFullYear());


  var interval = 1000;  // 1000 = 1 second, 3000 = 3 seconds
  var chatamount= 20;
  var audio = new Audio('assets/chatpling.mp3');
  /*$('.refresh').click(function(){
      getlist();
  });*/
  function getlist() {
      var _data=$('#').serializeArray();
      _data.push({name : "chatamount" ,value : chatamount});
      $.ajax({
        type: 'POST',
        url: 'Dashboard/transaction/getstats',
        "data":_data,
        dataType: 'json',
        success: function (response) {
            $('.activepercentage').text(response.active_percentage);
            $('.retiredpercentage').text(response.retired_percentage);
            $('.activecount').text(response.active_count);
            $('.retiredcount').text(response.retired_count);
            $('.aemployeeprogress').css("width",response.active_percentage+"%");
            $('.iemployeeprogress').css("width",response.retired_percentage+"%");

            $('.percentonlineusers').text(response.percent_online_users);
            $('.percentofflineusers').text(response.percent_offline_users);
            $('.onlineusers').text(response.online_users);
            $('.offlineusers').text(response.offline_users);
            $('.onlineusersprogress').css("width",response.percent_online_users+"%");
            $('.offlineusersprogress').css("width",response.percent_offline_users+"%");

              var jsoncount=response.online_users_box.length-1;
              var jsoncountoff=response.offline_users_box.length-1;
              var jsoncountwallpost=response.wall_post.length-1;
              var showonline="";
              var showoffline="";
              var showchats='';
              var main_directory = $('#main_directory').val();

                      for(var i=0;parseInt(jsoncount)>=i;i++){
                              showonline+='<li class="tooltips" data-status="online" data-toggle="tooltip" title="'+response.online_users_box[i].full_name+'"><img src="../'+main_directory+'/'+response.online_users_box[i].photo_path+'" alt=""/></li>';
                      }
                      for(var j=0;parseInt(jsoncountoff)>=j;j++){
                              showonline+='<li class="tooltips" data-status="busy" data-toggle="tooltip" title="'+response.offline_users_box[j].full_name+'"><img src="../'+main_directory+'/'+response.offline_users_box[j].photo_path+'" alt=""/></li>';
                      }

                      showchats+='<center><li class="left clearfix">'+
                                      '<a id="showmorechat">Show More</a>'+
                                  '</li></center>';

                      for(var w=0;parseInt(jsoncountwallpost)>=w;w++){
                          if(user_id==response.wall_post[w].user_id){
                            showchats+='<li class="right clearfix"><span class="chat-img pull-right">'+
                                            '<img src="../'+main_directory+'/'+response.wall_post[w].photo_path+'" style="width:30px;height:30px;" alt="User Avatar" class="img-circle">'+
                                        '</span>'+
                                            '<div class="chat-body clearfix">'+
                                                '<div class="header">'+
                                                    '<small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'+response.wall_post[w].readable+'</small>'+
                                                    '<strong class="pull-right primary-font">'+response.wall_post[w].full_name+'</strong>'+
                                                '</div>'+
                                                '<p style="word-break:break-all;">'+response.wall_post[w].post_content+'</p>'+
                                            '</div>'+
                                        '</li>';
                          }
                          else{
                            showchats+='<li class="left clearfix"><span class="chat-img pull-left">'+
                                            '<img src="../'+main_directory+'/'+response.wall_post[w].photo_path+'" style="width:30px;height:30px;" alt="User Avatar" class="img-circle">'+
                                        '</span>'+
                                            '<div class="chat-body clearfix">'+
                                                '<div class="header">'+
                                                    '<strong class="primary-font">'+response.wall_post[w].full_name+'</strong> <small class="pull-right text-muted">'+
                                                        '<span class="glyphicon glyphicon-time"></span>'+response.wall_post[w].readable+'</small>'+
                                                '</div>'+
                                                '<p style="word-break:break-all;">'+response.wall_post[w].post_content+'</p>'+
                                            '</div>'+
                                        '</li>';
                          }


                      }
          if(chatcounts<response.count[0].count){
              chatcounts=response.count[0].count;
              audio.play();
          }
          else{

          }

          $('.online_users_box').html(showonline);
          // $('.offline_users_box').html(showoffline);
          $('.chat_content').html(showchats);


          },
        complete: function (response) {
                setTimeout(getlist, interval);
        }
      });
    }
    setTimeout(getlist, interval);

    $(document).keypress(
      function(event){
       if (event.which == '13') {
        event.preventDefault();
        if(validateRequiredFields($('#frm_wall_post'))){
          saveWallpost().done(function(response){
                                showNotification(response);
                                 clearFields($('#frm_wall_post'));
                            }).always(function(){
                                $.unblockUI();
                            });
          }
        }
  });

  $('.chat1 .scrollheight .chat').on('click','#showmorechat',function(){
      chatamount+=20;
      $('#showmorechat').html('<i class="fa fa-spinner fa-spin fa-3x fa-fw" style="font-size:10pt;"></i>');
  });

  $('#save_post').click(function(){
      if(validateRequiredFields($('#frm_wall_post'))){
        saveWallpost().done(function(response){
                                showNotification(response);
                                 clearFields($('#frm_wall_post'));
                            }).always(function(){
                                $.unblockUI();
                            });
        }

    });

  var saveWallpost=function(){
        var _data=$('#frm_wall_post').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Dashboard/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#save_post'))
        });
    };

  var showSpinningProgress=function(e){
      $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Sending Message...</h4>',
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

  var validateRequiredFields=function(f){
  var stat=true;
  var pword=$('#user_pword').val();
  var cpword=$('#user_confirm_pword').val();
  $('div.form-group').removeClass('has-error');
    $('div.form-group').removeClass('has-error');
    $('input[required],textarea[required],select[required]',f).each(function(){

            if($(this).is('select')){
            if($(this).val()==0 || $(this).val()==null){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('.input-group').addClass('has-error');
                $(this).focus();
                stat=false;
                return false;
            }

            }else{
            if($(this).val()==""){
                showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                $(this).closest('.input-group').addClass('has-error');
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

});

</script>
</body>

</html>
