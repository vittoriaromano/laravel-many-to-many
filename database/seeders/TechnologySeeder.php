<?php

namespace Database\Seeders;

use App\Models\Technology;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['CSS', 'SASS', 'Vanilla JS', 'Vue JS', 'Vite', 'Bootstrap', 'PHP', 'MySQL'];

        Schema::disableForeignKeyConstraints();
        Technology::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($technologies as $technology) {

            $technology = new Technology();
            $technology->name = $technology;
            $technology->slug = Str::slug($technology->name);
            $technology->save();
        }
    }
}