<style type="text/css">
	th{
		border:1px solid black;
	}
	td{
		border:1px solid black;
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

<div>
	<table>
		<thead>
				<th colspan="6">&nbsp</th>
			<?php
				$datecount=1;
				foreach($dates as $daterange){
					?>
					<th  colspan="3"><?php echo $datecount; ?></th>
					<?php
				$datecount++;
				}
			?>

		</thead>
		<thead>
			<th colspan="6">&nbsp</th>
			<?php
				foreach($dates as $daterange){
					?>
					<th  colspan="3"><?php echo $daterange; ?></th>
					<?php
				}
			?>
		</thead>
		<thead>
			<th colspan="3">Department</th>
			<th colspan="3">Name</th>
			<?php
				for($i=1;$i<$datecount;$i++){
					?>
						<th>1st</th>
						<th>2nd</th>
						<th>3rd</th>
					<?php
				}
				
			?>
		</thead>
		<tbody>
			<?php

			/*$tst = getDatesFromRange('2017-05-01','2017-05-15');*/
				echo json_encode($schedules);
				$arr = explode(',', $schedules[0]->data_serial);

				/*echo json_encode($arr);*/

				echo "<td colspan='3'></td>";
                echo "<td colspan='3'>&nbsp</td>";
                    /*foreach($dates as $dt){
                    	$datecurrent = $dt;*/
                    	/*$count count($dates);*/
                    	$j=0;
                    	$count = count($arr)-1;

                    	foreach($dates as $dato){

                    		for($j=$j;$j<=$count;$j++){
                    			$arr2 = explode('=', $arr[$j]);
                    			if($dato==$arr2[0]){
					                echo "true";
					                $shift = explode(':',$arr2[1]);
					                if (in_array("1", $shift)) {
					                	echo "<td style='border:1px solid black;'><center>X</center></td>";
					                }
					                else{
					                	echo "<td style='border:1px solid black;'>&nbsp</td>";
					                }
					                if (in_array("2", $shift)) {
					                	echo "<td style='border:1px solid black;'><center>X</center></td>";
					                }
					                else{
					                	echo "<td style='border:1px solid black;'>&nbsp</td>";
					                }
					                if (in_array("3", $shift)) {
					                	echo "<td style='border:1px solid black;'><center>X</center></td>";
					                }
					                else{
					                	echo "<td style='border:1px solid black;'>&nbsp</td>";
					                }
					                $j++;
					                goto next;
					            }
					            else{
					            	echo "<td style='border:1px solid black;'>&nbsp</td>";
                                	echo "<td style='border:1px solid black;'>&nbsp</td>";
                                	echo "<td style='border:1px solid black;'>&nbsp</td>";
             						goto next;
					            }
					            
                    		}
                    		next:

                    	}

                    	/*echo $j;*/
                    	/*echo $dates[0];*/

                        /*foreach($arr as $row){
                                $test = explode('=',$row);
                                echo $dates[$i];
                                echo "<br>";*/
                                /*while($test[0]!=){

                                }*/
                                /*echo $dates[$i]."<br>";*/

                                /*if($test[0]==$dates[$i]){
                                	echo "aw";
                                	$test2 = explode(':', $test[1]);
                                	if (in_array("1", $test2)) {
									    echo "<td style='border:1px solid black;'>x</td>";
									}
									else{
										echo "<td style='border:1px solid black;'>&nbsp</td>";
									}
									if (in_array("2", $test2)) {
									    echo "<td style='border:1px solid black;'>x</td>";
									}
									else{
										echo "<td style='border:1px solid black;'>&nbsp</td>";
									}
									if (in_array("3", $test2)) {
									    echo "<td style='border:1px solid black;'>x</td>";
									}
									else{
										echo "<td style='border:1px solid black;'>&nbsp</td>";
									}
                                	
                                }
                                else{
                                	echo "<td style='border:1px solid black;'>&nbsp</td>";
                                	echo "<td style='border:1px solid black;'>&nbsp</td>";
                                	echo "<td style='border:1px solid black;'>&nbsp</td>";

                                }
                                $i++;*/
                            /*}*/

                    /*}*/
			?>
		</tbody>

	</table>
</div>