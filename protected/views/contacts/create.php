<?php
$this->breadcrumbs=array(
	// 'Contacts'=>array('index'),
	'Create',
);
?>

<h1>Add Contact</h1>


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