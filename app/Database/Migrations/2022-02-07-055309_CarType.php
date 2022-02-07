<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CarType extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'car_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'total_seat' => [
                'type' => 'INT',
                'unique' => true,
                'null' => false,
            ],
            'status' => [
                'type' => 'INT',
                'null' => false,
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ));  

        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('car_types', true);
    }

    public function down()
    {
        $this->forge->dropTable('car_types');
    }
}
