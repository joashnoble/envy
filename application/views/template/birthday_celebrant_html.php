<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>
			<?php echo $month; ?> Celebrants<br />
		</strong>
		<hr>
		<br />
	</div>
<table class="table" style="width:100%;font-size: 12pt;">
		<thead class="thead-inverse">
			<tr>
				<th>#</th>
				<th style="text-align:left;">Name</th>
				<th style="text-align:left;">Department</th>
				<th style="text-align:left;">Birthday</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(count($bdaylist)!=0 || count($bdaylist)!=null){
			$count=1;
				foreach($bdaylist as $row){
				?>
					<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $row->fullname; ?></td>
					<td><?php echo $row->department; ?></td>
					<td><?php echo date('F d, Y', strtotime($row->birthdate)); ?></td>
				</tr>
	 		<?php $count++; } }else{ echo '<tr><td colspan="4" style="font-weight: 300;"><center>No data available</center></td><tr>';} ?>
		</tbody>

</table>
</div>
