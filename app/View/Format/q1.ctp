
<div id="message1">


<?php echo $this->Form->create('Type',array('id'=>'form_type','type'=>'file','class'=>'','method'=>'POST','autocomplete'=>'off','inputDefaults'=>array(
				
				'label'=>false,'div'=>false,'type'=>'text','required'=>false)))?>
	
<?php echo __("Hi, please choose a type below:")?>
<br><br>

<?php $options_new = array(
 		'Type1' => __('<span class="showDialog" data-id="dialog_1" style="color:blue">Type1</span><div id="dialog_1" class="hide dialog" title="Type 1">
 				<span style="display:inline-block"><ul><li>Description .......</li>
 				<li>Description 2</li></ul></span>
 				</div>'),
		'Type2' => __('<span class="showDialog" data-id="dialog_2" style="color:blue">Type2</span><div id="dialog_2" class="hide dialog" title="Type 2">
 				<span style="display:inline-block"><ul><li>Desc 1 .....</li>
 				<li>Desc 2...</li></ul></span>
 				</div>')


		);?>

<?php echo $this->Form->input('type', array('legend'=>false, 'type' => 'radio', 'options'=>$options_new,'before'=>'<label class="radio line notcheck">','after'=>'</label>' ,'separator'=>'</label><label class="radio line notcheck">'));
?>


<?php echo $this->Form->end();?>

<button onclick="myFunction()">Save</button>

<script>
function myFunction() {

	var x = document.getElementById("dialog_1").innerHTML;
	var y = document.getElementById("dialog_2").innerHTML;

	if(document.getElementById("TypeTypeType1").checked)
		{
		  document.write(x);
		}
if (document.getElementById("TypeTypeType2").checked)
{
  document.write(y);
}

if (document.getElementById("TypeTypeType2").checked=== false && document.getElementById("TypeTypeType1").checked=== false)
{
  document.write("No choice. Refresh page and go back to choose from the Radio button.");
}

  
}
</script>


<script>

</script>

	





</div>

<style>
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

#message1 .radio{
	vertical-align: top;
	font-size: 13px;
}

.control-label{
	font-weight: bold;
}

.wrap {
	white-space: pre-wrap;
}

</style>

<?php $this->start('script_own')?>
<script>


})


</script>
<?php $this->end()?>