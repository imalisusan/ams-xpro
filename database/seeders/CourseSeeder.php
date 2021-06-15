<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'code' => 'ICS 2204',
                'name' => 'CS Project I',
                'year' => '2',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
            ],

            [
                'code' => 'ICS 3101',
                'name' => 'Advanced Database Systems',
                'year' => '3',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
            ],

            [
                'code' => 'ICS 3103',
                'name' => 'Automata Theory and Computability',
                'year' => '3',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
            ],

            [
                'code' => 'HHE 3107',
                'name' => 'Great Books I',
                'year' => '5',
                'credits' => '3', 
                'group' => 'Apr21 SUBS/SCES/SIMS',
                'semester' => 'First Semester',
            ],

            [
                'code' => 'ICS 3102',
                'name' => 'Mobile Application Development',
                'year' => '5',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
            ],

            [
                'code' => 'ICS 3106',
                'name' => 'Operations Research',
                'year' => '5',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
            ],

            [
                'code' => 'ICS 4205',
                'name' => 'Human Computer Interaction',
                'year' => '5',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
            ],
        ];

        foreach ($courses as $course) {
            Course::create([
                   'code' => $course['code'],
                   'name' => $course['name'],
                   'year' => $course['year'],
                   'credits' => $course['credits'],
                   'group' => $course['group'],
                   'semester' => $course['semester'],
                 ]);
        }
    }
}
