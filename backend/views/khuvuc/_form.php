<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Khuvuc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khuvuc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'khuvuc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
