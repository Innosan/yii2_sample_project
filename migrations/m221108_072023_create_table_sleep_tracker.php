<?php

use yii\db\Migration;

class m221108_072023_create_table_sleep_tracker extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%sleep_tracker}}',
            [
                'id' => $this->primaryKey(),
                'sleep_time' => $this->float()->notNull(),
                'is_daytime_sleep' => $this->boolean()->notNull(),
                'wake_up_times' => $this->integer()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%sleep_tracker}}');
    }
}
