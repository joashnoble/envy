<div style="margin: 20px;">
	<div style="font-size: 11pt;">
	<?php include 'template_header.php';?>

		<strong>
			Employee Ledger <br />
			<?php echo $get_type; ?>
		</strong>
		<hr><br />
	</div>
	<table class="table" style="width:100%;">
		<thead class="thead-inverse">
			<tr>
				<!-- <th style="width:20%;">Payslip #</th> -->
				<th style="width:30%;text-align:left;">Fullname</th>
				<th style="width:20%;text-align:left">Due Date</th>
				<th style="width:15%;text-align:left">Debit</th>
				<th style="width:15%;text-align:left">Credit</th>
				<th style="width:20%;text-align:left">Balance</th>
			</tr>
		</thead>
		<tbody>
<?php
//total amount of loan
$loan_amount_total = $total_loan_amount[0]->loan_total_amount;



	 foreach($loans as $result){
	 	/*echo "<tr><td>".$result->pay_slip_code."</td>";*/
	 	echo "<tr>";
	 	echo "<td>".$result->fullname."</td>";
	 	echo "<td>".$result->pay_period_end."</td>";
	 	echo "<td>".number_format($result->deduction_amount,2)."</td>";
	 	echo "<td></td>";
	 	echo "<td>".number_format($loan_amount_total=$loan_amount_total-$result->deduction_amount,2)."</td></tr>";
	 }
	 if(isset($loanadjustments)){
	 	foreach($loanadjustments as $adj){
	 		$deduction_regular_id=$adj->deduction_regular_id;
			echo "<td>".$adj->fullname."</td>";
			echo "<td>".$adj->date_created."</td>";
			echo "<td>".$adj->debit_amount."</td>";
			echo "<td>".$adj->credit_amount."</td>";
			echo "<td>".$loan_amount_total=($loan_amount_total + $adj->credit_amount) - $adj->debit_amount ."</td>";
			echo "</tr>";
		}
	 }

	 	if(isset($deduction_regular_id)){

	 	//uses loan total amount because it is used as a var in computing
	 	$recompute = array(
	            'deduction_total_amount' => $loan_amount_total
	    );

	    $this->db->where('deduction_regular_id', $deduction_regular_id);
	    $this->db->update('new_deductions_regular', $recompute);
	 	}
	 	else{
	 		//do nothing
	 	}
?>
</tbody>
</table>
</div>
