<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Writer::create([
            'name' => 'Raka Putra Wicaksono',
            'bio' => 'Spesialis Interactive Multimedia',
        ]);

        Writer::create([
            'name' => 'Bia Mecca Annisa',
            'bio' => 'Spesialis Data Science',
        ]);

        Writer::create([
            'name' => 'Abi Firmansyah',
            'bio' => 'Spesialis Network Security',
        ]);
    }
}
