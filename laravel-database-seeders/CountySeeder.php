<?php

use Illuminate\Database\Seeder;

class Country extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->insert([
            ['id' => 1, 'name' => 'Budapest'],
            ['id' => 2, 'name' => 'Baranya'],
            ['id' => 3, 'name' => 'Bács-Kiskun'],
            ['id' => 4, 'name' => 'Békés'],
            ['id' => 5, 'name' => 'Borsod-Abaúj-Zemplén'],
            ['id' => 6, 'name' => 'Csongrád'],
            ['id' => 7, 'name' => 'Fejér'],
            ['id' => 8, 'name' => 'Győr-Moson-Sopron'],
            ['id' => 9, 'name' => 'Hajdú-Bihar'],
            ['id' => 10, 'name' => 'Heves'],
            ['id' => 11, 'name' => 'Komárom-Esztergom'],
            ['id' => 12, 'name' => 'Nógrád'],
            ['id' => 13, 'name' => 'Pest'],
            ['id' => 14, 'name' => 'Somogy'],
            ['id' => 15, 'name' => 'Szabolcs-Szatmár-Bereg'],
            ['id' => 16, 'name' => 'Jász-Nagykun-Szolnok'],
            ['id' => 17, 'name' => 'Tolna'],
            ['id' => 18, 'name' => 'Vas'],
            ['id' => 19, 'name' => 'Veszprém'],
            ['id' => 20, 'name' => 'Zala'],
        ]);
    }
}
