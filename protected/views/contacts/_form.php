<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'contacts-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
	),
)); ?>

	<div id="mapContianer">
		<?php echo ($model->isNewRecord)? "You can choose the location using the map:":"Edit/Set '".$model->name."' location"; ?>
		<div id="map"></div>
	</div>

	
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
	<?php if( $model->isNewRecord != '1' && !empty($model->photo) ){ 
		echo CHtml::checkBox('photoCheckbox', false, array("id"=>"photoCheckbox" , "onchange"=>'hidePhoto()'));?>
		Remove photo
		<br>
		
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->photo,"image",array("width"=>200,"id"=>"contactPhoto")); ?>  

	<?php } ?>
	
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>


<?php $this->endWidget(); ?>

<script>
function hidePhoto() {
  
  var checkBox = document.getElementById("photoCheckbox");
  
  if (checkBox.checked == true){
    document.getElementById("contactPhoto").style.display = "none" ;
  } 
  else{
  	document.getElementById("contactPhoto").style.display = "block";  ;
  }
}
function initMap() { 
	var markers=[];
	var isnewRecord= '<?php echo $model->isNewRecord;?>';
	var userLat= <?php echo (!empty($model->locationx))?$model->locationx:0;?>;
	var userLng= <?php echo (!empty($model->locationy))?$model->locationy:0;?>;
	 
	if( isnewRecord == '1'|| ( userLng ==0 && userLat == 0 ) ){
	    var myLatLng = {lat:31.963158, lng:35.930359};//amman location
	}
	else{
	    var myLatLng = {lat:userLat, lng:userLng};
	}
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: myLatLng
    });
    if( isnewRecord != '1' && ( userLng != 0 && userLat != 0 ) ){
	    var marker = new google.maps.Marker({
	      position: myLatLng,
	      map: map,
	      title: '<?php echo $model->name;?>'
	    });
	    markers.push(marker);
	}
    google.maps.event.addListener(map, 'click', function(event){
    	setMapOnAll(null);
    	
	    document.getElementById('Contacts_locationx').value = event.latLng.lat();
	    document.getElementById('Contacts_locationy').value = event.latLng.lng();
	    // Add marker
      	addMarker({coords:event.latLng});
    });
    // Add Marker Function
	function addMarker(props){
	   marker = new google.maps.Marker({
	      position:props.coords,
	      map:map,
	  });
	  markers.push(marker);
  	}

  function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
    markers = [];
  }

}
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDOflNwhCqZLhaUlWNe7sIJScvuREpLLE&callback=initMap"></script>

<style>
#contactPhoto {
	padding-top: 10px;
}
#map {
  	position: relative;
	overflow: overlay;
	border-style: ridge;
	height: 100%;
	width: 100%;
	/*float: right;*/
}
#mapContianer {
  	/*position: relative;*/
	/*overflow: overlay;*/
	/*border-style: ridge;*/
	height: 300px;
	width: 50%;
	float: right;
}
#contacts-form{
	width: 120%;
}
</style>