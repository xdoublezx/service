<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Partsordersapplication;

/**
 * PartsordersapplicationSearch represents the model behind the search form of `app\models\Partsordersapplication`.
 */
class PartsordersapplicationSearch extends Partsordersapplication
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['application_id', 'sum'], 'integer'],
            [['quickly', 'status', 'one_part', 'two_part', 'three_part'], 'safe'],
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
        $query = Partsordersapplication::find();

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
            'application_id' => $this->application_id,
            'sum' => $this->sum,
        ]);

        $query->andFilterWhere(['like', 'quickly', $this->quickly])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'one_part', $this->one_part])
            ->andFilterWhere(['like', 'two_part', $this->two_part])
            ->andFilterWhere(['like', 'three_part', $this->three_part]);

        return $dataProvider;
    }
}
