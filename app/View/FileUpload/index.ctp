<head>
<style>
	<meta charset="utf-8" />
        <style>
            #container,#buttondiv{
                margin:0 auto;
                width:80%;
                overflow:auto;
            }
            table.gridtable {
                margin:0 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:14px;
                color:#333333;
                border-width: 1px;
                border-color: #666666;
                border-collapse: collapse;
                text-align: center;
            }
            table.gridtable th {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #F6B4A5;
            }
            table.gridtable td {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
            }
            .badrowcount {
              background-color: coral;
            }
            .notnumeric {
              background-color: yellow;
            }
</style>



</head>


<div class="row-fluid">
	<div class="alert alert-info">
		<h3>File Upload Question</h3>
	</div>

	<p>Complete the File Upload feature and import the attached <?php echo $this->Html->link('<i class="icon-share
"></i> CSV file', '/files/FileUpload.csv', array('escape' => false)); ?>. Imported data will be shown below.</p>
	<p><em>* score will be given for filetype/mimetype checks</em></p>

	<hr />

	<div class="alert">
		<h3>Import Form</h3>
	</div>
	<!-- Initial setup skeleton
<?php
echo $this->Form->create('FileUpload');
echo $this->Form->input('file', array('label' => 'File Upload', 'type' => 'file'));
echo $this->Form->submit('Upload', array('class' => 'btn btn-primary'));
echo $this->Form->end();
?>
-->

      <div id="buttondiv">
        <input type="file" id="inputfile" /></br>
        <input type="button" id="viewfile" value="Upload" />
        <br><br>
      </div>
      <div class="container" id="container">
        <table class="gridtable" id="tableMain">
            <thead>
              <tr class="tableheader">
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>TIME CREATED</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
      </div>

	<hr />

	<div class="alert alert-success">
		<h3>Data Imported</h3>
	</div>
	<html>
    <head>
        <title>Import csv file with jquery</title>
        <meta charset="utf-8" />
        <style>
            #container,#buttondiv{
                margin:0 auto;
                width:80%;
                overflow:auto;
            }
            table.gridtable {
                margin:0 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:14px;
                color:#333333;
                border-width: 1px;
                border-color: #666666;
                border-collapse: collapse;
                text-align: center;
            }
            table.gridtable th {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
                background-color: #F6B4A5;
            }
            table.gridtable td {
                border-width: 1px;
                padding: 8px;
                border-style: solid;
                border-color: #666666;
            }
            .badrowcount {
              background-color: coral;
            }
            .notnumeric {
              background-color: yellow;
            }
        </style>
    </head>

    <body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $( document ).ready(function() {

            $('#viewfile').click(function () {

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

				  }
                }
                rdr.readAsText($("#inputfile")[0].files[0]);
            });
        });
    </script>

    </body>
</html>