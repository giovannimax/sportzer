<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->firstname = 'Sportzer';
        $user->lastname = 'Sportzer';
        $user->birthdate = Carbon::now();
        $user->address = 'Sportzer Street';
        $user->contact_no = '+639124567890';
        $user->gender = 'male';
        $user->verified = 1;
        $user->email = 'admin@sportzer.com';
        $user->password = Hash::make('adminsportzer');
        $user->email_token = base64_encode('admin@sportzer.com');
        $user->save();
    }
}
