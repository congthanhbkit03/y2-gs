<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bds-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-md-9">
            <?= $form->field($model, 'loai_id')->dropDownList(
                $dataloai,
                ['prompt' => '-Chon loai bat dong san-']
            ); 
            ?>

            <?= $form->field($model, 'tieude')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'gioithieu')->textarea(['rows' => 4, 'id' => 'gioithieu']) ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'lat')->textInput(['id'=>'lat']) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'lng')->textInput(['id'=>'lng']) ?>
                </div>
            </div>   

            <div id="map"></div>
            <script>
              function initMap() {

                var lat = document.querySelector('#lat').value;
                var lng = document.querySelector('#lng').value;

                console.log('lat: ' + lat);
                if (lat == "" || lng == "")
                    var myLatlng = {lat: 15.122936, lng: 108.804726};
                else 
                    var myLatlng = {lat: parseFloat(lat), lng: parseFloat(lng)};

                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 11,
                  center: myLatlng
                });

                var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: 'Click to zoom'
                });

                 map.addListener('click', function(event) {
                    //alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() );
                    // var ll = event.getLatLng();
                    document.querySelector('#lat').value = event.latLng.lat();
                    document.querySelector('#lng').value = event.latLng.lng();

                    marker.setPosition(event.latLng);
                    // marker = new google.maps.Marker({
                    //     position: event.latLng,
                    //     map: map
                    //   });

                  });

              }
            </script>
        </div>
        <div class="col-md-3">
            <img src="" id="preAvatarimg" alt="" width="100">

            <?= $form->field($model, 'avatar')->textInput(['maxlength' => true, 'id'=> 'avatar', 'placeholder' => 'Click vào đây để chọn ảnh']) ?>
            
            <?= $form->field($upload, 'hinhanh[]')->fileInput(['multiple'=>true]) ?>
                
            <?= $form->field($model, 'dientich')->textInput() ?>

            
            <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>
            
            <?= $form->field($model, 'tinh')->dropDownList(
                $dataTinh) ?>

             <?= $form->field($model, 'huyen')->dropDownList(
                $dataHuyen, ['prompt' => '-Chon Huyen-',
                    'onchange' => '
                        $.get(
                            "'.Url::toRoute('ward/listward?id=').'"+$(this).val(),
                            function(data){
                                $("#bds-xa").html(data);
                            }
                        )
                    '
                ]) ?>
           
    
            <?= $form->field($model, 'xa')->dropDownList($dataXa,
                ['prompt' => '-Chon Xa-']) ?>           
            

            <?= $form->field($model, 'giaban')->textInput() ?>

            <?= $form->field($model, 'giathue')->textInput() ?>

            <?= $form->field($model, 'sotang')->textInput() ?>

            <?= $form->field($model, 'sophongngu')->textInput() ?>

            <?= $form->field($model, 'sophongtam')->textInput() ?>

            <?= $form->field($model, 'cachcho')->textInput() ?>

            <?= $form->field($model, 'cachsieuthi')->textInput() ?>

            <?= $form->field($model, 'cachbenhvien')->textInput() ?>

            <?= $form->field($model, 'cachtruonghoc')->textInput() ?>

            <?= $form->field($model, 'namxay')->textInput() ?>


            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    

    

    <?php ActiveForm::end(); ?>

</div>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyC9OwKyQvKknY6joIiXwaIRR_VoS64LMPg
&callback=initMap">
</script>