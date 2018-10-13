<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>
	    <?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?>
	    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

	    <?= $form->field($model, 'email') ?>

	    <?= $form->field($model, 'password')->passwordInput() ?>
	    <?= $form->field($model, 'role')->textInput() ?>

	    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    

</div>
