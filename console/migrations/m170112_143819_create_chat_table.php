<?php

use yii\db\Migration;

/**
 * Handles the creation of table `chat`.
 */
class m170112_143819_create_chat_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('chat', [
            'id' => $this->primaryKey(),
            'userId' => $this->integer()->notNull(),
	        'message' =>  $this->text()->notNull(),
	        'updateDate' => $this->timestamp(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('chat');
    }
}
