<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%favorite}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%book}}`
 * - `{{%user}}`
 */
class m200524_005025_create_favorite_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%favorite}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'book_id' => $this->integer(),
            'user_id' => $this->integer(),
        ]);

        // creates index for column `book_id`
        $this->createIndex(
            '{{%idx-favorite-book_id}}',
            '{{%favorite}}',
            'book_id'
        );

        // add foreign key for table `{{%book}}`
        $this->addForeignKey(
            '{{%fk-favorite-book_id}}',
            '{{%favorite}}',
            'book_id',
            '{{%book}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-favorite-user_id}}',
            '{{%favorite}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-favorite-user_id}}',
            '{{%favorite}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%book}}`
        $this->dropForeignKey(
            '{{%fk-favorite-book_id}}',
            '{{%favorite}}'
        );

        // drops index for column `book_id`
        $this->dropIndex(
            '{{%idx-favorite-book_id}}',
            '{{%favorite}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-favorite-user_id}}',
            '{{%favorite}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-favorite-user_id}}',
            '{{%favorite}}'
        );

        $this->dropTable('{{%favorite}}');
    }
}
