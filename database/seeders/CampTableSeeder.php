<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;
use Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title' => 'Gila Belajar Laravel',
                'slug' => Str::slug('Gila Belajar Laravel'),
                'price' => 500000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => Str::slug('Baru Mulai'),
                'price' => 200000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        // 1st method
        // foreach ($camps as $camp) {
        //     Camp::create($camp);
        // };

        //2nd method
        Camp::insert($camps);
    }
}
