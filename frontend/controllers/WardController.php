<?php

namespace frontend\controllers;

class WardController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
