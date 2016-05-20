<?php

use Illuminate\Database\Seeder;
use App\User;
class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
           User::create([
                'name' =>$faker->userName,
                'email' => $faker->email,
                'password' =>bcrypt($faker->password),
                'remember_token' =>bcrypt($faker->password),
            ]);
        }
    }
}
