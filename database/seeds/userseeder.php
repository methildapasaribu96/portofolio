<?php

use Illuminate\Database\Seeder;
use App\User;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Methilda';
        $user->email='methildapasaribu@email.com';
        $user->password= bcrypt('secret');
        $user->save();
        }
}
