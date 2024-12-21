<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasarSeeder extends Seeder
{
    public function run()
    {
        DB::table('facilities')->insert([
            [
                'name' => 'Pasar Tengah',
                'type' => 'pasar',
                'address' => 'Jl. Padang, Gn. Sari, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35127',
                'jam_operasional' => '09:00-17:00',
                'jenis_pasar' => 'Pasar Tradisional Modern',
                'fasilitas' => 'Parkir, ATM, Toilet, Musholla',
                'latitude' => -5.40978,
                'longitude' => 105.25794,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Bambu Kuning',
                'type' => 'pasar',
                'address' => 'Bambu Kuning Trade Center, Jl. Imam Bonjol No.1, Klp. Tiga, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35127',
                'jam_operasional' => '08:30-18:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet, Musholla',
                'latitude' => -5.41048,
                'longitude' => 105.25587,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Tamin',
                'type' => 'pasar',
                'address' => 'Jl. Antara, Klp. Tiga, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35119',
                'jam_operasional' => '05:00-16:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet',
                'latitude' => -5.4057,
                'longitude' => 105.24745,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Cimeng',
                'type' => 'pasar',
                'address' => 'Jl. Yos Sudarso, Bumi Waras',
                'jam_operasional' => '05:00-16:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet',
                'latitude' => -5.44918,
                'longitude' => 105.25701,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Way Halim',
                'type' => 'pasar',
                'address' => 'Jl. Ki Maja, Way Halim Permai, Kec. Way Halim',
                'jam_operasional' => '06:00-17:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet',
                'latitude' => -5.38424,
                'longitude' => 105.27141,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Perumnas Way Halim',
                'type' => 'pasar',
                'address' => 'Jl. Ki Maja, Way Halim Permai, Kec. Way Halim',
                'jam_operasional' => '07:00-14:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet',
                'latitude' => -5.37704,
                'longitude' => 105.27478,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Gintung',
                'type' => 'pasar',
                'address' => 'Jl. Imam Bonjol, Tanjung Karang Pusat, Kota Bandar Lampung, Lampung',
                'jam_operasional' => '05:00-16:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet',
                'latitude' => -5.40618,
                'longitude' => 105.25661,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Gudang Lelang',
                'type' => 'pasar',
                'address' => 'Pasar gudang lelang, Kangkung, Kec. Bumi Waras, Kota Bandar Lampung, Lampung 35224',
                'jam_operasional' => '06:00-17:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet',
                'latitude' => -5.45168,
                'longitude' => 105.26885,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Panjang',
                'type' => 'pasar',
                'address' => 'Jl. Yos Sudarso, Panjang Utara',
                'jam_operasional' => '05:00-17:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet, Musholla',
                'latitude' => -5.4686,
                'longitude' => 105.3183,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Tugu',
                'type' => 'pasar',
                'address' => 'Jl. Hayam Wuruk No.68, Tj. Agung Raya, Kedamaian, Kota Bandar Lampung Lampung 3, Tj. Agung Raya, Kec. Kedamaian, Kota Bandar Lampung, Lampung 35128',
                'jam_operasional' => '06:00-16:00',
                'jenis_pasar' => 'Pasar Modern',
                'fasilitas' => 'Parkir, Toilet',
                'latitude' => -5.40619,
                'longitude' => 105.26622,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasar Smep',
                'type' => 'pasar',
                'address' => 'Jl. Imam Bonjol No 9, Bandar Lampung City, Lampung',
                'jam_operasional' => '07:00-16:00',
                'jenis_pasar' => 'Pasar Tradisional',
                'fasilitas' => 'Parkir, Toilet, Musholla',
                'latitude' => -5.39,
                'longitude' => 105.23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
            'name' => 'Pasar Perumnas Way Kandis',
            'type' => 'pasar',
            'address' => 'Gg. Nusa Indah 2 Jl. Pulau Damar, Perumnas Way Kandis, Kec. Tj. Senang, Kota Bandar Lampung, Lampung 35131',
            'jam_operasional' => '06:00-17:00',
            'jenis_pasar' => 'Pasar Tradisional',
            'fasilitas' => 'Parkir, Toilet',
            'latitude' => -5.36291,
            'longitude' => 105.28995,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Pasar Way Kandis',
            'type' => 'pasar',
            'address' => 'Jl. Ratu Dibalau No.5, Way Kandis, Tj. Senang, Kota Bandar Lampung, Lampung',
            'jam_operasional' => '06:00-17:00',
            'jenis_pasar' => 'Pasar Tradisional',
            'fasilitas' => 'Parkir, Toilet',
            'latitude' => -5.35,
            'longitude' => 105.29,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Pasar Tani Kemiling',
            'type' => 'pasar',
            'address' => 'Jl. Teuku Cik Ditro No. 31, Sumber Rejo, Kemiling, Bandar Lampung City, Lampung',
            'jam_operasional' => '06:00-17:00',
            'jenis_pasar' => 'Pasar Tradisional',
            'fasilitas' => 'Parkir, Toilet',
            'latitude' => -5.40,
            'longitude' => 105.21,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Pasar Kangkung',
            'type' => 'pasar',
            'address' => 'Jl. Ikan Pari, Teluk Betung, Telukbetung Selatan, Bandar Lampung City, Lampung',
            'jam_operasional' => '07:00-15:30',
            'jenis_pasar' => 'Pasar Tradisional',
            'fasilitas' => 'Parkir, Toilet, Musholla',
            'latitude' => -5.44549,
            'longitude' => 105.26924,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Pasar Koga',
            'type' => 'pasar',
            'address' => 'Jl. Teuku Umar, Sidodadi, Kec. Kedaton, Bandar Lampung City, Lampung 35123',
            'jam_operasional' => '05:00-18:00',
            'jenis_pasar' => 'Pasar Tradisional',
            'fasilitas' => 'Parkir, Toilet, Musholla',
            'latitude' => -5.39204,
            'longitude' => 105.26169,
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}
