<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=10; $i < 22; $i++) { 
            User::create([
                'name' => $faker->name, 
                'email' => $faker->email, 
                'fb' => $faker->name, 
                'nim' => '602001170'.$i, 
                'jurusan' => 'Teknik Informatika', 
                'angkatan' => '2017',
                'password' => app('hash')->make('farid123')
            ]);
        }
    }
}
