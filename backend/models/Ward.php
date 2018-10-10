<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ward".
 *
 * @property string $wardid
 * @property string $name
 * @property string $type
 * @property string $location
 * @property string $districtid
 */
class Ward extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ward';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wardid', 'name', 'type', 'location', 'districtid'], 'required'],
            [['wardid', 'districtid'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 100],
            [['type', 'location'], 'string', 'max' => 30],
            [['wardid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wardid' => 'Wardid',
            'name' => 'Name',
            'type' => 'Type',
            'location' => 'Location',
            'districtid' => 'Districtid',
        ];
    }

    function getAll(){
        $data = Ward::find()->asArray()->all();
        return $data;
    }

    function getXaByHuyenId($id){
        $data = Ward::find()->asArray()->where('districtid=:did', ['did'=>$id])->all();
        return $data;
    }
}
