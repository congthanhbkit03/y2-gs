<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Phanlop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phanlop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lopday_id')->textInput() ?>

    <?= $form->field($model, 'giasu_id')->textInput() ?>

    <?= $form->field($model, 'hotengs')->textInput() ?>

    <?= $form->field($model, 'dienthoaigs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trangthai')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
