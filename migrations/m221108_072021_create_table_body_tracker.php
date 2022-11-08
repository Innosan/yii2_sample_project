<?php

use yii\db\Migration;

class m221108_072021_create_table_body_tracker extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%body_tracker}}',
            [
                'id' => $this->primaryKey(),
                'body_weight' => $this->float()->notNull(),
                'body_height' => $this->float()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%body_tracker}}');
    }
}
