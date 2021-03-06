<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 7/2/15
 * Time: 3:29 PM
 */

namespace app\models;


use yii\db\ActiveRecord;
use Yii;
/**
 * Class Book
 * @package app\models
 *
 *
 *
 * @property integer $id
 * @property string $name
 * @property \DateTime $date_create
 * @property \DateTime $date_update
 * @property string $preview
 * @property \DateTime $date
 * @property integer $author_id
 *
 * @property Author $author
 *
 */
class Book extends ActiveRecord{

    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    public static function tableName()
    {
        return 'books';
    }


}