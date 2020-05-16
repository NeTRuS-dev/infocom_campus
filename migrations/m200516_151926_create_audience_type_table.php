<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%audience_type}}`.
 */
class m200516_151926_create_audience_type_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%audience_type}}', [
            'id' => $this->primaryKey(),
            'name_of_type'=>$this->string(255)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%audience_type}}');
    }
}
