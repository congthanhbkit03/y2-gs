<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "caphoc".
 *
 * @property int $id
 * @property string $caphoc
 *
 * @property Giasucaphoc[] $giasucaphocs
 * @property Lopday[] $lopdays
 */
class Caphoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'caphoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caphoc'], 'required'],
            [['caphoc'], 'string', 'max' => 255],
            [['caphoc'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caphoc' => 'Caphoc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiasucaphocs()
    {
        return $this->hasMany(Giasucaphoc::className(), ['caphoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLopdays()
    {
        return $this->hasMany(Lopday::className(), ['caphoc_id' => 'id']);
    }
}
