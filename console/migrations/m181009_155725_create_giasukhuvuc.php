<?php

use yii\db\Migration;

/**
 * Class m181009_155725_create_giasukhuvuc
 */
class m181009_155725_create_giasukhuvuc extends Migration
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

        $this->createTable('{{%giasukhuvuc}}', [
            'id' => $this->primaryKey(),
            'giasu_id' => $this->integer()->notNull(),
            'khuvuc_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_giasukhuvuc_giasu', 'giasukhuvuc', 'giasu_id', 'giasu', 'id');
        $this->addForeignKey('fk_giasukhuvuc_khuvuc', 'giasukhuvuc', 'khuvuc_id', 'khuvuc', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%giasukhuvuc}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_155725_create_giasukhuvuc cannot be reverted.\n";

        return false;
    }
    */
}
