<?php

use yii\db\Schema;
use yii\db\Migration;

class m150702_082423_books_table extends Migration
{
    public function up()
    {
        $this->createTable('books', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
            'date_create' => Schema::TYPE_TIMESTAMP,
            'date_update' => Schema::TYPE_TIMESTAMP,
            'preview' => Schema::TYPE_STRING,
            'date' => Schema::TYPE_DATE,
            'author_id' => Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('books');
    }

}
