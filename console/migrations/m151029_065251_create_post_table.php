<?php

use yii\db\Schema;
use yii\db\Migration;

class m151029_065251_create_post_table extends Migration
{
    public function up()
    {
		$this->createTable('post', [
			'id' 	=> 'pk',
			'title' => Schema::TYPE_STRING. ' NOT NULL',
			'content'	=> Schema::TYPE_TEXT, 	
		]);
    }

    public function down()
    {
    	$this->dropTable('post');
//         echo "m151029_065251_create_post_table cannot be reverted.\n";

//         return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
