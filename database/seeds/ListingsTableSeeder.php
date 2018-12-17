<?php

use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('listings')->delete();
        $data = [
        	['id'=>1, 'user_id'=>1, 'category_id'=>1, 'brand_id'=>1, 'title'=>'Jazz RS', 'slug'=>str_slug('Jazz RS'), 'manufactured_year'=>'2017', 'province_id'=>31, 'city_id'=>3171, 'district_id'=>3171020, 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        	['id'=>2, 'user_id'=>1, 'category_id'=>1, 'brand_id'=>1, 'title'=>'Mobilio RS', 'slug'=>str_slug('Mobilio RS'), 'manufactured_year'=>'2017', 'province_id'=>31, 'city_id'=>3171, 'district_id'=>3171020, 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        	['id'=>3, 'user_id'=>2, 'category_id'=>1, 'brand_id'=>2, 'title'=>'Innova', 'slug'=>str_slug('Innova'), 'manufactured_year'=>'2017', 'province_id'=>31, 'city_id'=>3171, 'district_id'=>3171020, 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
            ['id'=>4, 'user_id'=>2, 'category_id'=>1, 'brand_id'=>2, 'title'=>'Innova', 'slug'=>str_slug('Innova 4'), 'manufactured_year'=>'2017', 'province_id'=>31, 'city_id'=>3171, 'district_id'=>3171080, 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        	['id'=>5, 'user_id'=>2, 'category_id'=>2, 'brand_id'=>2, 'title'=>'Satria', 'slug'=>str_slug('Satria'), 'manufactured_year'=>'2017', 'province_id'=>31, 'city_id'=>3171, 'district_id'=>3171090, 'created_at'=>date('Y-m-d H:i:s'), 'updated_at'=>date('Y-m-d H:i:s')],
        ];
        \DB::table('listings')->insert($data);
    }
}
