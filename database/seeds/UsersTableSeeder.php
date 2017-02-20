<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::truncate();

        $user = new User();
        $user->name = 'Jean Gomes';
        $user->email = 'jeangomes.ti@gmail.com';
        $user->password = bcrypt(123456);
        $user->save();

        factory(User::class, 15)->create();
    }

}
