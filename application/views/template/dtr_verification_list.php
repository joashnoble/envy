<table>
	<tr>
		<td style="font-family:tahoma;font-size:18px;">Verification List (Per Department / Branch)</td>
	</tr>
	<tr>
		<td style="font-family:tahoma;font-size:16px;">Department : <?php echo $dept; ?></td>
	</tr>
	<tr>
		<td style="font-family:tahoma;font-size:16px;">Branch : <?php echo $branch; ?></td>
	</tr>
</table>
<table class="table" style="width:100%;">
		<thead class="thead-inverse">
			<tr>
				<th style="width:8%;border:1px solid black;border-right:0px;"></th>
				<th style="width:12%;border:1px solid black;text-align:left;border-right:0px;border-left:0px;"></th>
				<th style="width:5%;border:1px solid black;border-right:0px;border-left:0px;"></th>
				<th style="width:5%;border:1px solid black;border-right:0px;border-left:0px;"></th>
				<th colspan="2" style="width:8%;text-align:center;border:1px solid black;">Holidays</th>
				<th colspan="2" style="width:10%;text-align:center;border:1px solid black;">Sunday Holidays</th>
				<th colspan="2" style="width:10%;text-align:center;border:1px solid black;">Excused Leave</th>
				<th style="width:5%;border:1px solid black;"></th>
				<th colspan ="6" style="width:20%;text-align:center;border:1px solid black;">Overtime</th>
				<th colspan="6" style="width:20%;text-align:center;border:1px solid black;">Night Shift Differential</th>
			</tr>
			<tr>
				<th style="width:8%;border:1px solid black;"></th>
				<th style="width:12%;border:1px solid black;text-align:left;"></th>
				<th style="width:5%;border:1px solid black;"></th>
				<th style="width:5%;border:1px solid black;"></th>
				<th colspan="1" style="width:8%;text-align:center;border:1px solid black;"></th>
				<th colspan="1" style="width:8%;text-align:center;border:1px solid black;"></th>
				<th colspan="1" style="width:8%;text-align:center;border:1px solid black;"></th>
				<th colspan="1" style="width:10%;text-align:center;border:1px solid black;"></th>
				<th colspan="1" style="width:10%;text-align:center;border:1px solid black;"></th>
				<th colspan="1" style="width:10%;text-align:center;border:1px solid black;"></th>
				<th style="width:5%;border:1px solid black;"> </th>
				<th colspan ="3" style="width:6%;text-align:center;border:1px solid black;"></th>
				<th colspan ="3" style="width:6%;text-align:center;border:1px solid black;"></th>
				<th colspan ="3" style="width:7%;text-align:center;border:1px solid black;">Regular</th>
				<th colspan ="3" style="width:20%;text-align:center;border:1px solid black;">Sunday</th>
			</tr>
			<tr>
				<th style="width:8%;border:1px solid black;">E-CODE</th>
				<th style="width:12%;border:1px solid black;text-align:left;">Name</th>
				<th style="width:5%;border:1px solid black;">Reg</th>
				<th style="width:5%;border:1px solid black;">Sun</th>
				<th style="width:4%;text-align:center;border:1px solid black;">Reg</th>
				<th style="width:4%;text-align:center;border:1px solid black;">Sun</th>
				<th style="width:5%;text-align:center;border:1px solid black;">Reg</th>
				<th style="width:5%;text-align:center;border:1px solid black;">Sun</th>
				<th style="width:5%;text-align:center;border:1px solid black;">W/Pay</th>
				<th style="width:3%;text-align:center;border:1px solid black;">WOUT/Pay</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Minutes Late</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Reg</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Sun Hol</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Spe Hol</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Reg</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Sun Hol</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Spe Hol</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Reg</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Sun Hol</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Spe Hol</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Reg</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Sun Hol</th>
				<th style="width:3%;text-align:center;border:1px solid black;">Spe Hol</th>
			</tr>
			<tbody>
			<?php 
			$countresult=0;
			foreach($dtr_verification_list as $verificationlist){ 
				?>
			<tr>
				<td style="width:8%;;"><?php echo $verificationlist->ecode ?></td>
				<td style="width:15%;;text-align:left;"><?php echo $verificationlist->full_name ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->reg ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->sun ?></td>
				<td style="width:4%;text-align:center;;"><?php echo $verificationlist->reg_hol ?></td>
				<td style="width:4%;text-align:center;;"><?php echo $verificationlist->spe_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->sun_reg_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->sun_spe_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->days_wout_pay ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->days_with_pay ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->minutes_late ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->ot_reg ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->ot_reg_reg_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->ot_reg_spe_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->ot_sun ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->ot_sun_reg_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->ot_sun_spe_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->nsd_reg ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->nsd_reg_reg_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->nsd_reg_spe_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->nsd_sun ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->nsd_sun_spe_hol ?></td>
				<td style="width:5%;text-align:center;;"><?php echo $verificationlist->nsd_reg_spe_hol ?></td>
			</tr>		
			<?php 
			$countresult++;
			} ?>	
			<tr>
				<td colspan="2" style="font-weight:bold;">Total Records: <?php echo $countresult; ?></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td colspan="3" style="border-top:2px solid #616161;text-align:center;">Prepared By: </td>
				<td></td>
				<td colspan="3" style="border-top:2px solid #616161;text-align:center;">Checked By: </td>
				<td></td>
				<td colspan="3" style="border-top:2px solid #616161;text-align:center;">Verified By: </td>
			</tr>
		</tbody>
	</table>