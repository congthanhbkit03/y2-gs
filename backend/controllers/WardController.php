<?php

namespace backend\controllers;
use backend\models\Ward;

class WardController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionListward($id){
    	// echo "Test AJAX"; exit;
    	//echo "AAAAAAAAAAA";
    	// echo $id;
    	$wo = new Ward();
    	$data = $wo->getXaByHuyenId($id);
    	if (!empty($data)) {
			foreach($data as $ward) {
				echo "<option value='".$ward['wardid']."'>".$ward['name']."</option>";
			}
		} else {
			echo "<option>-</option>";
		}
    }

}
