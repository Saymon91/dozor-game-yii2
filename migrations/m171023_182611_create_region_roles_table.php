<?php

use yii\db\Migration;

/**
 * Handles the creation of table `region_roles`.
 */
class m171023_182611_create_region_roles_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('region_roles', [
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
        $this->dropTable('region_roles');
    }
}
