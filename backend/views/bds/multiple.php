<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bds */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bds-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($upload, 'hinhanh[]')->fileInput(['multiple'=>true]) ?>

    <?= $form->field($upload, 'bds_id')->dropDownList(
        $bds,
        ['prompt' => '-Chon bds-']
    ); 
    ?>

   

    <div class="form-group">
        <?= Html::submitButton('Upload', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
