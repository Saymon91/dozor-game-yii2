<?php

use yii\db\pgsql\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m171023_134801_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->string(32)->primaryKey(),
            'phone' => $this->string(11)->unique(),
            'email' => $this->string(255)->unique(),
            'name' => $this->string(255)->unique(),
            'info' => $this->jsonb(),
            'key' => $this->string(32),
            'token' => $this->string(32),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
