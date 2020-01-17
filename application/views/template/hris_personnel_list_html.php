<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>

		<strong>
			PERSONNEL LIST <br />
			<?php echo $dept; ?> <br />
			<?php echo $branch; ?> <br />
		</strong>
	</div>
<hr>
<br />
	<table class="table" style="width:100%;">
		<thead class="thead-inverse">
			<tr>
				<th style="width:5%;">#</th>
				<th style="width:15%;">E-CODE</th>
				<th style="width:30%;">Name</th>
				<th style="width:30%;">Position</th>
				<th style="width:15%;">Birthdate</th>
				<th style="width:5%;">Retired?</th>
			</tr>
		</thead>
<?php
$count=1;
	 foreach($employee_dept as $result){
	 	echo "<tr>
					<td>".$count.".</td>
					<td>".$result->ecode."</td>";
	 	echo "<td>".$result->full_name."</td>";
	 	echo "<td>".$result->position."</td>";
	 	echo "<td>".$result->birthdate."</td>";
	 	echo "<td style='text-align:center;'>".($result->is_retired == 1 ? 'YES' : 'NO')."</td></tr>";
	 	$count++;
	 }
?>
</table>
</div>
