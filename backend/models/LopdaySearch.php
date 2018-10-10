<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Lopday;

/**
 * LopdaySearch represents the model behind the search form of `backend\models\Lopday`.
 */
class LopdaySearch extends Lopday
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'monhoc_id', 'caphoc_id', 'khuvuc_id', 'trangthai'], 'integer'],
            [['diachi', 'sobuoi', 'thoigian', 'mucluong', 'yeucau', 'tennguoidk', 'sdtnguoidk'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Lopday::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'monhoc_id' => $this->monhoc_id,
            'caphoc_id' => $this->caphoc_id,
            'khuvuc_id' => $this->khuvuc_id,
            'trangthai' => $this->trangthai,
        ]);

        $query->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'sobuoi', $this->sobuoi])
            ->andFilterWhere(['like', 'thoigian', $this->thoigian])
            ->andFilterWhere(['like', 'mucluong', $this->mucluong])
            ->andFilterWhere(['like', 'yeucau', $this->yeucau])
            ->andFilterWhere(['like', 'tennguoidk', $this->tennguoidk])
            ->andFilterWhere(['like', 'sdtnguoidk', $this->sdtnguoidk]);

        return $dataProvider;
    }
}
