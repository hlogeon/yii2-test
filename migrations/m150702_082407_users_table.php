<?php

use yii\db\Schema;
use yii\db\Migration;

class m150702_082407_users_table extends Migration
{
    public function up()
    {

        $this->createTable('users', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'password' => Schema::TYPE_STRING . ' NOT NULL',
            'authKey' => Schema::TYPE_STRING,
            'accessToken' => Schema::TYPE_STRING,
        ]);

    }

    public function down()
    {
        $this->dropTable('users');
    }
}
