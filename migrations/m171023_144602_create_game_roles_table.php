<?php

use yii\db\Migration;

/**
 * Handles the creation of table `game_roles`.
 */
class m171023_144602_create_game_roles_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('game_roles', [
            'id' => $this->string(32)->primaryKey(),
            'name' => $this->string(128)->unique(),
            'privileges' => $this->text(),
            'description' => $this->text()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('game_roles');
    }
}
