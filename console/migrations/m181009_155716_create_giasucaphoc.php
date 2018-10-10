<?php

use yii\db\Migration;

/**
 * Class m181009_155716_create_giasucaphoc
 */
class m181009_155716_create_giasucaphoc extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%giasucaphoc}}', [
            'id' => $this->primaryKey(),
            'giasu_id' => $this->integer()->notNull(),
            'caphoc_id' => $this->integer()->notNull(),
            
        ], $tableOptions);
        $this->addForeignKey('fk_giasucaphoc_giasu', 'giasucaphoc', 'giasu_id', 'giasu', 'id');
        $this->addForeignKey('fk_giasucaphoc_caphoc', 'giasucaphoc', 'caphoc_id', 'caphoc', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%giasucaphoc}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_155716_create_giasucaphoc cannot be reverted.\n";

        return false;
    }
    */
}
