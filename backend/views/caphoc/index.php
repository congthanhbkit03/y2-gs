<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CaphocSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Caphocs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caphoc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Caphoc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'caphoc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
