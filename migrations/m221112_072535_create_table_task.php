<?php

use yii\db\Migration;

class m221112_072535_create_table_task extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%task}}',
            [
                'id' => $this->primaryKey(),
                'title' => $this->string(100)->notNull(),
                'value' => $this->integer()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%task}}');
    }
}
