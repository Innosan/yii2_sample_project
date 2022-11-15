<?php

use yii\db\Migration;

class m221115_082422_update_table_user_trackers extends Migration
{
    public function safeUp()
    {
        $this->addForeignKey(
            'user_trackers_ibfk_5',
            '{{%user_trackers}}',
            ['user_id'],
            '{{%user}}',
            ['id'],
            'CASCADE',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('user_trackers_ibfk_5', '{{%user_trackers}}');
    }
}
