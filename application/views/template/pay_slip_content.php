<div style="width:80%;float:left">
<table style="width:100%;border:1px solid black;font-family: tahoma;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td style="border-bottom:1px solid black;padding:8px;heigth:5%;">
				<h3><?php echo $payslip->description; ?></h3>
				<p><?php echo ''; ?><p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<h4>NAME : <info style="font-weight:500;"><?php echo $payslip->full_name; ?></info></h4>
				<h4>NAME OF PROJECT/ DEPARMENT: <info style="font-weight:500;"><?php echo $payslip->department; ?></info></h4>
				<h4>PAY TYPE: <?php echo $payslip->payment_type; ?></h4>
				<h4>PERIOD COVERED: <info style="font-weight:500;"><?php echo date("m-d-Y", strtotime($payslip->pay_period_start))." - ".date("m-d-Y", strtotime($payslip->pay_period_end)); ?></info></h4>
			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	</thead>
</table>
<div style="width:33.33%;float:left">
<table style="width:100%;border:1px solid black;font-family: tahoma;border-top:0;font-size:11px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Basic Pay:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->reg_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Sunday Pay:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->sun_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Salary Adjustments:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($earning_salary_adjustment->total_earnings_salary_adjustments,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Allowance:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($earning_total_allowance->total_allowance,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">E.COLA:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->cola_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Other Income:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($other_earnings->total_other_earnings,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Total Regular OT:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->reg_ot_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Total Sunday OT:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->sun_ot_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Total Special Holiday:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->spe_hol_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Total Legal Holiday:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->reg_hol_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">NSD Reg:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->reg_nsd_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">NSD Sunday:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->sun_nsd_pay,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Days W/Pay:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->days_with_pay_amt,2); ?></p>
			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:33.33%;float:left">
<table style="width:100%;border:1px solid black;font-family: tahoma;border-top:0;border-left:0;font-size:11px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;">SSS Premium:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_sss_deduct->total_sss_deduct,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Philhealth:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_philhealth_deduct->total_philhealth_deduct,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Pag-ibig:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_pagibig_deduct->total_pagibig_deduct,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Withholding Tax:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_withholdingtax_deduct->total_withholdingtax_deduct,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">SSS Loan:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_sss_loan->total_sss_loan,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Pag-ibig Loan:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_pagibig_loan->total_pagibig_loan,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Cash Advance:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_cash_advance->total_cash_advance,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Minutes Late</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->minutes_late_amt,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">COOP LOAN</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_coop_loan->total_coop_loan,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">COOP CONTRIBUTION</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_coop_contribution->total_coop_contribution,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Calamity Loan</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><amount style="float:right;"><?php echo number_format($total_calamity_loan->total_calamity_loan,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Others:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($total_other_deduction->total_other_deduction,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Days W/O Pay:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->days_wout_pay_amt,2); ?></p>
			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:33.33%;float:left">
<table style="width:100%;border:1px solid black;font-family: tahoma;border-top:0;border-left:0;font-size:11px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Year to Date</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo ""; ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">YTD SALARY:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo ""; ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">YTD W/TAX:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo ""; ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Overtime Hours</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo ""; ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Regular Hours:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->reg,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Sundays:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->sun,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Regular OT Hours:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->ot_reg,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Sunday OT Hours:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->ot_sun,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Special Holiday Hours:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->spe_hol+$payslip->sun_spe_hol,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Legal Holiday Hours:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->reg_hol+$payslip->sun_reg_hol,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">NSD Reg Hours:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->nsd_reg+$payslip->nsd_reg_reg_hol+$payslip->nsd_reg_spe_hol,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">NSD Sun Hours:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->nsd_sun+$payslip->nsd_sun_reg_hol+$payslip->nsd_sun_spe_hol,2); ?></p>
			</td>
		</tr>
		<tr>
			<td>
				<p style="font-weight:bold;">--</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"></p>
			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:33.33%;float:left">
<table style="width:100%;border:1px solid black;font-family: tahoma;border-top:0;font-size:13px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Gross Pay:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->gross_pay,2); ?></p>
			</td>
		</tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:33.33%;float:left">
<table style="width:100%;border:1px solid black;font-family: tahoma;border-top:0;border-left:0;font-size:13px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;">Deductions:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;margin:5px;"><amount style="float:right;color:#c0392b;">
					<?php echo number_format($total_sss_deduct->total_sss_deduct+$total_philhealth_deduct->total_philhealth_deduct+$total_pagibig_deduct->total_pagibig_deduct+$total_withholdingtax_deduct->total_withholdingtax_deduct+$total_sss_loan->total_sss_loan+$total_pagibig_loan->total_pagibig_loan+$total_cash_advance->total_cash_advance+$total_coop_loan->total_coop_loan+$total_coop_contribution->total_coop_contribution+$total_calamity_loan->total_calamity_loan+$total_other_deduction->total_other_deduction+$payslip->days_wout_pay_amt+$payslip->minutes_late_amt,2); ?></amount></p>
			</td>
		</tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
<div style="width:33.33%;float:left">
<table style="width:100%;border:1px solid black;font-family: tahoma;border-top:0;border-left:0;font-size:13px;">
	<thead>
		<tr><td></td></tr>
		<tr>
			<td>
				<p style="font-weight:bold;text-align:right;">Net:</p>
			</td>
			<td align="right">
				<p style="font-weight:bold;"><?php echo number_format($payslip->net_pay,2); ?></amount></p>
			</td>
		</tr>
		<tr><td></td></tr>
	</thead>
</table>
</div>
</div>
<div style="width:20%;float:right">
<table style="width:100%;border:1px solid black;font-family: tahoma;font-size:11px;border-left:0;">
	<thead>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:bold;"><center>NAME:</center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:light;"><center><?php echo $payslip->full_name; ?></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:bold;"><center>NAME OF PROJECT/DEPARTMENT:</center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:light;"><center><?php echo $payslip->department."/<br>".$payslip->group_desc; ?></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:bold;"><center>PAY TYPE</center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:light;"><center><?php echo $payslip->payment_type; ?></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:bold;"><center>PERIOD COVERED</center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:light;"><center><?php echo date("m-d-Y", strtotime($payslip->pay_period_start))." - ".date("m-d-Y", strtotime($payslip->pay_period_end)); ?></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:8px;">
				<p style="font-weight:light;"><center><?php echo "I acknowledge that i receive the amount"; ?></center></p>
			</td>
		</tr>
		<tr>
			<td style="padding:21.6px;">
				<center><hr style="width:90%;color:black;"></hr>
					and have no further claims for the services rendered
				</center>
			</td>
		</tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr><td></td></tr>
		<tr>
			<td>
				<center><p style="font-weight:bold;">Employee Signature</p></center>
			</td>
		</tr>
	</thead>
</table>
</div>
