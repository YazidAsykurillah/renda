<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        factory(User::class, 10)->create();
        /*$data = [
        	['id'=>1, 'name'=>'Yazid Asykurillah', 'email'=>'yazasykurillah@gmail.com', 'password'=>\Hash::make('password'), 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        	['id'=>2, 'name'=>'Nur Suci Martadina', 'email'=>'nursuci@email.com', 'password'=>\Hash::make('password'), 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        ];
        \DB::table('users')->insert($data);*/
    }
}
