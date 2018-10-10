<?php

use yii\db\Migration;

/**
 * Class m181009_155041_create_phanlop
 */
class m181009_160000_create_phanlop extends Migration
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

        $this->createTable('{{%phanlop}}', [
            'id' => $this->primaryKey(),
            'lopday_id' => $this->integer()->notNull(),
            'giasu_id' => $this->integer(),
            //neu gia su ko dang ky tk => luu cac truong sau
            'hotengs' => $this->integer()->notNull(), 
            'dienthoaigs' => $this->string(),
            
            'trangthai' => $this->integer()
            
        ], $tableOptions);
        $this->addForeignKey('fk_phanlop_lopday', 'phanlop', 'lopday_id', 'lopday', 'id');
        $this->addForeignKey('fk_phanlop_giasu', 'phanlop', 'giasu_id', 'giasu', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phanlop}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_155041_create_phanlop cannot be reverted.\n";

        return false;
    }
    */
}
