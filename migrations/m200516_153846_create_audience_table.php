<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%audience}}`.
 */
class m200516_153846_create_audience_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%audience}}', [
            'id' => $this->primaryKey(),
            'audience_number' => $this->integer()->notNull(),
            'floor_number' => $this->integer()->notNull(),
            'audience_width' => $this->float()->notNull(),
            'audience_length' => $this->float()->notNull(),
            'number_of_seats' => $this->integer()->notNull(),
            'audience_type_id' => $this->integer()->notNull(),
            'subdivision_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-audience-author_id',
            'audience',
            'audience_type_id',
            'audience_type',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-audience-subdivision_id',
            'audience',
            'subdivision_id',
            'subdivision',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-audience-subdivision_id',
            'audience'
        );
        $this->dropForeignKey(
            'fk-audience-author_id',
            'audience'
        );
        $this->dropTable('{{%audience}}');
    }
}
