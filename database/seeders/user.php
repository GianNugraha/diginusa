<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
        $users = [
            [ 'username' => 'admin', 'password' => 'admin', 'fullname' => 'Admin', 'phone' => '081295704758', 'is_admin' => 1],
            [ 'username' => 'user1', 'password' => 'user1', 'fullname' => 'User', 'phone' => '087821925626', 'is_admin' => 0],
        ];
            DB::table('tbl_user')->insert($users);
        
    }
}
