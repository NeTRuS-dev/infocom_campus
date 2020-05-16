<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%building}}`.
 */
class m200516_150246_create_building_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%building}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(255)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%building}}');
    }
}
