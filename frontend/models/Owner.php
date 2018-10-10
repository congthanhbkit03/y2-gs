<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "owner".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int $district
 * @property int $province
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Car[] $cars
 */
class Owner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['district', 'province', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'phone'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'district' => 'District',
            'province' => 'Province',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::className(), ['owner_id' => 'id']);
    }
}
