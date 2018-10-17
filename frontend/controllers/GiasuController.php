<?php

namespace frontend\controllers;
use frontend\models\Caphoc;
use frontend\models\Monhoc;
use frontend\models\Khuvuc;
use frontend\models\Giasu;
use frontend\models\Giasucaphoc;
use frontend\models\Giasumonhoc;
use frontend\models\Giasukhuvuc;
use yii;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;
use yii\helpers\Url;
class GiasuController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $gs = new Giasu();
        $datags = $gs->getAll();

        return $this->render("index", [
            "data" => $datags
        ]);
    }

    public function actionDangky(){
    	// echo Url::base(true); exit;
    	$giasu = new Giasu();
    	$giasucaphoc = new Giasucaphoc();
    	$giasukhuvuc = new Giasukhuvuc();
    	$giasumonhoc = new Giasumonhoc();

    	$ch = new Caphoc();
    	$mh = new Monhoc();
    	$kv = new Khuvuc();

    	$caphoc = ArrayHelper::map($ch->getAll(), 'id', 'caphoc');
    	$monhoc = ArrayHelper::map($mh->getAll(), 'id', 'monhoc');
    	$khuvuc = ArrayHelper::map($kv->getAll(), 'id', 'khuvuc');

        //nhan du lieu va xu ly
        if ($giasu->load(Yii::$app->request->post()) 
            && 
            $giasucaphoc->load(Yii::$app->request->post())
            && 
            $giasukhuvuc->load(Yii::$app->request->post())
            && 
            $giasumonhoc->load(Yii::$app->request->post())
        ) {
            
            $giasu->fanh = UploadedFile::getInstance($giasu, 'fanh');
            $giasu->fanhcmnd = UploadedFile::getInstance($giasu, 'fanhcmnd');
            // print "<pre>";
            // print_r($giasucaphoc);
            //echo "Anh cmnd co ten " .$giasu->fanhcmnd->baseName;
            // exit;
            if ($giasu->validate()){
                $path = Url::to('@webfront/uploads/giasu/');
                $pathcsdl = '/uploads/giasu/';
                //luu duong dan den file anh
                $giasu->anh = $pathcsdl.$giasu->fanh->baseName.'.'.$giasu->fanh->extension;
                $giasu->anhcmnd = $pathcsdl.$giasu->fanhcmnd->baseName.'.'.$giasu->fanhcmnd->extension;
                if ($giasu->save()){    //luu thong tin gia su
                    //upload anh anh                    
                    $giasu->fanh->saveAs($path.$giasu->fanh->baseName.'.'.$giasu->fanh->extension);
                    $giasu->fanhcmnd->saveAs($path . $giasu->fanhcmnd->baseName . '.' . $giasu->fanhcmnd->extension);

                    //tien hanh luu monhoc, capdo va khuvuc
                    if ($giasucaphoc->caphoc_id){
                        // print "<pre>";
                        // print_r($giasucaphoc);
                        // exit;
                        foreach ($giasucaphoc->caphoc_id as $ch) {
                            $modelgsch = new Giasucaphoc();
                            $modelgsch->giasu_id = $giasu->id;
                            $modelgsch->caphoc_id = $ch;
                            if ($modelgsch->save(false)){
                                // $ha->saveAs($path.$modelAnh->hinhanh);
                            } else {
                                echo "Luu bi loi roi "; exit;
                            }
                        }    
                    }

                    //tien hanh luu monhoc, capdo va khuvuc
                    if ($giasukhuvuc->khuvuc_id){
                        foreach ($giasukhuvuc->khuvuc_id as $kv) {
                            $modelgskv = new Giasukhuvuc();
                            $modelgskv->giasu_id = $giasu->id;
                            $modelgskv->khuvuc_id = $kv;
                            if ($modelgskv->save(false)){
                                //$ha->saveAs($path.$modelAnh->hinhanh);
                            } else {
                                echo "Luu bi loi roi "; exit;
                            }
                        }                
                    }

                    //tien hanh luu monhoc, capdo va khuvuc
                    if ($giasumonhoc->monhoc_id){
                        foreach ($giasumonhoc->monhoc_id as $mh) {
                            $modelgsmh = new Giasumonhoc();
                            $modelgsmh->giasu_id = $giasu->id;
                            $modelgsmh->monhoc_id = $mh;
                            if ($modelgsmh->save(false)){
                                //$ha->saveAs($path.$modelAnh->hinhanh);
                            } else {
                                echo "Luu bi loi roi "; exit;
                            }
                        }                   
                    }
                    return $this->redirect(['site/index']);
                }
            } else {
                //loi bao loi o day
                // print "<pre>";
                // print_r($giasu);
                // exit;
            }
        }

        //render form
    	return $this->render("dangky", [
    		"giasu" => $giasu,
    		"giasucaphoc" => $giasucaphoc,
    		"giasukhuvuc" => $giasukhuvuc,
    		"giasumonhoc" => $giasumonhoc,
    		"caphoc" => $caphoc, 
    		"monhoc" => $monhoc, 
    		"khuvuc" => $khuvuc
    	]);
    }

    // public function actionDanhsach(){
    //     $gs = new Giasu();
    //     $datags = $gs->getAll();

    //     return $this->render("index", [
    //         "data" => $datags
    //     ]);
    // }
}
