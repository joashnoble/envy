<style type="text/css">

  @media print {    
    html, body {
      -webkit-print-color-adjust: exact;
    }

  }

  @page {
      size:A4 landscape;
      -webkit-print-color-adjust: exact!important;
  }
</style>
<script src="<?php echo base_url('assets/plugins/barcode/JsBarcode.all.js');?>"></script>
 <script type="text/javascript">
      window.onload = function() {
       window.print();
    window.onfocus=function(){ window.close();}
   }
 </script>
<!-- transform: rotateY(180deg); -->
<div style="width: 100%;transform: rotateY(180deg);-webkit-print-color-adjust: exact!important;">
	<?php if(count($masterlist) > 0){
		foreach($masterlist as $row){
	?>
      <div style="display:inline-block; position: relative;margin-right: 20px!important;margin: auto;">
        <img src="<?php echo base_url('/assets/img/template/front.png'); ?>" style="position: relative;width: 205.44px;height:326.4px;"><br/>
        

    <center>
      <img src="<?php echo base_url($row->image_name);?>" style="width: 114px; height: 111px;  position: absolute;
  top: 18.5%;left: 49.5%;transform: translate(-50%, -50%);border-radius: .5em;"><br/>
        <span style="position: absolute;
  top: 29.8%;left: 50%;transform: translate(-50%, -50%);color: white!important;width: 198px!important;font-size: 12pt;font-weight: bold;font-family: Segoe UI!important;text-transform: uppercase;line-height: 90%!important;"><?php echo $row->employee_name; ?></span><br/>
        <span style="position: absolute;
  top: 33%;left: 50%;transform: translate(-50%, -50%);color: white!important;width: 190px!important;font-size: 10pt;font-weight: bold;font-family: Segoe UI!important;text-transform: uppercase;"><?php echo $row->position;?></span><br/>
        
<span style="position: absolute;
  top: 41.9%;left: 50%;transform: translate(-50%, -50%);font-size: 10px;color: white!important;font-weight: bold;font-family: Segoe UI!important;"> E-CODE : <?php echo $row->ecode; ?> </span>

        <img id="barcode_<?php echo $row->employee_id; ?>" style="position: absolute;
  top: 39%;left: 50%;transform: translate(-50%, -50%);"><br />
        

    </center>
        <script>
          JsBarcode("#barcode_<?php echo $row->employee_id; ?>", <?php echo $row->ecode; ?>, {
            format: "CODE39",
            lineColor: "white",
            background : false,
            width: 1,
            height: 25,
            displayValue: false
          });
        </script>

<img src="<?php echo base_url('/assets/img/template/back.png'); ?>" style="position: relative;width: 205.44px;height:326.4px;border:1px solid gray;margin-top: -60px;"><br/>
  
  <center>

        <span style="position: absolute;
  top: 53%;left: 50%;transform: translate(-50%, -50%);color: white!important;width: 200px!important;font-size: 19pt;font-weight: bold;font-family: Segoe UI!important;text-transform: uppercase;"><?php echo $row->nick_name; ?></span><br/>
        <span style="position: absolute;
  top: 58.7%;left: 50%;transform: translate(-50%, -50%);color: black!important;width: 185px!important;font-size: 6pt;font-weight: 500;font-family: Segoe UI!important;line-height: 90%!important;"><?php echo $row->address_one.' '.$row->address_two;?></span>

        <span style="position: absolute;
  top: 67%;left: 50%;transform: translate(-50%, -50%);color: black!important;width: 200px!important;font-size: 7pt;font-weight: 500;font-family: Segoe UI!important;line-height: 110%!important;">
            
            <center><?php echo $row->ec_name; ?><br />
            <?php echo $row->ec_number; ?></center>

          </span>

        <span style="position: absolute;
  top: 71.4%;left: 25%;transform: translate(-50%, -50%);color: black!important;width: 80px!important;font-size: 7pt;font-weight: 500;font-family: Segoe UI!important;line-height: 100%!important;">
            
            <?php echo $row->sss; ?>

          </span>
        <span style="position: absolute;
  top: 71.4%;left: 73%;transform: translate(-50%, -50%);color: black!important;width: 85px!important;font-size: 7pt;font-weight: 500;font-family: Segoe UI!important;line-height: 100%!important;">
            
            <?php echo $row->tin; ?>

          </span>
                    

        <span style="position: absolute;
  top: 75.5%;left: 24.8%;transform: translate(-50%, -50%);color: black!important;width: 80px!important;font-size: 7pt;font-weight: 500;font-family: Segoe UI!important;line-height: 100%!important;">
            
            <?php echo $row->phil_health; ?>

          </span>
        <span style="position: absolute;
  top: 75.5%;left: 48%;transform: translate(10%, -50%);color: black!important;width: 85px!important;font-size: 7pt;font-weight: 500;font-family: Segoe UI!important;line-height: 100%!important;">
            
            <?php echo date("M d, Y",strtotime($row->birthdate)); ?>
            

          </span>     

  <div style="width: 135px;max-width: 135px;height: 50px; max-height: height: 50px;position: absolute;top: 85%;left: 51%;transform: translate(-50%, -50%);">
    <?php if($row->image_sig != "assets/img/signature/default.png"){?>
      <img src="<?php echo base_url($row->image_sig);?>" style="max-width: 100%;height: 100%;">
    <?php }?>
  </div>

  <div style="width: 135px;height: 25px;position: absolute;top: 91.8%;left: 51%;transform: translate(-50%, -50%);">
    <?php if(count($admin) > 0){
      if($admin[0]->image_sig != "assets/img/signature/default.png"){?>
      <img src="<?php echo base_url($admin[0]->image_sig);?>" style="max-width: 100%;height: 100%;filter: brightness(0) invert(1);">
    <?php }}?> 
  </div>

  <span style="position: absolute;
  top: 94%;left: 50%;transform: translate(-50%, -50%);color: white!important;width: 185px!important;font-size: 6pt;font-weight: bold;font-family: Segoe UI!important;line-height: 90%!important;text-transform: uppercase;"><?php if(count($admin) > 0){ echo $admin[0]->employee_name; } ?></span>

  <span style="position: absolute;
  top: 95.3%;left: 50%;transform: translate(-50%, -50%);color: white!important;width: 185px!important;font-size: 5pt;font-weight: bold;font-family: Segoe UI!important;line-height: 90%!important;text-transform: uppercase;"><?php if(count($admin) > 0){ echo $admin[0]->position; } ?></span>  

</center>

      </div>
	<?php }}else{?>
		No Employee Data Available
	<?php }?>
</div>
