<?php
$this->breadcrumbs=array(
	// 'Contacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contacts','url'=>array('index')),
	
);
?>

<h1>Add Contact</h1>


<?php //echo CHtml::image('images/default.png', 'your-photo'); ?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<style>
.img-circle {
    border-radius: 50%;
}




.img-responsive {
    display: block;
    height: auto;
    max-width: 100%;
}
</style>