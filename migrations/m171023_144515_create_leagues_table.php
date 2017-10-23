<?php

use yii\db\Migration;

/**
 * Handles the creation of table `leagues`.
 */
class m171023_144515_create_leagues_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('leagues', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('leagues');
    }
}
