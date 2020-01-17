<div style="height:450px;">
<table>
	<tr>
		<td style="font-size:18px;">Verification List (Per Department / Branch)</td>
	</tr>
	<tr>
		<td style="font-size:16px;">Department : <?php echo $dept; ?></td>
	</tr>
	<tr>
		<td style="font-size:16px;">Branch : <?php echo $branch; ?></td>
	</tr>
</table>
	<table class="table">
		<thead class="thead-inverse" style="background-color:#2c3e50;color:white;">
			<tr>
				<th style="border:1px solid black;border-right:0px;"></th>
				<th style="border:1px solid black;border-right:0px;"></th>
				<th style="border:1px solid black;text-align:left;border-right:0px;border-left:0px;"></th>
				<th style="border:1px solid black;border-right:0px;border-left:0px;"></th>
				<th style="border:1px solid black;border-right:0px;border-left:0px;"></th>
				<th colspan="2" style="text-align:center;border:1px solid black;">Holidays</th>
				<th colspan="2" style="text-align:center;border:1px solid black;">Sunday Holidays</th>
				<th colspan="2" style="text-align:center;border:1px solid black;">Excused Leave</th>
				<th style="border:1px solid black;"></th>
				<th colspan ="6" style="text-align:center;border:1px solid black;">Overtime</th>
				<th colspan="6" style="text-align:center;border:1px solid black;">Night Shift Differential</th>
			</tr>
			<tr>
				<th style="border:1px solid black;border-right:0px;"></th>
				<th style="border:1px solid black;border-right:0px;"></th>
				<th style="border:1px solid black;text-align:left;border-right:0px;border-left:0px;"></th>
				<th style="border:1px solid black;border-right:0px;border-left:0px;"></th>
				<th style="border:1px solid black;border-right:0px;border-left:0px;"></th>
				<th colspan="1" style="text-align:center;border:1px solid black;border-right:0px"></th>
				<th colspan="1" style="text-align:center;border:1px solid black;border-left:0px"></th>
				<th colspan="1" style="text-align:center;border:1px solid black;border-right:0px"></th>
				<th colspan="1" style="text-align:center;border:1px solid black;border-left:0px"></th>
				<th colspan="1" style="text-align:center;border:1px solid black;border-right:0px"></th>
				<th colspan="1" style=text-align:center;border:1px solid black;border-left:0px"></th>
				<th style="border:1px solid black;"> </th>
				<th colspan ="3" style=text-align:center;border:1px solid black;">Regular</th>
				<th colspan ="3" style="text-align:center;border:1px solid black;">Sunday</th>
				<th colspan ="3" style="text-align:center;border:1px solid black;">Regular</th>
				<th colspan ="3" style="text-align:center;border:1px solid black;">Sunday</th>
			</tr>
			<tr>
				<th style="border:1px solid black;">#</th>
				<th style="border:1px solid black;">E-CODE</th>
				<th style="border:1px solid black;text-align:left;">Name</th>
				<th style="text-align:center;border:1px solid black;">Reg</th>
				<th style="text-align:center;border:1px solid black;">Sun</th>
				<th style="text-align:center;border:1px solid black;">Reg</th>
				<th style="text-align:center;border:1px solid black;">Sun</th>
				<th style="text-align:center;border:1px solid black;">Reg</th>
				<th style="text-align:center;border:1px solid black;">Sun</th>
				<th style="text-align:center;border:1px solid black;">W/Pay</th>
				<th style="text-align:center;border:1px solid black;">WOUT/Pay</th>
				<th style="text-align:center;border:1px solid black;">Minutes Late</th>
				<th style="text-align:center;border:1px solid black;">Reg</th>
				<th style="text-align:center;border:1px solid black;">Sun Hol</th>
				<th style="text-align:center;border:1px solid black;">Spe Hol</th>
				<th style="text-align:center;border:1px solid black;">Reg</th>
				<th style="text-align:center;border:1px solid black;">Sun Hol</th>
				<th style="text-align:center;border:1px solid black;">Spe Hol</th>
				<th style="text-align:center;border:1px solid black;">Reg</th>
				<th style="text-align:center;border:1px solid black;">Sun Hol</th>
				<th style="text-align:center;border:1px solid black;">Spe Hol</th>
				<th style="text-align:center;border:1px solid black;">Reg</th>
				<th style="text-align:center;border:1px solid black;">Sun Hol</th>
				<th style="text-align:center;border:1px solid black;">Spe Hol</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$countresult=0;

			$count=1;
			foreach($dtr_verification_list as $verificationlist){
				?>
			<tr>
				<td style=""><?php echo $count; ?>.</td>
				<td style=""><?php echo $verificationlist->ecode; ?></td>
				<td style=";text-align:left;"><?php echo $verificationlist->full_name ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->reg ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->sun ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->reg_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->spe_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->sun_reg_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->sun_spe_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->days_wout_pay ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->days_with_pay ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->minutes_late ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->ot_reg ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->ot_reg_reg_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->ot_reg_spe_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->ot_sun ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->ot_sun_reg_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->ot_sun_spe_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->nsd_reg ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->nsd_reg_reg_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->nsd_reg_spe_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->nsd_sun ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->nsd_sun_spe_hol ?></td>
				<td style="text-align:center;;"><?php echo $verificationlist->nsd_reg_spe_hol ?></td>
			</tr>
			<?php
			$countresult++;

			$count++;
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
</div>
