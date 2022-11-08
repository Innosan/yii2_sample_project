<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sleep_tracker".
 *
 * @property int $id
 * @property float $sleep_time
 * @property int $is_daytime_sleep
 * @property int $wake_up_times
 */
class SleepTracker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sleep_tracker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sleep_time', 'is_daytime_sleep', 'wake_up_times'], 'required'],
            [['sleep_time'], 'number'],
            [['is_daytime_sleep', 'wake_up_times'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sleep_time' => 'Sleep Time',
            'is_daytime_sleep' => 'Is Daytime Sleep',
            'wake_up_times' => 'Wake Up Times',
        ];
    }
}
