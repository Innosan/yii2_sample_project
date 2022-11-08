<?php

use yii\db\Migration;

class m221108_072024_create_table_user_trackers extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%user_trackers}}',
            [
                'user_id' => $this->primaryKey(),
                'body_tracker_id' => $this->integer()->notNull(),
                'diet_tracker_id' => $this->integer()->notNull(),
                'sleep_tracker_id' => $this->integer()->notNull(),
                'water_tracker_id' => $this->integer()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%user_trackers}}');
    }
}
