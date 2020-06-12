<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

/**
 * BookSearch represents the model behind the search form of `app\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'stock', 'sold', 'genre_id', 'publisher_id', 'type_book_id', 'author_id'], 'integer'],
            [['title', 'publishing_year', 'edition', 'isbn', 'cover', 'pages', 'created_at', 'updated_at'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Book::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'publishing_year' => $this->publishing_year,
            'price' => $this->price,
            'stock' => $this->stock,
            'sold' => $this->sold,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'genre_id' => $this->genre_id,
            'publisher_id' => $this->publisher_id,
            'type_book_id' => $this->type_book_id,
            'author_id' => $this->author_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'edition', $this->edition])
            ->andFilterWhere(['like', 'isbn', $this->isbn])
            ->andFilterWhere(['like', 'cover', $this->cover])
            ->andFilterWhere(['like', 'pages', $this->pages]);

        return $dataProvider;
    }
}
