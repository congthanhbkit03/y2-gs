<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bds".
 *
 * @property int $id
 * @property string $tieude
 * @property string $gioithieu
 * @property double $dientich
 * @property double $lat
 * @property double $long
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
 * @property string $anh1
 * @property string $anh2
 * @property string $anh3
 * @property string $anh4
 * @property string $anh5
 * @property string $anh6
 * @property string $anh7
 * @property string $anh8
 * @property string $anh9
 * @property string $anh10
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
            'loai_id' => 'Loại bất động sản',
            'tieude' => 'Tiêu đề',
            'gioithieu' => 'Giới thiệu',
            'dientich' => 'Diện tích',
            'lat' => 'Lat',
            'lng' => 'Long',
            'diachi' => 'Địa chỉ',
            'xa' => 'Xã',
            'huyen' => 'Huyện',
            'tinh' => 'Tỉnh',
            'giaban' => 'Giá bán',
            'giathue' => 'Giá thuê',
            'sotang' => 'Số tầng',
            'sophongngu' => 'Số phòng ngủ',
            'sophongtam' => 'Số phòng tắm',
            'cachcho' => 'Cách chợ',
            'cachsieuthi' => 'Cách siêu thị',
            'cachbenhvien' => 'Cách bệnh viện',
            'cachtruonghoc' => 'Cách trường học',
            'namxay' => 'Năm xây dựng',
            
            // 'user_id' => 'User ID',
            // 'status' => 'Status',
            'avatar' => 'Ảnh đại diện',
            // 'ngaytao' => 'Ngaytao',
            // 'ngaysua' => 'Ngaysua',
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

    public function getAllBds(){
        $data = Bds::find()->asArray()->all();
        return $data;
    }
}
