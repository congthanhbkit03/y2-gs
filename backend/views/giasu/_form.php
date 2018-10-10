<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Giasu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giasu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hoten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ngaysinh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gioitinh')->textInput() ?>

    <?= $form->field($model, 'cmnd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anhcmnd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sdt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'svtruong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gvtruong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nganhhoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'luongyeucau')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trangthai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
