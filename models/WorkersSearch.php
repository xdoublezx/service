<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Workers;

/**
 * WorkersSearch represents the model behind the search form of `app\models\Workers`.
 */
class WorkersSearch extends Workers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['worker_id'], 'integer'],
            [['worker_email', 'worker_phone', 'worker_name', 'workers_login'], 'safe'],
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
        $query = Workers::find();

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
            'worker_id' => $this->worker_id,
        ]);

        $query->andFilterWhere(['like', 'worker_email', $this->worker_email])
            ->andFilterWhere(['like', 'worker_phone', $this->worker_phone])
            ->andFilterWhere(['like', 'worker_name', $this->worker_name])
            ->andFilterWhere(['like', 'workers_login', $this->workers_login]);

        return $dataProvider;
    }
}
