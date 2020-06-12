<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%type_book}}`.
 */
class m200523_154456_create_type_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%type_book}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%type_book}}');
    }
}
