<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LoaibdsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loaibds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loaibds-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Loaibds', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'tenloai',
            //'hinhanh',

            [
                'attribute' => 'hinhanh',
                'format' => 'html',
                'content' => function($data){
                    //$dom = "http://localhost/yii2/bds";
                    return Html::img($data->hinhanh, ['alt' => 'yii', 'width' => '100']);
                }
            ],
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
