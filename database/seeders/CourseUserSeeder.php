<?php

namespace Database\Seeders;

use App\Models\CourseUser;
use Illuminate\Database\Seeder;

class CourseUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseusers = [
            [
                'user_id' => '1',
                'course_id' => '1',
            ],
            [
                'user_id' => '1',
                'course_id' => '2',
            ],
            [
                'user_id' => '1',
                'course_id' => '3',
            ],
            [
                'user_id' => '1',
                'course_id' => '4',
            ],
            [
                'user_id' => '1',
                'course_id' => '5',
            ],
            [
                'user_id' => '1',
                'course_id' => '6',
            ],

            //User 2
            [
                'user_id' => '2',
                'course_id' => '1',
            ],
            [
                'user_id' => '2',
                'course_id' => '2',
            ],
            [
                'user_id' => '2',
                'course_id' => '3',
            ],
            [
                'user_id' => '2',
                'course_id' => '4',
            ],
            [
                'user_id' => '2',
                'course_id' => '5',
            ],
            [
                'user_id' => '2',
                'course_id' => '6',
            ],

            //User 3
            [
                'user_id' => '3',
                'course_id' => '1',
            ],
            [
                'user_id' => '3',
                'course_id' => '2',
            ],
            [
                'user_id' => '3',
                'course_id' => '3',
            ],
            [
                'user_id' => '3',
                'course_id' => '4',
            ],
            [
                'user_id' => '3',
                'course_id' => '5',
            ],
            [
                'user_id' => '3',
                'course_id' => '6',
            ],

            //User 4
            [
                'user_id' => '4',
                'course_id' => '1',
            ],
            [
                'user_id' => '4',
                'course_id' => '2',
            ],
            [
                'user_id' => '4',
                'course_id' => '3',
            ],
            [
                'user_id' => '4',
                'course_id' => '4',
            ],
            [
                'user_id' => '4',
                'course_id' => '5',
            ],
            [
                'user_id' => '4',
                'course_id' => '6',
            ],

            //User 5
            [
                'user_id' => '5',
                'course_id' => '1',
            ],
            [
                'user_id' => '5',
                'course_id' => '2',
            ],
            [
                'user_id' => '5',
                'course_id' => '3',
            ],
            [
                'user_id' => '5',
                'course_id' => '4',
            ],
            [
                'user_id' => '5',
                'course_id' => '5',
            ],
            [
                'user_id' => '5',
                'course_id' => '6',
            ],

            //User 6
            [
                'user_id' => '6',
                'course_id' => '1',
            ],
            [
                'user_id' => '6',
                'course_id' => '2',
            ],
            [
                'user_id' => '6',
                'course_id' => '3',
            ],
            [
                'user_id' => '6',
                'course_id' => '4',
            ],
            [
                'user_id' => '6',
                'course_id' => '5',
            ],
            [
                'user_id' => '6',
                'course_id' => '6',
            ],

        ];

        foreach ($courseusers as $courseuser) {
            CourseUser::create([
                   'course_id' => $courseuser['course_id'],
                   'user_id' => $courseuser['user_id'],
                 ]);
        }
    }
}
