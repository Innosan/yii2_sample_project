<?php

use yii\db\Migration;

class m221118_014603_create_table_exercise extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%exercise}}',
            [
                'id' => $this->primaryKey(),
                'title' => $this->string(100),
                'description' => $this->string(250),
                'image' => $this->string(500),
                'time_to_complete' => $this->string(2),
                'is_completed' => $this->boolean(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%exercise}}');
    }
}
