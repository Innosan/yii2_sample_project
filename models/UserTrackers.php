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
 *
 * @property BodyTracker $bodyTracker
 * @property DietTracker $dietTracker
 * @property SleepTracker $sleepTracker
 * @property User $user
 * @property WaterTracker $waterTracker
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
            [['body_tracker_id'], 'exist', 'skipOnError' => true, 'targetClass' => BodyTracker::class, 'targetAttribute' => ['body_tracker_id' => 'id']],
            [['diet_tracker_id'], 'exist', 'skipOnError' => true, 'targetClass' => DietTracker::class, 'targetAttribute' => ['diet_tracker_id' => 'id']],
            [['sleep_tracker_id'], 'exist', 'skipOnError' => true, 'targetClass' => SleepTracker::class, 'targetAttribute' => ['sleep_tracker_id' => 'id']],
            [['water_tracker_id'], 'exist', 'skipOnError' => true, 'targetClass' => WaterTracker::class, 'targetAttribute' => ['water_tracker_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
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

    /**
     * Gets query for [[BodyTracker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBodyTracker()
    {
        return $this->hasOne(BodyTracker::class, ['id' => 'body_tracker_id']);
    }

    /**
     * Gets query for [[DietTracker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDietTracker()
    {
        return $this->hasOne(DietTracker::class, ['id' => 'diet_tracker_id']);
    }

    /**
     * Gets query for [[SleepTracker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSleepTracker()
    {
        return $this->hasOne(SleepTracker::class, ['id' => 'sleep_tracker_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    /**
     * Gets query for [[WaterTracker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWaterTracker()
    {
        return $this->hasOne(WaterTracker::class, ['id' => 'water_tracker_id']);
    }
}
