<?php

namespace komer45\notification\models;

use Yii;

/**
 * This is the model class for table "notification".
 *
 * @property integer $id
 * @property string $date
 * @property integer $user_id
 * @property string $email
 * @property string $message
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'user_id', 'email', 'message'], 'required'],
            [['date'], 'safe'],
            [['user_id'], 'integer'],
            [['email'], 'string', 'max' => 55],
            [['message'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'user_id' => 'User ID',
            'email' => 'Email',
            'message' => 'Message',
        ];
    }
}
