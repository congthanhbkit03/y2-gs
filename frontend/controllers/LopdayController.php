<?php

namespace frontend\controllers;
use Yii;

use frontend\models\Lopday;
class LopdayController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSearch(){
    	
    	$arr = Yii::$app->request->post();
    	// echo "<pre>";
    	// print_r($arr); exit;
        $kv = $arr['slkv'];
        $ch = $arr['slch'];
        $mh = $arr['slmh'];
        $ld = new Lopday();
        $dataSearch = $ld->timkiem($kv, $ch, $mh);
        // echo "<pre>";
        // print_r($dataSearch);

        return $this->render('searchlopday', ['data' => $dataSearch]);
    }
}
