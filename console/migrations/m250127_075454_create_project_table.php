<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m250127_075454_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNUll(),
            'tech_stack' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
            'start_date' => $this->integer()->notNull(),
            'end_date' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
