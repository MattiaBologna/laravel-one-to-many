<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = new Project();

        $project->title = 'Comics Database Prova';
        $project->slug = Str::slug($project->title);
        $project->description = 'applicativo web per mostrare un elenco di fumetti';
        $project->link = 'https://github.com/MattiaBologna/laravel-dc-comics.git';

        $project->save();

    }
}
