<style>
	table{
		border-collapse: collapse;
		width: 100%;
		border-spacing: 0;
	}
	.theader-right{
		vertical-align: baseline;
		width: 200px;
		border: 2px solid black;
		font-size: 11pt;
	}
	.ttitle{
		font-weight: bold;
		padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 10px;
		font-size: 18pt;
		border-top: 2px solid black;
		border-left: 2px solid black;
		border-bottom: 2px solid black;
	}
	.theader{
		padding-left: 10px;
		border-left: 2px solid black;
		font-size: 11pt;
	}
	.theader-bottom{
		padding-left: 10px;
		border-left: 2px solid black;
		border-bottom: 2px solid black;
	}
	.title-td-first{
		font-weight: bold;
		font-size: 9pt;
		border-left: 2px solid black;
		padding-left: 20px;
		white-space:nowrap;
	}
	.title-td-top{
		font-weight: bold;
		font-size: 9pt;
		border-left: 2px solid black;
		padding-left: 20px;
		white-space:nowrap;
	}
	.title-td{
		font-weight: bold;
		padding-left: 20px;
		font-size: 9pt;
		white-space:nowrap;
	}
	.result-td{
		font-weight: bold;
		border-right: 2px solid black;
		font-size: 9pt;
		padding-right: 10px;
		text-align: right;
		white-space:nowrap;
	}
	.result-td-top{
		font-weight: bold;
		border-right: 2px solid black;
		padding-top: 5px;
		font-size: 9pt;
		padding-right: 10px;
		text-align: right;
		white-space:nowrap;
	}
	.result-total-td{
		font-weight: bold;
		border-top: 2px solid black;
		border-bottom: 2px solid black;
		border-right: 2px solid black;
		font-size: 10pt;
		text-align: right;
		padding-right: 10px;
	}
	.result-title-td{
		font-weight: bold;
		font-size: 10pt;
		border-left: 2px solid black;
		border-top: 2px solid black;
		border-bottom: 2px solid black;
		padding-top: 5px;
		padding-bottom: 5px;
		padding-left: 20px;
	}
	.info-right{
		margin-top: 20px !important;
		padding: 10px;
		text-align: center;
		font-size: 10pt !important;
	}
	.title-margin{
		margin-top: 40px;
	}
	.title-margin-bottom{
		margin-top: 60px;
	}
	.PaySlip{
		width:836px;
	}
