<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>
			Employee Deduction History<br />
			Employee Name : <?php echo $employeename[0]->full_name; ?><br />
			Ecode : <?php echo $employeename[0]->ecode; ?><br />
			Date : <?php echo $date; ?> <br />
			<hr><br />
		</strong>
	</div>
		<table class="table" style="width:100%;">
			<thead class="thead-inverse">
				<tr>
					<th><center>#</center></th>
					<th><center>Month</center></th>
					<th><center>SSS</center></th>
					<th><center>Philhealth</center></th>
					<th><center>Pag-ibig</center></th>
					<th><center>WTAX</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$count=1;
				$total_sss=0;
				$total_philhealth=0;
				$total_pagibig=0;
				$total_wtax=0;
					 foreach($employee_deduction as $items){
			 				$total_sss+=$items->sss;
			 				$total_philhealth+=$items->philhealth;
			 				$total_pagibig+=$items->pagibig;
			 				$total_wtax+=$items->wtax;

						 ?>
						 <tr>
							 <td><center><?php echo $count; ?>.</center></td>
							 <td><center><?php echo $items->Month; ?></center></td>
							 <td><center><?php echo number_format($items->sss,2); ?></center></td>
							 <td><center><?php echo number_format($items->philhealth,2); ?></center></td>
							 <td><center><?php echo number_format($items->pagibig,2); ?></center></td>
							 <td><center><?php echo number_format($items->wtax,2); ?></center></td>
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
							<td><center><?php echo number_format($total_sss,2); ?></center></td>
							<td><center><?php echo number_format($total_philhealth,2); ?></center></td>
							<td><center><?php echo number_format($total_pagibig,2); ?></center></td>
							<td><center><?php echo number_format($total_wtax,2); ?></center></td>
						</tr>
						<?php
				?>
			</tbody>

	</table>

</div>
