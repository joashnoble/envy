<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>
		<strong>
			Expiring Personnel for month of <?php echo $month.' '.$year; ?><br />
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
				<th style="text-align:left;">Date Expire</th>
				<th style="text-align:left;">Date Hired</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(count($personnel)!=0 || count($personnel)!=null){
			$count=1;
				foreach($personnel as $row){
				?>
					<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $row->fullname; ?></td>
					<td><?php echo $row->department; ?></td>
					<td><?php echo $row->date_expire; ?></td>
					<td><?php echo $row->date_hired; ?></td>
				</tr>
	 		<?php $count++; } }else{ echo '<tr><td colspan="5" style="font-weight: 300;"><center>No data available</center></td><tr>';} ?>
		</tbody>

</table>
</div>
