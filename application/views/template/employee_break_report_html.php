<div style="margin: 20px; ">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>

		<strong>
			Employee Break Report <br />
			Date: <?php echo date('F j, Y', strtotime($schedule_date)); ?>
		</strong>
	</div>
<hr>
<br />
	<table class="table" style="width:100%;">
		<thead class="thead-inverse">
			<tr>
				<th style="width:20%;">Employee</th>
				<th style="width:5%;">#</th>
				<th style="width:15%;">Break Out</th>
				<th style="width:30%;">Break In</th>
				<th style="width:30%;">Late</th>
			</tr>
		</thead>
<?php
	 foreach($employee_id as $row){
	 	echo "<tr>";
	 	echo "<td style='font-weight:bold;border-bottom:2px solid black;'>".$row->full_name."</td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";

	 		$this->db->where('employee_list.employee_id', $row->employee_id);
	 		$this->db->where('schedule_employee.date', $schedule_date);
		 	$this->db->select('employee_break.*,CONCAT(employee_list.first_name,' ',employee_list.middle_name,' ',employee_list.last_name) AS full_name, employee_list.ecode');
			$this->db->from('employee_break');
			$this->db->join('schedule_employee', 'schedule_employee.schedule_employee_id = employee_break.schedule_employee_id');
			$this->db->join('employee_list','employee_list.employee_id = schedule_employee.employee_id');
			$this->db->order_by("full_name", "asc");
			$query = $this->db->get();

				$count=1;
				if($query->num_rows() != 0){
					foreach($query->result() as $row){
						echo "<tr>";
						echo "<td></td>";
						echo "<td>".$count.".</td>";
						echo "<td>".$row->break_out."</td>";
						echo "<td>".$row->break_in."</td>";
						echo "<td>".$row->late."</td>";
						echo "</tr>";
						$count++;
					}
				}
				else{
						echo "<tr><td></td><td></td><td>No Result</td></tr>";
				}
	 	}

			echo "</tr>";
	 	}
?>
</table>
<div style="margin: 20px;">
