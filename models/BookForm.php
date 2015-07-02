<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 7/2/15
 * Time: 5:54 PM
 */

namespace app\models;


use yii\base\Model;

class BookForm extends Model{

    public $name;
    public $author_id;
    public $preview;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'author_id'], 'required'],
        ];
    }


    public function loadBook(Book $book)
    {
        $this->name = $book->name;
        $this->author_id = $book->author_id;
        $this->preview = $book->preview;
    }



}