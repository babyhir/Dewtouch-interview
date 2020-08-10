# Dewtouch-interview  - Zahir A.

Workstation

Run with XAMP, apache, mysql
PHP 7.0.4 && PHP 7.2

#Question 1 - Record List Optimize

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







#Question 2 - Pop up replace to Hover & output radio button value on new page.

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
		
		
		
		
#Question 3 - Input field Text Store


1. Navigate to q1.ctp

2. To use the [+] ADD NEW row button, we require to  call a button functon to add an iterated row (insertRow()).

	var items = 0;

$(document).ready(function(){

	$("#add_item_button").click(function(){

		items++;
		var html = "<tr>";
		html += "<td>" + items + "</td>";

		html += "<td><input name='data[][description]'></td>";
		html += "<td><input name='data[][quantity]'></td>";
		html += "<td><input name='data[][unit_price]'></td>";

		html += "</tr>";
		
		document.getElementById("tbody").insertRow().innerHTML = html;
	
		});
});



3. To insert into DB "input" include the following on top of same file.

<form method="POST" action="">
				<?php

					if (isset($_POST["submit"]))
					{
						$conn = mysqli_connect("localhost","root","","db");
						$description = $_POST["description"];

						$sql = "INSERT INTO input VALUES ('$description')";
						mysqli_query($conn,$sql);
						$descriptionId = mysqli_insert_id($conn);

						for($a = 0;$a < count($_POST['data[][description]']);$a++)
						{
							$sql = "INSERT INTO input (description, quantity, unitprice)
							VALUES('$descriptionId','".$_POST["data[][description"][$a]."','".$_POST["data[][quantity]"]								[$a]."','".$_POST["data[][unit_price]"][$a]."')";

							mysqli_query($conn,$sql);
						}


						echo "<p> Input is added? </p>";

					}
				?>
						}
						
						
Question 4 - File Upload (index.ctp)

1. Navigate to index.ctp
2. Setup FileReady using jquery adding

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
3. Add following code to onClick .ready(function()). This will created rows for each lines found(\n).

                var rdr = new FileReader();
                rdr.onload = function (e) {
                  //get the rows into an array
                  var therows = e.target.result.split("\n");
                  //loop through the rows
                  var d = new Date();
				  //var set_time = d.getTime();
				  var final_time = d.toLocaleString()

                  for (var row = 0; row < therows.length; row++ ) {
                    //build a new table row
                    //get the columns into an array
                    var columns = therows[row].split(",");
                    //get number of columns
                    var colcount=columns.length;


                    var newrow = "<tr><td>"+row+"</td><td>"+columns[0]+"</td><td>"+columns[1]+"</td><td>"+final_time+"</td></tr>";

                   
					$('#tableMain').append(newrow);	



Question 4 - File Upload (index.ctp)

1. Navigate to index.ctp
2. Setup FileReady using jquery adding

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
3. Add following code to onClick .ready(function()). This will created rows for each lines found(\n).

                var rdr = new FileReader();
                rdr.onload = function (e) {
                  //get the rows into an array
                  var therows = e.target.result.split("\n");
                  //loop through the rows
                  var d = new Date();
				  //var set_time = d.getTime();
				  var final_time = d.toLocaleString()

                  for (var row = 0; row < therows.length; row++ ) {
                    //build a new table row
                    //get the columns into an array
                    var columns = therows[row].split(",");
                    //get number of columns
                    var colcount=columns.length;


                    var newrow = "<tr><td>"+row+"</td><td>"+columns[0]+"</td><td>"+columns[1]+"</td><td>"+final_time+"</td></tr>";

                   
					$('#tableMain').append(newrow);	



4. Navigate to and select FileUpload.csv inside webroot/filesf
fffff



Question 4 - File Upload (index.ctp)

1. Navigate to index.ctp
2. Setup FileReady using jquery adding

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
3. Add following code to onClick .ready(function()). This will created rows for each lines found(\n).

                var rdr = new FileReader();
                rdr.onload = function (e) {
                  //get the rows into an array
                  var therows = e.target.result.split("\n");
                  //loop through the rows
                  var d = new Date();
				  //var set_time = d.getTime();
				  var final_time = d.toLocaleString()

                  for (var row = 0; row < therows.length; row++ ) {
                    //build a new table row
                    //get the columns into an array
                    var columns = therows[row].split(",");
                    //get number of columns
                    var colcount=columns.length;


                    var newrow = "<tr><td>"+row+"</td><td>"+columns[0]+"</td><td>"+columns[1]+"</td><td>"+final_time+"</td></tr>";

                   
					$('#tableMain').append(newrow);	




Question 4 - File Upload (index.ctp)

1. Navigate to index.ctp
2. Setup FileReady using jquery adding

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
3. Add following code to onClick .ready(function()). This will created rows for each lines found(\n).


                var rdr = new FileReader();
                rdr.onload = function (e) {
                  //get the rows into an array
                  var therows = e.target.result.split("\n");
                  //loop through the rows
                  var d = new Date();
				  //var set_time = d.getTime();
				  var final_time = d.toLocaleString()
				  
		for (var row = 0; row < therows.length; row++ ) {
                    //build a new table row
                    //get the columns into an array
                    var columns = therows[row].split(",");
                    //get number of columns
                    var colcount=columns.length;


                    var newrow = "<tr><td>"+row+"</td><td>"+columns[0]+"</td><td>"+columns[1]+"</td><td>"+final_time+"</td></tr>";

                   
					$('#tableMain').append(newrow);

4. Navigate to and select FileUpload.csv inside webroot/files
