<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diet_tracker".
 *
 * @property int $id
 * @property float $calories
 * @property int $is_eaten_breakfast
 * @property string $diet_date
 */
class DietTracker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diet_tracker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calories', 'is_eaten_breakfast', 'diet_date'], 'required'],
            [['calories'], 'number'],
            [['is_eaten_breakfast'], 'integer'],
            [['diet_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'calories' => 'Calories',
            'is_eaten_breakfast' => 'Is Eaten Breakfast',
            'diet_date' => 'Diet Date',
        ];
    }
}
