<?php

use yii\db\Migration;

/**
 * Class m181009_144212_create_khuvuc
 */
class m181009_144212_create_khuvuc extends Migration
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

        $this->createTable('{{%khuvuc}}', [
            'id' => $this->primaryKey(),
            'khuvuc' => $this->string()->notNull()->unique(),
            
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%khuvuc}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181009_144212_create_khuvuc cannot be reverted.\n";

        return false;
    }
    */
}
