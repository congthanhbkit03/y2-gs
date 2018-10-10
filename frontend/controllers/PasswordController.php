<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\User;


/**
 * Site controller
 */
class PasswordController extends Controller
{
    
    public function actionIndex()
    {
        // echo "Password ....";
        echo $password = Yii::$app->getSecurity()->generatePasswordHash('admin123456');
        echo "<br>";
        echo $auth_key = Yii::$app->security->generateRandomString();
    }

    //tao du lieu cho admin
    public function actionCreateadmin(){
        $user = new User();
        $user->firstname = 'Bui';
        $user->lastname = 'Cong Thanh';
        $user->username = 'admin';
        $user->email = 'admin@localhost.com';
        $user->role = 100;
        // $user->texxt = $this->texxt;
        // print("Texxt is: " . $this->texxt);
        $user->setPassword('admin');
        $user->generateAuthKey();
        
        
        $user->save();
        echo "Tao admin xong";
        //echo "<br>Password Hash la: " . $
    }
    
}
