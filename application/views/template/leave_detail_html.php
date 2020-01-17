<style type="text/css">
	#tbl_leave{
		border-collapse: collapse !important; border: 1px solid #CFD8DC !important; width: 100% !important;
	}
	#tbl_leave td{
		padding: 8px !important;
		border: 1px solid #CFD8DC !important;
	}
	#name{
		background-color: #F5F5F5;
	}
	#title{
		font-weight: 600;
	}
</style>
	<div style="">
		<div class="col-md-12">
			<div class="row">
				<div class="div-tables">
					<div style="margin: 20px;">
					<table id="tbl_leave">
					<?php foreach($leaves as $row){?>
					<tr>
						<td colspan="4" id="name"><span id="title">Employee:</span> <?php echo $row->fullname;?></td>
					</tr>
					<tr>
						<td><span id="title">Leave Type</span> </td>
						<td><?php echo $row->leave_type;?></td>
						<td><span id="title">From date</span></td>
						<td><?php echo $row->date_time_from;?></td>
					</tr>
					<tr>
					</tr>
					<tr>
						<td><span id="title">Date Filed</span></td>
						<td><?php echo $row->date_filed;?></td>

						<td><span id="title">To date</span></td>
						<td><?php echo $row->date_time_to;?></td>
					</tr>
					<tr>
						<td><span id="title">Purpose</span></td>
						<td colspan="3"><?php echo $row->purpose;?></td>
					</tr>					
					<?php }?>
				</table>
				</div>
			</div>
		</div>
	</div>
	