<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project as Project;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newProject = new Project();

            $newProject->title = $faker->words(3, true);
            $newProject->slug = implode('-', explode(' ', strtolower($newProject->title)));
            $newProject->stack = implode('/', explode(' ', $faker->words(5,true)));
            $newProject->desc = $faker->text(150);

            $newProject->save();
        }
    }
}
