<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "loaibds".
 *
 * @property int $id
 * @property string $tenloai
 * @property string $hinhanh
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Bds[] $bds
 */
class Loaibds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'loaibds';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tenloai'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['tenloai', 'hinhanh'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenloai' => 'Tenloai',
            'hinhanh' => 'Hinhanh',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBds()
    {
        return $this->hasMany(Bds::className(), ['loai_id' => 'id']);
    }

    public function getAllLoaibds(){
        return Loaibds::find()->asArray()->all();
    }

    public function getLoaibdsById($id){
        $data = Loaibds::find()->asArray()->where('id=:id', [':id' => $id])->one();
        return $data;
    }
}
