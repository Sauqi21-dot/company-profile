<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
    'company_name'    => 'Nusantara Digital Solution',
    'company_tagline' => 'Mitra Transformasi Rekayasa Web & Keamanan Siber',
    'about_us'        => 'Mitra solusi rekayasa perangkat lunak dan keamanan sistem informasi.',
    'address'         => 'Palembang, Sumatera Selatan',
    'contact_email'   => 'info@nusantaradigital.co.id',
    'contact_phone'   => '+62 711 445566',
];
        foreach ($data as $k => $v) {
        \App\Models\CompanySetting::updateOrCreate(['key' => $k], ['value' => $v]);
        }
    }
}
