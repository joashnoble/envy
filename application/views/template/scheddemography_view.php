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
		<?php include 'template_header.php';?>
		<strong>
			Schedule Demography <br/>
			Pay Period : <?php echo $period_days[0]->pay_period_start." ~ ".$period_days[0]->pay_period_end; ?>
		</strong>
		<hr><br />
	<table class="table table-responsive">
		<thead>
		<tr style="border-top:1px solid gray;">
				<th >#</th>
				<th colspan="6" style="text-align:left;">Days</th>
			<?php
				$datecount=1;
				foreach($dates as $daterange){
					?>
					<th  colspan="3" class="text-center"><?php echo $datecount; ?></th>
					<?php
				$datecount++;
				}
			?>

		</tr>
		<tr>
			<th >#</th>
			<th colspan="6" style="text-align:left;">Date</th>
			<?php
				foreach($dates as $daterange){
					?>
					<th  colspan="3" class="text-center daterange"><?php echo $daterange; ?></th>
					<?php
				}
			?>
		</tr>
		<tr>
			<th >#</th>
			<th colspan="5" style="text-align:left;margin-left:5px;">Name</th>
			<th colspan="1" style="text-align:left;margin-left:5px;">Department</th>
			<?php
				for($i=1;$i<$datecount;$i++){
					?>
						<th class="shift"><center><span style="color:#1B5E20 !important;">S1<span></center></th>
						<th class="shift"><center><span style="color:#01579B !important;">S2<span></center></th>
						<th class="shift"><center><span style="color:#DD2C00 !important;">S3<span></center></th>
					<?php
				}

			?>
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
			                /*echo "true";*/
			                $shift = explode(':',$arr2[1]);
			                if (in_array("1", $shift)) {
			                	?>
			                	<td class="checks" style="background-color:#27ae60 !important;border:1px solid black;"><!-- <center><span style="background-color:#1B5E20 !important;font-weight: bold;">&nbsp</span></center> --></td>
			                	<?php
			                }
			                else{
			                	?>
			                	<td class="checks"><center></center></td>
			                	<?php
			                }
			                if (in_array("2", $shift)) {
			                	?>
			                	<td class="checks" style="background-color:#2980b9 !important;border:1px solid black;"><!-- <center><span style="background-color:#01579B !important;font-weight: bold;">&nbsp</span></center> --></td>
			                	<?php
			                }
			                else{
			                	?>
			                	<td class="checks"><center></center></td>
			                	<?php
			                }
			                if (in_array("3", $shift)) {
			                	?>
			                	<td class="checks" style="background-color:#e74c3c !important;border:1px solid black;"><!-- <center><span style="background-color:#DD2C00 !important;font-weight: bold;">✔</span></center> --></td>
			                	<?php
			                }
			                else{
			                	?>
			                	<td class="checks" ><center></center></td>
			                	<?php
			                }
			                $j++;
			                goto next;
			            }
			            else{
			            	?>
			            	<td class="checks">&nbsp</td>
                        	<td class="checks">&nbsp</td>
                        	<td class="checks">&nbsp</td>
                        	<?php
     						goto next;
			            }

            		}
            		?>
	            	<td >&nbsp</td>
                	<td >&nbsp</td>
                	<td >&nbsp</td>
                	<?php
            		next:

            	}
            	?>
            	</tr>
            	<?php
            	$rows++;
			}

			?>
		</tr>

	</table>
</div>
