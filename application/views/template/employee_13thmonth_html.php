<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>
			13th Month Pay <br />
			Year : <?php echo $yearfilter; ?><br />
			<hr><br />
		</strong>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th style="text-align: left;"></th>
				<th style="text-align: left;">Employee Name</th>
				<!-- <th style="text-align: center;">Reg Pay</th> -->
				<th style="text-align: center;">Salary Retro</th>
				<th style="text-align: center;">Total Reg Pay</th>
				<th style="text-align: center;">Absences & Late</th>
				<th style="text-align: center;">Total</th>
				<th style="text-align: center;">Accumulated 13th Month Pay</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count=1;
				foreach($get13thmonth_pay as $row){

				?>
			<tr>
				<td style="text-align: left;"><?php echo $count; ?>.</td>
				<td style="text-align: left;"><?php echo $row->fullname; ?></td>
				<!-- <td style="text-align: center;"><?php echo number_format($row->for_13th_month,2); ?></td> -->
				<td style="text-align: center;"><?php echo number_format($row->retro,2); ?></td>
				<td style="text-align: center;"><?php echo number_format($row->total_13thmonth,2); ?></td>
				<td style="text-align: center;"><?php echo number_format($row->total_days_wout_pay_amt+$row->total_minutes_late_amt,2); ?></td>
				<td style="text-align: center;"><?php echo number_format(($row->total_13thmonth+$row->retro)-($row->total_days_wout_pay_amt+$row->total_minutes_late_amt),2); ?></td>
				<td style="text-align: center;"><?php echo number_format(round(($row->total_13thmonth-($row->total_days_wout_pay_amt+$row->total_minutes_late_amt))/12),2); ?></td>
			</tr>
			<?php
				$count++;
			}
			?>
		</tbody>

	</table>

</div>
