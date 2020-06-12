<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $publishing_year
 * @property string|null $edition
 * @property float|null $price
 * @property string|null $isbn
 * @property int|null $stock
 * @property int|null $sold
 * @property string|null $cover
 * @property string|null $pages
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $genre_id
 * @property int|null $publisher_id
 * @property int|null $type_book_id
 * @property int|null $author_id
 *
 * @property Author $author
 * @property Favorite[] $favorites
 * @property Genre $genre
 * @property OrderBook[] $orderBooks
 * @property Publisher $publisher
 * @property Review[] $reviews
 * @property TypeBook $typeBook
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['publishing_year', 'created_at', 'updated_at'], 'safe'],
            [['price'], 'number'],
            [['stock', 'sold', 'genre_id', 'publisher_id', 'type_book_id', 'author_id'], 'integer'],
            [['title', 'edition', 'isbn', 'cover', 'pages'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
            [['publisher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['publisher_id' => 'id']],
            [['type_book_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeBook::className(), 'targetAttribute' => ['type_book_id' => 'id']],
            [['author_id', 'publisher_id', 'genre_id', 'type_book_id'], 'required'],
            [['cover'], 'file', 'extensions' => 'jpg,png', 'skipOnEmpty' => false]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'publishing_year' => 'Publishing Year',
            'edition' => 'Edition',
            'price' => 'Price',
            'isbn' => 'Isbn',
            'stock' => 'Stock',
            'sold' => 'Sold',
            'cover' => 'Cover',
            'pages' => 'Pages',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'genre_id' => 'Genre',
            'publisher_id' => 'Publisher',
            'type_book_id' => 'Type Book',
            'author_id' => 'Author name',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    /**
     * Gets query for [[Favorites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavorites()
    {
        return $this->hasMany(Favorite::className(), ['book_id' => 'id']);
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }

    /**
     * Gets query for [[OrderBooks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderBooks()
    {
        return $this->hasMany(OrderBook::className(), ['book_id' => 'id']);
    }

    /**
     * Gets query for [[Publisher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['book_id' => 'id']);
    }

    /**
     * Gets query for [[TypeBook]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTypeBook()
    {
        return $this->hasOne(TypeBook::className(), ['id' => 'type_book_id']);
    }
}
