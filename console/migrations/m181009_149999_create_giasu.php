<?php

use yii\db\Migration;

/**
 * Class m181009_144723_create_giasu
 */
class m181009_149999_create_giasu extends Migration
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

        $this->createTable('{{%giasu}}', [
            'id' => $this->primaryKey(),
            'hoten' => $this->string()->notNull(),
            'ngaysinh' => $this->string(),
            'gioitinh' => $this->integer()->notNull(),
            'cmnd' => $this->string(),
            'anh' => $this->string(),
            'anhcmnd' => $this->string(),
            'email' => $this->string(),
            'sdt' => $this->string(),
            'matkhau' => $this->string(),
            'svtruong' => $this->string(),
            'gvtruong' => $this->string(),
            'nganhhoc' => $this->string(),
            'diachi' => $this->string(),            
            'luongyeucau' => $this->string(),
            'trangthai' => $this->integer()
            
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%giasu}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_144723_create_giasu cannot be reverted.\n";

        return false;
    }
    */
}
