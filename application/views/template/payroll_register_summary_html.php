<div style="height:450px;">
<h3 style="margin-top:0px;pading:0px;font-weight:bold;text-align:center;">EVR VET OPTIONS</h3>
<h4 style="margin-top:0px;pading:0px;text-align:center;">Payroll Summary</h4>
<h4 style="margin-top:0px;pading:0px;text-align:center;">Branch : <?php echo $getbranch; ?></h4>
<h4 style="margin-top:0px;pading:0px;text-align:center;">Period : <?php echo $payroll_register_summary->pay_period_start." To ".$payroll_register_summary->pay_period_end; ?></h4>
<table class="table">
	<tbody>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Basic Salary</td>
			<td style="font-weight:bold;width:23%"></td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($payroll_register_summary->total_reg_pay,2); ?></td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Holiday Pay & Sunday</td>
			<td style="font-weight:bold;width:23%">--</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($payroll_register_summary->total_hol_pay_sunday,2); ?></td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Adjustment</td>
			<td style="font-weight:bold;width:23%">--</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_adjustment_amount->total_adjustment_amount,2); ?></td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">NSD Pay</td>
			<td style="font-weight:bold;width:23%">--</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($payroll_register_summary->total_nsd_amount,2); ?></td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Other Pay</td>
			<td style="font-weight:bold;width:23%">--</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_other_pay->total_other_pay,2); ?></td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Absent & Late</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($payroll_register_summary->total_minutes_late,2); ?></td>
			<td style="font-weight:bold;width:23%">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">SSS Contribution</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_sss_deduct->total_sss_deduct,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Philhealth Contribution</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_philhealth_deduct->total_philhealth_deduct,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Pag-Ibig Contribution</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_pagibig_deduct->total_pagibig_deduct,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">W/Holding Tax</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_withholdingtax_deduct->total_withholdingtax_deduct,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">SSS Loan</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_sss_loan->total_sss_loan,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Pag-Ibig Loan</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_pagibig_loan->total_pagibig_loan,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Coop Savings/Contrib</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_coop_contribution->total_coop_contribution,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">Coop Loan</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_coop_loan->total_coop_loan,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">ATOE 1</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_atoe1->total_atoe1,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">ATOE 2</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_atoe2->total_atoe2,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;"></td>
			<td style="font-weight:bold;width:32%;">ATOE 3</td>
			<td style="font-weight:bold;width:25%;"><?php echo number_format($total_atoe3->total_atoe3,2); ?></td>
			<td style="font-weight:bold;width:25%;">--</td>
		</tr>
		<tr>
			<td style="width:10%;border-bottom:2px solid #2c3e50;"></td>
			<td style="font-weight:bold;width:32%;border-bottom:2px solid #2c3e50;">Other Deductions</td>
			<td style="font-weight:bold;width:25%;border-bottom:2px solid #2c3e50;"><?php echo number_format($total_other_deduction->total_other_deduction,2); ?></td>
			<td style="font-weight:bold;width:25%;border-bottom:2px solid #2c3e50;">--</td>
		</tr>
		<tr>
			<td style="width:10%;border-bottom:2px solid #2c3e50;"></td>
			<td style="font-weight:bold;width:32%;border-bottom:2px solid #2c3e50;">Grand Total:</td>
			<td style="font-weight:bold;width:23%;border-bottom:2px solid #2c3e50;"><?php echo number_format($total_deduction=($payroll_register_summary->total_minutes_late+$total_sss_deduct->total_sss_deduct+$total_philhealth_deduct->total_philhealth_deduct+$total_pagibig_deduct->total_pagibig_deduct+$total_withholdingtax_deduct->total_withholdingtax_deduct+$total_sss_loan->total_sss_loan+$total_pagibig_loan->total_pagibig_loan+$total_coop_loan->total_coop_loan+$total_coop_contribution->total_coop_contribution+$total_other_deduction->total_other_deduction+$total_atoe1->total_atoe1+$total_atoe2->total_atoe2+$total_atoe3->total_atoe3),2); ?></td>
			<td style="font-weight:bold;width:25%;border-bottom:2px solid #2c3e50;"><?php echo number_format($total_pay=($payroll_register_summary->total_reg_pay+$payroll_register_summary->total_hol_pay_sunday+$total_adjustment_amount->total_adjustment_amount+$payroll_register_summary->total_nsd_amount+$total_other_pay->total_other_pay),2); ?></td>
		</tr>
		<tr>
			<td style="width:10%;border-bottom:2px solid #2c3e50;"></td>
			<td colspan="2" style="font-weight:bold;width:55%;border-bottom:2px solid #2c3e50;">Salaries & Wages (NET) :</td>
			<td style="font-weight:bold;width:25%;border-bottom:2px solid #2c3e50;"><?php echo number_format($total_pay-$total_deduction,2);?></td>
		</tr>
	</tbody>
</table>
</div>