<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Parts;

/**
 * PartsSearch represents the model behind the search form of `app\models\Parts`.
 */
class PartsSearch extends Parts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['part_id', 'brand_id', 'quantity', 'purchase_price', 'realization_price'], 'integer'],
            [['brand_name', 'part_name', 'part_art', 'text'], 'safe'],
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
        $query = Parts::find();

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
            'part_id' => $this->part_id,
            'brand_id' => $this->brand_id,
            'quantity' => $this->quantity,
            'purchase_price' => $this->purchase_price,
            'realization_price' => $this->realization_price,
        ]);

        $query->andFilterWhere(['like', 'brand_name', $this->brand_name])
            ->andFilterWhere(['like', 'part_name', $this->part_name])
            ->andFilterWhere(['like', 'part_art', $this->part_art])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
