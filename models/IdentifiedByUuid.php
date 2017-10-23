<?php
/**
 * Created by PhpStorm.
 * User: semen
 * Date: 23.10.17
 * Time: 20:48
 */

namespace app\models;

use Ramsey\Uuid\Uuid;

trait IdentifiedByUuid
{
    public $uuidField = 'id';

    public function afterSave()
    {
        if (!$this->{$this->uuidField}) {
            $this->{$this->uuidField} = str_replace('-', '', Uuid::uuid4());
        }

        return parent::afterSave();
    }
}