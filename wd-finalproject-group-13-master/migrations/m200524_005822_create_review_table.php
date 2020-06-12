<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%review}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%book}}`
 * - `{{%user}}`
 */
class m200524_005822_create_review_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%review}}', [
            'id' => $this->primaryKey(),
            'rating' => $this->decimal(2,1),
            'comment' => $this->string(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'book_id' => $this->integer(),
            'user_id' => $this->integer(),
        ]);

        // creates index for column `book_id`
        $this->createIndex(
            '{{%idx-review-book_id}}',
            '{{%review}}',
            'book_id'
        );

        // add foreign key for table `{{%book}}`
        $this->addForeignKey(
            '{{%fk-review-book_id}}',
            '{{%review}}',
            'book_id',
            '{{%book}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-review-user_id}}',
            '{{%review}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-review-user_id}}',
            '{{%review}}',
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
            '{{%fk-review-book_id}}',
            '{{%review}}'
        );

        // drops index for column `book_id`
        $this->dropIndex(
            '{{%idx-review-book_id}}',
            '{{%review}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-review-user_id}}',
            '{{%review}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-review-user_id}}',
            '{{%review}}'
        );

        $this->dropTable('{{%review}}');
    }
}
