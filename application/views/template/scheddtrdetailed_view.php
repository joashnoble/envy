<style>
	td{
		white-space: nowrap;
	}
</style>
<?php

function getDatesFromRange($start, $end, $format = 'Y-m-d') {
    $array = array();
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    foreach($period as $date) {
        $array[] = $date->format($format);
    }

    return $array;
}

$dates = getDatesFromRange($period_days[0]->pay_period_start, $period_days[0]->pay_period_end);


/*$period_days[0]->pay_period_start;
$period_days[0]->pay_period_end;*/
?>

<div style="margin: 20px;">
	<div style="font-size: 11pt; width: 150%;">
	<?php include 'template_header.php';?>
		<strong>
			DTR Schedule ( Detailed ) <br />
			Pay Period : <?php echo $period_days[0]->pay_period_start." ~ ".$period_days[0]->pay_period_end; ?>
			<hr> <br />
		</strong>
	</div>
	<table class="table table-responsive">
		<thead>
		<tr style="border-top:1px solid gray;">
				<th >#</th>
				<th colspan="6" style="text-align:left;">Days</th>
			<?php
				$datecount=1;
				foreach($dates as $daterange){
					?>
					<th  class="text-center"><?php echo $datecount; ?></th>
					<?php
				$datecount++;
				}
			?>
			<th  class="text-center"></th>
		</tr>
		<tr>
			<th >#</th>
			<th colspan="6" style="text-align:left;">Date</th>
			<?php
				foreach($dates as $daterange){
					?>
					<th  class="text-center daterange" style="white-space: nowrap;"><?php echo $daterange; ?></th>
					<?php
				}
			?>
			<th  class="text-center"></th>
		</tr>
		<tr>
			<th >#</th>
			<th colspan="5" style="text-align:left;margin-left:5px;">Name</th>
			<th colspan="1" style="text-align:left;margin-left:5px;">Department</th>
			<?php
				foreach($dates as $daterange){
					?>
					<th  class="text-center daterange"><?php
						$timestamp = strtotime($daterange);
						echo date('l', $timestamp); ?></th>
					<?php
				}


			?>
			<th  class="text-center daterange">Total Hours</th>
			<th  class="text-center daterange">Total OT Hrs</th>
		</tr>
	</thead>
		<tr>
			<?php
			$rows=1;
			foreach ($schedules as $sched) {
				/*echo json_encode($schedules);*/
				$arr = explode(',', $sched->data_serial);
				?>
				<tr>
				<td><center><?php echo $rows; ?></center></td>
				<td colspan='5' class="details"><span style="margin-left:2px;"></span><?php echo $sched->full_name; ?></td>
				<td colspan='1' class="details"><span style="margin-left:2px;"></span><?php echo $sched->department; ?></td>

				<?php
            	$j=0;
            	$count = count($arr)-1;

            	foreach($dates as $dato){

            		for($j=$j;$j<=$count;$j++){
            			$arr2 = explode('=', $arr[$j]);
            			if($dato==$arr2[0]){
			                	?>
			                	<td><center><?php echo $arr2[1]; ?><center></td>
			                	<?php
												$j++;
											 goto next;
			            }
			            else{
			            	?>
			            	<td></td>
                        	<?php
     						goto next;
			            }

            		}
            		?>

                	<?php
            		next:

            	}
            	?>
							<td><center><?php echo $sched->totalhour; ?></center></td>
							<td><center><?php echo $sched->total_ot; ?></center></td>
            	</tr>
            	<?php
            	$rows++;
			}

			?>
		</tr>

	</table>
</div>
