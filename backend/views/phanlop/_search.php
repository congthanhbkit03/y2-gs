<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PhanlopSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phanlop-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lopday_id') ?>

    <?= $form->field($model, 'giasu_id') ?>

    <?= $form->field($model, 'hotengs') ?>

    <?= $form->field($model, 'dienthoaigs') ?>

    <?php // echo $form->field($model, 'trangthai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
