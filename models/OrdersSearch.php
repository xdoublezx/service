<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Orders;

/**
 * OrdersSearch represents the model behind the search form of `app\models\Orders`.
 */
class OrdersSearch extends Orders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mkdate', 'client_name', 'client_number', 'work_name', 'status', 'date_zabrali', 'remont_type', 'Errors', 'worker_name', 'works_list', 'part1', 'part2', 'part3'], 'safe'],
            [['order_number', 'client_id', 'worker_id', 'part1_price', 'part2_price', 'part3_price', 'pars_price', 'works_price', 'cost', 'selfcoast'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Orders::find();

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
            'order_number' => $this->order_number,
            'client_id' => $this->client_id,
            'worker_id' => $this->worker_id,
            'part1_price' => $this->part1_price,
            'part2_price' => $this->part2_price,
            'part3_price' => $this->part3_price,
            'pars_price' => $this->pars_price,
            'works_price' => $this->works_price,
            'cost' => $this->cost,
            'selfcoast' => $this->selfcoast,
        ]);

        $query->andFilterWhere(['like', 'mkdate', $this->mkdate])
            ->andFilterWhere(['like', 'client_name', $this->client_name])
            ->andFilterWhere(['like', 'client_number', $this->client_number])
            ->andFilterWhere(['like', 'work_name', $this->work_name])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'date_zabrali', $this->date_zabrali])
            ->andFilterWhere(['like', 'remont_type', $this->remont_type])
            ->andFilterWhere(['like', 'Errors', $this->Errors])
            ->andFilterWhere(['like', 'worker_name', $this->worker_name])
            ->andFilterWhere(['like', 'works_list', $this->works_list])
            ->andFilterWhere(['like', 'part1', $this->part1])
            ->andFilterWhere(['like', 'part2', $this->part2])
            ->andFilterWhere(['like', 'part3', $this->part3]);

        return $dataProvider;
    }
}
