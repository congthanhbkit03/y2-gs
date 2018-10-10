<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BdsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bds-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bds', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Upload Multiples', ['multiple'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'tieude',
            //'avatar',
            [
                'attribute' => 'avatar',
                'format' => 'html',
                'content' => function($data){
                    return Html::img($data->avatar, ['alt' => 'yii', 'width' => '100']);
                }
            ],
            // 'gioithieu:ntext',
            // 'dientich',
            // 'lat',
            //'long',
            //'diachi',
            //'xa',
            //'huyen',
            //'tinh',
            //'giaban',
            //'giathue',
            //'sotang',
            //'sophongngu',
            //'sophongtam',
            //'cachcho',
            //'cachsieuthi',
            //'cachbenhvien',
            //'cachtruonghoc',
            //'namxay',
            //'loai_id',
            //'user_id',
            //'status',
            //'anh1',
            //'anh2',
            //'anh3',
            //'anh4',
            //'anh5',
            //'anh6',
            //'anh7',
            //'anh8',
            //'anh9',
            //'anh10',
            //'ngaytao',
            //'ngaysua',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
