<?php

use Illuminate\Database\Seeder;
use App\Listing;

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
        factory(Listing::class, 50)->create();

        $this->command->info('Listing is seeded');
    }
}
