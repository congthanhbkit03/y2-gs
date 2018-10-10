<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>  
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-7 col-md-6 ">
                <h6 class="text-white ">the Royal Essence of Journey</h6>
                <h1 class="text-white text-uppercase">
                    Relaxed Journey Ever                
                </h1>
                <p class="pt-20 pb-20 text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a href="#" class="primary-btn text-uppercase">Rent Car Now</a>
            </div>
            <div class="col-lg-5  col-md-6 header-right">
                <h4 class="text-white pb-30">Register!</h4>
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                    <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'level')->radioList(array(1=>'Khách Hàng',2=>'Chủ Xe')); ?>

                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'primary-btn text-uppercase', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>                                          
        </div>
    </div>                  
</section>