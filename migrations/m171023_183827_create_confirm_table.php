<?php

use yii\db\Migration;

/**
 * Handles the creation of table `confirm`.
 */
class m171023_183827_create_confirm_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('confirm', [
            'id' => $this->integer()->unique(),
            'user_id' => $this->string(32),
            'created_at' => $this->dateTime(),
            'up_to' => $this->dateTime(),
            'operation' => $this->string(128),
            'args' => $this->text()
        ]);

        $this->createIndex('unique_operation', 'confirm', 'user_id');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('confirm');
    }
}
