<?php

namespace backend\controllers;

use Yii;
use backend\models\Bds;
use backend\models\BdsSearch;
use backend\models\LoaiBds;
use backend\models\Hinhanh;
use backend\models\Province;
use backend\models\District;
use backend\models\Ward;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * BdsController implements the CRUD actions for Bds model.
 */
class BdsController extends Controller
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
     * Lists all Bds models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BdsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Bds model.
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
     * Creates a new Bds model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Bds();
        $upload= new Hinhanh();
        $modelloai = new LoaiBds();

        // du lieu tinh, huyen, xa
        // $tinh = new Province();
        $huyen = new District();
        $xa = new Ward();
        //$dataTinh = ArrayHelper::map($tinh->getAll(), 'provinceid', 'name');
        $dataTinh = [
            
            51 => 'Quảng Ngãi' 
        ];
        $dataHuyen = ArrayHelper::map($huyen->getHuyenByTinhId(51), 'districtid', 'name');
        $dataXa = array();// ArrayHelper::map($xa->getXaByHuyenId(522), 'wardid', 'name');
        // $dataXa = ArrayHelper::map($xa->getAll(), 'wardid', 'name');

        $dataloai = ArrayHelper::map($modelloai->getAllLoaibds(), 'id', 'tenloai');
        if ($model->load(Yii::$app->request->post()) && $upload->load(Yii::$app->request->post())) {
            
            $upload->hinhanh = UploadedFile::getInstances($upload, 'hinhanh');

            if ($model->save()){    //luu bds

                //tien hanh cac buoc luu hinh anh cho bds
                if ($upload->hinhanh){
                    
                    $path = Url::to('@webfront/uploads/');
                    // echo $path; exit;
                    foreach ($upload->hinhanh as $ha) {
                        $modelAnh = new Hinhanh();
                        $modelAnh->hinhanh = time().rand(100,999). '.' . $ha->extension;
                        //lay id cua bds vua tao: $model->id
                        $modelAnh->bds_id = $model->id;
                    
                        if ($modelAnh->save(false)){
                            $ha->saveAs($path.$modelAnh->hinhanh);
                        } else {
                            echo "Luu bi loi roi "; exit;
                        }
                    }
                   
                   // return $this->redirect(['index']);
                } else {
                    echo "Co loi trong viec upload hinh anh";
                    exit;
                }


                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'dataloai' => $dataloai,
            'upload' => $upload,
            'dataTinh' => $dataTinh,
            'dataHuyen' => $dataHuyen,
            'dataXa' => $dataXa
        ]);
    }

    public function actionMultiple(){
        $upload= new Hinhanh();

        $bds = new Bds();
        $databds = ArrayHelper::map($bds->getAllBds(), 'id', 'tieude');

        if ($upload->load(Yii::$app->request->post())){
            $upload->hinhanh = UploadedFile::getInstances($upload, 'hinhanh');
            if ($upload->hinhanh && $upload->validate()){
                // if (!file_exists(Url::to('@webfront/uploads/hinhanh/'))){
                //     mkdir(Url::to('@webfront/uploads/hinhanh/', 0777, true));
                // }
                // $path = Url::to('@webfront/uploads/hinhanh/');
                $path = Url::to('@webfront/uploads/');
                 // echo $path; exit;
                foreach ($upload->hinhanh as $ha) {
                    $model = new Hinhanh();
                    $model->hinhanh = time().rand(100,999). '.' . $ha->extension;
                    $model->bds_id = $upload->bds_id;
                //      echo "<br>";
                // print_r($model);
                // echo "</br>";
                    if ($model->save(false)){
                        $ha->saveAs($path.$model->hinhanh);
                    } else {
                        echo "Luu bi loi roi "; exit;
                    }
                }
               
                return $this->redirect(['index']);
            }
        }

        return $this->render('multiple', [
            'upload' => $upload,
            'bds' => $databds
        ]);
    }
    /**
     * Updates an existing Bds model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $upload = new Hinhanh();
        // $upload = Hinhanh::find()->where(['bds_id' => $model->id])->all();
        $modelloai = new LoaiBds();
        $dataloai = ArrayHelper::map($modelloai->getAllLoaibds(), 'id', 'tenloai');

        // du lieu tinh, huyen, xa
        // $tinh = new Province();
        $huyen = new District();
        $xa = new Ward();
        //$dataTinh = ArrayHelper::map($tinh->getAll(), 'provinceid', 'name');
        $dataTinh = [
            
            51 => 'Quảng Ngãi' 
        ];
        $dataHuyen = ArrayHelper::map($huyen->getHuyenByTinhId(51), 'districtid', 'name');
        $dataXa = ArrayHelper::map($xa->getXaByHuyenId($model->huyen), 'wardid', 'name');
        // $dataXa = ArrayHelper::map($xa->getAll(), 'wardid', 'name');

        if ($model->load(Yii::$app->request->post()) && $upload->load(Yii::$app->request->post())) {

            $upload->hinhanh = UploadedFile::getInstances($upload, 'hinhanh');
            if ($model->save()){

                //tien hanh cac buoc luu hinh anh cho bds
                if ($upload->hinhanh){
                    
                    $path = Url::to('@webfront/uploads/');
                    // echo $path; exit;
                    foreach ($upload->hinhanh as $ha) {
                        $modelAnh = new Hinhanh();
                        $modelAnh->hinhanh = time().rand(100,999). '.' . $ha->extension;
                        //lay id cua bds vua tao: $model->id
                        $modelAnh->bds_id = $model->id;
                    
                        if ($modelAnh->save(false)){
                            $ha->saveAs($path.$modelAnh->hinhanh);
                        } else {
                            echo "Luu bi loi roi "; exit;
                        }
                    }
                } else {
                   // echo "Co loi trong viec upload hinh anh";
                    //exit;
                }

                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'upload' => $upload,
            'dataloai' => $dataloai, 
            'dataTinh' => $dataTinh,
            'dataHuyen' => $dataHuyen,
            'dataXa' => $dataXa
        ]);
    }

    /**
     * Deletes an existing Bds model.
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
     * Finds the Bds model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Bds the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Bds::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
