<div>
	<div style="font-size: 11pt;">
	<?php include 'template_header.php';?>
	<strong>
		Daily Time Record <br />
		Employee Name : <?php if(count($scheddtr)!=0){ echo $scheddtr[0]->fullname;}else{echo "n/a";} ?> <br />
		Period Covered: <?php if(count($scheddtr)!=0){echo $scheddtr[0]->payperiod;}else{echo "n/a";} ?>
				<br />
				<hr><br />
			</strong>
		</div>

		<?php if(count($scheddtr)!=0){?>
					<table class="table table-striped" style="width:100%;">
						<thead class="thead-inverse">
							<tr>
								<th style="text-align: center;">#</th>
								<th><center>Date</center></th>
								<th><center>Clock In</center></th>
								<th><center>Clock Out</center></th>
								<th><center>Day Type</center></th>
								<th><center>Breaktime(hour)</center></th>
								<th><center>Regular Day</center></th>
								<th><center>Regular Sunday</center></th>
								<th><center>Regular Holiday</center></th>
								<th><center>Special Holiday</center></th>
								<th><center>Sunday Regular Holiday</center></th>
								<th><center>Sunday Special Holiday</center></th>
								<th><center>Regular O.T</center></th>
								<th><center>Sunday O.T</center></th>
								<th><center>Regular Holiday O.T</center></th>
								<th><center>Special Holiday O.T</center></th>
								<th><center>Sunday Regular Holilday O.T</center></th>
								<th><center>Sunday Special Holilday O.T</center></th>
								<th><center>Regular NSD</center></th>
								<th><center>Regular Sunday NSD</center></th>
								<th><center>Regular Holiday NSD</center></th>
								<th><center>Special Holiday NSD</center></th>
								<th><center>Sunday Regular Holiday NSD</center></th>
								<th><center>Sunday Special Holiday NSD</center></th>
							</tr>
						</thead>
						<tbody>
			<?php
						$total_breaktime=0;
						$total_periodhrs=0;
						$total_minutelate=0;
						$total_ot = 0;
						$count=1;

						$regular_day=0;
						$regular_sunday=0;
						$regular_holiday=0;
						$special_holiday=0;
						$sunday_regular_holiday=0;
						$sunday_special_holiday=0;
						$regular_ot=0;
						$sunday_ot=0;
						$regular_hol_ot=0;
						$special_hol_ot=0;
						$sunday_regular_hol_ot=0;
						$sunday_special_hol_ot=0;
						$regular_nsd=0;
						$regular_sunday_nsd=0;
						$regular_hol_nsd=0;
						$special_hol_nsd=0;
						$sunday_regular_hol_nsd=0;
						$sunday_special_hol_nsd=0;
						foreach($scheddtr as $result){
 						//  $timelate = abs($result->timelate-$result->breaktime);
 						if($result->timelate==null || $result->timelate==''){
 							$timelate="";
 						}
 						else{
 							$timelate=abs($result->timelate);
 						}
						$time_in_temp=explode(" ",$result->time_in);
						$time_out_temp=explode(" ",$result->time_out);

						$clock_in_temp=explode(" ",$result->clock_in);
						if(isset($clock_in_temp[1])==''){
							$clock_in_temp[1]='';
						}
						$clock_out_temp=explode(" ",$result->clock_out);
						if(isset($clock_out_temp[1])==''){
							$clock_out_temp[1]='';
						}
						?>
						<tr>
							<td><center><?php echo $count;?>.</center></td>
						 	<td><center><?php echo $result->date; ?></center></td>
							<td><center><?php echo $clock_in_temp[1]; ?></center></td>
							<td><center><?php echo $clock_out_temp[1]; ?></center></td>
							<td><center><?php echo $result->daytype; ?></center></td>
							<td><center><?php echo $result->breaktime; ?></center></td>
							<!-- <td><center><?php echo $result->newhour; ?></center></td> -->
							<td><center><?php echo $result->regular_day; ?></center></td>
							<td><center><?php echo $result->regular_sunday; ?></center></td>
							<td><center><?php echo $result->regular_holiday; ?></center></td>
							<td><center><?php echo $result->special_holiday; ?></center></td>
							<td><center><?php echo $result->sunday_regular_holiday; ?></center></td>
							<td><center><?php echo $result->sunday_special_holiday; ?></center></td>
							<td><center><?php echo $result->regular_ot; ?></center></td>
							<td><center><?php echo $result->sunday_ot; ?></center></td>
							<td><center><?php echo $result->regular_hol_ot; ?></center></td>
							<td><center><?php echo $result->special_hol_ot; ?></center></td>
							<td><center><?php echo $result->sunday_regular_hol_ot; ?></center></td>
							<td><center><?php echo $result->sunday_special_hol_ot; ?></center></td>
							<td><center><?php echo $result->regular_nsd; ?></center></td>
							<td><center><?php echo $result->regular_sunday_nsd; ?></center></td>
							<td><center><?php echo $result->regular_hol_nsd; ?></center></td>
							<td><center><?php echo $result->special_hol_nsd; ?></center></td>
							<td><center><?php echo $result->sunday_regular_hol_nsd; ?></center></td>
							<td><center><?php echo $result->sunday_special_hol_nsd; ?></center></td>

						</tr>

						<?php
							$total_breaktime+=$result->breaktime;
							$total_periodhrs+=$result->newhour;
							$total_minutelate+=$timelate;
							$total_ot+=$result->ottime;

							$regular_day+=$result->regular_day;
							$regular_sunday+=$result->regular_sunday;
							$regular_holiday+=$result->regular_holiday;
							$special_holiday+=$result->special_holiday;
							$sunday_regular_holiday+=$result->sunday_regular_holiday;
							$sunday_special_holiday+=$result->sunday_special_holiday;
							$regular_ot+=$result->regular_ot;
							$sunday_ot+=$result->sunday_ot;
							$regular_hol_ot+=$result->regular_hol_ot;
							$special_hol_ot+=$result->special_hol_ot;
							$sunday_regular_hol_ot+=$result->sunday_regular_hol_ot;
							$sunday_special_hol_ot+=$result->sunday_special_hol_ot;
							$regular_nsd+=$result->regular_nsd;
							$regular_sunday_nsd+=$result->regular_sunday_nsd;
							$regular_hol_nsd+=$result->regular_hol_nsd;
							$special_hol_nsd+=$result->special_hol_nsd;
							$sunday_regular_hol_nsd+=$result->sunday_regular_hol_nsd;
							$sunday_special_hol_nsd+=$result->sunday_special_hol_nsd;

							$count++;
 					 }
					 ?>
					 <tr>
						 <td colspan="25" style="border-bottom: 1px solid #95a5a6 !important;"></td>
					 </tr>
						 <tr>
							 <td colspan="4"></td>
							 <td><center><b>Total</b></center></td>
							 <td><center><b><?php echo $total_breaktime; ?> Hr</center><b></td>
							 <td><center><b><?php echo $regular_day; ?> Hr</center><b></td>
							 <td><center><b><?php echo $regular_sunday; ?> Hr</center><b></td>
							 <td><center><b><?php echo $regular_holiday; ?> Hr</center><b></td>
							 <td><center><b><?php echo $special_holiday; ?> Hr</center><b></td>
							 <td><center><b><?php echo $sunday_regular_holiday; ?> Hr</center><b></td>
							 <td><center><b><?php echo $sunday_special_holiday; ?> Hr</center><b></td>
							 <td><center><b><?php echo $regular_ot; ?> Hr</center><b></td>
							 <td><center><b><?php echo $sunday_ot; ?> Hr</center><b></td>
							 <td><center><b><?php echo $regular_hol_ot; ?> Hr</center><b></td>
							 <td><center><b><?php echo $special_hol_ot; ?> Hr</center><b></td>
							 <td><center><b><?php echo $sunday_regular_hol_ot; ?> Hr</center><b></td>
							 <td><center><b><?php echo $sunday_special_hol_ot; ?> Hr</center><b></td>
							 <td><center><b><?php echo $regular_nsd; ?> Hr</center><b></td>
							 <td><center><b><?php echo $regular_sunday_nsd; ?> Hr</center><b></td>
							 <td><center><b><?php echo $regular_hol_nsd; ?> Hr</center><b></td>
							 <td><center><b><?php echo $special_hol_nsd; ?> Hr</center><b></td>
							 <td><center><b><?php echo $sunday_regular_hol_nsd; ?> Hr</center><b></td>
							 <td><center><b><?php echo $sunday_special_hol_nsd; ?> Hr</center><b></td>

						 </tr>
						 <tr>
							 <td colspan="4"><center><b>Grand Total</b></center></td>
							 <td><center><b><?php echo ($regular_day+$regular_sunday+$regular_holiday+$special_holiday+$sunday_regular_holiday+
							 $sunday_special_holiday+$regular_ot+$sunday_ot+$regular_hol_ot+$special_hol_ot+$sunday_regular_hol_ot+
							 $sunday_special_hol_ot+$regular_nsd+$regular_sunday_nsd+$regular_hol_nsd+$special_hol_nsd+$sunday_regular_hol_nsd+$sunday_special_hol_nsd)-$total_breaktime; ?> Hr</center><b></td>
							 <td colspan="19"></td>
						 </tr>
					 <?php
					}
					else{
						echo "<center><h3>No Data</h3></center>";
					}
			?>
</tbody>
</table>
</div>
