<div style="margin: 20px;">
	<div style="font-size: 11pt;">
	<?php include 'template_header.php';?>

		<strong>
			Philhealth Report for the Month of <?php echo $month; ?> <br />
			Branch : <?php echo $branch; ?>
		</strong>
		<hr>
		</br >
	</div>
<table class="table" style="width:100%;">
		<thead class="thead-inverse">
			<tr>
				<th>#</th>
				<th style="width:30%;text-align:left;">Period</th>
				<th style="width:15%;text-align:left;">Ecode</th>
				<th style="width:20%;text-align:left;">Name</th>
				<th style="width:15%;text-align:left;">PhilHealth No.</th>
				<th style="width:30%;text-align:left;">PhilHealth Contribution</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$total_philhealth=0;
			$count=1;
			if(count($sss_report)!=0 || count($sss_report)!=null){
				foreach($sss_report as $row){
					$total_philhealth+=$row->philhealth_deduction;
					if ($row->philhealth_deduction != 0){
				 ?>
					<tr>
					<td><?php echo $count; ?></td>
					<td>
						<?php
						$date = explode("~", $row->period);
						$time = strtotime($date[0]);
							if ($month == "All"){
								echo date("F", $time).' ('.$row->period.')';
							}else{
								echo $row->period;
							}
						?>
					</td>
					<td><?php echo $row->ecode; ?></td>
					<td><?php echo $row->full_name; ?></td>
					<td><?php echo $row->phil_health; ?></td>
					<td align="right"><?php echo number_format($row->philhealth_deduction,2); ?></td>
				</tr>
	 		<?php
	 			$count++;
			} } }
	 			else{ ?>
	 				<tr>
						<td style="font-size:14pt;" colspan="6">
							<center>
								No Result
							</center>
						</td>
					</tr>
	 			<?php
	 			} ?>
	 			<tr>
					<td style="border-bottom:2px solid #95a5a6; border-bottom: 1px solid #95a5a6 !important;" colspan="6" ></td>
	 			</tr>
	 			<tr>
	 				<td style="text-align:right;font-weight:bold;" colspan="5">Total:</td>
	 				<td align="right" style="font-weight:bold;color:#27ae60;"><?php echo number_format($total_philhealth,2);?></td>
	 			</tr>
		</tbody>


</table>
</div>
