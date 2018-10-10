<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LopdaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lopdays';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lopday-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lopday', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'monhoc_id',
            'caphoc_id',
            'khuvuc_id',
            'diachi',
            //'sobuoi',
            //'thoigian',
            //'mucluong',
            //'yeucau',
            //'tennguoidk',
            //'sdtnguoidk',
            //'trangthai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
