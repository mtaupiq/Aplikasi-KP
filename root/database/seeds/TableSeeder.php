<?php

use Illuminate\Database\Seeder;
use App\User;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user2 = new User;
        $user2->name = 'Teguh Aprilianto';
        $user2->username = 'teguh01';
        $user2->email = 'teguh01@gmail.com';
        $user2->password = bcrypt(123456);
        $user2->level = 'Supervisor';
        $user2->save();
        
        $user1 = new User;
        $user1->name = 'Surya Wahyu Pambudhi';
        $user1->username = 'suryawp';
        $user1->email = 'suryawp@gmail.com';
        $user1->password = bcrypt(123456);
        $user1->level = 'Staff';
        $user1->save();

        $user = new User;
        $user->name = 'Muhammad Taupiq';
        $user->username = 'mtaupiq';
        $user->email = 'mtaupiq@gmail.com';
        $user->password = bcrypt(123456);
        $user->level = 'Auditor';
        $user->save();
    }
}
