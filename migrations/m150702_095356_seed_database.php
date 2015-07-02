<?php

use yii\db\Schema;
use yii\db\Migration;

class m150702_095356_seed_database extends Migration
{

    public function safeUp()
    {
        $this->insert('users', [
            'username' => 'test',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('test'),
        ]);
        $this->insert('users', [
            'username' => 'demo',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('demo'),
        ]);
        $this->insert('users', [
            'username' => 'hlogeon',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('cm2jpmrt6c'),
        ]);

        $this->insert('authors', [
            'firstname' => 'Steve',
            'lastname' => 'Mc. Connel',
        ]);
        $this->insert('authors', [
            'firstname' => 'Erih',
            'lastname' => 'Gamma',
        ]);
        $this->insert('authors', [
            'firstname' => 'Richard',
            'lastname' => 'Helm',
        ]);
        $this->insert('books', [
            'name' => 'Design patterns',
            'preview' => '@web/downloads/images/design_patterns.jpg',
            'author_id' => 2,
        ]);
        $this->insert('books', [
            'name' => 'OOP Design Patterns',
            'preview' => '@web/downloads/images/oop_patterns.jpg',
            'author_id' => 3,
        ]);
        $this->insert('books', [
            'name' => 'Design patterns for enterprise applications',
            'preview' => '@web/downloads/images/enterprise_patterns.jpg',
            'author_id' => 1,
        ]);

    }
    
    public function safeDown()
    {
        $this->truncateTable('users');
        $this->truncateTable('books');
        $this->truncateTable('authors');
    }

}
