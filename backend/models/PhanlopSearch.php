<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Phanlop;

/**
 * PhanlopSearch represents the model behind the search form of `backend\models\Phanlop`.
 */
class PhanlopSearch extends Phanlop
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'lopday_id', 'giasu_id', 'hotengs', 'trangthai'], 'integer'],
            [['dienthoaigs'], 'safe'],
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
        $query = Phanlop::find();

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
            'lopday_id' => $this->lopday_id,
            'giasu_id' => $this->giasu_id,
            'hotengs' => $this->hotengs,
            'trangthai' => $this->trangthai,
        ]);

        $query->andFilterWhere(['like', 'dienthoaigs', $this->dienthoaigs]);

        return $dataProvider;
    }
}
