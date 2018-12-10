<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();
        $data = [
        	['id'=>1, 'name'=>'car', 'description'=>'Car description', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        	['id'=>2, 'name'=>'motorcycle', 'description'=>'motorcycle description', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        	['id'=>3, 'name'=>'plane', 'description'=>'plane description', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        	['id'=>4, 'name'=>'ship', 'description'=>'ship description', 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        ];
        \DB::table('categories')->insert($data);
    }
}
