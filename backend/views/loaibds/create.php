<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Loaibds */

$this->title = 'Create Loaibds';
$this->params['breadcrumbs'][] = ['label' => 'Loaibds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaibds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
