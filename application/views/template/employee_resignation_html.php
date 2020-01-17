<style type="text/css" media="print">
	html{
		font-family: calibri;
		font-size: 11pt;
	}
	.table{
		border-collapse: collapse;
		font-size: 11pt;
	}
	.table td{
		padding: 4px;
		border: 1px solid gray;
		font-size: 11pt;
	}
	fieldset { border:1px solid black; margin-top: 15px; }

	legend {
	  padding: 0.2em 0.5em;
	  border:1px solid black;
	  color:black;
	  font-size:90%;
	  text-align:left;
	  font-weight: 600;
	  background: #CFD8DC!important;
	  }	

	.radio {
	    opacity: 1!important;
	    filter: alpha(opacity=100); /* For IE8 and earlier */
	}	  
	hr{
		border-bottom: 1px solid #FAFAFA;
	}
	.emp_info{
		border: 1px solid black;
		padding: 5px;
	}

</style>
 <script type="text/javascript">
      window.onload = function() {
       window.print();
		window.onfocus=function(){ window.close();}
   }
 </script>
<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>
			Resignation Form
		</strong>
		<hr>
	</div>
<?php foreach ($employee as $row) { ?>
<fieldset>
	<legend>Employee Information</legend>
	<table class="table" style="width:100%;">
		<tr>
			<td width="20%">Employee Name :</td>
			<td><?php echo $row->full_name; ?> </span> </td>
			<td>Code :</td>
			<td><?php echo $row->ecode; ?></td>
			<td>Department :</td>
			<td><?php echo $row->department; ?></td>
		</tr>
		<tr>
			<td>Position :</td>
			<td><?php echo $row->position; ?></td>
			<td>Date Hired :</td>
			<td colspan="3"><?php echo $row->employment_date; ?></td>
		</tr>
	</table>
</fieldset>
<?php } ?>
<?php foreach ($resignation as $row) { ?>
<div>
	<fieldset>
		<legend>Reason of Leave</legend>
		<?php echo $row->reason_of_leave; ?>
	</fieldset>
	<fieldset>
		<legend>Approval &amp; Effectivity Date</legend>
		
		<table class="table" width="100%">
			<tr>
				<td width="20%">Effectivity Date :</b></td>
				<td>
					<?php if($row->effectivity_date == ""){
						echo "N/A";
					}else{
						echo $row->effectivity_date;
					} ?>
				</td>
			</tr>
			<tr>
				<td>Aproved By :</b> </td>
				<td><?php echo $row->emp_aprrv_fullname; ?></td>
			</tr>
			<tr>
				<td>Final Approval :</b> </td>
				<td>
					<?php if ($row->final_approve == ""){
						echo "N/A";
					}else{
						echo $row->final_approve;
					} ?> 
				</td>
			</tr>
			<tr>
				<td>Clearance : </b></td>
				<td>
					<?php 
					if ($row->is_cleared == 1){ 
						echo '<input type="radio" name="is_cleared" class="radio form-control" checked><label>Cleared</label>';
						echo '<input type="radio" name="is_cleared" class="radio form-control" disabled><label>Uncleared</label>';
					}else{
						echo '<input type="radio" name="is_cleared" disabled class="radio form-control"><label>Cleared</label>';
						echo '<input type="radio" name="is_cleared" class="radio form-control" checked><label>Uncleared</label>';
					} ?>
				</td>
			</tr>
		</table>

	</fieldset>
	<fieldset>
		<legend>Note : </legend>
		<?php 

		if ($row->resignation_note == ""){
			echo "N/A";
		}else{
			echo $row->resignation_note;
		}
		?>
	</fieldset>
</div>
<?php } ?>
</div>
