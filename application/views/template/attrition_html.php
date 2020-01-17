<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>
			Attrition Report <br />
			Date : <?php echo $from_date; ?> to <?php echo $to_date; ?> <br />
			Position : <?php echo $position; ?>
		</strong>
		<hr>
		<br />
	</div>
<table class="table" style="width:100%;font-size: 12pt;">
		<thead class="thead-inverse">
			<tr>
				<th>Month</th>
				<th>Opening Balance</th>
				<th>Employee Joined</th>
				<th>Employee Left</th>
				<th>Closing Balance</th>
				<th>Attrition Rate</th>
				<th>Attrition Percentage</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(count($attrition)!=0 || count($attrition)!=null){
				foreach($attrition as $row){
				?>
					<tr>
					<td><?php echo $row->month_name; ?></td>
					<td><?php echo $row->opening_balance; ?></td>
					<td><?php echo $row->employee_joined; ?></td>
					<td><?php echo $row->employee_left; ?></td>
					<td><?php echo $row->closing_balance; ?></td>
					<td><?php echo number_format($row->attrition_rate,2); ?></td>
					<td><?php echo number_format($row->attrition_percentage,2); ?></td>
				</tr>
	 		<?php }}else{ echo '<tr><td colspan="7" style="font-weight: 300;"><center>No data available</center></td><tr>';} ?>
		</tbody>

</table>
</div>
