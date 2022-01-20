<?php

namespace Database\Seeders;

use App\Models\CertificateSetting;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CertificateSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CertificateSetting::truncate();
        $faker = Factory::create('id_ID');

        CertificateSetting::create([
            'image' => $faker->imageUrl(800, 600, 'cats')
        ]);
    }
}
