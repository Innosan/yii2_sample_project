<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "body_tracker".
 *
 * @property int $id
 * @property float $body_weight
 * @property float $body_height
 */
class BodyTracker extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'body_tracker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body_weight', 'body_height'], 'required'],
            [['body_weight', 'body_height'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'body_weight' => 'Body Weight',
            'body_height' => 'Body Height',
        ];
    }
}
