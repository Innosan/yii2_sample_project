<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trackers".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property float $value
 */
class Tracker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trackers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'value'], 'required'],
            [['description'], 'string'],
            [['value'], 'number'],
            [['title'], 'string', 'max' => 300],
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
            'value' => 'Value',
        ];
    }
}