</style>
<div class="PaySlip">
	<table>
		<tr>
			<td colspan="6" class="ttitle"><?php echo $payslip->branch; ?></td>
			<td rowspan="19" class="theader-right">
				<div class="info-right">
						<strong>NAME:</strong>
						<p><?php echo $payslip->full_name; ?></p>
						<p class="title-margin"><strong>NAME OF PROJECT/DEPARTMENT: </strong></p>
						<p><?php echo $payslip->department."/<br>".$payslip->group_desc; ?></p>
						<p class="title-margin"><strong>PAY TYPE</strong></p>
						<p><?php echo $payslip->payment_type; ?></p>
						<p class="title-margin"><strong>PERIOD COVERED</strong></p>
						<p><?php echo date("m-d-Y", strtotime($payslip->pay_period_start))." - ".date("m-d-Y", strtotime($payslip->pay_period_end)); ?></p>
						<p class="title-margin">I acknowledge that i receive the amount</p>
						<hr>
						<p>and have no further claims for the services rendered</p>
						<p class="title-margin-bottom"><strong>Employee Signature</strong></p>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="6" class="theader"><strong>NAME:</strong> <?php echo $payslip->full_name; ?></td>
		</tr>
		<tr>
			<td colspan="6" class="theader"><strong>NAME OF PROJECT / DEPARTMENT:</strong> <?php echo $payslip->department; ?> </td>
		</tr>
		<tr>
			<td colspan="6" class="theader"><strong>PAY TYPE:</strong> <?php echo $payslip->payment_type; ?></td>
		</tr>
		<tr>
			<td colspan="6" class="theader-bottom"><strong>PERIOD COVERED:</strong>
				<?php echo date("m-d-Y", strtotime($payslip->pay_period_start))." - ".date("m-d-Y", strtotime($payslip->pay_period_end)); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">Basic Pay: </td>
			<td class="result-td-top"><?php echo number_format($payslip->reg_pay,2); ?></td>
			<td class="title-td">SSS Premium: </td>
			<td class="result-td"><?php echo number_format($total_sss_deduct->total_sss_deduct,2); ?></td>
			<td class="title-td">Year to Date</td>
			<td class="result-td"></td>
		</tr>
		<tr>
			<td class="title-td-first">Sunday Pay: </td>
			<td class="result-td"><?php echo number_format($payslip->sun_pay,2); ?></td>
			<td class="title-td">Philhealth:</td>
			<td class="result-td"><?php echo number_format($total_philhealth_deduct->total_philhealth_deduct,2); ?></td>
			<td class="title-td">YTD SALARY</td>
			<td class="result-td"></td>
		</tr>
		<tr>
			<td class="title-td-first">Salary Adjustments</td>
			<td class="result-td"><?php echo number_format($earning_salary_adjustment->total_earnings_salary_adjustments,2); ?></td>
			<td class="title-td">Pag-ibig:</td>
			<td class="result-td"><?php echo number_format($total_pagibig_deduct->total_pagibig_deduct,2); ?></td>
			<td class="title-td">YTD W/TAX:</td>
			<td class="result-td"></td>
		</tr>
		<tr>
			<td class="title-td-first">Allowance:</td>
			<td class="result-td"><?php echo number_format($earning_total_allowance->total_allowance,2); ?></td>
			<td class="title-td">Withholding Tax:</td>
			<td class="result-td"><?php echo number_format($total_withholdingtax_deduct->total_withholdingtax_deduct,2); ?></td>
			<td class="title-td">Overtime Hours</td>
			<td class="result-td"></td>
		</tr>
		<tr>
			<td class="title-td-first">E.COLA:</td>
			<td class="result-td"><?php echo number_format($payslip->cola_pay,2); ?></td>
			<td class="title-td">SSS Loan:</td>
			<td class="result-td"><?php echo number_format($total_sss_loan->total_sss_loan,2); ?></td>
			<td class="title-td">Regular Hours:</td>
			<td class="result-td"><?php echo number_format($payslip->reg,2); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">Other Income:</td>
			<td class="result-td"><?php echo number_format($other_earnings->total_other_earnings,2); ?></td>
			<td class="title-td">Pag-ibig Loan:</td>
			<td class="result-td"><?php echo number_format($total_pagibig_loan->total_pagibig_loan,2); ?></td>
			<td class="title-td">Sundays:</td>
			<td class="result-td"><?php echo number_format($payslip->sun,2); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">Total Regular OT:</td>
			<td class="result-td"><?php echo number_format($payslip->reg_ot_pay,2); ?></td>
			<td class="title-td">Cash Advance:</td>
			<td class="result-td"><?php echo number_format($total_cash_advance->total_cash_advance,2); ?></td>
			<td class="title-td">Regular OT Hours:</td>
			<td class="result-td"><?php echo number_format($payslip->ot_reg + $payslip->ot_reg_reg_hol + $payslip->ot_reg_spe_hol,2); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">Total Sunday OT:</td>
			<td class="result-td"><?php echo number_format($payslip->sun_ot_pay,2); ?></td>
			<td class="title-td">Minutes Late:</td>
			<td class="result-td"><?php echo number_format($payslip->minutes_late_amt,2); ?></td>
			<td class="title-td">Sunday OT Hours:</td>
			<td class="result-td"><?php echo number_format($payslip->ot_sun + $payslip->ot_sun_reg_hol + $payslip->ot_sun_spe_hol,2); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">Total Special Holiday:</td>
			<td class="result-td"><?php echo number_format($payslip->spe_hol_pay,2); ?></td>
			<td class="title-td">COOP Loan:</td>
			<td class="result-td"><?php echo number_format($total_coop_loan->total_coop_loan,2); ?></td>
			<td class="title-td">Special Holiday Hours:</td>
			<td class="result-td"><?php echo number_format($payslip->spe_hol+$payslip->sun_spe_hol,2); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">Total Legal Holiday:</td>
			<td class="result-td"><?php echo number_format($payslip->reg_hol_pay,2); ?></td>
			<td class="title-td">COOP Contribution:</td>
			<td class="result-td"><?php echo number_format($total_coop_contribution->total_coop_contribution,2); ?></td>
			<td class="title-td">Legal Holiday Hours:</td>
			<td class="result-td"><?php echo number_format($payslip->reg_hol+$payslip->sun_reg_hol,2); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">NSD Reg:</td>
			<td class="result-td"><?php echo number_format($payslip->reg_nsd_pay,2); ?></td>
			<td class="title-td">Calamity Loan:</td>
			<td class="result-td"><?php echo number_format($total_calamity_loan->total_calamity_loan,2); ?></td>
			<td class="title-td">NSD Reg Hours:</td>
			<td class="result-td"><?php echo number_format($payslip->nsd_reg+$payslip->nsd_reg_reg_hol+$payslip->nsd_reg_spe_hol,2); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">NSD Sunday:</td>
			<td class="result-td"><?php echo number_format($payslip->sun_nsd_pay,2); ?></td>
			<td class="title-td">Others:</td>
			<td class="result-td"><?php echo number_format($total_other_deduction->total_other_deduction,2); ?></td>
			<td class="title-td">NSD Sun Hours:</td>
			<td class="result-td"><?php echo number_format($payslip->nsd_sun+$payslip->nsd_sun_reg_hol+$payslip->nsd_sun_spe_hol,2); ?></td>
		</tr>
		<tr>
			<td class="title-td-first">Days W/Pay:</td>
			<td class="result-td"><?php echo number_format($payslip->days_with_pay_amt,2); ?></td>
			<td class="title-td">Days W/O Pay:</td>
			<td class="result-td"><?php echo number_format($payslip->days_wout_pay_amt,2); ?></td>
			<td class="title-td">--</td>
			<td class="result-td"></td>
		</tr>
		<tr>
			<td class="result-title-td">Gross Pay: </td>
			<td class="result-total-td" style="color: #2980b9;">
				<?php echo number_format($payslip->gross_pay,2); ?>
			</td>
			<td class="result-title-td">Deductions: </td>
			<td class="result-total-td" style="color: #c0392b;">
				<?php echo number_format($total_sss_deduct->total_sss_deduct+$total_philhealth_deduct->total_philhealth_deduct+$total_pagibig_deduct->total_pagibig_deduct+$total_withholdingtax_deduct->total_withholdingtax_deduct+$total_sss_loan->total_sss_loan+$total_pagibig_loan->total_pagibig_loan+$total_cash_advance->total_cash_advance+$total_coop_loan->total_coop_loan+$total_coop_contribution->total_coop_contribution+$total_calamity_loan->total_calamity_loan+$total_other_deduction->total_other_deduction+$payslip->days_wout_pay_amt+$payslip->minutes_late_amt,2); ?>
			</td>
			<td class="result-title-td">Net: </td>
			<td class="result-total-td" style="color: #27ae60">
				<?php echo number_format($payslip->net_pay,2); ?>
			</td>
		</tr>
	</table>
</div>
