<div style="margin: 20px;">
	<div style="font-size: 11pt;">
	<?php include 'template_header.php';?>
	</div>
	<div style="margin-bottom: 20px!important;">
		<div style="float: left;">
			<strong>Employee Ledger</strong><br />
			Employee Name : <?php 
				if (count($initial_loan) > 0){
					foreach ($initial_loan as $row) {
						echo $row->fullname;
					}
				}
			?><br />
			Loan Type : <?php echo $get_type; ?>
		</div>
		<div style="float: right;">
			<?php 
			if (count($loan_amount) > 0){
				foreach ($loan_amount as $row) {
					echo 'Loan Amount : '.number_format($row->loan_total_amount,2).'<br>';
					echo 'Deduct Per Pay : '.number_format($row->deduction_per_pay_amount,2).'<br>';
					echo 'Loan Balance : '.number_format($row->balance,2).'<br>';
				}
			}
			?>
		</div>
			
	</div><br /><br /><br />
	<table class="table" style="width:100%;margin-top: 20px;" cellpadding="5" cellspacing="5">
		<thead class="thead-inverse">
			<tr>
				<th style="width:20%;text-align:left;border-bottom: 1px solid lightgray;">Due Date</th>
				<th style="width:15%;text-align:right;border-bottom: 1px solid lightgray;">Debit</th>
				<th style="width:15%;text-align:right;border-bottom: 1px solid lightgray;">Credit</th>
				<th style="width:20%;text-align:right;border-bottom: 1px solid lightgray;">Balance</th>
			</tr>
		</thead>
		<tbody>
	<?php
		if (count($loans) > 0){
		foreach($loans as $row){
	?>
			<tr>
				<td style='border-bottom: 1px solid lightgray!important;'><?php echo $row->due_date; ?></td>
				<td align='right' style='border-bottom: 1px solid lightgray!important;'><?php echo number_format($row->debit,2); ?></td>
				<td align='right' style='border-bottom: 1px solid lightgray!important;'><?php echo number_format($row->credit,2); ?></td>
				<td align='right' style='border-bottom: 1px solid lightgray!important;'><?php echo number_format($row->balance,2); ?></td>
			</tr>
	<?php }}else{ ?>

		<tr>
			<td colspan="4">
				<center>No Result Found</center>
			</td>
		</tr>

	<?php } ?>
</tbody>
</table>
</div>
