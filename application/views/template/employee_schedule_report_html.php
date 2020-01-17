<style>
.tdstlye {
	border-bottom: .5px solid lightgray !important;
	padding-bottom: 5px !important;
	padding-top: 5px !important;
}
</style>
<div style="margin: 20px;">
	<?php include 'template_header.php';?>
	<p style="margin-bottom: 2; font-size: 12pt;"><strong>
		Employee Schedule Detailed Report
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
		<table class="table" style="width:100%;">
			<thead class="thead-inverse">
				<tr>
					<th style="width: 70px; max-width: 70px; font-size: 10pt;">Day</th>
					<th style="width: 130px; max-width: 130px;">Date</th>
					<th style="width: 150px; max-width: 150px;"><center>Shift</center></th>
					<th style="width: 80px; max-width: 80px;"><center>Time Allowance</center></th>
					<th style="width: 130px; max-width: 130px;"><center>Schedule Time In</center></th>
					<th style="width: 130px; max-width: 130px;"><center>Schedule Time Out</center></th>
					<th style="width: 170px; max-width: 170px;"><center>Day Type</center></th>
					<th style="width: 150px; max-width: 150px;"><center>Clock In</center></th>
					<th style="width: 150px; max-width: 150px;"><center>Clock Out</center></th>
					<th style="width: 120px; max-width: 120px;"><center>Total Hours</center></th>
				</tr>
			</thead>
			<tbody>
					<?php
					$grand_total_hours = 0;
					if (count($emp_sched_report) == 0){?>
						<td colspan="9"><center><strong>No Record(s)</strong></center></td>
					<?php } else foreach($emp_sched_report as $row) {
						$grand_total_hours += $row->totalhrs;
					?>
				<tr>
					<td class="tdstlye"><?php echo $row->day; ?></td>
					<td class="tdstlye"><?php echo $row->date; ?></td>
					<td class="tdstlye"><center><?php echo $row->shift; ?></center></td>
					<td class="tdstlye"><center><?php echo $row->advance_in_out; ?></center></td>
					<td class="tdstlye"><center><?php echo date("H:i", strtotime($row->time_in)); ?></center></td>
					<td class="tdstlye"><center><?php echo date("H:i", strtotime($row->time_out)); ?></center></td>
					<td class="tdstlye"><center><?php echo $row->daytype; ?></center></td>

					<td class="tdstlye"><center><?php echo ($row->clock_in != "") ? date("H:i:s", strtotime($row->clock_in)) : '00:00:00'; ?></center></td>
					<td class="tdstlye"><center><?php echo ($row->clock_out != "") ? date("H:i:s", strtotime($row->clock_out)) : '00:00:00'; ?></center></td>
					<td class="tdstlye"><center>
						<?php
						if ($row->totalhrs > 0){
							echo $row->totalhrs;
						} else {
							echo '0.00';
						}
						?>
						</center>
					</td>
				</tr>
			<?php } ?>
			<?php if (count($emp_sched_report) != 0){?>
				<tr>
					<td colspan="8"></td>
					<td style="text-align: right;"><center><strong style="margin-right: 15px;">Total:</strong> </center></td>
					<td style="font-weight:bold;color:#27ae60;"><center><?php echo $grand_total_hours; ?></center></td>
					<td></td>
				</tr>
			<?php } ?>
			</tbody>
	</table>
</div>
