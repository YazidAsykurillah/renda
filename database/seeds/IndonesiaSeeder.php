<?php

use Illuminate\Database\Seeder;
use App\District;

class IndonesiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('provinces')->delete();
        \DB::table('cities')->delete();
        \DB::table('districts')->delete();
        // import provinces and cities from sql file
        $sqlFile = app_path() . '/../database/raw/administrative_indonesia_without_districts.sql';
        DB::unprepared(file_get_contents($sqlFile));
        $this->command->info('Successfully seed Provinces and Cities!');

        // import districts with latitude and longitude from csv file
        $csvFile = app_path() . '/../database/raw/administrative_indonesia_districts_with_lat_lng.csv';
        $districts = $this->csvToArray($csvFile);
        // check if lat lng exists
        foreach ($districts as $i => $d) {
            if ($d['latitude'] == '') $districts[$i]['latitude'] = 0;
            if ($d['longitude'] == '') $districts[$i]['longitude'] = 0;
        }
        // insert it
        $insert = District::insert($districts);
        if ($insert) $this->command->info('Successfully seed Districts!');
    }


    protected function csvToArray($filename, $delimitor = ',')
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            return false;
        }
        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, $delimitor)) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }

        return $data;
    }
}
