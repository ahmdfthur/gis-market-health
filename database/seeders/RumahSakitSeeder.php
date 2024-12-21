<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RumahSakitSeeder extends Seeder
{
    public function run()
    {
        DB::table('facilities')->insert([
            [
                'name' => 'Rumah Sakit Umum Daerah Dr. H. Abdul Moeloek',
                'type' => 'rumah sakit',
                'address' => 'Jalan Dr. Rivai No.6, Penengahan, Kec. Kedaton, Kota Bandar Lampung, Lampung 35112',
                'phone' => '0721-123456',
                'latitude' => -5.40300000,
                'longitude' => 105.25847000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Immanuel',
                'type' => 'rumah sakit',
                'address' => 'Jalan Soekarno–Hatta No.1, Way Dadi, Kec. Sukarame, Kota Bandar Lampung, Lampung 35133',
                'phone' => '0721-804900',
                'latitude' => -5.38595000,
                'longitude' => 105.28782000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Bumi Waras',
                'type' => 'rumah sakit',
                'address' => 'Jalan Wolter Monginsidi No.235, Talang, Kec. Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35121',
                'phone' => '0721-987654',
                'latitude' => -5.42520000,
                'longitude' => 105.25111000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Advent Bandar Lampung',
                'type' => 'rumah sakit',
                'address' => 'Jalan Teuku Umar No.48, Sidodadi, Kec. Kedaton, Kota Bandar Lampung, Lampung 35148',
                'phone' => '0721-703459',
                'latitude' => -5.39211000,
                'longitude' => 105.26224000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Bhayangkara Lampung',
                'type' => 'rumah sakit',
                'address' => 'Jalan Pramuka No.88, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35144',
                'phone' => '0721-706402',
                'latitude' => -5.37434000,
                'longitude' => 105.22423000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Graha Husada',
                'type' => 'rumah sakit',
                'address' => 'Jalan Gajah Mada No.6, Tanjung Agung Raya, Kec. Kedamaian, Kota Bandar Lampung, Lampung 35128',
                'phone' => '0721-240000',
                'latitude' => -5.4175200,
                'longitude' => 105.26777000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Lampung Eye Center',
                'type' => 'rumah sakit',
                'address' => 'Jalan Sultan Agung No.15, Kedaton, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132',
                'phone' => '0822-8299-1111',
                'latitude' => -5.38291000,
                'longitude' => 105.27735000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Permana Sari',
                'type' => 'rumah sakit',
                'address' => 'Jalan Bougenville No.1, Rawa Laut, Kec. Enggal, Kota Bandar Lampung, Lampung 35213',
                'phone' => '0721-261432',
                'latitude' => -5.42182000,
                'longitude' => 105.26296000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Pertamina Bintang Amin',
                'type' => 'rumah sakit',
                'address' => 'Jalan Pramuka No.27, Kemiling Permai, Kec. Kemiling, Kota Bandar Lampung, Lampung 35151',
                'phone' => '0721-273601',
                'latitude' => -5.37892000,
                'longitude' => 105.21964000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Umum Hermina Lampung',
                'type' => 'rumah sakit',
                'address' => 'Jalan Tulang Bawang No.21-23, Enggal, Engal, Kota Bandar Lampung, Lampung 35213',
                'phone' => '0721-242525',
                'latitude' => -5.41755000,
                'longitude' => 105.26604900,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Umum Belleza Kedaton',
                'type' => 'rumah sakit',
                'address' => 'Jalan Sultan Haji No.17, Labuhan Ratu, Kec. Labuhan Ratu, Kota Bandar Lampung, Lampung 35132',
                'phone' => '0721-773333',
                'latitude' => -5.38069000,
                'longitude' => 105.25845000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Ibu Anak Bunda Asy-Syifa',
                'type' => 'rumah sakit',
                'address' => 'Jalan Dr. Susilo No.54, Pahoman, Kec. Enggal, Kota Bandar Lampung, Lampung 35212',
                'phone' => '0721-259259',
                'latitude' => -5.42999000,
                'longitude' => 105.27113000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Ibu Anak Mutiara Putri',
                'type' => 'rumah sakit',
                'address' => 'Jalan HOS. Cokroaminoto No.96, Tanjung Karang, Kec. Enggal, Kota Bandar Lampung, Lampung 3521',
                'phone' => '0721-252519',
                'latitude' => -5.42294000,
                'longitude' => 105.26246000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Ibu Anak Puri Betik Hati',
                'type' => 'rumah sakit',
                'address' => 'Jalan Pajajaran No.109, Jagabaya II, Kec. Way Halim, Kota Bandar Lampung, Lampung 35132',
                'phone' => '0721-787799',
                'latitude' => -5.39415000,
                'longitude' => 105.26607000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Ibu Anak Restu Bunda',
                'type' => 'rumah sakit',
                'address' => 'Jalan KH. Hasyim Ashari No.73, Gedong Pakuon, Kec. Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35221',
                'phone' => '0721-484185',
                'latitude' => -5.44764000,
                'longitude' => 105.25619000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Ibu Anak Santa Anna',
                'type' => 'rumah sakit',
                'address' => 'Jalan Sultan Hasanudin No.27, Gunung Mas, Kec. Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35221',
                'phone' => '0721-482424',
                'latitude' => -5.44265000,
                'longitude' => 105.26765000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Tk. IV Bandar Lampung',
                'type' => 'rumah sakit',
                'address' => 'Jalan Dr. Rivai No.7, Penengahan, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35121',
                'phone' => '0721-703574',
                'latitude' => -5.40150000,
                'longitude' => 105.25833000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Umum Daerah Dr. A. Dadi Tjokrodipo',
                'type' => 'rumah sakit',
                'address' => 'Jalan Basuki Rahmat No.73, Sumur Putri, Kec. Teluk Betung Selatan, Kota Bandar Lampung, Lampung 35211',
                'phone' => '0721-471723',
                'latitude' => -5.43628000,
                'longitude' => 105.25320000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rumah Sakit Budi Medika',
                'type' => 'rumah sakit',
                'address' => 'Jalan Yos SudaRumah Sakito No.85, Bumi Waras, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35226',
                'phone' => '0721-6016888',
                'latitude' => -5.44386000,
                'longitude' => 105.27919000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

