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
