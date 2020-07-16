<?php

use App\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::query()->truncate();
        $accountTest = new Account();
        $user = Account::create(array(
                'userName' => 'admin',
                'passwordHash' => md5("admin"."12345"),
                'salt' => '12345',
                'fullName' => 'adminer',
                'email' => 'admin@admin',
                'phoneNumber' => '084558392801',
                'email_verified' => 'verified',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ));
        $user->roles()->sync([1,2]);
        $user = Account::create(array(
                'userName' => 'guest',
                'passwordHash' => md5("guest"."56789"),
                'salt' => '56789',
                'fullName' => 'guest',
                'email' => 'guest@guest',
                'phoneNumber' => '084558392801',
                'email_verified' => 'verified',
                'status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ));
        $user->roles()->sync(1);
//        $account = array(
//            array(
//                'userName' => 'admin',
//                'passwordHash' => md5("admin"."12345"),
//                'salt' => '12345',
//                'fullName' => 'adminer',
//                'email' => 'admin@admin',
//                'phoneNumber' => '084558392801',
//                'email_verified' => 'verified',
//                'status' => 1,
//                'created_at' => \Carbon\Carbon::now(),
//                'updated_at' => \Carbon\Carbon::now(),
//                ),
//
//        );
//        \Illuminate\Support\Facades\DB::table('accounts')->insert($user);
//        Account::insert($user);
    }
}
