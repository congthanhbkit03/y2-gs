<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Phanlop */

$this->title = 'Create Phanlop';
$this->params['breadcrumbs'][] = ['label' => 'Phanlops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phanlop-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
