<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Service::insert([
            [
                'name' => 'Laundry',
                'duration' => '3-5 days',
                'price' => 35000,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            
            [
                'name' => 'Dry Cleaning',
                'duration' => '2-3 days',
                'price' => 50000,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            
            [
                'name' => 'Pressing',
                'duration' => '1-3 days',
                'price' => 25000,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}

