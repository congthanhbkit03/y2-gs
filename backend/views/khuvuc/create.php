<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Khuvuc */

$this->title = 'Create Khuvuc';
$this->params['breadcrumbs'][] = ['label' => 'Khuvucs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khuvuc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
