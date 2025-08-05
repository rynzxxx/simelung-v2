<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'superadmin',
                'password' => password_hash('superadmin123', PASSWORD_DEFAULT),
                'role' => 'superadmin',
            ],
            [
                'username' => 'bumdes',
                'password' => password_hash('bumdes123', PASSWORD_DEFAULT),
                'role' => 'admin',
            ],
        ];

        // Insert data into the users table
        $this->db->table('users')->insertBatch($data);
    }
}
