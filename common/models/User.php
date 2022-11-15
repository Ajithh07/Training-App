<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int $type
 * @property int $status
 * @property string $auth_key
 * @property string|null $password_reset_token
 * @property string $created_at
 * @property int $updated_at
 * @property int|null $allow_notification
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'name', 'email', 'phone', 'type', 'status', 'auth_key', 'created_at', 'updated_at'], 'required'],
            [['type', 'status', 'updated_at', 'allow_notification'], 'integer'],
            [['username', 'name', 'email', 'auth_key'], 'string', 'max' => 100],
            [['password_hash'], 'string', 'max' => 512],
            [['phone'], 'string', 'max' => 12],
            [['password_reset_token'], 'string', 'max' => 200],
            [['created_at'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'type' => 'Type',
            'status' => 'Status',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'allow_notification' => 'Allow Notification',
        ];
    }


    public  function checkusername($username, $pass)
    {

        $data = User::find()->where(['username' => $username, 'password_hash' => $pass])->one();

        return $data;
    }
}
