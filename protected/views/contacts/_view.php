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
		<div class='contactDetails'>
			<?php 
			if(!empty($data->photo)){
				echo CHtml::link(" <img src='images/".CHtml::encode($data->photo)."' title='".$data->name."' >",array('view','id'=>$data->id));
			}
			else{
				echo CHtml::link(" <img src='images/default.png' title='".$data->name."' >",array('view','id'=>$data->id));
			}
			echo "<div class='overlay'>".$data->name."<br> ".$data->phone."</div> ";
			
		    ?>
	             
	     </div>

	</div>
<br>
</li>

<!-- </div> -->