<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_trackers".
 *
 * @property int $user_id
 * @property int $body_tracker_id
 * @property int $diet_tracker_id
 * @property int $sleep_tracker_id
 * @property int $water_tracker_id
 */
class UserTrackers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_trackers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body_tracker_id', 'diet_tracker_id', 'sleep_tracker_id', 'water_tracker_id'], 'required'],
            [['body_tracker_id', 'diet_tracker_id', 'sleep_tracker_id', 'water_tracker_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'body_tracker_id' => 'Body Tracker ID',
            'diet_tracker_id' => 'Diet Tracker ID',
            'sleep_tracker_id' => 'Sleep Tracker ID',
            'water_tracker_id' => 'Water Tracker ID',
        ];
    }
}
