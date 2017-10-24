<?php
/**
 * Created by PhpStorm.
 * User: semen
 * Date: 24.10.17
 * Time: 9:42
 */

namespace app\models;
use yii\db\ActiveRecord;
use Ramsey\Uuid\Uuid;

class BasicModel extends ActiveRecord
{
    public $uuidField = 'id';

    public function beforeSave($insert)
    {
        if (!$this->{$this->uuidField}) {
            $this->{$this->uuidField} = str_replace('-', '', Uuid::uuid4());
        }

        return parent::beforeSave($insert);
    }
}