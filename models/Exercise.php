<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exercise".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $image
 * @property string|null $time_to_complete
 * @property int|null $is_completed
 */
class Exercise extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exercise';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_completed'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 250],
            [['image'], 'string', 'max' => 500],
            [['time_to_complete'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'time_to_complete' => 'Time To Complete',
            'is_completed' => 'Is Completed',
        ];
    }

    public static function fetchExercises()
    {
        return static::findBySql("SELECT * FROM `exercise`");
    }
}
