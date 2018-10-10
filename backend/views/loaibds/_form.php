<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Loaibds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loaibds-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenloai')->textInput(['maxlength' => true]) ?>
	<img src="" id="preLoaiimg" alt="" width="100">
    <?= $form->field($model, 'hinhanh')->textInput(['maxlength' => true, 'id' => 'loaiimg', 'placeholder' => 'Click vào để chọn ảnh!']) ?>

    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
