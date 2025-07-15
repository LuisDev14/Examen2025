<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%edificios}}`.
 */
class m250715_170539_create_edificios_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Creacion de la migracion de edificios
        $this->createTable('{{%edificios}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(255)->notNull(),
            'numero' => $this->integer()->notNull(),
            'letra_interior' => $this->string(10),
            'latitud' => $this->decimal(10, 7)->notNull(),
            'longitud' => $this->decimal(10, 7)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%edificios}}');
    }
}
