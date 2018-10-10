<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LopdaySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lopday-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'monhoc_id') ?>

    <?= $form->field($model, 'caphoc_id') ?>

    <?= $form->field($model, 'khuvuc_id') ?>

    <?= $form->field($model, 'diachi') ?>

    <?php // echo $form->field($model, 'sobuoi') ?>

    <?php // echo $form->field($model, 'thoigian') ?>

    <?php // echo $form->field($model, 'mucluong') ?>

    <?php // echo $form->field($model, 'yeucau') ?>

    <?php // echo $form->field($model, 'tennguoidk') ?>

    <?php // echo $form->field($model, 'sdtnguoidk') ?>

    <?php // echo $form->field($model, 'trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
