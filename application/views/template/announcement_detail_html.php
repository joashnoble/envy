<style type="text/css">
	#tbl_leave{
		border-collapse: collapse !important; border: 1px solid #CFD8DC !important; width: 100% !important;
	}
	#tbl_leave td{
		padding: 8px !important;
		border: 1px solid #CFD8DC !important;
	}
	.header{
		background-color: #F5F5F5;
	}
	.title{
		font-weight: 600;
	}
</style>
	<div style="">
		<div class="col-md-12">
			<div class="row">
				<div class="div-tables">
					<div style="margin: 20px;">
					<table id="tbl_leave">
					<?php foreach($info as $row){?>
					<tr>
						<td colspan="2" class="header"><span class="title"><i class="fa fa-newspaper-o"></i> Announcement Title:</span> <?php echo $row->announcement_title;?></td>
						<td class="header" width="40%"><i class="fa fa-calendar-o"></i> <span class="title">Date & Time Announced</span>: <?php echo $row->datetime_created;?></td>
					</tr>
					<tr>
						<td><span class="title">Branch</span> : <?php echo $row->branch;?></td>
						<td><span class="title">Department</span> : <?php echo $row->department;?></td>
						<td><span class="title">Group</span> : <?php echo $row->group_desc;?> </td>
					</tr>
					<tr>
						<td colspan="3">
							<span class="title">Announcement</span>: <hr>
							<?php echo $row->announcement;?>
						</td>
					</tr>		
					<?php }?>
				</table>
				</div>
			</div>
		</div>
	</div>
	