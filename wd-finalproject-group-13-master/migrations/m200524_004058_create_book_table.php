<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%genre}}`
 * - `{{%publisher}}`
 * - `{{%type_book}}`
 * - `{{%author}}`
 */
class m200524_004058_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'publishing_year' => $this->date('Y-m-d'),
            'edition' => $this->string(),
            'price' => $this->decimal(5,2),
            'isbn' => $this->string(),
            'stock' => $this->integer(),
            'sold' => $this->integer(),
            'cover' => $this->string(),
            'pages' => $this->string(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'genre_id' => $this->integer(),
            'publisher_id' => $this->integer()->defaultValue(null),
            'type_book_id' => $this->integer()->defaultValue(null),
            'author_id' => $this->integer(),
        ]);

        // creates index for column `genre_id`
        $this->createIndex(
            '{{%idx-book-genre_id}}',
            '{{%book}}',
            'genre_id'
        );

        // add foreign key for table `{{%genre}}`
        $this->addForeignKey(
            '{{%fk-book-genre_id}}',
            '{{%book}}',
            'genre_id',
            '{{%genre}}',
            'id',
            'CASCADE'
        );

        // creates index for column `publisher_id`
        $this->createIndex(
            '{{%idx-book-publisher_id}}',
            '{{%book}}',
            'publisher_id'
        );

        // add foreign key for table `{{%publisher}}`
        $this->addForeignKey(
            '{{%fk-book-publisher_id}}',
            '{{%book}}',
            'publisher_id',
            '{{%publisher}}',
            'id',
            'CASCADE'
        );

        // creates index for column `type_book_id`
        $this->createIndex(
            '{{%idx-book-type_book_id}}',
            '{{%book}}',
            'type_book_id'
        );

        // add foreign key for table `{{%type_book}}`
        $this->addForeignKey(
            '{{%fk-book-type_book_id}}',
            '{{%book}}',
            'type_book_id',
            '{{%type_book}}',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id`
        $this->createIndex(
            '{{%idx-book-author_id}}',
            '{{%book}}',
            'author_id'
        );

        // add foreign key for table `{{%author}}`
        $this->addForeignKey(
            '{{%fk-book-author_id}}',
            '{{%book}}',
            'author_id',
            '{{%author}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%genre}}`
        $this->dropForeignKey(
            '{{%fk-book-genre_id}}',
            '{{%book}}'
        );

        // drops index for column `genre_id`
        $this->dropIndex(
            '{{%idx-book-genre_id}}',
            '{{%book}}'
        );

        // drops foreign key for table `{{%publisher}}`
        $this->dropForeignKey(
            '{{%fk-book-publisher_id}}',
            '{{%book}}'
        );

        // drops index for column `publisher_id`
        $this->dropIndex(
            '{{%idx-book-publisher_id}}',
            '{{%book}}'
        );

        // drops foreign key for table `{{%type_book}}`
        $this->dropForeignKey(
            '{{%fk-book-type_book_id}}',
            '{{%book}}'
        );

        // drops index for column `type_book_id`
        $this->dropIndex(
            '{{%idx-book-type_book_id}}',
            '{{%book}}'
        );

        // drops foreign key for table `{{%author}}`
        $this->dropForeignKey(
            '{{%fk-book-author_id}}',
            '{{%book}}'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            '{{%idx-book-author_id}}',
            '{{%book}}'
        );

        $this->dropTable('{{%book}}');
    }
}
