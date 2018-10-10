<?php

use yii\db\Migration;

/**
 * Class m181009_144703_create_lopday
 */
class m181009_148888_create_lopday extends Migration
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

        $this->createTable('{{%lopday}}', [
            'id' => $this->primaryKey(),
            'monhoc_id' => $this->integer()->notNull(),
            'caphoc_id' => $this->integer()->notNull(),
            'khuvuc_id' => $this->integer()->notNull(),
            'diachi' => $this->string(),
            'sobuoi' => $this->string(),            
            'thoigian' => $this->string(),
            'mucluong' => $this->string(),
            'yeucau' => $this->string(),
            'tennguoidk' => $this->string(),
            'sdtnguoidk' => $this->string(),
            'trangthai' => $this->integer()
            
        ], $tableOptions);
        $this->addForeignKey('fk_lopday_monhoc', 'lopday', 'monhoc_id', 'monhoc', 'id');
        $this->addForeignKey('fk_lopday_caphoc', 'lopday', 'caphoc_id', 'caphoc', 'id');
        $this->addForeignKey('fk_lopday_khuvuc', 'lopday', 'khuvuc_id', 'khuvuc', 'id');
       
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lophoc}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_144703_create_lopday cannot be reverted.\n";

        return false;
    }
    */
}
