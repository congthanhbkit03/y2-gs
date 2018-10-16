<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model backend\models\Lopday */
/* @var $form yii\widgets\ActiveForm */
?>

<h2>Gia su dang ky tai khoan</h2>
<div class="lopday-form">
    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($giasu, 'hoten')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'ngaysinh')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'gioitinh')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'email')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'sdt')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'matkhau')->textInput(['maxlength' => true]) ?>    
            <?= $form->field($giasu, 'diachi')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'cmnd')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'fanh')->fileInput() ?>
            <?= $form->field($giasu, 'fanhcmnd')->fileInput() ?>
            <?= $form->field($giasu, 'svtruong')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'gvtruong')->textInput(['maxlength' => true]) ?>
            <?= $form->field($giasu, 'nganhhoc')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($giasumonhoc, 'monhoc_id')->checkboxList($monhoc, [
                  //'separator' => '<br>',
                  'itemOptions' => [
                  'class' => 'mh'
                 ]
                 ])->label('Môn học <label><input type="checkbox" id="checkAll1">Check All</label>');
            ?>

            <?= $form->field($giasucaphoc, 'caphoc_id')->checkboxList($caphoc, [
                  //'separator' => '<br>',
                  'itemOptions' => [
                  'class' => 'ch'
                 ]
                 ])->label('Cấp học <label><input type="checkbox" id="checkAll2">Check All</label>');
            ?>
            <?= $form->field($giasukhuvuc, 'khuvuc_id')->checkboxList($khuvuc, [
                  //'separator' => '<tab>',
                  'itemOptions' => [
                  'class' => 'kv col-md-1'
                 ]
                 ])->label('Khu vực <label><input type="checkbox" id="checkAll3">Check All</label>');
            ?>
            <?= $form->field($giasu, 'luongyeucau')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    

    <?php ActiveForm::end(); ?>
    

    <?php $this->registerJsFile('backend/web/js/checkall.js', ['depends' => [backend\assets\AppAsset::className()]]); ?> 



</div>
