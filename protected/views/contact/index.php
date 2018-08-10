<?php
/* @var $this SiteController */

$this->pageTitle="home";
?>
<?php 
   use yii\helpers\Html; 
?> 
<div class="row">
	<div >
  		<button type="button" class="btn btn-success">
  			<h2>
  				<?php echo CHtml::link('+',array('contact/add')); ?>
  			
  			</h2>
  		</button>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php $contact = Yii::app()->db->createCommand()
		->select('photo')
        ->from('contacts')
        ->where('id=:id', array(':id'=>1))
        ->queryRow(); 
        echo $contact['photo'];?>
	<div >
  		<form class="form-search">
 			<div class="input-append">
    			<input type="text" >
    			<button type="submit" class="btn">Search</button>
			</div>
		</form>
    </div>
</div>




