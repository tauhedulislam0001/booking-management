<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Booking extends Migration
{
    public function up()
    {
        $this->forge->addField(array(

            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'booking_type' => [
                'type' => 'INT',
                'null' => false,
            ],
            'booked_by' => [
                'type' => 'INT',
                'unsigned' => true,
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
            'server_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
            ],
            'fare' => [
                'type' => 'FLOAT',
                'null' => false,
            ],
            'service_info' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
            ],
            'payment_status' => [
                'type' => 'INT',
                'null' => false,
            ],
            'service_status' => [
                'type' => 'INT',
                'null' => false,
            ],
            'booking_date_time' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'pickup_date_time' => [
                'type' => 'DATETIME',
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
        $this->forge->addForeignKey('server_id', 'admin_users', 'id');
        $this->forge->addForeignKey('booked_by', 'admin_users', 'id');
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('bookings', true);
    }

    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
