<?php

class EditProfileDataForm extends \yii\base\Model {
    public \app\models\UserTrackers $trackers;

    public function rules()
    {
        return [
            ['bodyWeight', 'trim'],
            ['bodyWeight', 'required'],
            ['bodyWeight', 'int', 'min' => 2, 'max' => 4],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 50],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 12],
        ];
    }
}
