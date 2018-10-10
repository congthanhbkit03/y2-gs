<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bds;

/**
 * BdsSearch represents the model behind the search form of `backend\models\Bds`.
 */
class BdsSearch extends Bds
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'xa', 'huyen', 'tinh', 'giaban', 'giathue', 'sotang', 'sophongngu', 'sophongtam', 'cachcho', 'cachsieuthi', 'cachbenhvien', 'cachtruonghoc', 'namxay', 'loai_id', 'user_id', 'status'], 'integer'],
            [['tieude', 'gioithieu', 'diachi', 'avatar', 'ngaytao', 'ngaysua'], 'safe'],
            [['dientich', 'lat', 'lng'], 'number'],
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
        $query = Bds::find();

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
            'dientich' => $this->dientich,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'xa' => $this->xa,
            'huyen' => $this->huyen,
            'tinh' => $this->tinh,
            'giaban' => $this->giaban,
            'giathue' => $this->giathue,
            'sotang' => $this->sotang,
            'sophongngu' => $this->sophongngu,
            'sophongtam' => $this->sophongtam,
            'cachcho' => $this->cachcho,
            'cachsieuthi' => $this->cachsieuthi,
            'cachbenhvien' => $this->cachbenhvien,
            'cachtruonghoc' => $this->cachtruonghoc,
            'namxay' => $this->namxay,
            'loai_id' => $this->loai_id,
            'user_id' => $this->user_id,
            'status' => $this->status,
            'ngaytao' => $this->ngaytao,
            'ngaysua' => $this->ngaysua,
        ]);

        $query->andFilterWhere(['like', 'tieude', $this->tieude])
            ->andFilterWhere(['like', 'gioithieu', $this->gioithieu])
            ->andFilterWhere(['like', 'diachi', $this->diachi])
            ->andFilterWhere(['like', 'avatar', $this->avatar]);

        return $dataProvider;
    }
}
