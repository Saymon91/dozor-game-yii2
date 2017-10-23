<?php

use yii\db\Migration;

/**
 * Handles the creation of table `regions`.
 */
class m171023_143405_create_regions_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('regions', [
            'code' => $this->string(32)->primaryKey(),
            'name' => $this->string(100)->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('regions');
    }
}
