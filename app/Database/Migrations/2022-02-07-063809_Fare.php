<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fare extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'fare_type' => [
                'type' => 'INT',
                'unique' => true,
                'null' => false,
            ],
            'pickup_location_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'drop_location_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'fare' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'status' => [
                'type' => 'INT',
                'null' => false,
            ],

            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp'
        ));

        $this->forge->addForeignKey('pickup_location_id', 'locations', 'id');
        $this->forge->addForeignKey('drop_location_id', 'locations', 'id');
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('fares', true);
    }

    public function down()
    {
        $this->forge->dropTable('fares');
    }
}
