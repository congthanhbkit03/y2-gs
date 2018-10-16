<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "giasukhuvuc".
 *
 * @property int $id
 * @property int $giasu_id
 * @property int $khuvuc_id
 *
 * @property Giasu $giasu
 * @property Khuvuc $khuvuc
 */
class Giasukhuvuc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'giasukhuvuc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['giasu_id', 'khuvuc_id'], 'required'],
            [['giasu_id', 'khuvuc_id'], 'integer'],
            [['giasu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Giasu::className(), 'targetAttribute' => ['giasu_id' => 'id']],
            [['khuvuc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Khuvuc::className(), 'targetAttribute' => ['khuvuc_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'giasu_id' => 'Giasu ID',
            'khuvuc_id' => 'Khuvuc ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiasu()
    {
        return $this->hasOne(Giasu::className(), ['id' => 'giasu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhuvuc()
    {
        return $this->hasOne(Khuvuc::className(), ['id' => 'khuvuc_id']);
    }
}
