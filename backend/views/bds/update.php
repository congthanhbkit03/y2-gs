<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bds */

$this->title = 'Update Bds: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Bds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'upload' => $upload,
        'dataloai' => $dataloai, 
        'dataTinh' => $dataTinh,
        'dataHuyen' => $dataHuyen,
        'dataXa' => $dataXa
    ]) ?>

</div>
