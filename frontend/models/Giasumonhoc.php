<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "giasumonhoc".
 *
 * @property int $id
 * @property int $giasu_id
 * @property int $monhoc_id
 *
 * @property Giasu $giasu
 * @property Monhoc $monhoc
 */
class Giasumonhoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'giasumonhoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['giasu_id', 'monhoc_id'], 'required'],
            [['giasu_id', 'monhoc_id'], 'integer'],
            [['giasu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Giasu::className(), 'targetAttribute' => ['giasu_id' => 'id']],
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
            'giasu_id' => 'Giasu ID',
            'monhoc_id' => 'Monhoc ID',
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
    public function getMonhoc()
    {
        return $this->hasOne(Monhoc::className(), ['id' => 'monhoc_id']);
    }
}
