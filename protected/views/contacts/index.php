<?php

?>
<br>
<div class="container">	
		<h1 style="display: inline; ">Contacts <?php echo CHtml::link("<i class='fas fa-plus-square'></i>",array('create')); ?></h1>
		
	<div  align="right">
		
	
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'post',
)); ?>


	<?php //echo $form->textFieldRow($models->name,'name',array('class'=>'span5','maxlength'=>45)); ?>
	<?php echo CHtml::textField('searchName','',array('class'=>'span3','maxlength'=>45,'onkeyup'=>'myFunction()','placeholder'=>'Search by names..')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

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


 			
		
<?php /*		
<div class="container">
	<div class="row">
		<ul class="thumbnails">
			<?php foreach($models as $model){	?>
            <li class="span2.5">
              <div class="thumbnail">
                <a href="/index.php?r=contacts/view&id=<?php echo $model->id; ?>"><img src="images/default.png" alt="your-photo"></a>
                <br>
                <?php echo $model->photo; ?>
               
              </div>
            </li>
            <?php } ?>     
        </ul>
	</div>
</div>
*/?>
<style>
icon-padding{
	padding-top: 100px;
}
img{
	width: 200px;
	height: 200px;
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