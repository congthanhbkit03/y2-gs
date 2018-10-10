<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Monhoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monhoc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'monhoc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
