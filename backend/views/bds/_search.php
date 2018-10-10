<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BdsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bds-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tieude') ?>

    <?= $form->field($model, 'gioithieu') ?>

    <?= $form->field($model, 'dientich') ?>

    <?= $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'long') ?>

    <?php // echo $form->field($model, 'diachi') ?>

    <?php // echo $form->field($model, 'xa') ?>

    <?php // echo $form->field($model, 'huyen') ?>

    <?php // echo $form->field($model, 'tinh') ?>

    <?php // echo $form->field($model, 'giaban') ?>

    <?php // echo $form->field($model, 'giathue') ?>

    <?php // echo $form->field($model, 'sotang') ?>

    <?php // echo $form->field($model, 'sophongngu') ?>

    <?php // echo $form->field($model, 'sophongtam') ?>

    <?php // echo $form->field($model, 'cachcho') ?>

    <?php // echo $form->field($model, 'cachsieuthi') ?>

    <?php // echo $form->field($model, 'cachbenhvien') ?>

    <?php // echo $form->field($model, 'cachtruonghoc') ?>

    <?php // echo $form->field($model, 'namxay') ?>

    <?php // echo $form->field($model, 'loai_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'anh1') ?>

    <?php // echo $form->field($model, 'anh2') ?>

    <?php // echo $form->field($model, 'anh3') ?>

    <?php // echo $form->field($model, 'anh4') ?>

    <?php // echo $form->field($model, 'anh5') ?>

    <?php // echo $form->field($model, 'anh6') ?>

    <?php // echo $form->field($model, 'anh7') ?>

    <?php // echo $form->field($model, 'anh8') ?>

    <?php // echo $form->field($model, 'anh9') ?>

    <?php // echo $form->field($model, 'anh10') ?>

    <?php // echo $form->field($model, 'ngaytao') ?>

    <?php // echo $form->field($model, 'ngaysua') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
