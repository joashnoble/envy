<div>
	<form class="summary_transfer">
	<div style="font-size: 11pt;">
	<?php include 'template_header.php';?>
		<strong>
			Daily Time Record (Summary) <br />
			Period Covered : <?php if(count($period)!=0){
				echo $period[0]->payperiod;
				echo "<input type='hidden' value='".$period[0]->pay_period_id."' name='pay_period_id'>";
			}
			else{
				echo "n/a";
			}

			?>
		</strong>
		<hr><br />
	</div>

			<?php
					if(count($scheddtrsummary)!=0){
			?>
					<table class="table table-striped" style="width:100%;">
						<thead class="thead-inverse" style="text-align:left;">
							<tr>
								<th>Department</th>
								<th>#</th>
								<th>Ecode</th>
								<th>Name</th>
								<th><center>Total (Hours)</center></th>
								<th><center>Total Late(Minutes)</center></th>
								<th>Regular Day</th>
								<th>Regular Sunday</th>
								<th>Regular Holiday</th>
								<th>Special Holiday</th>
								<th>Sunday Reg. Holiday</th>
								<th>Sunday Spe. Holiday</th>
								<th>Regular O.t</th>
								<th>Sunday O.t</th>
								<th>Regular Hol. O.t</th>
								<th>Spe Hol. O.t</th>
								<th>Sunday Reg. Hol. O.t</th>
								<th>Sunday Spe. Hol. O.t</th>
								<th>Regular NSD</th>
								<th>Regular Sun. NSD</th>
								<th>Regular Hol. NSD</th>
								<th>Special Hol. NSD</th>
								<th>Sunday Regular Hol. NSD</th>
								<th>Sunday Special Hol. NSD</th>
							</tr>
						</thead>
						<tbody>
			<?php
						foreach($ref_department as $dept){


								$count=1;
								$lastdept=0;
								foreach($scheddtrsummary as $result){
									if($dept->ref_department_id==$result->ref_department_id){
										if($lastdept==$result->ref_department_id){
											echo "<tr>";
											echo "<td></td>";
											echo "<td><input type='hidden' value='".$result->employee_id."' name='employee_id[]'>".$count."</td>";
											echo "<td>".$result->ecode."</td>";
											echo "<td>".$result->fullname."</td>";
											echo "<td><input type='hidden' value='".$result->newhour."' name='newhour[]'><center>".$result->newhour."</center></td>";
											echo "<td><input type='hidden' value='".$result->timelate."' name='minutes_late[]'><center>".$result->timelate."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_day."' name='reg[]'><center>".$result->regular_day."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_sunday."' name='sun[]'><center>".$result->regular_sunday."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_holiday."' name='reg_hol[]'><center>".$result->regular_holiday."</center></td>";
											echo "<td><input type='hidden' value='".$result->special_holiday."' name='spe_hol[]'><center>".$result->special_holiday."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_regular_holiday."' name='sun_reg_hol[]'><center>".$result->sunday_regular_holiday."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_special_holiday."' name='sun_spe_hol[]'><center>".$result->sunday_special_holiday."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_ot."' name='ot_reg[]'><center>".$result->regular_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_ot."' name='ot_sun[]'><center>".$result->sunday_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_hol_ot."' name='ot_reg_reg_hol[]'><center>".$result->regular_hol_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->special_hol_ot."' name='ot_reg_spe_hol[]'><center>".$result->special_hol_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_regular_hol_ot."' name='ot_sun_reg_hol[]'><center>".$result->sunday_regular_hol_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_special_hol_ot."' name='ot_sun_spe_hol[]'><center>".$result->sunday_special_hol_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_nsd."' name='nsd_reg[]'><center>".$result->regular_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_sunday_nsd."' name='nsd_sun[]'><center>".$result->regular_sunday_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_hol_nsd."' name='nsd_reg_reg_hol[]'><center>".$result->regular_hol_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->special_hol_nsd."' name='nsd_reg_spe_hol[]'><center>".$result->special_hol_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_regular_hol_nsd."' name='nsd_sun_reg_hol[]'><center>".$result->sunday_regular_hol_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_special_hol_nsd."' name='nsd_sun_spe_hol[]'><center>".$result->sunday_special_hol_nsd."</center></td>";
											echo "</tr>";
										}
										else{
											echo "<tr>";
											echo "<td>".$dept->department."</td>";
											echo "<td><input type='hidden' value='".$result->employee_id."' name='employee_id[]'>".$count."</td>";
											echo "<td>".$result->ecode."</td>";
											echo "<td>".$result->fullname."</td>";
											echo "<td><input type='hidden' value='".$result->newhour."' name='newhour[]'><center>".$result->newhour."</center></td>";
											echo "<td><input type='hidden' value='".$result->timelate."' name='minutes_late[]'><center>".$result->timelate."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_day."' name='reg[]'><center>".$result->regular_day."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_sunday."' name='sun[]'><center>".$result->regular_sunday."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_holiday."' name='reg_hol[]'><center>".$result->regular_holiday."</center></td>";
											echo "<td><input type='hidden' value='".$result->special_holiday."' name='spe_hol[]'><center>".$result->special_holiday."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_regular_holiday."' name='sun_reg_hol[]'><center>".$result->sunday_regular_holiday."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_special_holiday."' name='sun_spe_hol[]'><center>".$result->sunday_special_holiday."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_ot."' name='ot_reg[]'><center>".$result->regular_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_ot."' name='ot_sun[]'><center>".$result->sunday_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_hol_ot."' name='ot_reg_reg_hol[]'><center>".$result->regular_hol_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->special_hol_ot."' name='ot_reg_spe_hol[]'><center>".$result->special_hol_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_regular_hol_ot."' name='ot_sun_reg_hol[]'><center>".$result->sunday_regular_hol_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_special_hol_ot."' name='ot_sun_spe_hol[]'><center>".$result->sunday_special_hol_ot."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_nsd."' name='nsd_reg[]'><center>".$result->regular_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_sunday_nsd."' name='nsd_sun[]'><center>".$result->regular_sunday_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->regular_hol_nsd."' name='nsd_reg_reg_hol[]'><center>".$result->regular_hol_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->special_hol_nsd."' name='nsd_reg_spe_hol[]'><center>".$result->special_hol_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_regular_hol_nsd."' name='nsd_sun_reg_hol[]'><center>".$result->sunday_regular_hol_nsd."</center></td>";
											echo "<td><input type='hidden' value='".$result->sunday_special_hol_nsd."' name='nsd_sun_spe_hol[]'><center>".$result->sunday_special_hol_nsd."</center></td>";
											echo "</tr>";
										}


										$count++;
										$lastdept=$result->ref_department_id;
									}

 					 			}
							}

							}
							else{
								echo "<center><h3>No Data</h3></center>";
							}

			?>
</tbody>
</table>
	</form>
</div>
