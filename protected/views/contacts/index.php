<?php

?>
<br>
<br>
<div class="container">	
		<h1 style="display: inline; ">Contacts <?php echo CHtml::link("<i class='fas fa-plus-square'></i>",array('create')); ?></h1>
	<div  align="right">
		<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'post',
		)); ?>
		<?php echo CHtml::textField('searchName',$searchName,array('class'=>'span3 ','maxlength'=>45,'onkeyup'=>'myFunction()','placeholder'=>'Search by names..')); ?>
		
    	<a href="javascript:{}" onclick="document.getElementById('yw0').submit();"><i class="fas fa-search"></i></a>
        
		
    	&ensp;
		<?php echo CHtml::link("Advanced",array('admin'), array('class'=>'btn btn-primary')); ?>
		<?php $this->endWidget(); ?>
	</div>

		<ul class="thumbnails" id="addressList">
			
			<?php
			  $this->widget('bootstrap.widgets.TbListView',array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_view',
			)); 
			?>
			
 		</ul>
	
</div>


 			

<style>
div.contactDetails {
  position: relative;
  width: 100%;
}
.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 80%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.contactDetails:hover .overlay {
  opacity: 1;
}
icon-padding{
	padding-top: 100px;
}
img{
	width: 200px;
	height: 200px;
}
input.span3, textarea.span3, .uneditable-input.span3{
	margin-top:12px;
	width: 180px;
}
</style>

<script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('searchName');
    filter = input.value.toUpperCase();
    ul = document.getElementById('addressList');
    li = ul.getElementsByTagName('li');
console.log(li);
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>