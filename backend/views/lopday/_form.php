<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Lopday */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lopday-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'monhoc_id')->dropDownList($datamh, [
        'prompt' => '--Chon mon hoc--'
     ]);

    ?>

    <?= $form->field($model, 'caphoc_id')->dropDownList($datach, [
        'prompt' => '--Chon cap hoc--'
     ]);;

    ?>

    <?= $form->field($model, 'khuvuc_id')->dropDownList($datakv, [
        'prompt' => '--Chon khu vuc--'
     ]);

    ?>

    <?= $form->field($model, 'diachi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sobuoi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thoigian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mucluong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yeucau')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tennguoidk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sdtnguoidk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trangthai')->dropDownList($datatt, [
        'prompt' => '--Chon trang thai--'
     ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    

<?php $this->registerJsFile('backend/web/js/checkall.js', ['depends' => [backend\assets\AppAsset::className()]]); ?> 



</div>
