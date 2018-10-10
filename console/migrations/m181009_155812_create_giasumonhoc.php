<?php

use yii\db\Migration;

/**
 * Class m181009_155812_create_giasumonhoc
 */
class m181009_155812_create_giasumonhoc extends Migration
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

        $this->createTable('{{%giasumonhoc}}', [
            'id' => $this->primaryKey(),
            'giasu_id' => $this->integer()->notNull(),
            'monhoc_id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_giasumonhoc_giasu', 'giasumonhoc', 'giasu_id', 'giasu', 'id');
        $this->addForeignKey('fk_giasumonhoc_monhoc', 'giasumonhoc', 'monhoc_id', 'monhoc', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%giasumonhoc}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_155812_create_giasumonhoc cannot be reverted.\n";

        return false;
    }
    */
}
