<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AdminUser extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_type' => array(
                'type'  => 'INT',
                'null'  => false,
                'unique'=> true
            ),
            'first_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => true,
            ),
            'last_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '25',
                'null' => true,
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true,
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true,
            ),
            'password' => array(
                'type' => 'VARCHAR',
				'constraint' => '255'
            ),
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
            'mobile_no' => [
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
        $this->forge->createTable('admin_users', true);
    }

    public function down()
    {
        $this->forge->dropTable('admin_users');
    }
}
