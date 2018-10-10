<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Giasu */

$this->title = 'Update Giasu: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Giasus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="giasu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
