<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Bds */

$this->title = 'Create Bds';
$this->params['breadcrumbs'][] = ['label' => 'Bds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bds-create">

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
