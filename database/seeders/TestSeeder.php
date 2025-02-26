<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    private $data = [
        [
            'course_id' => 1,
            'name' => 'Website assessment',
            'weighing_factor' => 1,
            'best_grade' => 9,
        ],
        [
            'course_id' => 2,
            'name' => 'Written exam',
            'weighing_factor' => 1,
            'best_grade' => 8.5,
        ],
        [
            'course_id' => 3,
            'name' => 'Case study exam',
            'weighing_factor' => 1,
            'best_grade' => 8,
        ],
        [
            'course_id' => 4,
            'name' => 'Individual Presentation',
            'weighing_factor' => 0.5,
            'best_grade' => 8,
        ],
        [
            'course_id' => 4,
            'name' => 'Written Knowledge Test',
            'weighing_factor' => 0.5,
            'best_grade' => 10,
        ],
        [
            'course_id' => 5,
            'name' => 'Case study exam',
            'weighing_factor' => 0.5,
        ],
        [
            'course_id' => 5,
            'name' => 'Database exam',
            'weighing_factor' => 0.125,
        ],
        [
            'course_id' => 5,
            'name' => 'Group presentation',
            'weighing_factor' => 0.25,
        ],
        [
            'course_id' => 5,
            'name' => 'Group portfolio',
            'weighing_factor' => 0.125,
        ],
        [
            'course_id' => 6,
            'name' => 'Final portfolio',
            'weighing_factor' => 0.25,
        ],
        [
            'course_id' => 6,
            'name' => 'Acceptance report',
            'weighing_factor' => 0.25,
        ],
        [
            'course_id' => 6,
            'name' => 'Development portfolio',
            'weighing_factor' => 0.5,
        ],
        [
            'course_id' => 7,
            'name' => 'Video assignment',
            'weighing_factor' => 1,
        ],
        [
            'course_id' => 8,
            'name' => 'Interview',
            'weighing_factor' => 1,
        ],
        [
            'course_id' => 9,
            'name' => 'ITP 1',
            'weighing_factor' => 0.5,
            'best_grade' => 10,
        ],
        [
            'course_id' => 9,
            'name' => 'ITP 2',
            'weighing_factor' => 0.5,
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $test) {
            Test::create($test);
        }
    }
}
