<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Phanlop */

$this->title = 'Update Phanlop: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Phanlops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phanlop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
