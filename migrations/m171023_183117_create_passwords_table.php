<?php

use yii\db\Migration;

/**
 * Handles the creation of table `passwords`.
 */
class m171023_183117_create_passwords_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('passwords', [
            'user_id' => $this->primaryKey(),
            'password' => $this->text(),
            'created_at' => $this->dateTime()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('passwords');
    }
}
