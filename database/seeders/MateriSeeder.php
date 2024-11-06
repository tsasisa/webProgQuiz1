<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
Use App\Models\Materi;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Materi::truncate();
        //
        $faker = Faker::create();
        $writer = Writer::all();

        Materi::create([
            'title'=>'Human and Computer Interaction',
            'content'=> $faker->paragraph(),
            'publish_date' => $faker->date(),
            'writer_id' =>$writer->random()->id,
            'category_id' => 1,
            'image' => $faker->imageUrl(1200, 600, 'education', true, 'EduFun'),


        ]);

        Materi::create([
            'title'=>'User Experience',
            'content'=> $faker->paragraph(),
            'publish_date' => $faker->date(),
            'writer_id' =>$writer->random()->id,
            'category_id' => 1,
            'image' => $faker->imageUrl(1200, 600, 'education', true, 'EduFun'),

        ]);

        Materi::create([
            'title'=>'User Experience for Digital Immersive Technology',
            'content'=> $faker->paragraph(),
            'publish_date' => $faker->date(),
            'writer_id' =>$writer->random()->id,
            'category_id' => 1,
            'image' => $faker->imageUrl(1200, 600, 'education', true, 'EduFun'),

        ]);

        Materi::create([
            'title'=>'Pattern Software Design',
            'content'=> $faker->paragraph(),
            'publish_date' => $faker->date(),
            'writer_id' =>$writer->random()->id,
            'category_id' => 2,
            'image' => $faker->imageUrl(1200, 600, 'education', true, 'EduFun'),

        ]);

        Materi::create([
            'title'=>'Agile Software Development',
            'content'=> $faker->paragraph(),
            'publish_date' => $faker->date(),
            'writer_id' =>$writer->random()->id,
            'category_id' => 2,
            'image' => $faker->imageUrl(1200, 600, 'education', true, 'EduFun'),

        ]);

        Materi::create([
            'title'=>'Code Reengineering',
            'content'=> $faker->paragraph(),
            'publish_date' => $faker->date(),
            'writer_id' =>$writer->random()->id,
            'category_id' => 2,
            'image' => $faker->imageUrl(1200, 600, 'education', true, 'EduFun'),

        ]);
    }
}
