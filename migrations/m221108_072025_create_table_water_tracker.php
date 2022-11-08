<?php

use yii\db\Migration;

class m221108_072025_create_table_water_tracker extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%water_tracker}}',
            [
                'id' => $this->primaryKey(),
                'cup_counter' => $this->integer()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%water_tracker}}');
    }
}
