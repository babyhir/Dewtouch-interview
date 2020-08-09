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
							VALUES('$descriptionId','".$_POST["data[][description"][$a]."','".$_POST["data[][quantity]"][$a]."','".$_POST["data[][unit_price]"][$a]."')";

							mysqli_query($conn,$sql);
						}


						echo "<p> Input is added? </p>";

					}
				?>

<div class="alert  ">
<button class="close" data-dismiss="alert"></button>
Question: Advanced Input Field</div>

<p>
1. Make the Description, Quantity, Unit price field as text at first. When user clicks the text, it changes to input field for use to edit. Refer to the following video.

</p>


<p>
2. When user clicks the add button at left top of table, it wil auto insert a new row into the table with empty value. Pay attention to the input field name. For example the quantity field

<?php echo htmlentities('<input name="data[1][quantity]" class="">')?> ,  you have to change the data[1][quantity] to other name such as data[2][quantity] or data["any other not used number"][quantity]

</p>



<div class="alert alert-success">
<button class="close" data-dismiss="alert"></button>
The table you start with</div>

<table class="table table-striped table-bordered table-hover id="advancedEditableTable" class="table table-dark table-striped" style="width:100%;">
<thead>
<th><span id="add_item_button" class="btn mini green addbutton" onclick="addToObj=false">
											<i class="icon-plus"></i></span></th>
<th>Description</th>
<th>Quantity</th>
<th>Unit Price</th>
</thead>

<tbody id="tbody">
	<tr>
	<td></td>
	<td><textarea name="data[][description]" class="m-wrap  description required" rows="2" ></textarea></td>
	<td><input name="data[][quantity]" class="editMe"></td>
	<td><input name="data[][unit_price]"  class="editMe"></td>
	
</tr>


</tbody>

</table>


<p>
	<input type="submit" name="submit" value="Submit to DB">
</p>


<div class="alert alert-info ">
<button class="close" data-dismiss="alert"></button>
Video Instruction</div>

<p style="text-align:left;">
<video width="78%"   controls>
  <source src="<?php echo Router::url("/video/q3_2.mov") ?>">
Your browser does not support the video tag.
</video>
</p>





<?php $this->start('script_own');?>
<script>







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



	

</script>
<?php $this->end();?>

