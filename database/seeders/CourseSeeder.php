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
                'year' => '3',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
                'type' => 'OB',
                'description' => 'The Computer Science Project for ICS students',
            ],

            [
                'code' => 'ICS 3101',
                'name' => 'Advanced Database Systems',
                'year' => '3',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
                'type' => 'OB',
                'description' => 'The Advanced Database Systems unit for ICS students',
            ],

            [
                'code' => 'ICS 3103',
                'name' => 'Automata Theory and Computability',
                'year' => '3',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
                'type' => 'OB',
                'description' => 'The Automata Theory and Computability unit for ICS students',
            ],

            [
                'code' => 'ICS 3102',
                'name' => 'Mobile Application Development',
                'year' => '3',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
                'type' => 'OB',
                'description' => 'The Mobile Application Development unit for ICS students',
            ],

            [
                'code' => 'ICS 3106',
                'name' => 'Operations Research',
                'year' => '3',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
                'type' => 'OB',
                'description' => 'The Operations Research unit for ICS students',
            ],

            [
                'code' => 'ICS 4205',
                'name' => 'Human Computer Interaction',
                'year' => '3',
                'credits' => '3', 
                'group' => 'ICS 3B May 2021',
                'semester' => 'First Semester',
                'type' => 'OB',
                'description' => 'The Human Computer Interaction unit for ICS students',
            ],

            [
                'code' => 'HHE 3107',
                'name' => 'Great Books I',
                'year' => '3',
                'credits' => '3', 
                'group' => 'Apr21 SUBS/SCES/SIMS',
                'semester' => 'First Semester',
                'type' => 'OP',
                'description' => 'The Great Books unit for ICS students',
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
                   'description' => $course['description'],
                 ]);
        }
    }
}
