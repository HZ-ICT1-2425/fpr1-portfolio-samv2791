<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    private $data = [
        [
        'cu_code' => 'CU75001V3',
        'name' => 'Program- & Career Orientation',
        'credits' => 2.5
        ],
        [
            'cu_code' => 'CU75002V2',
            'name' => 'Computer Science Basics',
            'credits' => 5
        ],
        [
            'cu_code' => 'CU75003V1',
            'name' => 'Programming Basics',
            'credits' => 5
        ],
        [
            'cu_code' => 'CU75004V1',
            'name' => 'Object-Oriented Programming',
            'credits' => 10
        ],
        [
            'cu_code' => 'CU75080V2',
            'name' => 'Framework project 1',
            'credits' => 10
        ],
        [
            'cu_code' => 'CU75011V3',
            'name' => 'Framework project 2',
            'credits' => 10
        ],
        [
            'cu_code' => 'CU75081V1',
            'name' => 'Business Consultancy basics',
            'credits' => 2.5
        ],
        [
            'cu_code' => 'CU75068V3',
            'name' => 'Personal Professional Development Exploration',
            'credits' => 12.5
        ],
        [
            'cu_code' => 'CU75054V1',
            'name' => 'IT Personality',
            'credits' => 2.5
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $course) {
            Course::create($course);
        }
    }
}
