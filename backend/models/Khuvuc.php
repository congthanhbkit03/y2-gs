<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "khuvuc".
 *
 * @property int $id
 * @property string $khuvuc
 *
 * @property Giasukhuvuc[] $giasukhuvucs
 * @property Lopday[] $lopdays
 */
class Khuvuc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'khuvuc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['khuvuc'], 'required'],
            [['khuvuc'], 'string', 'max' => 255],
            [['khuvuc'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'khuvuc' => 'Khuvuc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiasukhuvucs()
    {
        return $this->hasMany(Giasukhuvuc::className(), ['khuvuc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLopdays()
    {
        return $this->hasMany(Lopday::className(), ['khuvuc_id' => 'id']);
    }
}
