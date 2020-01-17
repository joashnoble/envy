<style>
.tdstlye {
	border-bottom: .5px solid lightgray !important;
	padding-bottom: 5px !important;
	padding-top: 5px !important;
}
</style>
<div style="margin: 20px;">
	<?php include 'template_header.php';?>
	<p style="margin-bottom: 2; font-size: 10pt;"><strong>
		Employee Actual Time In/Out
	</strong></p>
	<div style="font-size: 10pt;">
		<table>
			<tr>
				<td><strong>Employee Name :</strong></td>
				<td style="width: 20px; max-width: 20px;"></td>
				<td><?php echo $emp_info[0]->full_name; ?></td>
			</tr>
			<tr>
				<td><strong>Ecode : </strong></td>
				<td></td>
				<td><?php echo $emp_info[0]->ecode; ?></td>
			</tr>
			<tr>
				<td><strong>Branch:</strong> </td>
				<td></td>
				<td></strong> <?php echo $emp_info[0]->branch; ?></td>
			</tr>
			<tr>
				<td><strong>Department:</strong> </td>
				<td></td>
				<td><?php echo $emp_info[0]->department; ?></td>
			</tr>
			<tr>
				<td><strong>Period:</strong> </td>
				<td></td>
				<td><?php echo $payperiod[0]->pay_period; ?></td>
			</tr>
		</table>
	</div>
	<hr><br />
		<table class="table" style="width:100%; font-size: 12pt;">
			<thead class="thead-inverse">
				<tr>
					<th>Date</th>
					<th>Day</th>
					<th><center>Shift</center></th>
					<th><center>Time In</center></th>
					<th><center>Time Out</center></th>
					<th><center>Late (Mins)</center></th>
				</tr>
			</thead>
			<tbody>
					<?php
					$totallate = 0;
					if (count($emp_sched_report) == 0){?>
						<td colspan="9"><center><strong>No Record(s)</strong></center></td>
					<?php } else foreach($emp_sched_report as $row) {
						if ($row->perlate > 0){
							$totallate += $row->perlate;
						}
					?>
				<tr>
					<td class="tdstlye"><?php echo $row->date; ?></td>
					<td class="tdstlye"><?php echo $row->day; ?></td>
					<td class="tdstlye"><center><?php echo $row->shift; ?></center></td>

					<td class="tdstlye"><center><?php echo ($row->clock_in != "") ? date("H:i", strtotime($row->clock_in)) : '00:00'; ?></center></td>
					<td class="tdstlye"><center><?php echo ($row->clock_out != "") ? date("H:i ", strtotime($row->clock_out)) : '00:00'; ?></center></td>
					<td class="tdstlye"><center>
						<?php
							if ($row->perlate > 0){
								echo $row->perlate;
							}else{
								echo '0';
							}
						?>
						</center>
					</td>
				</tr>
			<?php } ?>
			<?php if (count($emp_sched_report) != 0){?>
				<tr>
					<td colspan="4"></td>
					<td style="text-align: right;"><center><strong>Total:</strong> </center></td>
					<td style="font-weight:bold;color:#27ae60 !important;"><center><?php echo $totallate; ?></center></td>
					<td></td>
				</tr>
			<?php } ?>
			</tbody>
	</table>
</div>
