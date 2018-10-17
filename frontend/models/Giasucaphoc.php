<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "giasucaphoc".
 *
 * @property int $id
 * @property int $giasu_id
 * @property int $caphoc_id
 *
 * @property Caphoc $caphoc
 * @property Giasu $giasu
 */
class Giasucaphoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'giasucaphoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['giasu_id', 'caphoc_id'], 'required'],
            [['giasu_id', 'caphoc_id'], 'integer'],
            [['caphoc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Caphoc::className(), 'targetAttribute' => ['caphoc_id' => 'id']],
            [['giasu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Giasu::className(), 'targetAttribute' => ['giasu_id' => 'id']],
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
            'caphoc_id' => 'Caphoc ID',
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
    public function getGiasu()
    {
        return $this->hasOne(Giasu::className(), ['id' => 'giasu_id']);
    }
}
