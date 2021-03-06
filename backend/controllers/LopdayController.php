<?php

namespace backend\controllers;

use Yii;
use backend\models\Lopday;
use backend\models\Caphoc;
use backend\models\Monhoc;
use backend\models\Khuvuc;
use backend\models\LopdaySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * LopdayController implements the CRUD actions for Lopday model.
 */
class LopdayController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Lopday models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LopdaySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lopday model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Lopday model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Lopday();
        $mMH = new Monhoc();
        $mKV = new Khuvuc();
        $mCH = new Caphoc();

        $datamh = ArrayHelper::map($mMH->getAll(), 'id', 'monhoc');
        $datakv = ArrayHelper::map($mKV->getAll(), 'id', 'khuvuc');
        $datach = ArrayHelper::map($mCH->getAll(), 'id', 'caphoc');
        
        $datatt = ["0" => "Chua kich hoat", "1" => "Dang cho xac nhan", "2" => "Da duoc chon"];
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
            'datamh' => $datamh,
            'datakv' => $datakv, 
            'datach' => $datach,
            'datatt' => $datatt
        ]);
    }

    /**
     * Updates an existing Lopday model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $mMH = new Monhoc();
        $mKV = new Khuvuc();
        $mCH = new Caphoc();

        $datamh = ArrayHelper::map($mMH->getAll(), 'id', 'monhoc');
        $datakv = ArrayHelper::map($mKV->getAll(), 'id', 'khuvuc');
        $datach = ArrayHelper::map($mCH->getAll(), 'id', 'caphoc');
        
        $datatt = ["0" => "Cho nhan", "1" => "Dang cho xac nhan", "2" => "Da duoc chon"];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
            'datamh' => $datamh,
            'datakv' => $datakv, 
            'datach' => $datach,
            'datatt' => $datatt
        ]);
    }

    /**
     * Deletes an existing Lopday model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lopday model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lopday the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lopday::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
