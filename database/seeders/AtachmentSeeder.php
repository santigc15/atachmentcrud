<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Atachment;


class AtachmentSeeder extends Seeder
{

    public function run(): void
    {
        Atachment::create([
            'device_id' => 5,
            'file_name' => 'router123',
            'description' => 'lorem ipsum',
            'route' => 'storage\public\name5',
            'size' => '124'
        ]);

        Atachment::create([
            'device_id' => 8,
            'file_name' => 'router214',
            'description' => 'lorem ipsum',
            'route' => 'storage\public\name8',
            'size' => '89'
        ]);

        Atachment::create([
            'device_id' => 2,
            'file_name' => 'usb12hd',
            'description' => 'lorem ipsum lorem',
            'route' => 'storage\public\name2',
            'size' => '26'
        ]);
    }
}
