<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "giasu".
 *
 * @property int $id
 * @property string $hoten
 * @property string $ngaysinh
 * @property int $gioitinh
 * @property string $cmnd
 * @property string $anh
 * @property string $anhcmnd
 * @property string $email
 * @property string $sdt
 * @property string $svtruong
 * @property string $gvtruong
 * @property string $nganhhoc
 * @property string $diachi
 * @property string $luongyeucau
 * @property int $trangthai
 *
 * @property Giasucaphoc[] $giasucaphocs
 * @property Giasukhuvuc[] $giasukhuvucs
 * @property Giasumonhoc[] $giasumonhocs
 * @property Phanlop[] $phanlops
 */
class Giasu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'giasu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hoten', 'gioitinh'], 'required'],
            [['gioitinh', 'trangthai'], 'integer'],
            [['hoten', 'ngaysinh', 'cmnd', 'anh', 'anhcmnd', 'email', 'sdt', 'svtruong', 'gvtruong', 'nganhhoc', 'diachi', 'luongyeucau'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hoten' => 'Hoten',
            'ngaysinh' => 'Ngaysinh',
            'gioitinh' => 'Gioitinh',
            'cmnd' => 'Cmnd',
            'anh' => 'Anh',
            'anhcmnd' => 'Anhcmnd',
            'email' => 'Email',
            'sdt' => 'Sdt',
            'svtruong' => 'Svtruong',
            'gvtruong' => 'Gvtruong',
            'nganhhoc' => 'Nganhhoc',
            'diachi' => 'Diachi',
            'luongyeucau' => 'Luongyeucau',
            'trangthai' => 'Trangthai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiasucaphocs()
    {
        return $this->hasMany(Giasucaphoc::className(), ['giasu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiasukhuvucs()
    {
        return $this->hasMany(Giasukhuvuc::className(), ['giasu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiasumonhocs()
    {
        return $this->hasMany(Giasumonhoc::className(), ['giasu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhanlops()
    {
        return $this->hasMany(Phanlop::className(), ['giasu_id' => 'id']);
    }
}
