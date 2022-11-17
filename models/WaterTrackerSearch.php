<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WaterTracker;

/**
 * WaterTrackerSearch represents the model behind the search form of `app\models\WaterTracker`.
 */
class WaterTrackerSearch extends WaterTracker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cup_counter'], 'integer'],
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
        $query = WaterTracker::find();

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
            'cup_counter' => $this->cup_counter,
        ]);

        return $dataProvider;
    }
}
