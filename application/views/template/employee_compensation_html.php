<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>Employee Compensation History<br>
			Employee Name : <?php echo $employeename[0]->full_name; ?><br>
			Ecode : <?php echo $employeename[0]->ecode; ?> <br />
			Date : <?php echo $date; ?> <br />
			<hr><br />
		</strong>
	<div>
		<table class="table" style="width:100%;">
			<thead class="thead-inverse">
				<tr>
					<th><center>#</center></th>
					<th><center>MONTH</center></th>
					<th><center>GROSS PAY</center></th>
					<th><center>NET PAY</center></th>
					<th><center>13TH MONTH PAY</center></th>
					<th><center>DEDUCTIONS</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$count=1;
				$total_reg_pay=0;
				$total_net_pay=0;
				$total_t3rthmonth=0;
				$total_total_deductions=0;
					 foreach($employee_compensation as $items){
					 	$total_reg_pay += $items->reg_pay;
		 				$total_net_pay += $items->net_pay;
		 				$total_t3rthmonth += $items->t3rthmonth;
		 				$total_total_deductions += $items->total_deductions;
						 ?>
						 <tr>
							 <td><center><?php echo $count; ?>.</center></td>
							 <td><center><?php echo $items->Month; ?></center></td>
							 <td><center><?php echo number_format($items->reg_pay,2); ?></center></td>
							 <td><center><?php echo number_format($items->net_pay,2); ?></center></td>
							 <td><center><?php echo number_format($items->t3rthmonth,2); ?></center></td>
							 <td><center><?php echo number_format($items->total_deductions,2); ?></center></td>
						 </tr>
						 <?php
						 $count++;
					 	}
						?>
						<tr>
							<td colspan="6" style="border-bottom: 1px solid #95a5a6 !important;"></td>
						</tr>
						<tr>
							<td></td>
							<td><center><b>Total :</b></center></td>
							<td><center><?php echo number_format($total_reg_pay,2); ?></center></td>
							<td><center><?php echo number_format($total_net_pay,2); ?></center></td>
							<td><center><?php echo number_format($total_t3rthmonth,2); ?></center></td>
							<td><center><?php echo number_format($total_total_deductions,2); ?></center></td>
						</tr>
						<?php
				?>
			</tbody>
	</table>
</div>
