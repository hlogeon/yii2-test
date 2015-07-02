<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 7/2/15
 * Time: 3:30 PM
 */

namespace app\models;


use yii\db\ActiveRecord;
use Yii;


/**
 * Class Author
 * @package app\models
 *
 * @property integer $id
 * @property string firstname
 * @property string lastname
 */
class Author extends ActiveRecord{



    public static function tableName()
    {
        return 'authors';
    }



    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'firstname' => Yii::t('app', 'First Name'),
            'lastname' => Yii::t('app', 'Last Name'),
        ];
    }

    public static function lists()
    {
        $all = self::find()->all();
        $result = [];
        foreach($all as $item){
            $result[$item->id] = $item->firstname . ' ' . $item->lastname;
        }
        return $result;

    }

}