<!DOCTYPE html>
<html lang="en">
<?php echo $loader; ?>
<head>
    <meta charset="utf-8">
    <title>JCORE HRIS </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="">

    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->


    <link type="text/css" href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">                         <!-- FullCalendar -->
    <link type="text/css" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">            <!-- jVectorMap -->
    <link type="text/css" href="assets/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="assets/plugins/notify/pnotify.core.css" rel="stylesheet"> <!-- notification -->
    <link href="assets/css/fonts.css" rel="stylesheet"> <!-- fontcustom -->
    <?php echo $_def_js_files; ?>

   <?php echo $_switcher_settings; ?>


<script>
        $('.date-picker').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true

        });
</script>
<?php echo $loaderscript; ?>
<style>
    .demo-options{
    top:50px !important;
    }
    .datepicker{z-index:9999 !important}
    .panel-heading{
    background-color:#2c3e50 !important;

    }
    .panel-heading h2{
    color:white !important;


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
    html {
      zoom: 90%;
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
    width:50px;
    height:50px;
    border-radius:50%;
    }
    .sm-text{
    font-size:8pt;
    }
    .item{
    max-width: 100%;

    -moz-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    }
    .item:hover{
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    }

</style>

</head>

<body class="animated-content">

<?php echo $_top_navigation; ?>

<div id="wrapper">
        <div id="layout-static">


        <?php echo $_side_bar_navigation; ?>


        <div class="static-content-wrapper">
            <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb" style="margin-bottom:0 !important;padding-bottom:0 !important;">
                                <li class=""><a href="index-2.html">Home</a></li>
                                <li class="active"><a href="index-2.html">Dashboard</a></li>
                            </ol>
                            <div class="container-fluid" style="margin:20px;margin-top:0;">
                                <h3 style="font-weight:bold;">Dashboard</h3>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="info-tile tile-orange item" style="background-color:#0191da;box-shadow: 2px 2px 30px black;">
                                            <div class="tile-heading" style="color:white;display:block;"><span>Active Employees</span><i class="fa fa-area-chart" style="float:right;" aria-hidden="true"></i></div>
                                            <div class="tile-body" style="color:white;"><span><activepercentage class="activepercentage"><?php echo $active_percentage; ?></activepercentage>%</span></div>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success progress-bar-striped active aemployeeprogress" role="progressbar"
                                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $active_percentage; ?>%">
                                              </div>
                                            </div>
                                            <div class="tile-footer"><span class="text-white"><?php echo $active_count; ?> Employee/s <i class="fa fa-users"></i></span></div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="info-tile tile-orange item" style="background-color:#0ba599;box-shadow: 2px 2px 30px black;">
                                            <div class="tile-heading" style="color:white;display:block;"><span>Retired Employees</span><i class="fa fa-area-chart" style="float:right;" aria-hidden="true"></i></div>
                                            <div class="tile-body" style="color:white;"><span><retiredpercentage class="retiredpercentage"><?php echo $retired_percentage; ?></retiredpercentage>%</span></div>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success progress-bar-striped active iemployeeprogress" role="progressbar"
                                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $retired_percentage; ?>%">
                                              </div>
                                            </div>
                                            <div class="tile-footer"><span class="text-white"><retiredcount class="retiredcount"><?php echo $retired_count; ?></retiredcount> Employee/s <i class="fa fa-users"></i></span></div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="info-tile tile-orange item" style="background-color:#f35b5a;box-shadow: 2px 2px 30px black;">
                                            <div class="tile-heading" style="color:white;display:block;"><span>Online Users</span><i class="fa fa-users" style="float:right;" aria-hidden="true"></i></div>
                                            <div class="tile-body" style="color:white;"><span><percentonlineusers class="percentonlineusers"><?php echo $percent_online_users; ?></percentonlineusers>%</span></div>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success progress-bar-striped active onlineusersprogress" role="progressbar"
                                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent_online_users; ?>%" >
                                              </div>
                                            </div>
                                            <div class="tile-footer"><span class="text-white"><onlineusers class="onlineusers"><?php echo $online_users; ?></onlineusers> User/s <i class="fa fa-users"></i></span></div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="info-tile tile-orange item" style="background-color:#745f86;box-shadow: 2px 2px 30px black;">
                                            <div class="tile-heading" style="color:white;display:block;"><span>Offline Users</span><i class="fa fa-users" style="float:right;" aria-hidden="true"></i></div>
                                            <div class="tile-body" style="color:white;"><span><percentofflineusers class="percentofflineusers"><?php echo $percent_offline_users; ?></percentofflineusers>%</span></div>
                                            <div class="progress">
                                              <div class="progress-bar progress-bar-success progress-bar-striped active offlineusersprogress" role="progressbar"
                                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $percent_offline_users; ?>%">
                                              </div>
                                            </div>
                                            <div class="tile-footer"><span class="text-white"><offlineusers class="offlineusers"><?php echo $offline_users; ?></offlineusers> User/s <i class="fa fa-users"></i></span></div>
                                        </div>

                                    </div>
                                </div>

                                <div data-widget-group="group1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel panel-default" data-widget='{"draggable": "false"}' style="box-shadow: 2px 2px 30px black;">
                                                <div class="panel-heading">
                                                    <h2>Chats</h2>
                                                    <div class="panel-ctrls button-icon-bg refresh"
                                                        data-actions-container=""
                                                        data-action-refresh-demo='{"type": "circular"}'
                                                        >
                                                    </div>
                                                </div>
                                                <div class="panel-body body-online" style="overflow-y:scroll;height:230px;">

                                                    <table class="table browsers m-n" id="tbl_chats">
                                                        <tbody class="chat_content">

                                                            <?php
                                                                /*$count=0;*/
                                                            foreach($wall_post as $row){
                                                                /*$count++;*/
                                                            ?>
                                                                <tr>
                                                                    <td style="width:10%;vertical-align:top;">
                                                                        <img class="tooltips imguser" data-toggle="tooltip" title="<?php echo $row->full_name;?>" src="<?php echo $row->photo_path;?>" alt=""/>
                                                                    </td>
                                                                    <td style="width:70%;"><?php echo $row->post_content;?></td>
                                                                    <td style="width:20%;" class="text-right sm-text"><?php echo $row->readable; ?></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            echo '<script> chatcounts='.$count[0]->count.'; </script>';
                                                            ?>
                                                            <tr>
                                                                <td colspan="3" style="vertical-align:top;">
                                                                    Show More
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="panel-footer">
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
                                        <div class="col-md-3">
                                            <div class="panel panel-default" data-widget='{"draggable": "false"}' style="box-shadow: 2px 2px 30px black;">
                                                <div class="panel-heading">
                                                    <h2>Online</h2>
                                                    <div class="panel-ctrls button-icon-bg refresh"
                                                        data-actions-container=""
                                                        data-action-refresh-demo='{"type": "circular"}'
                                                        >
                                                    </div>
                                                </div>
                                                <div class="panel-body body-online" style="overflow-y:scroll;height:300px;">
                                                    <ul class="widget-avatar online_users_box" style="padding:10px;padding-left:22px;">
                                                        <?php foreach($online_users_box as $row){
                                                        ?>
                                                        <li class="tooltips" data-status="online" data-toggle="tooltip" title="<?php echo $row->full_name; ?>"><img src="<?php echo $row->photo_path; ?>" alt=""/></li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="panel panel-default" data-status="busy" data-widget='{"draggable": "false"}' style="height:350px;box-shadow: 2px 2px 30px black;">
                                                <div class="panel-heading">
                                                    <h2>Offline</h2>
                                                    <div class="panel-ctrls button-icon-bg refresh"
                                                        data-actions-container=""
                                                        data-action-refresh-demo='{"type": "circular"}'
                                                        >
                                                    </div>
                                                </div>
                                                <div class="panel-body body-online" style="overflow-y:scroll;height:300px;">
                                                    <ul class="widget-avatar offline_users_box" style="padding:10px;padding-left:22px;">
                                                        <?php foreach($offline_users_box as $row){
                                                        ?>
                                                        <li class="tooltips" data-status="busy" data-toggle="tooltip" title="<?php echo $row->full_name; ?>"><img src="<?php echo $row->photo_path; ?>" alt=""/></li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
        </div>
        </div>


</div>






</body>
<?php echo $_rights; ?>
<script type="text/javascript">
    $("body").tooltip({
    selector: '.tooltips'
});

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
                        for(var i=0;parseInt(jsoncount)>=i;i++){
                                showonline+='<li class="tooltips" data-status="online" data-toggle="tooltip" title='+response.online_users_box[i].full_name+'><img src='+response.online_users_box[i].photo_path+'>" alt=""/></li>';
                        }
                        for(var j=0;parseInt(jsoncountoff)>=j;j++){
                                showoffline+='<li class="tooltips" data-status="busy" data-toggle="tooltip" title='+response.offline_users_box[j].full_name+'><img src='+response.offline_users_box[j].photo_path+'>" alt=""/></li>';
                        }
                        for(var w=0;parseInt(jsoncountwallpost)>=w;w++){
                                showchats+='<tr>'+
                                                '<td style="width:10%;vertical-align:top;">'+
                                                    '<img class="tooltips imguser" data-toggle="tooltip" title='+response.wall_post[w].full_name+' src='+response.wall_post[w].photo_path+' alt=""/>'+
                                                '</td>'+
                                                '<td style="width:70%;">'+response.wall_post[w].post_content+'</td>'+
                                                '<td style="width:20%;"class="text-right sm-text">'+response.wall_post[w].readable+'</td>'+
                                            '</tr>';
                        }
            if(chatcounts<response.count[0].count){
                chatcounts=response.count[0].count;
                audio.play();
            }
            else{

            }
            showchats+='<tr>'+
                                '<td colspan="3" style="vertical-align:top;text-align:center;">'+
                                    '<a id="showmorechat">Show More</a>'+
                                '</td>'+
                            '</tr>';
            $('.online_users_box').html(showonline);
            $('.offline_users_box').html(showoffline);
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

    $('#tbl_chats tbody').on('click','#showmorechat',function(){
        chatamount+=20;
        $('#showmorechat').html('<i class="fa fa-spinner fa-spin fa-3x fa-fw" style="font-size:12pt;"></i>');
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

</script>

</html>
