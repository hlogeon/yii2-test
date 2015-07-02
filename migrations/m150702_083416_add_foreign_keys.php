<?php

use yii\db\Schema;
use yii\db\Migration;

class m150702_083416_add_foreign_keys extends Migration
{
    public function up()
    {
        $this->addForeignKey('books_authors_fk', 'books', 'author_id', 'authors', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('books_authors_fk', 'books');
    }
}
