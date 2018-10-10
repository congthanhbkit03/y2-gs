<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Giasu */

$this->title = 'Create Giasu';
$this->params['breadcrumbs'][] = ['label' => 'Giasus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giasu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
