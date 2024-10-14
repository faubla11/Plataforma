<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use GuzzleHttp\Promise\Create;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crear user
        $user = User::create([
                    'name' => 'Jota',
                    'email' => 'jota@gmail.com',
                    'password' => bcrypt('jota123')
                ]);
        $user->assignRole('Admin');
        //creación 99 registros con datos de prueba utilizando factory
        User::factory(99)->create();
    }
}
