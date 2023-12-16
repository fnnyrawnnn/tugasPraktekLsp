<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ]
        ]);

        DB::table('users')->insert([
            [
                'nama_lengkap' => 'User1',
                'email' => 'user1@gmail.com',
                'no_hp' => '083891428869',
                'alamat_lengkap_saat_ini' => 'Jalan Terusan Buah Batu, Bojongsoang, Kabupaten Bandung',
                'password' => Hash::make('password'),
                'image' => 'images/1.jpg',
            ]
        ]);
    }
}
