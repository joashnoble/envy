<style>
	td, th {
		padding: 7px;
	}
	.tablepaytotals{
		border-bottom: .5px solid gray !important;
		padding-bottom: 5px !important;
		padding-top: 5px !important;
	}
	.tablepay{
		font-size: 10pt !important;
	}
</style>
	<div style="font-size: 11pt; width: 100%;">
		<div class="temp_header">
		<?php include 'template_header.php';?>

		<strong>
			Monthly Payroll Summary <br />
			Month : 
				<?php
				if($month==1){echo 'January';}
				if($month==2){echo 'February';}
				if($month==3){echo 'March';}
				if($month==4){echo 'April';}
				if($month==5){echo 'May';}
				if($month==6){echo 'June';}
				if($month==7){echo 'July';}
				if($month==8){echo 'August';}
				if($month==9){echo 'September';}
				if($month==10){echo 'October';}
				if($month==11){echo 'November';}
				if($month==12){echo 'December';} 
				?> 
			</br >
			Branch :
			<?php echo $get_branch; ?>
			<hr><br />
		</strong>
		</div>
	</div>
	<table class="tablepayroll">
		<thead>
			<tr>
				<th style"text-align:center;">#</th>
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
				<th style"text-align:center;">Other Deduct</th>
				<th style"text-align:center;">Deductions</th>
				<th style"text-align:center;">Net Pay</th>
			</tr>
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

				$count=1;
				foreach($payroll_register_summary as $row){
				?>
			<tr>
				<td align="center"><?php echo $count; ?>.</td>
				<td align="center"><?php echo $row->fullname; ?></td>
				<td align="center"><?php echo $row->pay_period_start.'-'.$row->pay_period_end; ?></td>
				<td align="center"><?php echo number_format($row->reg_pay,2); ?></td>
				<td align="center"><?php echo number_format($row->sun_pay+$row->reg_hol_pay+$row->spe_hol_pay+$row->reg_ot_pay+$row->sun_ot_pay,2); ?></td>
				<td align="center"><?php echo number_format($row->days_with_pay_amt,2); ?></td>
				<!-- //pansamantagal -->
				<td align="center"><?php echo $total_mealallowance=$row->allowance; ?></td>
				<td align="center"><?php echo $total_adjustment=$row->adjustment; ?></td>
				<td align="center"><?php echo $total_other_earnings=$row->other_earnings; ?></td>
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
				<!-- <td align="center"><?php $atoe1temp = $this->db->query('SELECT COALESCE(SUM(deduction_amount),0) as total_atoe1 FROM pay_slip_deductions
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
											                                echo $total_atoe3=$atoe3[0]->total_atoe3; ?></td> -->
        <td align="center"><?php echo $total_other_deductions=number_format($row->other_deductions,2); ?></td>
				<td align="center"><?php
									echo number_format($row->days_wout_pay_amt+$row->minutes_late_amt+$row->sss_deduction+$row->philhealth_deduction+$row->pagibig_deduction+$row->wtax_deduction+$row->sssloan_deduction+$row->pagibigloan_deduction+$row->coopcontribution_deduction+$row->cooploan_deduction+$row->cashadvance_deduction+$row->calamityloan_deduction+$total_other_deductions,2);
									?></td>
				<td align="center"><?php
									echo number_format($row->gross_pay-($row->days_wout_pay_amt+$row->minutes_late_amt+$row->sss_deduction+$row->philhealth_deduction+$row->pagibig_deduction+$row->wtax_deduction+$row->sssloan_deduction+$row->pagibigloan_deduction+$row->coopcontribution_deduction+$row->cooploan_deduction+$row->cashadvance_deduction+$row->calamityloan_deduction+$total_other_deductions),2);
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
				/*$s_atoe1 += $total_atoe1;
				$s_atoe2 += $total_atoe2;
				$s_atoe3 += $total_atoe3;*/
				$s_otherdeduct += $total_other_deductions;
				$s_deductions += $row->days_wout_pay_amt+$row->minutes_late_amt+$row->sss_deduction+$row->philhealth_deduction+$row->pagibig_deduction+$row->wtax_deduction+$row->sssloan_deduction+$row->pagibigloan_deduction+$row->coopcontribution_deduction+$row->cooploan_deduction+$row->cashadvance_deduction+$row->calamityloan_deduction+$total_other_deductions;
				$salaries_wages = $gross_pay-$s_deductions;
				$count++;

			 } ?>

		</tbody>
	</table>
		<div style="font-size:12pt;margin-top: 20px;" class="summary">
			<table class="tablepay">
				<tr>
					<td class="tablepaytotals" style="font-weight:bold;">Basic Pay:</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($basic_pay);?></td>
					<td style="word-wrap: break-word; max-width: 20px; width: 20px;"></td>
					<td class="tablepaytotals" style="font-weight:bold;">SSS :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($sss_deduction,2); ?></td>
					<td style="word-wrap: break-word; max-width: 20px; width: 20px;"></td>
					<td class="tablepaytotals" style="font-weight:bold;">Coop Loan:</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($cooploan_deduction,2); ?></td>
				</tr>
				<tr>
					<td class="tablepaytotals" style="font-weight:bold;">Hoiday & Sunday & Ot :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($holiday,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Philhealth :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($philhealth_deduction,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Cash Advance:</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($cashadvance_deduction,2); ?></td>
				</tr>
				<tr>
					<td class="tablepaytotals" style="font-weight:bold;">Meal/Allowance :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($s_mealallowance,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Pag-ibig :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($pagibig_deduction,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Calamity Loan :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($calamityloan_deduction,2); ?></td>
				</tr>
				<tr>
					<td class="tablepaytotals" style="font-weight:bold;">Adjustment :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($s_adjustment,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Wtax :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($wtax_deduction,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Other Deduct :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($s_otherdeduct,2); ?></td>
				</tr>
				<tr>
					<td class="tablepaytotals" style="font-weight:bold;">Other Earnings :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($s_other_earnings,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">SSS Loan :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($sssloan_deduction,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Total Deductions :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($s_deductions,2); ?></td>
				</tr>
				<tr>
					<td class="tablepaytotals" style="font-weight:bold;">Gross Pay :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($gross_pay,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Pag-ibig Loan :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($pagibigloan_deduction,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Total Gross :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($gross_pay,2); ?></td>
				</tr>
				<tr>
					<td class="tablepaytotals" style="font-weight:bold;">Absences & Late :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($absences_late,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Coop Contribution:</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($coopcontribution_deduction,2); ?></td>
					<td></td>
					<td class="tablepaytotals" style="font-weight:bold;">Salaries & Wages :</td>
					<td class="tablepaytotals" style="text-align: right;"><?php echo number_format($salaries_wages,2); ?></td>
				</tr>
			</table>
		</div>
</div>
