<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'contacts-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
	),
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'locationx',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'locationy',array('class'=>'span5','maxlength'=>45)); ?>

	<div class="row">
		<div class="span5 ">

			<?php echo $form->labelEx($model,'photo'); ?>
			<?php echo CHtml::activeFileField($model, 'photo'); ?>  
			<?php echo $form->error($model,'photo'); ?>

		</div>
	</div>
	<br>
	<?php if($model->isNewRecord!='1'){ ?>
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->photo,"image",array("width"=>200)); ?>  

	<?php } ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
