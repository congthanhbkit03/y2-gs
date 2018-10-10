<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Lopday */

$this->title = 'Create Lopday';
$this->params['breadcrumbs'][] = ['label' => 'Lopdays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lopday-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
