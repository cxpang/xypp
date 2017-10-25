<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "x_user".
 *
 * @property integer $uid
 * @property string $username
 * @property string $password
 * @property string $sex
 * @property string $address
 * @property string $email
 * @property string $upicture
 * @property string $uphone
 * @property string $status
 * @property string $auth_key
 * @property string $password_reset_token
 * @property integer $time
 */
class XUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'x_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password','email', 'uphone'], 'required'],
            [['username', 'email'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 255],
            [['uphone'], 'string', 'max' => 11],
            [['username'], 'unique'],
            [['password'], 'unique'],
            [['email'], 'unique'],
            [['uphone'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'uid' => 'Uid',
            'username' => 'Username',
            'password' => 'Password',
            'sex' => 'Sex',
            'address' => 'Address',
            'email' => 'Email',
            'upicture' => 'Upicture',
            'uphone' => 'Uphone',
            'status' => 'Status',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'time' => 'Time',
        ];
    }
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
}
