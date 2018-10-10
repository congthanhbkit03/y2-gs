<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Giasu;

/**
 * GiasuSearch represents the model behind the search form of `backend\models\Giasu`.
 */
class GiasuSearch extends Giasu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gioitinh', 'trangthai'], 'integer'],
            [['hoten', 'ngaysinh', 'cmnd', 'anh', 'anhcmnd', 'email', 'sdt', 'svtruong', 'gvtruong', 'nganhhoc', 'diachi', 'luongyeucau'], 'safe'],
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
        $query = Giasu::find();

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
            'gioitinh' => $this->gioitinh,
            'trangthai' => $this->trangthai,
        ]);

        $query->andFilterWhere(['like', 'hoten', $this->hoten])
            ->andFilterWhere(['like', 'ngaysinh', $this->ngaysinh])
            ->andFilterWhere(['like', 'cmnd', $this->cmnd])
            ->andFilterWhere(['like', 'anh', $this->anh])
            ->andFilterWhere(['like', 'anhcmnd', $this->anhcmnd])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'sdt', $this->sdt])
            ->andFilterWhere(['like', 'svtruong', $this->svtruong])
            ->andFilterWhere(['like', 'gvtruong', $this->gvtruong])
            ->andFilterWhere(['like', 'nganhhoc', $this->nganhhoc])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'luongyeucau', $this->luongyeucau]);

        return $dataProvider;
    }
}
