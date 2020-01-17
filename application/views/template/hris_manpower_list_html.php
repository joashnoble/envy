<div style="margin: 20px; ">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>

		<strong>
			Man Power List <br />
			Branch : <?php echo $namebranch; ?>
		</strong>
	</div>
<hr>
<br />
	<table class="table" style="width:100%;font-size: 9pt!important;">
		<thead class="thead-inverse">
			<tr>
				<th style="width:20%;">Department</th>
				<th style="width:5%;">#</th>
				<th style="width:15%;">E-CODE</th>
				<th style="width:30%;">Name</th>
				<th style="width:30%;">Position</th>
			</tr>
		</thead>
<?php
	 foreach($department as $deptrow){
	 	echo "<tr>";
	 	echo "<td style='font-weight:bold;border-bottom:2px solid black;'>".$deptrow->department."</td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";

	 	if($branch!="all"){
	 		$this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
	 		$this->db->where('emp_rates_duties.active_rates_duties', 1);
	 		$this->db->where('employee_list.is_retired', 0);
	 		$this->db->where('employee_list.is_deleted', 0);
	 		$this->db->where('employee_list.status="Active"');
	 		$this->db->where('ref_branch.ref_branch_id', $branch);
		 	$this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
			$this->db->from('employee_list');
			$this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
			$this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
			$this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
			$this->db->order_by("full_name", "asc");
			$query = $this->db->get();
				$count=1;
				if($query->num_rows() != 0){
					foreach($query->result() as $row){
						echo "<tr>";
						echo "<td></td>";
						echo "<td>".$count.".</td>";
						echo "<td>".$row->ecode."</td>";
						echo "<td>".$row->full_name."</td>";
						echo "<td>".$row->position."</td>";
						echo "</tr>";
						$count++;
					}
				}
				else{
						echo "<tr><td colspan='5'><center>No Result</center></td></tr>";
				}
	 	}
	 	else{
	 		$this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
	 		$this->db->where('emp_rates_duties.active_rates_duties', 1);
	 		$this->db->where('employee_list.is_retired', 0);
	 		$this->db->where('employee_list.is_deleted', 0);
	 		$this->db->where('employee_list.status="Active"');
		 	$this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
			$this->db->from('employee_list');
			$this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
			$this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
			$this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
			$this->db->order_by("full_name", "asc");
			$query = $this->db->get();
				$count=1;
				if($query->num_rows() != 0){
					foreach($query->result() as $row){
						echo "<tr>";
						echo "<td></td>";
						echo "<td>".$count."</td>";
						echo "<td>".$row->ecode."</td>";
						echo "<td>".$row->full_name."</td>";
						echo "<td>".$row->position."</td>";
						echo "</tr>";
						$count++;
					}
				}
				else{
						echo "<tr><td colspan='5'><center>No Result</center></td></tr>";
				}
	 	}


			echo "</tr>";
	 	}
?>
</table>
<div style="margin: 20px;">
