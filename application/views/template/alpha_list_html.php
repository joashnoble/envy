<style>
	td, th {
		padding: 7px;
		text-align: center;
	}
	.tablepaytotals{
		border-bottom: .5px solid gray !important;
		padding-bottom: 5px !important;
		padding-top: 5px !important;
		text-align: center;
	}
	.tablepay{
		font-size: 14pt !important;
		text-align: center;
	}
</style>
<div style="height:450px; margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>
			Alpha List of Employee<br>
			<?php echo $company->company_name ?> </br />
			Tin #: <?php echo $company->tin_no ?><br />
			Year: <?php echo $year; ?>
			<hr><br />
		</strong>
	</div>
	<table class="tablepayroll" width="100%" style="font-size: 14pt important;">
		<thead>
			<tr>
				<th>#</th>
				<th>Surname</th>
				<th>Firstname</th>
				<th>Middlename</th>
				<th>Tin #</th>
				<th>WTAX Whold (Jan - Nov)</th>
				<th>Exemption</th>
				<th>Gross Pay</th>
				<th colspan="3">Deduction (Tax Shield)</th>
				<th>Taxable Income</th>
				<th>Tax Due December</th>
			</tr>
			<tr>
				<th colspan="8"></th>
				<th>SSS</th>
				<th>Pilhealth</th>
				<th>Pagibig</th>
				<th colspan="2"></th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i = 1;
				foreach ($alpha_list as $row) {?>
				<tr>
					<td><?php echo $i++.'.'; ?></td>
					<td><?php echo $row->last_name; ?></td>
					<td><?php echo $row->first_name; ?></td>
					<td><?php echo $row->middle_name; ?></td>
					<td><?php echo $row->tin; ?></td>
					<td><?php echo number_format($row->wtax,2); ?></td>
					<td><?php echo $row->tax_name; ?></td>
					<td><?php echo number_format($row->yearly_gross,2); ?></td>
					<td><?php echo number_format($row->yearly_sss,2); ?></td>
					<td><?php echo number_format($row->yearly_phil,2); ?></td>
					<td><?php echo number_format($row->yearly_pagibig,2); ?></td>
					<td><?php echo number_format($row->taxable_income,2); ?></td>
					<td></td>
				</tr>
			<?php } ?>
		</tbody>
		</table>
	</div>
</div>
