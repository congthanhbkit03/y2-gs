<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hinhanh".
 *
 * @property int $id
 * @property int $bds_id
 * @property string $hinhanh
 * @property string $created_id
 */
class Hinhanh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hinhanh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bds_id', 'hinhanh'], 'required'],
            [['bds_id'], 'integer'],
            [['created_id'], 'safe'],
            [['hinhanh'], 'file', 'extensions' => 'png,jpg,gif', 'maxFiles' => 50, 'mimeTypes' => 'image/jpeg, image/png','skipOnEmpty' => false]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bds_id' => 'Bds ID',
            'hinhanh' => 'Hinhanh',
            'created_id' => 'Created ID',
        ];
    }

    public function getHinhanhByBdsid($id){
        $data = Hinhanh::find()->asArray()->where('bds_id=:bds_id', ['bds_id' => $id])->all();
        return $data;
    }
}
