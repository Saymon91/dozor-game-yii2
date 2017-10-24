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
            'username' => $this->string(25)->unique(),
            'phone' => $this->string(11)->unique(),
            'email' => $this->string(255)->unique(),
            'name' => $this->string(255),
            'info' => $this->text()->null(),
            'key' => $this->string(32),
            'token' => $this->string(32)->unique(),
            'session_id' => $this->string(32)->null()
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
