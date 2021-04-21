<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Maicol Paul Guerrero',
            'email'=>'maicol.guerreroe@gmail.com',
            'password'=>bcrypt('123456789')
        ]);
        User::factory(9)->create();

    }
}
