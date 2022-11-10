<?php

use yii\db\Migration;

class m221110_093728_update_table_user_trackers extends Migration
{
    public function safeUp()
    {
        $this->addForeignKey(
            'user_trackers_ibfk_1',
            '{{%user_trackers}}',
            ['body_tracker_id'],
            '{{%body_tracker}}',
            ['id'],
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'user_trackers_ibfk_2',
            '{{%user_trackers}}',
            ['diet_tracker_id'],
            '{{%diet_tracker}}',
            ['id'],
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'user_trackers_ibfk_3',
            '{{%user_trackers}}',
            ['sleep_tracker_id'],
            '{{%sleep_tracker}}',
            ['id'],
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'user_trackers_ibfk_4',
            '{{%user_trackers}}',
            ['water_tracker_id'],
            '{{%water_tracker}}',
            ['id'],
            'CASCADE',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('user_trackers_ibfk_1', '{{%user_trackers}}');
        $this->dropForeignKey('user_trackers_ibfk_2', '{{%user_trackers}}');
        $this->dropForeignKey('user_trackers_ibfk_3', '{{%user_trackers}}');
        $this->dropForeignKey('user_trackers_ibfk_4', '{{%user_trackers}}');
    }
}
