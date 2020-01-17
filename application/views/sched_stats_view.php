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

        .sweet-alert p{
            font-weight:400;
            font-size:16pt;
        }

        .sweet-alert h2{
            font-size:30pt;
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
        img{
            border-radius: 20%;
            -moz-transition: all 0.3s;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }
        img:hover{
        border-radius: 20%;
        -moz-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.1);
        z-index: 4000;

        }
        .onlineusers
        {
        	color:white;
        }
        .percentonlineusers{
        	color:white;
        }
        .fa{
        	color:white;
        }
        .item{
            box-shadow: -2px 2px 40px #424242;
            border-radius:3%;
        }
        .item2{
            box-shadow: -2px 2px 40px #424242;
            border-radius:3%;
        }
        .item3{
            box-shadow: -2px 2px 40px #424242;
            border-radius:1%;
        }
        .nomargin{
            color:#263238;
            margin:5px;
            font-size:10pt !important;
        }
        .item{
        max-width: 100%;

        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        }
        .item:hover{
        -moz-transform: scale(1.2);
        -webkit-transform: scale(1.2);
        transform: scale(1.1);
        z-index: 4000;

        }
        .fa-user{
            color:#616161
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
                        <li><a href="SchedStats">Employee Schedule Statistics</a></li>
                    </ol>

                    <div class="container-fluid" style="margin:10px;margin-top:30px;">
                        <!-- <center><h2 style="padding:0;margin:0;margin-bottom:25px;font-weight:400;">JCORE HUMAN RESOURCE INFORMATION SYSTEM</h2></center> -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info-tile tile-orange item2" style="background-color:#ecf0f1;">
                                    <div class="tile-heading" style="display:block;"><span style="font-size:10pt;color:#616161">EMPLOYEE PROFILE</span><i class="fa fa-user" style="float:right;" aria-hidden="true"></i></div>
                                    <hr style="background-color: :black;border:1px solid #263238;">
                                    <center><img class="loadingimg" id="image_name" style="margin-top:4px;width:200px;height:200px;" src="assets/img/anonymous-icon.png"></img>
                                    <hr style="background-color: :black;border:1px solid #263238;">
                                    <center>
                                      <p class="nomargin text-left"><b>ECODE</b> : <ecode style="float:right;" id="ecode"></ecode></p>
                                      <p class="nomargin text-left"><b>Fullname</b> : <fullname  style="float:right;" id="fullname"></fullname></p>
                                      <p class="nomargin text-left"><b>Branch</b> : <branch  style="float:right;" id="branch"></branch></p>
                                      <p class="nomargin text-left"><b>Department</b> : <department  style="float:right;" id="department"></department></p>
                                      <p class="nomargin text-left"><b>Position</b> : <position  style="float:right;" id="position"></position></p>
                                    <hr style="background-color: :black;border:1px solid #263238;">
                                    <label class="nomargin" style="font-weight:bold;text-align:center !important;color:#263238;">Scan Employee Code Here</label>
                                    <select class="form-control" id="employee_code" data-error-msg="Please Select Employee" required>
                                    <option value="">[ Select Employee ]</option>
                                          <?php
                                            foreach($employee_list as $row)
                                            {
                                                echo '<option value="'.$row->ecode  .'">'.$row->ecode.'&nbsp&nbsp&nbsp&nbsp'.$row->full_name.'</option>';
                                            }
                                          ?>
                                    </select>
                                    </center>
                                </div>
                            </div>
                            <div class="col-md-3">
                    		      <div class="row">
                          		    <div class="info-tile tile-orange item" style="background-color:#27ae60;height:156px !important;">
                                      <div class="tile-heading" style="color:white;display:block;"><span>Average Attendance</span><i class="fa fa-bar-chart" style="float:right;" aria-hidden="true"></i></div>
                                      <div class="tile-body" style="color:white;"><span><average class="average">N/A</average>%</span></div>
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active paverage" role="progressbar"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%" >
                                        </div>
                                      </div>
                                      <div class="tile-footer"><span class="text-white"><avgattendance class="avgattendance" style="color:white;">0 percent </avgattendance><i class="fa fa-bar-chart"></i></span></div>
                                	</div>
                            	</div>
                            	<div class="row">
                          		    <div class="info-tile tile-orange item" style="background-color:#3498db;height:156px;">
                                      <div class="tile-heading" style="color:white;display:block;"><span>Schedules Attended</span><i class="fa fa-check-circle-o" style="float:right;" aria-hidden="true"></i></div>
                                      <div class="tile-body" style="color:white;"><span><attended class="attended">N/A</attended></span></div>
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active pattended" role="progressbar"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%" >
                                        </div>
                                      </div>
                                      <div class="tile-footer"><span style="color:white;"><attended2 class="attended2" style="color:white;"></attended2> times <i class="fa fa-check-circle-o"></i></span></div>
                                	</div>
                            	</div>
                              <div class="row">
                              <div class="info-tile tile-orange item" style="background-color:#e74c3c;height:156px;">
                                      <div class="tile-heading" style="color:white;display:block;"><span>Schedules Unattended</span><i class="fa fa-exclamation-triangle" style="float:right;" aria-hidden="true"></i></div>
                                      <div class="tile-body" style="color:white;"><span><unattended class="unattended">N/A</unattended></span></div>
                                      <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active punattended" role="progressbar"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%" >
                                        </div>
                                      </div>
                                      <div class="tile-footer"><span style="color:white;"><unattended2 class="unattended2"></unattended2> times <i class="fa fa-exclamation-triangle"></i></span></div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-5">
                              <div class="info-tile tile-orange item3" style="background-color:#009688;height:531px;">
                                  <div class="tile-heading" style="color:white;display:block;"><span>Period Stats</span><i class="fa fa-clock-o" style="float:right;" aria-hidden="true"></i></div>
                                  <div class="period_stats" style="height:500px;overflow-y:scroll;">
                                    <center><h4 style="font-weight:bold;margin:10px;margin-top:5;margin-bottom:0;color:white;">No Data</h4></center>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div><!-- .container-fluid -->
                </div> <!-- #page-content -->
            </div><!--static content -->

        </div><!--content wrapper -->
    </div><!--static layout -->
</div> <!--wrapper -->




<?php echo $_rights; ?>
<script>
var interval = 1500;
$(document).ready(function(){
    $('#employee_code').select2().on("change", function(e) {
        /*clearinfos();*/
        /*swal.close();*/
            EmployeeStats().done(function(response){

                showNotification(response);
                /*if(response.stat=="error"){
                    $.unblockUI();
                    return;
                }*/
                if(response.stat=="error"){
                    swal({
                          title: response.title,
                          text: response.msg,
                          type: "error",
                          timer: 1000,
                          showConfirmButton: false
                    });
                    defaultvalues();
                      $('.period_stats').html('<center><h4 style="font-weight:bold;margin:10px;margin-top:5;margin-bottom:0;text-center;color:white;">No Data</h4></center>');
                    return;
                }

                if(response.stat=="warning"){
                    swal({
                          title: response.title,
                          text: response.msg,
                          type: "warning",
                          timer: 1000,
                          showConfirmButton: false
                    });

                    defaultvalues();

                    $('#image_name').attr('src',response.employee_list[0].image_name);
                    $('#ecode').text(response.employee_list[0].ecode);
                    $('#fullname').text(response.employee_list[0].full_name );
                    $('#branch').text(response.employee_list[0].branch);
                    $('#department').text(response.employee_list[0].department);
                    $('#position').text(response.employee_list[0].position);


                    $('.period_stats').html('<center><h4 style="font-weight:bold;margin:10px;margin-top:5;margin-bottom:0;text-center;color:white;">No Data</h4></center>');
                    $.unblockUI();
                    var jsoncount=response.period_stats.length-1;

                    if(response.period_stats.length<=0){
                        return;
                    }

                    var period_stats='';
                    var totalpercent=0;
                    var renderedpercent=0;
                    var average=0;

                    var days_attended=0;
                    var avg_attended=0;
                    var days_unattended=0;
                    var days_count=0;
                    var avg_unattended=0;

                        for(var i=0;parseInt(jsoncount)>=i;i++){

                            totalpercent+= 100;
                            renderedpercent+= parseInt(response.period_stats[i].stat_completion);

                            var days_attended_count = (response.period_stats[i].stat_completion > 0 ) ? 1 : 0;
                            days_attended += parseInt(days_attended_count);
                            days_count +=1;
                            //in
                            var time = response.period_stats[i].time_in;
                            var timearray = time.split(" ");
                            var timeString = timearray[1];
                            var time_in = getampm(timeString);
                            //out
                            var time = response.period_stats[i].time_out;
                            var timearray = time.split(" ");
                            var timeString = timearray[1];
                            var time_out = getampm(timeString);

                                period_stats+='<h4 style="margin:10px;margin-top:5;margin-bottom:0;color:white;">'+response.period_stats[i].day+ '<span style="float:right !important;">' +response.period_stats[i].date+'</span></h4>'+
                                        '<p style="margin:10px;margin-top:0;margin-bottom:0;color:white;">'+response.period_stats[i].stat_completion+'%<span style="float:right !important;font-weight:400">'+time_in+'-'+time_out+'</span></p>'+
                                        '<div class="progress" style="margin:10px;margin-top:0;margin-bottom:0;color:white;">'+
                                          '<div class="progress-bar progress-bar-success progress-bar-striped active aemployeeprogress" role="progressbar"'+
                                          'aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color:white;width:'+response.period_stats[i].stat_completion+'%">'+
                                          '</div>'+
                                        '</div><hr>';
                        }
                    average = (renderedpercent/totalpercent)*100;
                    $('.average').text(average.toFixed(2));
                    $('.paverage').css("width",average+"%");
                    $('.avgattendance').text(average.toFixed(2)+" percent ");


                    avg_attended = (days_attended/days_count)*100;
                    $('.attended').text(avg_attended.toFixed(2)+"%");
                    $('.attended2').text(days_attended);
                    $('.pattended').css("width",avg_attended.toFixed(2)+"%");
                    days_unattended = Math.abs(parseInt(days_attended)-parseInt(days_count))
                    avg_unattended = (days_unattended/days_count)*100;
                    $('.unattended').text(avg_unattended.toFixed(2)+"%");
                    $('.punattended').css("width",avg_unattended.toFixed(2)+"%");
                    $('.unattended2').text(days_unattended);


                   /*alert(days_attended);*/

                    $('.period_stats').html(period_stats);

                    /*$('#clock_out').text(response.clock_out);*/

                    return;
                }

                /*if(response.employee_list.length==0){
                    alert();
                    $('#fullname').text("Not Found");
                    $('#image_name').attr('src',"assets/img/anonymous-icon.png");
                    $('#ecode').text("Not Found");
                    $('#fullname').text("Not Found");
                    $('#branch').text("Not Found");
                    $('#department').text("Not Found");
                    $('#position').text("Not Found");
                    $('#clock_in').text("Not Found");
                    $('#clock_out').text("Not Found");
                    $.unblockUI();
                    return;
                }*/
                if(response.stat=="success"){
                    swal({
                          title: response.title,
                          text: response.msg,
                          type: "success",
                          timer: 1000,
                          showConfirmButton: false
                    });
                }
                var jsoncount=response.period_stats.length-1;
                    var period_stats='';
                    var totalpercent=0;
                    var renderedpercent=0;
                    var average=0;

                    var days_attended=0;
                    var avg_attended=0;
                    var days_unattended=0;
                    var days_count=0;
                    var avg_unattended=0;

                        for(var i=0;parseInt(jsoncount)>=i;i++){

                            totalpercent+= 100;
                            renderedpercent+= parseInt(response.period_stats[i].stat_completion);

                            var days_attended_count = (response.period_stats[i].stat_completion > 0 ) ? 1 : 0;
                            days_attended += parseInt(days_attended_count);
                            days_count +=1;
                            //in
                            var time = response.period_stats[i].time_in;
                            var timearray = time.split(" ");
                            var timeString = timearray[1];
                            var time_in = getampm(timeString);
                            //out
                            var time = response.period_stats[i].time_out;
                            var timearray = time.split(" ");
                            var timeString = timearray[1];
                            var time_out = getampm(timeString);

                                period_stats+='<h4 style="margin:10px;margin-top:5;margin-bottom:0;color:white;">'+response.period_stats[i].day+ '<span style="float:right !important;">' +response.period_stats[i].date+'</span></h4>'+
                                        '<p style="margin:10px;margin-top:0;margin-bottom:0;color:white;">'+response.period_stats[i].stat_completion+'%<span style="float:right !important;font-weight:400">'+time_in+'-'+time_out+'</span></p>'+
                                        '<div class="progress" style="margin:10px;margin-top:0;margin-bottom:0;color:white;">'+
                                          '<div class="progress-bar progress-bar-success progress-bar-striped active aemployeeprogress" role="progressbar"'+
                                          'aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="color:white;width:'+response.period_stats[i].stat_completion+'%">'+
                                          '</div>'+
                                        '</div><hr>';
                        }
                    average = (renderedpercent/totalpercent)*100;
                    $('.average').text(average.toFixed(2));
                    $('.paverage').css("width",average+"%");
                    $('.avgattendance').text(average.toFixed(2)+" percent ");


                    avg_attended = (days_attended/days_count)*100;
                    $('.attended').text(avg_attended.toFixed(2)+"%");
                    $('.attended2').text(days_attended);
                    $('.pattended').css("width",avg_attended.toFixed(2)+"%");
                    days_unattended = Math.abs(parseInt(days_attended)-parseInt(days_count))
                    avg_unattended = (days_unattended/days_count)*100;
                    $('.unattended').text(avg_unattended.toFixed(2)+"%");
                    $('.punattended').css("width",avg_unattended.toFixed(2)+"%");
                    $('.unattended2').text(days_unattended);
                    $('.period_stats').html(period_stats);

                $('#image_name').attr('src',response.employee_list[0].image_name);
                $('#ecode').text(response.employee_list[0].ecode);
                $('#fullname').text(response.employee_list[0].full_name );
                $('#branch').text(response.employee_list[0].branch);
                $('#department').text(response.employee_list[0].department);
                $('#position').text(response.employee_list[0].position);
                /*$('#friday').text(response.friday);*/



            }).always(function(){
                $.unblockUI();
            });

    });

    var EmployeeStats=function(){
        //
        var _data=$('#').serializeArray();

        /*console.log(_data);*/
        _data.push({name : "employee_code" ,value : $('#employee_code').val() });
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"SchedEmployee/transaction/schedstats",
            "data":_data,
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

    var showSpinningProgress=function(e){
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Processing</h4>',
            css: {
            border: 'none',
            padding: '15px',
            backgroundColor: 'none',
            opacity: 1,
            zIndex: 20000,
        } });
        $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
    };

    var defaultvalues=function(){
        $('#fullname').text("Not Found");
        $('#image_name').attr('src',"assets/img/anonymous-icon.png");
        $('#ecode').text("Not Found");
        $('#fullname').text("Not Found");
        $('#branch').text("Not Found");
        $('#department').text("Not Found");
        $('#position').text("Not Found");
        $('#clock_in').text("?");
        $('#clock_out').text("?");

        $('.average').text('N/A%');
        $('.paverage').css("width","0%");
        $('.avgattendance').text("0 percent ");


        $('.attended').text('N/A%');
        $('.attended2').text('0');
        $('.pattended').css("width","0%");
        $('.unattended').text('N/A%');
        $('.punattended').css("width","0%");
        $('.unattended2').text("0 ");
    }
    var clearinfos=function(){
        $('#fullname').text("");
        $('#image_name').attr('src',"assets/img/anonymous-icon.png");
        $('#ecode').text("");
        $('#fullname').text("");
        $('#branch').text("");
        $('#department').text("");
        $('#position').text("");
        $('#clock_in').text("?");
        $('#clock_out').text("?");
    };

    var getampm=function(timeString){
        var hourEnd = timeString.indexOf(":");
        var H = +timeString.substr(0, hourEnd);
        var h = H % 12 || 12;
        var ampm = H < 12 ? "AM" : "PM";
        var time = h + timeString.substr(hourEnd, 3) + ampm;
        return time;
    }

    var _employees=$("#employee_code").select2({
            placeholder: "Select Employee",
            allowClear: true
        });

    _employees.select2('val', null);

});

</script>
</body>

</html>
