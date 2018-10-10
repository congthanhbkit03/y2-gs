<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Bds;
use frontend\models\Loaibds;
use frontend\models\Hinhanh;

class BdsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionListbds($id){
    	$data = new Bds();
    	$data = $data->getBdsByCatId($id);

    	$loai = new Loaibds();
    	$loaidata = $loai->getLoaibdsById($id);

    	return $this->render('listbds', ['data' => $data, 'dataloai' => $loaidata]);
    }

    public function actionChitietbds($id){
    	$bds = new Bds();
    	$data = $bds->getBdsById($id);

    	$hinhanh = new Hinhanh();
    	$listhinhanh = $hinhanh->getHinhanhByBdsid($id);

    	return $this->render('chitietbds', ['data' => $data, 'listhinhanh' => $listhinhanh]);
    }

    public function actionSearch(){
    	
    	$arr = Yii::$app->request->post();
    	// echo "<pre>";
    	// print_r($arr); exit;
        $key = $arr['txtSearch'];
        $huyen = $arr['slHuyen'];
        $loai = $arr['slLoai'];
        $bdssearch = new Bds();
        $dataSearch = $bdssearch->timkiem($key, $huyen, $loai);
        // echo "<pre>";
        // print_r($dataSearch);

        return $this->render('searchbds', ['data' => $dataSearch]);
    }
}
