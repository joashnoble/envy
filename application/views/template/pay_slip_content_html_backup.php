<div style="width:836px;">
<div style="width:668px;float:left">
<table style="width:100%;border:2px solid black;font-family: tahoma;border-bottom:0;">
	<thead>
		<tr>
			<td style="border-bottom:2px solid black;padding:8px;margin-top:0px;padding-bottom:0px;">
				<h3 style="margin-top:0px;"><?php echo $payslip->description; ?></h3>
				<p  style="margin-top:0px;margin-bottom:0px;">&nbsp<p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;padding-top:13px;padding-bottom:12px;">
				<h5 style="margin-top:2px;">NAME : <info style="font-weight:500;"><?php echo $payslip->full_name; ?></info></h5>
				<h5 style="margin-top:2px;">NAME OF PROJECT/ DEPARMENT: <info style="font-weight:500;"><?php echo $payslip->department; ?></info></h5>
				<h5 style="margin-top:2px;">PAY TYPE: <info style="font-weight:500;"><?php echo $payslip->payment_type; ?></info></h5>
				<h5 style="margin-top:2px;margin-bottom:0;">PERIOD COVERED: <info style="font-weight:500;"><?php echo date("m-d-Y", strtotime($payslip->pay_period_start))." - ".date("m-d-Y", strtotime($payslip->pay_period_end)); ?></info></h5>
			</td>
		</tr>
	</thead>
