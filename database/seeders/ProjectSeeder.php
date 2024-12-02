<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create(
            [
                'title' => 'Calculator',
                'code' => 'cal',
                'course' => 'Algorithm and Programming'
            ]
        );
        Project::create(
            [
                'title' => 'Accounting',
                'code' => 'acc',
                'course' => 'Web Programming'
            ]
        );
        Project::create(
            [
                'title' => 'Student Report',
                'code' => 'stu',
                'course' => 'Web Programming'
            ]
        );
        
        //Factory
        Project::factory(10)->create();
    }
}
