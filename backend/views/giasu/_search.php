<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GiasuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giasu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hoten') ?>

    <?= $form->field($model, 'ngaysinh') ?>

    <?= $form->field($model, 'gioitinh') ?>

    <?= $form->field($model, 'cmnd') ?>

    <?php // echo $form->field($model, 'anh') ?>

    <?php // echo $form->field($model, 'anhcmnd') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'sdt') ?>

    <?php // echo $form->field($model, 'svtruong') ?>

    <?php // echo $form->field($model, 'gvtruong') ?>

    <?php // echo $form->field($model, 'nganhhoc') ?>

    <?php // echo $form->field($model, 'diachi') ?>

    <?php // echo $form->field($model, 'luongyeucau') ?>

    <?php // echo $form->field($model, 'trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
