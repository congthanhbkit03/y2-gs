<?php

namespace frontend\models;

use Yii;
/**
 * This is the model class for table "lopday".
 *
 * @property int $id
 * @property int $monhoc_id
 * @property int $caphoc_id
 * @property int $khuvuc_id
 * @property string $diachi
 * @property string $sobuoi
 * @property string $thoigian
 * @property string $mucluong
 * @property string $yeucau
 * @property string $tennguoidk
 * @property string $sdtnguoidk
 * @property int $trangthai
 *
 * @property Caphoc $caphoc
 * @property Khuvuc $khuvuc
 * @property Monhoc $monhoc
 * @property Phanlop[] $phanlops
 */
class Lopday extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lopday';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['monhoc_id', 'caphoc_id', 'khuvuc_id'], 'required'],
            [['monhoc_id', 'caphoc_id', 'khuvuc_id', 'trangthai'], 'integer'],
            [['diachi', 'sobuoi', 'thoigian', 'mucluong', 'yeucau', 'tennguoidk', 'sdtnguoidk'], 'string', 'max' => 255],
            [['caphoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Caphoc::className(), 'targetAttribute' => ['caphoc_id' => 'id']],
            [['khuvuc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Khuvuc::className(), 'targetAttribute' => ['khuvuc_id' => 'id']],
            [['monhoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Monhoc::className(), 'targetAttribute' => ['monhoc_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'monhoc_id' => 'Monhoc ID',
            'caphoc_id' => 'Caphoc ID',
            'khuvuc_id' => 'Khuvuc ID',
            'diachi' => 'Diachi',
            'sobuoi' => 'Sobuoi',
            'thoigian' => 'Thoigian',
            'mucluong' => 'Mucluong',
            'yeucau' => 'Yeucau',
            'tennguoidk' => 'Tennguoidk',
            'sdtnguoidk' => 'Sdtnguoidk',
            'trangthai' => 'Trangthai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaphoc()
    {
        return $this->hasOne(Caphoc::className(), ['id' => 'caphoc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhuvuc()
    {
        return $this->hasOne(Khuvuc::className(), ['id' => 'khuvuc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMonhoc()
    {
        return $this->hasOne(Monhoc::className(), ['id' => 'monhoc_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhanlops()
    {
        return $this->hasMany(Phanlop::className(), ['lopday_id' => 'id']);
    }

    public function getLopmoi($max){
        return Lopday::find()->where(['trangthai' => 0])->limit($max)->all();;
    }

    public function timkiem($kv, $ch, $mh){ //0: khu vuc, 1: cap hoc, 2: mon hoc
         $sql = Lopday::find()->where(['trangthai' => 0]);
         if (!empty($kv)){
            $sql->andWhere(['khuvuc_id' => $kv]);
         }
         if (!empty($ch)){
            $sql->andWhere(['caphoc_id' => $ch]);
         }
         if (!empty($mh)){
            $sql->andWhere(['monhoc_id' => $mh]);
         }

         $data = $sql->all();
         return $data;
    }

    public function getAll(){
        $data = Lopday::find()->where(['trangthai' => 0])->all();

        return $data;
    }
}
