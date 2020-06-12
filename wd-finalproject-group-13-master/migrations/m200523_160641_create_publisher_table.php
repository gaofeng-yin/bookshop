<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%publisher}}`.
 */
class m200523_160641_create_publisher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%publisher}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%publisher}}');
    }
}
