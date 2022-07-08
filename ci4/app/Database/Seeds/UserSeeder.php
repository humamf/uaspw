<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'humam',
            'useremail' => 'humamfathur@gmail.com',
            'userpassword' => password_hash('humam123', PASSWORD_DEFAULT),
        ]);
    }
}
