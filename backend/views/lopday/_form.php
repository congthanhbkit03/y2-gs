<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Lopday */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lopday-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'monhoc_id')->textInput() ?>

    <?= $form->field($model, 'caphoc_id')->textInput() ?>

    <?= $form->field($model, 'khuvuc_id')->textInput() ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sobuoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thoigian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mucluong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yeucau')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tennguoidk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sdtnguoidk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trangthai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
