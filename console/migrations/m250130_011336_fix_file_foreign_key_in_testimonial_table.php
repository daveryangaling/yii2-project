<?php

use yii\db\Migration;

/**
 * Class m250130_011336_fix_file_foreign_key_in_testimonial_table
 */
class m250130_011336_fix_file_foreign_key_in_testimonial_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            // Check if the foreign key exists before dropping it
            $table = '{{%testimonial}}';
            $foreignKey = 'fk-testimonial-customer_image_id';
            $db = Yii::$app->db;
            $tableSchema = $db->schema->getTableSchema($table);
    
            if ($tableSchema && isset($tableSchema->foreignKeys[$foreignKey])) {
                $this->dropForeignKey("{{%$foreignKey}}", $table);
            } else {
                echo "Foreign key {$foreignKey} does not exist. Skipping drop.\n";
            }

            // Alter column
            $this->alterColumn('{{%testimonial}}', 'customer_image_id', $this->integer());
                    
            // add foreign key for table `{{%file}}`
            $this->addForeignKey(
                '{{%fk-testimonial-customer_image_id}}',
                '{{%testimonial}}',
                'customer_image_id',
                '{{%file}}',
                'id',
                'SET NULL'
            );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Check if the foreign key exists before dropping it
        $table = '{{%testimonial}}';
        $foreignKey = 'fk-testimonial-customer_image_id';
        $db = Yii::$app->db;
        $tableSchema = $db->schema->getTableSchema($table);
    
        if ($tableSchema && isset($tableSchema->foreignKeys[$foreignKey])) {
            $this->dropForeignKey("{{%$foreignKey}}", $table);
        } else {
            echo "Foreign key {$foreignKey} does not exist. Skipping drop.\n";
        }

        // Alter column
        $this->alterColumn('{{%testimonial}}', 'customer_image_id', $this->integer()->notNull());

        // add foreign key for table `{{%file}}`
        $this->addForeignKey(
            '{{%fk-testimonial-customer_image_id}}',
            '{{%testimonial}}',
            'customer_image_id',
            '{{%file}}',
            'id',
            'CASCADE'
        );

    }

}
