<?php

use yii\db\Migration;

class m221108_072022_create_table_diet_tracker extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%diet_tracker}}',
            [
                'id' => $this->primaryKey(),
                'calories' => $this->float()->notNull(),
                'is_eaten_breakfast' => $this->boolean()->notNull(),
                'diet_date' => $this->date()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%diet_tracker}}');
    }
}
