<!-- <div class="view"> -->

<?php /*	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locationx')); ?>:</b>
	<?php echo CHtml::encode($data->locationx); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locationy')); ?>:</b>
	<?php echo CHtml::encode($data->locationy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />
*/ ?>
<li class="span2.5">
	<div class="thumbnail">
		<?php 
		
		echo CHtml::link("<img src='images/".CHtml::encode($data->photo)."' >",array('view','id'=>$data->id)); 
		
	    ?>
             
               
	</div>
</li>

<!-- </div> -->