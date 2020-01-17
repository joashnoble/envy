<!DOCTYPE html>
<html>
<head>
	<title>ERROR 404</title>
	<style type="text/css">
		* {
		  margin:0px auto;
		  padding: 0px;
		text-align:center;
		}
		body {
		  background-color: #F8F8F8;
		}
		.cont_principal {
		position: absolute;  
		  width: 100%;
		  height: 100%;
		overflow: hidden;
		}
		.cont_error {
		position: absolute;
		  width: 100%;
		  height: 300px;
		  top: 50%;
		  margin-top:-150px;
		}

		.cont_error > h1  {
		position: relative;
		left:-100%;
		transition: all 0.5s;

  font: bold 200px 'Lato', sans-serif;
		font-weight: 400;
  background-color: #565656;
  color: transparent;
  text-shadow: 2px 2px 3px rgba(255,255,255,0.5);
  -webkit-background-clip: text;
     -moz-background-clip: text;
          background-clip: text;

		}


		.cont_error > p  {
		 font-family: 'Lato', sans-serif;  
		font-weight: 300;
		  font-size:24px;
		  letter-spacing: 5px;
		color:#353535;
		position: relative;
		left:100%;
		transition: all 0.5s;
		    transition-delay: 0.5s;
		-webkit-transition: all 0.5s;
		 -webkit-transition-delay: 0.5s;
		}

		.cont_aura_1 {
		  position:absolute;
		  width:300px;
		  height: 120%;
		top:25px;
		right: -340px;
		  background-color: #0cbf69;
		box-shadow: 0px 0px 60px 20px rgba(154, 218, 200, 0.5);
		-webkit-transition: all 0.5s;
		  transition: all 0.5s;
		}

		.cont_aura_2 {
		  position:absolute;
		  width:100%;
		  height: 300px;
		right:-10%;
		bottom:-301px;
		 background-color: #757575;
		box-shadow: 0px 0px 60px 10px rgba(191, 184, 210, 0.5), 0px 0px 20px 0px rgba(0,0,0,0.1);
		  z-index:5;
		transition: all 0.5s;
		-webkit-transition: all 0.5s;
		}

		.cont_error_active > .cont_error > h1 {
		  left:0%;
		}
		.cont_error_active > .cont_error > p {
		  left:0%;
		}

		.cont_error_active > .cont_aura_2 {
		    animation-name: animation_error_2;
		    animation-duration: 4s;
		  animation-timing-function: linear;
		    animation-iteration-count: infinite;
		    animation-direction: alternate;
		transform: rotate(-20deg);    
		}
		.cont_error_active > .cont_aura_1 {
		 transform: rotate(20deg);
		  right:-170px;
		    animation-name: animation_error_1;
		    animation-duration: 4s;
		  animation-timing-function: linear;
		    animation-iteration-count: infinite;
		    animation-direction: alternate;
		}

		@-webkit-keyframes animation_error_1 {
		  from {
		    -webkit-transform: rotate(20deg);
		  transform: rotate(20deg);
		  }
		  to {  -webkit-transform: rotate(25deg);
		  transform: rotate(25deg);
		  }
		}
		@-o-keyframes animation_error_1 {
		  from {
		    -webkit-transform: rotate(20deg);
		  transform: rotate(20deg);
		  }
		  to {  -webkit-transform: rotate(25deg);
		  transform: rotate(25deg);
		  }

		}
		@-moz-keyframes animation_error_1 {
		  from {
		    -webkit-transform: rotate(20deg);
		  transform: rotate(20deg);
		  }
		  to {  -webkit-transform: rotate(25deg);
		  transform: rotate(25deg);
		  }

		}
		@keyframes animation_error_1 {
		  from {
		    -webkit-transform: rotate(20deg);
		  transform: rotate(20deg);
		  }
		  to {  -webkit-transform: rotate(25deg);
		  transform: rotate(25deg);
		  }
		}




		@-webkit-keyframes animation_error_2 {
		  from { -webkit-transform: rotate(-15deg); 
		  transform: rotate(-15deg);
		  }
		  to { -webkit-transform: rotate(-20deg);
		  transform: rotate(-20deg);
		  }
		}
		@-o-keyframes animation_error_2 {
		  from { -webkit-transform: rotate(-15deg); 
		  transform: rotate(-15deg);
		  }
		  to { -webkit-transform: rotate(-20deg);
		  transform: rotate(-20deg);
		  }
		}
		}
		@-moz-keyframes animation_error_2 {
		  from { -webkit-transform: rotate(-15deg); 
		  transform: rotate(-15deg);
		  }
		  to { -webkit-transform: rotate(-20deg);
		  transform: rotate(-20deg);
		  }
		}
		@keyframes animation_error_2 {
		  from { -webkit-transform: rotate(-15deg); 
		  transform: rotate(-15deg);
		  }
		  to { -webkit-transform: rotate(-20deg);
		  transform: rotate(-20deg);
		  }
		}

		.button{
			background: #0dbf6a;
			color: #FFF;
			padding: 10px;
			border-radius: 5px;
			text-decoration: none;
		}

	</style>
</head>
<body>
	<div class="cont_principal">

		<div class="cont_error">
		  
		<h1 style="font-size: 60pt;">! 404 | Page Not Found</h1>  
		  <p>The Page you're looking for isn't here. <br /><br/>
		  <a href="<?php echo base_url('Dashboard'); ?>" type="button" class="button">HOME</a>

		</p>
		 </div>
		<div class="cont_aura_1"></div>
		<div class="cont_aura_2"></div>
	</div>
	<script type="text/javascript">
		
			window.onload = function(){
				document.querySelector('.cont_principal').className= "cont_principal cont_error_active";  
			}

	</script>
</body>
</html>