<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Contact;

/**
 * Site controller
 */
class TestController extends Controller
{
   
    public function actionIndex()
    {
        //return $this->render('index');
       
        echo 'yii' . Yii::getAlias('@yii') . "<br>";
        echo 'app' . Yii::getAlias('@app') . "<br>";
        echo 'runtime' . Yii::getAlias('@runtime') . "<br>";
        echo 'vendor' . Yii::getAlias('@vendor') . "<br>";
        echo 'webroot' . Yii::getAlias('@webroot') . "<br>";
        echo 'web' . Yii::getAlias('@web') . "<br>";
        echo 'webfronts' . Yii::getAlias('@webfront') . "<br>";
    }

   
}
