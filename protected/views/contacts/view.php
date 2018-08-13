<?php
$this->breadcrumbs=array(
	'view contact',
);

?>

<br>
		<div class="span7 well" style="background-color: #d4d4d445;">
            <div class="row">
            	<div align="right">
            		<h4>

        			<?php	echo CHtml::link("<i class='fas fa-user-edit '></i>",array('update','id'=>$model->id)); ?>
        			&ensp;&ensp;
        			<?php	echo CHtml::link("<i class='fas fa-trash-alt' style='color: firebrick;'></i>",'#',array('submit'=>array('contacts/delete','id'=>$model->id),'confirm' => 'Are you sure you want delete '.$model->name.'?')); ?>
        			
        			</h4>
        		</div>
        		<div class="span2 ">
        			<?php if(!empty($model->photo)){
						echo "<img src='images/".CHtml::encode($model->photo)."'border='5' style=' border-radius: 50%; ' >";
					}
					else {
						echo "<img src='images/default.png'border='5' style=' border-radius: 50%; ' >";
					}
					?>
        		</div>
        		<div class="span4" style="padding-top: 50px; font-size: 18px;">
        			<p><strong>Name: </strong>&ensp;&ensp;<?php echo $model->name;?> </p>
                  	<p><strong>Phone:</strong>&ensp;&ensp;<?php echo $model->phone;?></p>
        			
        		</div>
        	</div>
        	<br>
        	<?php if(!empty($model->locationx) && !empty($model->locationx)){?>
          	<div id="map" ></div>
         <?php }?>
        </div>


    <style>
      
      #map {
      	position: relative;
    	overflow: overlay;
    	border-style: ridge;
	    height: 400px;
    	width: 100%;
      }
      
    </style>



    <script>

      function initMap() { 
        var myLatLng = {lat: <?php echo $model->locationx;?>, lng: <?php echo $model->locationy;?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: '<?php echo $model->name;?>'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDOflNwhCqZLhaUlWNe7sIJScvuREpLLE&callback=initMap">
    </script>
