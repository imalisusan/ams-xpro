<?php

namespace Database\Seeders;

use App\Models\CourseLecturer;
use Illuminate\Database\Seeder;

class CourseLecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courselecturers = [
            [
                'lecturer_id' => '1',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '1',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '1',
                'course_id' => '3',
            ],

            //Lecturer 2
            [
                'lecturer_id' => '2',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '2',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '3',
                'course_id' => '3',
            ],

            //Lecturer 3
            [
                'lecturer_id' => '3',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '3',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '3',
                'course_id' => '3',
            ],

            //Lecturer 4
            [
                'lecturer_id' => '4',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '4',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '4',
                'course_id' => '3',
            ],

            //Lecturer 5
            [
                'lecturer_id' => '5',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '5',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '5',
                'course_id' => '3',
            ],

            //Lecturer 6
            [
                'lecturer_id' => '6',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '6',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '6',
                'course_id' => '3',
            ],

            //Lecturer 7
            [
                'lecturer_id' => '7',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '7',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '7',
                'course_id' => '3',
            ],

            //Lecturer 8
            [
                'lecturer_id' => '8',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '8',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '8',
                'course_id' => '3',
            ],

            //Lecturer 9
            [
                'lecturer_id' => '9',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '9',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '9',
                'course_id' => '3',
            ],

            //Lecturer 10
            [
                'lecturer_id' => '10',
                'course_id' => '1',
            ],
            [
                'lecturer_id' => '10',
                'course_id' => '2',
            ],
            [
                'lecturer_id' => '10',
                'course_id' => '3',
            ],
          
            
        ];

        foreach ($courselecturers as $courselecturer) {
            CourseLecturer::create([
                   'lecturer_id' => $courselecturer['lecturer_id'],
                   'course_id' => $courselecturer['course_id'],
                 ]);
        }
    }
}
