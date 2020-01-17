<div style="margin: 20px;">
	<div style="font-size: 11pt;">
		<?php include 'template_header.php';?>

		<strong>
			Employee Tenure <br />
			Branch : <?php echo $namebranch; ?>
		</strong>
	</div>
	<hr>
	<br />
	<table class="table" style="width:100%;">
		<thead class="thead-inverse">
			<tr>
				<th style="width:20%;" align="left">Department</th>
				<th style="width:5%;" align="left">#</th>
				<th style="width:15%;" align="left">E-CODE</th>
				<th style="width:30%;" align="left">Name</th>
				<th style="width:5%;" align="left">Retired?</th>
				<th style="width:15%;" align="left">Years</th>
				<th style="width:10%;" align="left">Months</th>
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
	 	echo "<td style='border-bottom:2px solid black;'></td>";
	 	echo "<td style='border-bottom:2px solid black;'></td>";

	 	if($branch!="all"){
	 		$this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
	 		$this->db->where('emp_rates_duties.active_rates_duties', 1);
	 		$this->db->where('ref_branch.ref_branch_id', $branch);
		 	$this->db->select('*,ref_position.position,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name');
			$this->db->from('employee_list');
			$this->db->join('emp_rates_duties', 'emp_rates_duties.employee_id = employee_list.employee_id');
			$this->db->join('ref_position','ref_position.ref_position_id=emp_rates_duties.ref_position_id');
			$this->db->join('ref_branch','ref_branch.ref_branch_id=emp_rates_duties.ref_branch_id');
			$this->db->order_by("full_name", "asc");
			$query = $this->db->get();
				$count=1;
				$filter_date;
				if($query->num_rows() != 0){
					foreach($query->result() as $row){
						if($row->is_retired==1){
							$filter_date=$row->date_retired;
						}
						else{
							$filter_date='today';

						}
						echo "<tr>";
						echo "<td></td>";
						echo "<td>".$count."</td>";
						echo "<td>".$row->ecode."</td>";
						echo "<td>".$row->full_name."</td>";
						echo "<td style='text-align:center;'>".($row->is_retired == 1 ? 'YES' : 'NO')."</td>";
						$from = new DateTime($row->date_start);
						$to = new DateTime($filter_date);
						$years = $from->diff($to)->y;
						$months = $from->diff($to)->m;
						echo "<td>".$years." year</td>";
						echo "<td>".$months." month</td>";
						echo "</tr>";
						$count++;
					}
				}
				else{
						echo "<tr><td></td><td></td><td>No Result</td></tr>";
				}
	 	}
	 	else{
	 		$this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
	 		$this->db->where('emp_rates_duties.active_rates_duties', 1);
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
						if($row->is_retired==1){
							$filter_date=$row->date_retired;
						}
						else{
							$filter_date='today';
						}
						echo "<tr>";
						echo "<td></td>";
						echo "<td>".$count."</td>";
						echo "<td>".$row->ecode."</td>";
						echo "<td>".$row->full_name."</td>";
						echo "<td style='text-align:center;'>".($row->is_retired == 1 ? 'YES' : 'NO')."</td>";
						$from = new DateTime($row->date_start);
						$to = new DateTime($filter_date);
						$years = $from->diff($to)->y;
						$months = $from->diff($to)->m;
						echo "<td>".$years." year</td>";
						echo "<td>".$months." month</td>";
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
</div>
