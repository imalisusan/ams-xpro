<?php

namespace Database\Seeders;

use App\Models\CourseMark;
use Illuminate\Database\Seeder;

class CourseMarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coursemarks = [
            [
                'course_id' => '1',
                'course_module_id' => '1',
                'user_id' => '1',
                'score' => '23',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '2',
                'user_id' => '1',
                'score' => '24',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '3',
                'user_id' => '1',
                'score' => '25',
            ],

            //
            [
                'course_id' => '2',
                'course_module_id' => '1',
                'user_id' => '1',
                'score' => '23',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '2',
                'user_id' => '1',
                'score' => '24',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '3',
                'user_id' => '1',
                'score' => '25',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '1',
                'user_id' => '1',
                'score' => '23',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '2',
                'user_id' => '1',
                'score' => '24',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '3',
                'user_id' => '1',
                'score' => '25',
            ],


            //User 2
            [
                'course_id' => '1',
                'course_module_id' => '1',
                'user_id' => '2',
                'score' => '23',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '2',
                'user_id' => '2',
                'score' => '24',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '3',
                'user_id' => '2',
                'score' => '25',
            ],
            //
            [
                'course_id' => '2',
                'course_module_id' => '1',
                'user_id' => '1',
                'score' => '23',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '2',
                'user_id' => '2',
                'score' => '24',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '3',
                'user_id' => '2',
                'score' => '25',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '1',
                'user_id' => '2',
                'score' => '23',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '2',
                'user_id' => '2',
                'score' => '24',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '3',
                'user_id' => '2',
                'score' => '25',
            ],


            //User 3
            [
                'course_id' => '1',
                'course_module_id' => '1',
                'user_id' => '3',
                'score' => '23',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '2',
                'user_id' => '3',
                'score' => '24',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '3',
                'user_id' => '3',
                'score' => '25',
            ],

            //
            [
                'course_id' => '2',
                'course_module_id' => '1',
                'user_id' => '3',
                'score' => '23',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '2',
                'user_id' => '3',
                'score' => '24',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '3',
                'user_id' => '3',
                'score' => '25',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '1',
                'user_id' => '3',
                'score' => '23',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '2',
                'user_id' => '3',
                'score' => '24',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '3',
                'user_id' => '3',
                'score' => '25',
            ],
        ];

        foreach ($coursemarks as $coursemark) {
            CourseMark::create([
                   'course_id' => $coursemark['course_id'],
                   'course_module_id' => $coursemark['course_module_id'],
                   'user_id' => $coursemark['user_id'],
                   'score' => $coursemark['score'],
                 ]);
        }
    }
}