</table>
<div style="width:222px;float:left">
<table style="width:100%;border:2px solid black;font-family: tahoma;font-size:11px;border-right:0px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;margin:5px;">Basic Pay:<amount style="float:right;"><?php echo number_format($payslip->reg_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Sunday Pay:<amount style="float:right;"><?php echo number_format($payslip->sun_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Salary Adjustments:<amount style="float:right;"><?php echo number_format($earning_salary_adjustment->total_earnings_salary_adjustments,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Allowance:<amount style="float:right;"><?php echo number_format($earning_total_allowance->total_allowance,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">E.COLA:<amount style="float:right;"><?php echo number_format($payslip->cola_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Other Income:<amount style="float:right;"><?php echo number_format($other_earnings->total_other_earnings,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Total Regular OT:<amount style="float:right;"><?php echo number_format($payslip->reg_ot_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Total Sunday OT:<amount style="float:right;"><?php echo number_format($payslip->sun_ot_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Total Special Holiday:<amount style="float:right;"><?php echo number_format($payslip->spe_hol_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Total Legal Holiday:<amount style="float:right;"><?php echo number_format($payslip->reg_hol_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">NSD Reg:<amount style="float:right;"><?php echo number_format($payslip->reg_nsd_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">NSD Sunday:<amount style="float:right;"><?php echo number_format($payslip->sun_nsd_pay,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Days W/Pay:<amount style="float:right;"><?php echo number_format($payslip->days_with_pay_amt,2); ?></amount></p>
			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:222px;float:left">
<table style="width:100%;border:2px solid black;font-family: tahoma;font-size:11px;border-right:0px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;margin:5px;">SSS Premium:<amount style="float:right;"><?php echo number_format($total_sss_deduct->total_sss_deduct,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Philhealth:<amount style="float:right;"><?php echo number_format($total_philhealth_deduct->total_philhealth_deduct,2); ?></amount></p>
				<p style="font-weight:bold;margin:5px;">Pag-ibig:<amount style="float:right;"><?php echo number_format($total_pagibig_deduct->total_pagibig_deduct,2); ?></p>
				<p style="font-weight:bold;margin:5px;">Withholding Tax:<amount style="float:right;"><?php echo number_format($total_withholdingtax_deduct->total_withholdingtax_deduct,2); ?></p>
				<p style="font-weight:bold;margin:5px;">SSS Loan:<amount style="float:right;"><?php echo number_format($total_sss_loan->total_sss_loan,2); ?></p>
				<p style="font-weight:bold;margin:5px;">Pag-ibig Loan:<amount style="float:right;"><?php echo number_format($total_pagibig_loan->total_pagibig_loan,2); ?></p>
				<p style="font-weight:bold;margin:5px;">Cash Advance:<amount style="float:right;"><?php echo number_format($total_cash_advance->total_cash_advance,2); ?></p>
				<p style="font-weight:bold;margin:5px;">Minutes Late:<amount style="float:right;"><?php echo number_format($payslip->minutes_late_amt,2); ?></p>
				<p style="font-weight:bold;margin:5px;">COOP Loan:<amount style="float:right;"><?php echo number_format($total_coop_loan->total_coop_loan,2); ?></p>
				<p style="font-weight:bold;margin:5px;">COOP Contribution:<amount style="float:right;"><?php echo number_format($total_coop_contribution->total_coop_contribution,2); ?></p>
				<p style="font-weight:bold;margin:5px;">Calamity Loan:<amount style="float:right;"><?php echo number_format($total_calamity_loan->total_calamity_loan,2); ?></p>
				<p style="font-weight:bold;margin:5px;">Others:<amount style="float:right;"><?php echo number_format($total_other_deduction->total_other_deduction,2); ?></p>
				<p style="font-weight:bold;margin:5px;">Days W/O Pay<amount style="float:right;"><?php echo number_format($payslip->days_wout_pay_amt,2); ?></p>

			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:224px;float:left">
<table style="width:100%;border:2px solid black;font-family: tahoma;font-size:11px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;margin:5px;color:black;">Year to Date</p>
				<p style="font-weight:bold;margin:5px;">YTD SALARY:</p>
				<p style="font-weight:bold;margin:5px;">YTD W/TAX:</p>
				<p style="font-weight:bold;margin:5px;color:black;">Overtime Hours</p>
				<p style="font-weight:bold;margin:5px;">Regular Hours:<hours style="font-weight:bold;float:right;"><?php echo number_format($payslip->reg,2); ?></hours></p>
				<p style="font-weight:bold;margin:5px;">Sundays:<hours style="font-weight:bold;float:right;"><?php echo number_format($payslip->sun,2); ?></hours></p>
				<p style="font-weight:bold;margin:5px;">Regular OT Hours:<hours style="font-weight:bold;float:right;"><?php echo number_format($payslip->ot_reg,2); ?></hours></p>
				<p style="font-weight:bold;margin:5px;">Sunday OT Hours:<hours style="font-weight:bold;float:right;"><?php echo number_format($payslip->ot_sun,2); ?></hours></p>
				<p style="font-weight:bold;margin:5px;">Special Holiday Hours:<hours style="font-weight:bold;float:right;"><?php echo number_format($payslip->spe_hol+$payslip->sun_spe_hol,2); ?></hours></p>
				<p style="font-weight:bold;margin:5px;">Legal Holiday Hours:<hours style="font-weight:bold;float:right;"><?php echo number_format($payslip->reg_hol+$payslip->sun_reg_hol,2); ?></hours></p>
				<p style="font-weight:bold;margin:5px;">NSD Reg Hours:<hours style="font-weight:bold;float:right;"><?php echo number_format($payslip->nsd_reg+$payslip->nsd_reg_reg_hol+$payslip->nsd_reg_spe_hol,2); ?></hours></p>
				<p style="font-weight:bold;margin:5px;">NSD Sun Hours:<hours style="font-weight:bold;float:right;"><?php echo number_format($payslip->nsd_sun+$payslip->nsd_sun_reg_hol+$payslip->nsd_sun_spe_hol,2); ?></hours></p>
				<p style="font-weight:bold;margin:5px;">--</p>
			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:222px;float:left">
<table style="width:100%;border:2px solid black;font-family: tahoma;border-right:0;border-top:0;font-size:13px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;margin:5px;">Gross Pay:<amount style="float:right;color:#2980b9;"><?php echo number_format($payslip->gross_pay,2); ?></amount></p>
			</td>
		</tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:222px;float:left">
<table style="width:100%;border:2px solid black;font-family: tahoma;border-right:0;border-top:0;font-size:13px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;margin:5px;">Deductions:<amount style="float:right;color:#c0392b;">
					<?php echo number_format($total_sss_deduct->total_sss_deduct+$total_philhealth_deduct->total_philhealth_deduct+$total_pagibig_deduct->total_pagibig_deduct+$total_withholdingtax_deduct->total_withholdingtax_deduct+$total_sss_loan->total_sss_loan+$total_pagibig_loan->total_pagibig_loan+$total_cash_advance->total_cash_advance+$total_coop_loan->total_coop_loan+$total_coop_contribution->total_coop_contribution+$total_calamity_loan->total_calamity_loan+$total_other_deduction->total_other_deduction+$payslip->days_wout_pay_amt+$payslip->minutes_late_amt,2); ?></amount></p>
			</td>
		</tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:224px;float:left">
<table style="width:100%;border:2px solid black;font-family: tahoma;font-size:13px;border-top:0;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;margin:5px;">Net:<amount style="float:right;color:#27ae60;"><?php echo number_format($payslip->net_pay,2); ?></amount></p>
			</td>
		</tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
</div>
<div style="width:168px;float:right;height:510px;">
<table style="width:100%;border:2px solid black;font-family: tahoma;font-size:11px;border-left:2px;">
	<thead>
		<tr style="padding:0px;margin:0px;">
			<td style="margin:2px;">
				<center><p style="font-weight:bold;margin-top:10px;">NAME:</p></center>
				<p style="font-weight:light;"><center><info style="font-weight:500;"><?php echo $payslip->full_name; ?></info></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:0px;">
				<center><p style="font-weight:bold;margin-top:10px;">NAME OF PROJECT/DEPARTMENT:</p></center>
				<p style="font-weight:light;"><center><?php echo $payslip->department."/<br>".$payslip->group_desc; ?></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:0px;">
				<center><p style="font-weight:bold;margin-top:10px;">PAY TYPE:</p></center>
				<p style="font-weight:light;"><center><?php echo $payslip->payment_type; ?></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:0px;">
				<center><p style="font-weight:bold;margin-top:10px;">PERIOD COVERED</p></center>
				<p style="font-weight:light;"><center><?php echo date("m-d-Y", strtotime($payslip->pay_period_start))." - ".date("m-d-Y", strtotime($payslip->pay_period_end)); ?></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:0px;padding-bottom:20px;">
				<p style="font-weight:light;"><center><?php echo "I acknowledge that i receive the amount"; ?></center></p>
				<center style=""><hr style="width:90%;background-color:black;height:2px;"></hr>
					and have no further claims for the services rendered
				</center>
			</td>
		</tr>
		<tr>
			<td style="padding-top:56px;">
				<center><p style="font-weight:bold;">Employee Signature</p></center>
			</td>
		</tr>
	</thead>
</table>
</div>
</div>
