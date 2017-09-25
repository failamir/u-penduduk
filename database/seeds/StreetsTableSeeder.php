<?php

use Crockett\CsvSeeder\CsvSeeder;

class StreetsTableSeeder extends CsvSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed the apartments table
        $this->seedFromCSV(base_path('database/seeds/csvs/streets.csv'), 'streets');
    }
}
