<?php

use Illuminate\Database\Seeder;

use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Samuel Farias',
            'email'=>'samuellima810@gmail.com',
            'password'=>bcrypt('eitaporra')

        ]);
    }
}
