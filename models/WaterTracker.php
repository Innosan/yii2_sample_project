<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "water_tracker".
 *
 * @property int $id
 * @property int $cup_counter
 */
class WaterTracker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'water_tracker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cup_counter'], 'required'],
            [['cup_counter'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cup_counter' => 'Cup Counter',
        ];
    }
}
