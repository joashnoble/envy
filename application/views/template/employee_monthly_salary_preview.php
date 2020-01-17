<div style="width:2200px;height:450px;">
	<h4>Monthly Payroll Summary</h4>
	<h4>Month : <?php 
	if($month==1){
	echo 'January';
	}
	if($month==2){
	echo 'February';
	}
	if($month==3){
	echo 'March';
	}
	if($month==4){
	echo 'April';
	}
	if($month==5){
	echo 'May';
	}
	if($month==6){
	echo 'June';
	}
	if($month==7){
	echo 'July';
	}
	if($month==8){
	echo 'August';
	}
	if($month==9){
	echo 'September';
	}
	if($month==10){
	echo 'October';
	}
	if($month==11){
	echo 'November';
	}
	if($month==12){
	echo 'December';
	}
	else{

	}  ?></h4>
	<h4>Branch :
	<?php 
	if(count($payroll_register_summary)!=0){
	echo $get_branch;
	}
	else{

	}  ?></h4>
	
	<table class="table">
		<thead>
			<tr>
				<th style"text-align:center;">Employee Name</th>
				<th style"text-align:center;">Pay Period</th>
				<th style"text-align:center;">Basic Pay</th>
				<th style"text-align:center;">Hol/Sun & Ot</th>
				<th style"text-align:center;">Days W/ Pay</th>
				<th style"text-align:center;">Meal/Allowance</th>
				<th style"text-align:center;">Adjustment</th>
				<th style"text-align:center;">Other Earnings</th>
				<th style"text-align:center;">Gross Pay</th>
				<th style"text-align:center;">Absences/Late</th>
				<th style"text-align:center;">SSS Deduct</th>
				<th style"text-align:center;">Phealth Deduct</th>
				<th style"text-align:center;">Pag-Ibig</th>
				<th style"text-align:center;">W/tax</th>
				<th style"text-align:center;">SSS Loan</th>
				<th style"text-align:center;">Pag Ibig Loan</th>
				<th style"text-align:center;">Coop Contri.</th>
				<th style"text-align:center;">Coop Loan</th>
				<th style"text-align:center;">Cash Advance(Reg)</th>
				<th style"text-align:center;">Calamity Loan</th>
				<th style"text-align:center;">ATOE 1</th>
				<th style"text-align:center;">ATOE 2</th>
				<th style"text-align:center;">ATOE 3</th>
				<th style"text-align:center;">Other Deduct</th>
				<th style"text-align:center;">Deductions</th>
				<th style"text-align:center;">Net Pay</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$basic_pay=0;
				$holiday=0;
				$days_wpay=0;
				$s_mealallowance=0;
				$s_adjustment=0;
				$s_other_earnings=0;
				$gross_pay=0;
				$absences_late=0;
				$sss_deduction=0;
				$philhealth_deduction=0;
				$pagibig_deduction=0;
				$wtax_deduction=0;
				$sssloan_deduction=0;
				$pagibigloan_deduction=0;
				$coopcontribution_deduction=0;
				$cooploan_deduction=0;
				$cashadvance_deduction=0;
				$calamityloan_deduction=0;
				$s_atoe1=0;
				$s_atoe2=0;
				$s_atoe3=0;
				$s_otherdeduct=0;
				$s_deductions=0;
				$salaries_wages=0;
				foreach($payroll_register_summary as $row){
				?>
			<tr>
				<td align="center"><?php echo $row->fullname; ?></td>
				<td align="center"><?php echo $row->pay_period_start.'-'.$row->pay_period_end; ?></td>
				<td align="center"><?php echo number_format($row->reg_pay,2); ?></td>
				<td align="center"><?php echo number_format($row->sun_pay+$row->reg_hol_pay+$row->spe_hol_pay+$row->reg_ot_pay+$row->sun_ot_pay,2); ?></td>
				<td align="center"><?php echo number_format($row->days_with_pay_amt,2); ?></td>
				<td align="center"><?php $mealallowancetemp = $this->db->query('SELECT COALESCE(SUM(earnings_amount),0) as total_mealallowance FROM pay_slip_other_earnings
																			WHERE earnings_id=1 AND pay_slip_id='.$row->pay_slip_id);
											                                $mealallowance = $mealallowancetemp->result();
											                                echo $total_mealallowance=$mealallowance[0]->total_mealallowance; ?></td>
				<td align="center"><?php $adjustmenttemp = $this->db->query('SELECT COALESCE(SUM(earnings_amount),0) as total_adjustment FROM pay_slip_other_earnings
																			WHERE earnings_id=6 AND pay_slip_id='.$row->pay_slip_id);
											                                $adjustment = $adjustmenttemp->result();
											                                echo $total_adjustment=$adjustment[0]->total_adjustment; ?></td>
				<td align="center"><?php $other_earningstemp = $this->db->query('SELECT COALESCE(SUM(earnings_amount),0) as total_other_earnings FROM pay_slip_other_earnings
																			WHERE earnings_id!=1 AND earnings_id!=6 AND pay_slip_id='.$row->pay_slip_id);
											                                $other_earnings = $other_earningstemp->result();
											                                echo $total_other_earnings=$other_earnings[0]->total_other_earnings; ?></td>
				<td align="center"><?php echo number_format($row->gross_pay,2); ?></td>
				<td align="center"><?php echo number_format($row->days_wout_pay_amt+$row->minutes_late_amt,2); ?></td>
				<td align="center"><?php echo number_format($row->sss_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->philhealth_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->pagibig_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->wtax_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->sssloan_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->pagibigloan_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->coopcontribution_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->cooploan_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->cashadvance_deduction,2); ?></td>
				<td align="center"><?php echo number_format($row->calamityloan_deduction,2); ?></td>
				<td align="center"><?php $atoe1temp = $this->db->query('SELECT COALESCE(SUM(deduction_amount),0) as total_atoe1 FROM pay_slip_deductions
																			WHERE deduction_id=14 AND pay_slip_id='.$row->pay_slip_id);
											                                $atoe1 = $atoe1temp->result();
											                                echo $total_atoe1=$atoe1[0]->total_atoe1; ?></td>
				<td align="center"><?php $atoe2temp = $this->db->query('SELECT COALESCE(SUM(deduction_amount),0) as total_atoe2 FROM pay_slip_deductions
																			WHERE deduction_id=15 AND pay_slip_id='.$row->pay_slip_id);
											                                $atoe2 = $atoe2temp->result();
											                                echo $total_atoe2=$atoe2[0]->total_atoe2; ?></td>
				<td align="center"><?php $atoe3temp = $this->db->query('SELECT COALESCE(SUM(deduction_amount),0) as total_atoe3 FROM pay_slip_deductions
																			WHERE deduction_id=11 AND pay_slip_id='.$row->pay_slip_id);
											                                $atoe3 = $atoe3temp->result();
											                                echo $total_atoe3=$atoe3[0]->total_atoe3; ?></td>
                <td align="center"><?php $otherdeducttemp = $this->db->query('SELECT COALESCE(SUM(deduction_amount),0) as total_other_deductions FROM pay_slip_deductions
																			WHERE deduction_id!=1 AND deduction_id!=2 AND deduction_id!=3 AND deduction_id!=4 AND
																			deduction_id!=5 AND deduction_id!=6 AND deduction_id!=7 AND deduction_id!=8 AND
																			deduction_id!=9 AND deduction_id!=11 AND deduction_id!=12 AND deduction_id!=14 AND deduction_id!=15
																			AND pay_slip_id='.$row->pay_slip_id);
											                                $otherdeduct = $otherdeducttemp->result();
											                                echo $total_other_deductions=$otherdeduct[0]->total_other_deductions; ?></td>
				<td align="center"><?php 
									echo number_format($row->days_wout_pay_amt+$row->minutes_late_amt+$row->sss_deduction+$row->philhealth_deduction+$row->pagibig_deduction+$row->wtax_deduction+$row->sssloan_deduction+$row->pagibigloan_deduction+$row->coopcontribution_deduction+$row->cooploan_deduction+$row->cashadvance_deduction+$row->calamityloan_deduction+$atoe1[0]->total_atoe1+$atoe2[0]->total_atoe2+$atoe3[0]->total_atoe3+$otherdeduct[0]->total_other_deductions,2);
									?></td>
				<td align="center"><?php 
									echo number_format($row->gross_pay-($row->days_wout_pay_amt+$row->minutes_late_amt+$row->sss_deduction+$row->philhealth_deduction+$row->pagibig_deduction+$row->wtax_deduction+$row->sssloan_deduction+$row->pagibigloan_deduction+$row->coopcontribution_deduction+$row->cooploan_deduction+$row->cashadvance_deduction+$row->calamityloan_deduction+$atoe1[0]->total_atoe1+$atoe2[0]->total_atoe2+$atoe3[0]->total_atoe3+$otherdeduct[0]->total_other_deductions),2);
									?></td>					                                
			</tr>
			<?php
				$basic_pay += $row->reg_pay;
				$holiday += $row->sun_pay+$row->reg_hol_pay+$row->spe_hol_pay+$row->reg_ot_pay+$row->sun_ot_pay;
				$days_wpay += $row->days_with_pay_amt;
				$s_mealallowance += $total_mealallowance;
				$s_adjustment += $total_adjustment;
				$s_other_earnings += $total_other_earnings;
				$gross_pay += $row->gross_pay;
				$absences_late += $row->days_wout_pay_amt+$row->minutes_late_amt;
				$sss_deduction += $row->sss_deduction;
				$philhealth_deduction += $row->philhealth_deduction;
				$pagibig_deduction += $row->pagibig_deduction;
				$wtax_deduction += $row->wtax_deduction;
				$sssloan_deduction += $row->sssloan_deduction;
				$pagibigloan_deduction += $row->pagibigloan_deduction;
				$coopcontribution_deduction += $row->coopcontribution_deduction;
				$cooploan_deduction += $row->cooploan_deduction;
				$cashadvance_deduction += $row->cashadvance_deduction;
				$calamityloan_deduction += $row->calamityloan_deduction;
				$s_atoe1 += $total_atoe1;
				$s_atoe2 += $total_atoe2;
				$s_atoe3 += $total_atoe3;
				$s_otherdeduct += $total_other_deductions;
				$s_deductions += $row->days_wout_pay_amt+$row->minutes_late_amt+$row->sss_deduction+$row->philhealth_deduction+$row->pagibig_deduction+$row->wtax_deduction+$row->sssloan_deduction+$row->pagibigloan_deduction+$row->coopcontribution_deduction+$row->cooploan_deduction+$row->cashadvance_deduction+$row->calamityloan_deduction+$atoe1[0]->total_atoe1+$atoe2[0]->total_atoe2+$atoe3[0]->total_atoe3+$otherdeduct[0]->total_other_deductions;
				$salaries_wages = $gross_pay-$s_deductions;


			 } ?>
					<tr style="height:7px;"><td colspan="3" style="font-family:tahoma;font-weight:bold;">Payroll Summary</td></tr>
					<tr style="height:7px;">
						<td colspan="5" style="font-family:tahoma;font-weight:bold;font-size:12pt;">
							Basic Pay : <?php echo number_format($basic_pay);?><br>
							Hoiday & Sunday & Ot : <?php echo number_format($holiday,2); ?><br>
							Meal/Allowance : <?php echo number_format($s_mealallowance,2); ?><br>
							Adjustment : <?php echo number_format($s_adjustment,2); ?><br>
							Other Earnings : <?php echo number_format($s_other_earnings,2); ?><br>
							Gross Pay : <?php echo number_format($gross_pay,2); ?>
						<hr></hr>
							Absences & Late : <?php echo number_format($absences_late,2); ?><br>
							SSS : <?php echo number_format($sss_deduction,2); ?><br>
							Philhealth : <?php echo number_format($philhealth_deduction,2); ?><br>
							Pag-ibig : <?php echo number_format($pagibig_deduction,2); ?><br>
							Wtax : <?php echo number_format($wtax_deduction,2); ?><br>
							SSS Loan : <?php echo number_format($sssloan_deduction,2); ?><br>
							Pag-ibig Loan : <?php echo number_format($pagibigloan_deduction,2); ?><br>
							Coop Contribution: <?php echo number_format($coopcontribution_deduction,2); ?><br>
							Coop Loan: <?php echo number_format($cooploan_deduction,2); ?><br>
							Cash Advance: <?php echo number_format($cashadvance_deduction,2); ?><br>
							Calamity Loan : <?php echo number_format($calamityloan_deduction,2); ?><br>
							ATOE 1 : <?php echo number_format($s_atoe1,2); ?><br>
							ATOE 2 : <?php echo number_format($s_atoe2,2); ?><br>
							ATOE 3 : <?php echo number_format($s_atoe3,2); ?><br>
							Other Deduct : <?php echo number_format($s_otherdeduct,2); ?>
						<hr></hr>
							Total Deductions : <?php echo number_format($s_deductions,2); ?><br>
							Total Gross : <?php echo number_format($gross_pay,2); ?><br>
							Salaries & Wages : <?php echo number_format($salaries_wages,2); ?><br>
						</td>
		</tbody>

	</table>
	
</div>