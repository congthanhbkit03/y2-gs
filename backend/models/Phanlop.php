<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "phanlop".
 *
 * @property int $id
 * @property int $lopday_id
 * @property int $giasu_id
 * @property int $hotengs
 * @property string $dienthoaigs
 * @property int $trangthai
 *
 * @property Giasu $giasu
 * @property Lopday $lopday
 */
class Phanlop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phanlop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lopday_id', 'hotengs'], 'required'],
            [['lopday_id', 'giasu_id', 'hotengs', 'trangthai'], 'integer'],
            [['dienthoaigs'], 'string', 'max' => 255],
            [['giasu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Giasu::className(), 'targetAttribute' => ['giasu_id' => 'id']],
            [['lopday_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lopday::className(), 'targetAttribute' => ['lopday_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lopday_id' => 'Lopday ID',
            'giasu_id' => 'Giasu ID',
            'hotengs' => 'Hotengs',
            'dienthoaigs' => 'Dienthoaigs',
            'trangthai' => 'Trangthai',
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
    public function getLopday()
    {
        return $this->hasOne(Lopday::className(), ['id' => 'lopday_id']);
    }
}
