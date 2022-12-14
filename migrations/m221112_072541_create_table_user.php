<?php

use yii\db\Migration;

class m221112_072541_create_table_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%user}}',
            [
                'id' => $this->primaryKey(),
                'username' => $this->string(40)->notNull(),
                'password_hash' => $this->string(60)->notNull(),
                'email' => $this->string(50)->notNull()->unique(),
                'access_token' => $this->string(40)->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
