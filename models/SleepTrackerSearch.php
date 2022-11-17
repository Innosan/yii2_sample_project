<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SleepTracker;

/**
 * SleepTrackerSearch represents the model behind the search form of `app\models\SleepTracker`.
 */
class SleepTrackerSearch extends SleepTracker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_daytime_sleep', 'wake_up_times'], 'integer'],
            [['sleep_time'], 'number'],
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
        $query = SleepTracker::find();

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
            'sleep_time' => $this->sleep_time,
            'is_daytime_sleep' => $this->is_daytime_sleep,
            'wake_up_times' => $this->wake_up_times,
        ]);

        return $dataProvider;
    }
}
