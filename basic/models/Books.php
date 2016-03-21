<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string $title
 * @property string $author
 * @property integer $pages
 * @property integer $year
 * @property string $publisher
 * @property string $isbn
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'author', 'pages', 'year', 'publisher', 'isbn'], 'required'],
            [['pages', 'year'], 'integer'],
            [['title', 'author', 'publisher', 'isbn'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'author' => 'Автор',
            'pages' => 'Кол-во страниц',
            'year' => 'Год издания',
            'publisher' => 'Издательство',
            'isbn' => 'ISBN',
        ];
    }
}
