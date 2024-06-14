<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class tiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $stasiun_asal = ['Jakarta','Bandung','Surabaya','Solo','Malang','Yogyakarta'];
        $stasiun_tujuan = ['Jakarta','Bandung','Surabaya','Solo','Malang','Yogyakarta'];

        for ($i = 1; $i <= 100; $i++) {
            DB::table('tiket')->insert([
                
                   'nomor_kereta' => 'TK00' . $i,
                   'stasiun_asal' => $faker->randomElement($stasiun_asal),
                   'stasiun_tujuan' => $faker->randomElement($stasiun_tujuan),
                   'tersedia' => $faker->boolean,
                   'gambar' => $faker->url()
                ]);
        }
       
    }
}
