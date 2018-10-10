<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bds".
 *
 * @property int $id
 * @property string $tieude
 * @property string $gioithieu
 * @property double $dientich
 * @property double $lat
 * @property double $lng
 * @property string $diachi
 * @property int $xa
 * @property int $huyen
 * @property int $tinh
 * @property int $giaban
 * @property int $giathue
 * @property int $sotang
 * @property int $sophongngu
 * @property int $sophongtam
 * @property int $cachcho
 * @property int $cachsieuthi
 * @property int $cachbenhvien
 * @property int $cachtruonghoc
 * @property int $namxay
 * @property int $loai_id
 * @property int $user_id
 * @property int $status
 * @property string $avatar
 * @property string $ngaytao
 * @property string $ngaysua
 *
 * @property Loaibds $loai
 * @property User $user
 */
class Bds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tieude', 'gioithieu'], 'required'],
            [['gioithieu'], 'string'],
            [['dientich', 'lat', 'lng'], 'number'],
            [['xa', 'huyen', 'tinh', 'giaban', 'giathue', 'sotang', 'sophongngu', 'sophongtam', 'cachcho', 'cachsieuthi', 'cachbenhvien', 'cachtruonghoc', 'namxay', 'loai_id', 'user_id', 'status'], 'integer'],
            [['ngaytao', 'ngaysua'], 'safe'],
            [['tieude', 'diachi', 'avatar'], 'string', 'max' => 255],
            [['loai_id'], 'exist', 'skipOnError' => true, 'targetClass' => Loaibds::className(), 'targetAttribute' => ['loai_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tieude' => 'Tieude',
            'gioithieu' => 'Gioithieu',
            'dientich' => 'Dientich',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'diachi' => 'Diachi',
            'xa' => 'Xa',
            'huyen' => 'Huyen',
            'tinh' => 'Tinh',
            'giaban' => 'Giaban',
            'giathue' => 'Giathue',
            'sotang' => 'Sotang',
            'sophongngu' => 'Sophongngu',
            'sophongtam' => 'Sophongtam',
            'cachcho' => 'Cachcho',
            'cachsieuthi' => 'Cachsieuthi',
            'cachbenhvien' => 'Cachbenhvien',
            'cachtruonghoc' => 'Cachtruonghoc',
            'namxay' => 'Namxay',
            'loai_id' => 'Loai ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'avatar' => 'Avatar',
            'ngaytao' => 'Ngaytao',
            'ngaysua' => 'Ngaysua',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLoai()
    {
        return $this->hasOne(Loaibds::className(), ['id' => 'loai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getRandomBds($limit = 8){
        $data = Bds::find()->asArray()->orderBy('rand()')->limit($limit)->all();
        return $data;
    }

    public function getBdsByCatId($id){
        $data = Bds::find()->asArray()->where('loai_id=:loai_id', ['loai_id'=>$id])->all();
        return $data;
    }

    //lay bds cho trang index - lay 3 san pham 
    public function getBdsForIndex($id){
        $data = Bds::find()->asArray()->where('loai_id=:loai_id', ['loai_id'=>$id])->limit(3)->all();
        return $data;
    }

    public function getBdsById($id){
        $data = Bds::find()->asArray()->where('id=:id', ['id'=>$id])->one();
        return $data;
    }

    public function timkiem($key, $huyen, $loai){ //0: key, 1: huyen, 2: loaibds
         $sql = Bds::find()->asArray()->where(['status' => 1]);
         if (!empty($key)){
            $sql->andWhere(['like', 'tieude', $key]);
         }
         if (!empty($huyen)){
            $sql->andWhere(['huyen' => $huyen]);
         }
         if (!empty($loai)){
            $sql->andWhere(['loai_id' => $loai]);
         }

         $data = $sql->all();
         return $data;
    }
}
