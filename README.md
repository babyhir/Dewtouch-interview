# Dewtouch-interview  - Zahir A.

Workstation

Question 1 - Record List Optimize

1: Navigate to Record display page / index.ctp
2. Add following code for time complete check

<?php
$time_start = microtime(TRUE);
$time_end = microtime(true);
$time = $time_end - $time_start;

$seconds = number_format($time,7); 
echo "<br> Total script time $seconds seconds\n";
?>

3. Observe complete time for query to display to verify performance.

4. Go to DB client to perform maintenance; (Ensure a backup copy available before changes) 

5. Select records Table, check all rows. Use Repair tables for Table maintenance.
REPAIR TABLE `records`

6. Select records Table, check all rows. Use Optimize tables for Table maintenance.
OPTIMIZE TABLE `records`

7. If still experience slowness, convert table's storage engine from InnoDB to MyISAM (small data footprint).
ALTER TABLE 'records' ENGINE=MYISAM







Question 2 - Pop up replace to Hover & output radio button value on new page.

1. Navigate to app/view/home/q1.ctp
2. Replace the following code inside style existing tag for .showDialog:hover

.showDialog:hover{
   visibility: hidden;
  width: 120px;
  background-color: grey;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;
  visibility: visible;
  position: absolute;
  z-index: 1;
}

3. To omit onclick for popup info, comment out or remove following code - 

$(document).ready(function(){
	$(".dialog").dialog({
		autoOpen: false,
		width: '1500px',
		modal: true,
		dialogClass: 'ui-dialog-blue'
	});

		$(".showDialog").click(function(){ var id = $(this).data('id'); $("#"+id).dialog('open'); });
