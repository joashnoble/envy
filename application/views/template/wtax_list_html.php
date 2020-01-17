<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>
			WTAX Report for the Month of <?php echo $month; ?><br />
			Branch : <?php echo $branch; ?>
		</strong>
		<hr>
		</br/>
	</div>
	<table class="table" style="width:100%;">
			<thead class="thead-inverse">
				<tr>
					<th>#</th>
					<th style="width:25%;text-align:left;">Period</th>
					<th style="width:15%;text-align:left;">Ecode</th>
					<th style="width:15%;text-align:left;">Name</th>
					<th style="width:15%;text-align:left;">TIN #.</th>
					<th style="width:15%;text-align:left;">Taxable Amount</th>
					<th style="width:20%;text-align:left;">Deduction/Tax Shield</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$total_wtax=0;
				$count=1;
				if(count($wtax_report)!=0 || count($wtax_report)!=null){
					foreach($wtax_report as $row){
						$total_wtax+=$row->wtax_deduction;
						if ($row->wtax_deduction != 0){
					 ?>
						<tr>
						<td><?php echo $count; ?>.</td>
						<td>
							<?php
							$time = strtotime($row->pay_period_start);
							if ($month == "All"){
								echo date("F", $time).' ('.$row->period.')';
							}else{
								echo $row->period;
							}
							?>
						</td>
						<td><?php echo $row->ecode; ?></td>
						<td><?php echo $row->full_name; ?></td>
						<td><?php echo $row->tin; ?></td>
						<td align="right"><?php echo number_format($row->taxable_pay,2); ?></td>
						<td align="right"><?php echo number_format($row->wtax_deduction,2); ?></td>
					</tr>
		 		<?php
		 			$count++;
					} } }
		 			else{ ?>
		 				<tr><td style="text-align:center;font-size:14pt;" colspan="7"><center>No Result</center></td></tr>
		 			<?php
		 			} ?>
		 			<tr>
						<td style="border-bottom: 1px solid #95a5a6 !important;" colspan="7"></td>
		 			</tr>
		 			<tr>
						<td style="text-align:right;font-weight:bold;" colspan="6">Total:</td>
		 				<td align="right" style="font-weight:bold;color:#27ae60;"><?php echo number_format($total_wtax,2);?></td>
		 			</tr>
			</tbody>


	</table>
	</div>
</div>
