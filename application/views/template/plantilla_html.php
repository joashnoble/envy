<div style="margin: 20px; ">
	<div style="font-size: 11pt;">
	<?php include 'template_header.php';?>

		<strong>
			Plantilla (Employee Summary) <br />
			Date : <?php echo date('m-d-Y');?>
		</strong>
	</div>
<hr>
<br />
	<table class="table" style="width:100%;">
		<thead class="thead-inverse">
			<tr>
				<th width="20%" style="border-bottom: 1px solid gray;">Department</th>
				<th style="border-bottom: 1px solid gray;">Group</th>
				<th style="border-bottom: 1px solid gray;">Active</th>
				<th style="border-bottom: 1px solid gray;">Inactive</th>
				<th style="border-bottom: 1px solid gray;">On Leave</th>
			</tr>
		</thead>
	<?php
	 foreach($department as $deptrow){
	 	echo "<tr>";
	 	echo "<td colspan='5' style='font-size: 10pt !important; padding-left: 10px !important;font-weight:bold !important;background:#EEEEEE !important;border-bottom: 1px solid #CFD8DC !important;border-top: 1px solid #CFD8DC !important;'>".$deptrow->department."</td>";

	 		$this->db->where('emp_rates_duties.ref_department_id', $deptrow->ref_department_id);
	 		$this->db->where('emp_rates_duties.active_rates_duties', 1);
	 		$this->db->where('employee_list.is_deleted', 0);
		 	$this->db->select('*,ref_department.ref_department_id,CONCAT(employee_list.first_name," ",employee_list.middle_name," ",employee_list.last_name) as full_name, 

			SUM(IF(employee_list.is_retired = 0, 1, 0))  as active, SUM(IF(employee_list.is_retired = 1, 1, 0)) as inactive, SUM(IF(employee_list.on_leave = 1, 1, 0)) as onleave');
			
			$this->db->from('employee_list');
			$this->db->join('emp_rates_duties','emp_rates_duties.employee_id = employee_list.employee_id');
			$this->db->join('ref_department','ref_department.ref_department_id = emp_rates_duties.ref_department_id');
			$this->db->join('refgroup','refgroup.group_id = emp_rates_duties.group_id');
			$this->db->group_by("refgroup.group_id,ref_department.ref_department_id");
			$this->db->order_by("refgroup.group_id", "ASC");
			$query = $this->db->get();
			
				$count=1;
				if($query->num_rows() != 0){
					foreach($query->result() as $row){
						echo "<tr>";
						echo "<td style='border-bottom: 1px solid #CFD8DC !important; padding: 5px !important;'></td>";
						echo "<td style='border-bottom: 1px solid #CFD8DC !important; padding: 5px !important;'>".$row->group_desc."</td>";
						echo "<td style='border-bottom: 1px solid #CFD8DC !important; padding: 5px !important;'>".number_format($row->active)."</td>";
						echo "<td style='border-bottom: 1px solid #CFD8DC !important; padding: 5px !important;'>".number_format($row->inactive)."</td>";
						echo "<td style='border-bottom: 1px solid #CFD8DC !important; padding: 5px !important;'>".number_format($row->onleave)."</td>";
						echo "</tr>";
						$count++;
					}
				}
				else{
						echo "<tr><td colspan='5' style='border-bottom: 1px solid #CFD8DC !important; padding: 5px !important;'><center>No Result</center></td></tr>";
				}


			echo "</tr>";
	 	}
?>
</table>
<div style="margin: 20px;">
