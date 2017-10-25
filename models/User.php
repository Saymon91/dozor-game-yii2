<?php

namespace app\models;
use Ramsey\Uuid\Uuid;
use Yii;

/**
 * User model
 *
 * @property string $id
 * @property string $username
 * @property string $phone
 * @property string $email
 * @property string $name
 * @property string $info
 * @property string $key
 * @property string $token
 * @property string $session_id
 * @property integer $created_at
 * @property integer $updated_at
 *
 */
class User extends BasicModel
{
    public $username;

    const LOGIN = 'login';
    const REGISTRATION = 'registration';

    public function scenarios()
    {
        return [
            self::LOGIN => ['username', 'password'],
            self::LOGIN => ['email', 'phone', 'password', 'name']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * Finds user by username
     *
     * @param string $query
     * @return User|null
     */
    public static function findByUsername(string $query): User
    {
        return self::findOne(['or', ['phone' => $query], ['email' => $query]]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    public function beforeSave($insert)
    {
        if (!$this->key) {
            $this->key = Uuid::uuid4();
        }
        if ($this->session_id !== Yii::$app->session->getId()) {
            $this->session_id = Yii::$app->session->getId();
        }
        return parent::beforeSave($insert);
    }

    /**
     * Validates password
     *
     * @param string $username
     * @return User|null
     */
    public static function identity(string $username)
    {
        return self::findByUsername($username);
    }

    /**
     * Validates password
     *
     * @param string $username
     * @return User|null
     */
    public static function authentication(self $user, string $password)
    {

    }
}
