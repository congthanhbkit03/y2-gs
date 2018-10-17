<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "monhoc".
 *
 * @property int $id
 * @property string $monhoc
 *
 * @property Giasumonhoc[] $giasumonhocs
 * @property Lopday[] $lopdays
 */
class Monhoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'monhoc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['monhoc'], 'required'],
            [['monhoc'], 'string', 'max' => 255],
            [['monhoc'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'monhoc' => 'Monhoc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiasumonhocs()
    {
        return $this->hasMany(Giasumonhoc::className(), ['monhoc_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLopdays()
    {
        return $this->hasMany(Lopday::className(), ['monhoc_id' => 'id']);
    }

    function getAll(){
        $data = Monhoc::find()->asArray()->all();
        return $data;
    }
}
