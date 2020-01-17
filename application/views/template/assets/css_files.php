<link rel="icon" href="assets/img/favicon.png" type="image/gif" sizes="16x16">
<link type="text/css" href="assets/css/bootstrap.css" rel="stylesheet">
<link type="text/css" href="assets/css/animate.css" rel="stylesheet">
<link type="text/css" href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

<link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
<link type="text/css" href="assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
<link type="text/css" href="assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

<link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
<link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->


<link href="assets/plugins/notify/pnotify.core.css" rel="stylesheet"> <!-- notification -->
<link href="assets/css/pace.css" rel="stylesheet"> <!-- pace -->

<link href="assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet"> <!-- sweetalert -->
<style>
	.select2-dropdown{ z-index:1060 !important; }
	.demo-options{
		top:50px !important;
	}
	.datepicker{z-index:9999 !important}
	.panel-heading{
		background-color:#263238 !important;

	}
	.panel-heading h2{
		color:white !important;
		border-radius:10px;
	}
	.panel-default{
		border-radius:5px;
		border-bottom:2px solid #2c3e50 !important;
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
    .table-responsive{
    	overflow-x:initial;
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
		/**padding:0px;**/
	}
	.panel-body{
		padding:0px !important;
	}

	::-webkit-scrollbar {
    width: 8px;
    height:9px;
	}

	::-webkit-scrollbar-track {
	    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	    border-radius: 5px;
	}

	::-webkit-scrollbar-thumb {
		background: #7f8c8d;
	    border-radius: 5px;
	    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
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
        color:white;
    }
    .btnactivate{
        background-color: #FF9800 !important;
        color:white;
    }
    .btnactivate{
        background-color: #FF9800 !important;
        color:white;
    }    
    .btnemail{
        background-color: #00ACC1 !important;
        color:white;
    }    
	#topnav .navbar-brand {
    width: 120px;
	}

	.modal-backdrop {
	  position: fixed;
	  top: 0;
	  right: 0;
	  bottom: 0;
	  left: 0;
	  z-index: @zindex-modal-background;
	  background-color: @modal-backdrop-bg;
	  // Fade for backdrop
	  &.fade { .opacity(0); }
	  &.in { .opacity(@modal-backdrop-opacity); }
	}
	html {
	  zoom: 90%;
	}
	.form-control, textarea{
		border: 1px solid #B0BEC5;
	}
	.form-control:focus, textarea.form-control:focus {
		background: #FFFDE7;
		border: 1px solid #FFB74D;
	}
	textarea.form-control{
		transition: all 0.5s ease;
		max-width: 100%;
		max-height: 100%;
		resize: vertical;
		min-height: 50%;
	}
	input[type="checkbox"]:focus {
		transition: all 0.5s ease;
		outline:5px solid #616161 !important;
	}
    .select2{
    	border-radius: 0px !important;
    	width: 100% !important;
    }
	.select2-dropdown--above {
	    border: 1px solid blue !important;;
	    border-bottom: none !important;	 
	}

	[class^='select2'] {
	  border-radius: 0px !important;
	}

	.btn{
		transition: all 0.5s ease;
	}
	.btn:hover{
		box-shadow: 2px 2px 10px black;
	}
	.schedsetting{
		cursor:pointer;
		transition: all 0.5s ease;

	}
	.schedsetting:hover{
		transition: all 0.5s ease;
		color:black;
		box-shadow: 1px 1px 15px black !important;
	}
	.static-sidebar{
		-webkit-transition: width 0.5s, height 0.5s; /* For Safari 3.1 to 6.0 */
	transition: width 0.5s, height 0.5s;
	}
	.icon-bg{
		-webkit-transition: width 0.5s, height 0.5s; /* For Safari 3.1 to 6.0 */
	transition: width 0.5s, height 0.5s, transform 0.5s;
	}
	.icon-bg:hover{
		transform: rotate(360deg);
	}
	.sidebar nav.widget-body > ul.acc-menu li, .sidebar nav.widget-body > ul.acc-menu li a{
		transition: all 0.5s ease;
	}
	.username{
		transition: all 0.5s ease;
	}
	.useremail{
		transition: all 0.5s ease;
	}
	.odd{
		transition: all 0.3s ease-out;
	}
	.even{
		transition: all 0.3s ease-out;
	}.ui-pnotify-text{
		font-weight:bold;
		font-size:10pt !important;
	}
	.reports {
	  width: 95%;
	  height: 95%;
	  margin-top: 10px;
	  padding: 0;
	}

	.report-content {
		height: auto;
		min-height: 95%;
		border-radius: 0;
	}
	.modal-header{
  		cursor:move;
	}
	.delete{
		width:40px;background-color:#e74c3c;color:white;
	}
	.add{
		width:40px;background-color:#2ecc71 !important;color:white;"
	}
	.name{
		width:120;background-color:#3498db;color:white;
	}
	.active-panel{
		float: right;
		padding-left: 10px;
		padding-right: 10px;
		padding-top: 0px !important;
		padding-bottom: 0px !important;
		color: #FFF;
		margin-right: -50px !important;
		margin-top: -7px;
	}
	#cbInactive{
		margin-left: 10px !important;
	}
	.checkboxThree > input[type=checkbox] {
	    visibility: hidden;
	}
	.checkboxThree {
		width: 75px;
		height: 25px;
		background: #FFF;
		margin: 20px 60px;
		border-radius: 20px;
		position: relative;
		border: 0.5px solid #FFF;
	}

	.checkboxThree:before {
		content: 'ON';
		position: absolute;
		top: -12px;
		left: 13px;
		height: 2px;
		color: #26ca28;
		font-size: 13px;
		font-weight: bold;
	}
	.checkboxThree:after {
		content: 'OFF';
		position: absolute;
		top: -12px;
		left: 40px;
		height: 2px;
		color: red;
		font-size: 13px;
		font-weight: bold;
	}
	.checkboxThree label {
		display: block;
		width: 30px;
		height: 20px;
		border-radius: 50px;
		transition: all .5s ease;
		cursor: pointer;
		position: absolute;
		top: 3px;
		z-index: 1;
		left: 5px;
		background: #607D8B;
	}

	.checkboxThree input[type=checkbox]:checked + label {
		left: 37px;
		background: #26ca28;
	}
	.cbActive-Title{
		position: relative;
		top: -13px;
		font-size: 14px;
		left: -65px;
	}
	.cbInactive-Title{
		position: relative;
		top: -13px;
		font-size: 14px;
		left: -75px;
	}
	.chckbx-active-panel{
		margin-left: -100px;margin-top: 10px !important; position: relative;
	}
	.chckbx-inactive-panel{
		margin-top: -45px;position: relative;
	}
	.chckbxInactive{
		margin-left: 110px;
	}

	#emp-tbl-title{
		color:white;font-weight:bold;
	}
	.emp-panel-header{
		background-color:#263238 !important;margin-top:1px;
	}
	@media screen and (max-width: 420px){
		.active-panel{
			margin-top: 20px;
		}
		.emp-panel-header{
			text-align: center !important;
		}
	}
	.btn-add-announcement{
		float: right;
		margin-top: 8px;
		color: #ECEFF1 !important;
		border-radius: 1em;
		background: none !important;
	}
	.btn-add-announcement:hover{
		background: #ECEFF1 !important;
		color: #455A64 !important;
	}

	button[name^="edit_info"],button[name^="remove_info"],button[name^="activate_employee"]{
		padding: 5px!important;
		font-size: 15px!important;
		margin-right: 3px;
	}
	button[name^="email_info"]{
		padding: 5px!important;
		font-size: 15px!important;
		margin-right: 5px;
	}
	.temp_header{
		padding: 10px;
	}
    .tbl-header{
        background-color: #222d32;
        color:white;
    }

        .schedhr{
            margin-top: 15px;margin-bottom: 15px;
        }
        .scw{
            background: #CFD8DC;overflow: hidden!important;
        }
        .sc{
            margin-bottom: 0px;padding-bottom: 0px;
        }
        .cf{
            margin:10px;margin-top:30px;
        }
        .mtop{
            background-color:#CFD8DC;height:200px;margin-top: -5px;
        }
        .dt{
            background-color:#2196F3;height:200px;
        }
        .th{
            color:black;display:block;margin-top: -5px;margin-left: 20px;
        }
        .dtheader{color:#FFF;text-shadow: 2px 2px 4px #000000;font-weight: 500;float: right;margin-right: 70px;font-size: 16pt;}
        .clock{color: #B2EBF2;font-size: 90pt;margin-top: 20px;margin-left:20px;text-shadow: 2px 2px 4px #000000;}
        .cdt{
            color:#FFF;font-size: 85pt;margin-left: -50px;margin-top: -15px;text-shadow: 2px 2px 4px #000000;
        }
        .tito{
            background: black;border-bottom-left-radius: 1em;border-bottom-right-radius: 1em;-webkit-box-shadow: 0px 5px 10px 0px rgba(255,255,255,1);-moz-box-shadow: 0px 5px 10px 0px rgba(255,255,255,1);box-shadow: 0px 5px 10px 0px rgba(255,255,255,1);
        }
        .h1tr{
            text-align:center;font-size:80pt !important;height:110px;font-weight: 400;color:black;text-shadow: 0 1px 0 rgba(255, 255, 255, 0.4);
        }
        #inout{
            font-size:18pt !important;font-weight:bold;position:relative;top:15px;color:#27ae60;
        }
        .emp_charts{
            background-color:#ECEFF1;height:auto;padding-top: 20px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;margin-top: -5px;
        }
        .emp_details{
            background-color:#FFF;height:auto;margin-top: 2px;padding: 0px!important;padding-top: 5px!important;padding-bottom: 5px!important;
        }
        .aattendance{
            background-color:#FFF;height:80px !important;
        }
        .thaa{
            color:black!important;display:block;
        }
        .sattended{
            background-color:#FFF;height:80px;margin-top: -20px;
        }
        .tbattended{
            color:black!important;margin-top: -40px;
        }
        .adetails{
            font-size: 18pt;
        }
        .progress{
            margin-top: -10px;
        }
        .progress-bar{
            width:0%;
        }
        .btitle{
            font-weight: 500;
        }
        .empproscan{
            background-color:#FAFAFA;height:auto;
        }
        .dtep{
            background: #a1a1a1;border-bottom-left-radius: 1em;border-bottom-right-radius: 1em;-webkit-box-shadow: 0px 5px 10px 0px rgba(255,255,255,1);-moz-box-shadow: 0px 5px 10px 0px rgba(255,255,255,1);box-shadow: 0px 5px 10px 0px rgba(255,255,255,1);margin-left: 10px!important;margin-top: -10px;
        }
        #image_name{
            margin-top:4px;width:490px;height:490px;margin:20px;border-radius: 50%;object-fit: cover;
        }
        .scanpanel{
            background-color:#FAFAFA;height:auto;margin-top: 10px;padding:20px;margin-bottom: 30px;padding-bottom: 35px;
        }
        .scanpanel-title{
            font-weight:bold;text-align:center !important;color:black; text-shadow: 0 1px 0 rgba(255, 255, 255, 0.4);
        }
        #employee_code{width:100%;font-size: 20pt;padding: 30px!important;font-weight: bold;color:black;}
        .mdpin{
            top: 25%;border:5px solid #37474F;
        }
        .mhpin{
            border-bottom: 1px solid #CFD8DC;background: #37474F;
        }
        .mtpin{
            color: #FFF;
        }
        .mbpin{
            background: #37474F;padding-bottom: 0px;margin-bottom: 0px;
        }
        .mfpin{
            background: #37474F;border-top: 1px solid #37474F;
        }
        .enter{
            width: 48%;background: #388E3C!important;font-weight: 500!important;
        }
        .cancel{
            width: 48%;font-weight: 500!important;
        }
        .result{
        	float: right;margin-right: 5px;
        }
	</style>
