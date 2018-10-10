<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GiasuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Giasus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giasu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Giasu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'hoten',
            'ngaysinh',
            'gioitinh',
            'cmnd',
            //'anh',
            //'anhcmnd',
            //'email:email',
            //'sdt',
            //'svtruong',
            //'gvtruong',
            //'nganhhoc',
            //'diachi',
            //'luongyeucau',
            //'trangthai',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
