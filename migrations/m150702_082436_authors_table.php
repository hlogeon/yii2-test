<?php

use yii\db\Schema;
use yii\db\Migration;

class m150702_082436_authors_table extends Migration
{
    public function up()
    {
        $this->createTable('authors', [
            'id' => Schema::TYPE_PK,
            'firstname' => Schema::TYPE_STRING,
            'lastname' => Schema::TYPE_STRING,
        ]);
    }

    public function down()
    {
        $this->dropTable('authors');
    }

}
