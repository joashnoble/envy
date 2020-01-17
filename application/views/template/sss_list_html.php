<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>

		<strong>
			SSS Report for the Month of <?php echo $month; ?> <br />
			Branch : <?php echo $branch; ?> <br />
		</strong>
		<hr>
		<br />
	</div>
<table class="table" style="width:100%;">
		<thead class="thead-inverse">
			<tr>
				<th>#</th>
				<th style="text-align:left;">Period</th>
				<th style="text-align:left;">Ecode</th>
				<th style="text-align:left;">Name</th>
				<th style="text-align:left;">SSS No.</th>
				<th style="text-align:right;">Employee</th>
				<th style="text-align:right;">Employer</th>
				<th style="text-align:right;">EC</th>
				<th style="text-align:right;">Total</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$total_sss=0;
			$total_employer=0;
			$total_ec=0;
			$grand_total = 0;
			$row_total = 0;
			$count=1;
			if(count($sss_report)!=0 || count($sss_report)!=null){
				foreach($sss_report as $row){
					$total_sss+=$row->sss_deduction_employee;
					if ($row->sss_deduction_employee != 0){

					$row_total = $row->sss_deduction_employee + $row->sss_deduction_employer + $row->sss_deduction_ec;
				 ?>
					<tr>
					<td><?php echo $count; ?></td>
					<?php if ($month == "All"){?>
					<td>
						<?php
						$date = explode("~", $row->period);
						$time = strtotime($date[0]);
						echo date("F", $time).' ('.$row->period.')';
						?>
					</td>
					<?php }else{?>
					<td>
						<?php
						$date = explode("~", $row->period);
						$time = strtotime($date[0]);
						echo $row->period;
						?>
					</td>
					<?php } ?>
					<td><?php echo $row->ecode; ?></td>
					<td><?php echo $row->full_name; ?></td>
					<td><?php echo $row->sss; ?></td>
					<td style="text-align: right;"><?php echo number_format($row->sss_deduction_employee,2); ?></td>
					<td style="text-align: right;"><?php echo number_format($row->sss_deduction_employer,2); ?></td>
					<td style="text-align: right;"><?php echo number_format($row->sss_deduction_ec,2); ?></td>
					<td style="text-align: right;"><?php echo number_format($row_total,2); ?></td>
				</tr>
	 		<?php
	 				$total_employer+=$row->sss_deduction_employer;
	 				$total_ec+=$row->sss_deduction_ec;
					$grand_total+=$row_total;
	 				$count++;
	 			}}}
	 			else{ ?>
	 				<tr><td style="text-align:center;font-size:14pt;" colspan="9"><center>No Result</center></td></tr>
	 			<?php
	 			} ?>
	 			<tr>
	 				<td style="border-bottom: 1px solid #95a5a6 !important;" colspan="9"></td>
	 			</tr>
	 			<tr>
	 				<td colspan="4"></td>
	 				<td style="text-align:right;font-weight:bold;">Total:</td>
	 				<td style="font-weight:bold;color:#27ae60; text-align: right;"><?php echo number_format($total_sss,2);?></td>
	 				<td style="font-weight:bold;color:#27ae60; text-align: right;"><?php echo number_format($total_employer,2);?></td>
	 				<td style="font-weight:bold;color:#27ae60; text-align: right;"><?php echo number_format($total_ec,2);?></td>
					<td style="font-weight:bold;color:#27ae60; text-align: right;"><?php echo number_format($grand_total,2);?></td>
	 			</tr>
		</tbody>


</table>
</div>
