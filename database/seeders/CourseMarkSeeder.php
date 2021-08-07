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
                'score' => '27',
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
                'score' => '26',
            ],

            //
            [
                'course_id' => '2',
                'course_module_id' => '5',
                'user_id' => '1',
                'score' => '27',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '6',
                'user_id' => '1',
                'score' => '24',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '7',
                'user_id' => '1',
                'score' => '26',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '9',
                'user_id' => '1',
                'score' => '21',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '10',
                'user_id' => '1',
                'score' => '21',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '11',
                'user_id' => '1',
                'score' => '26',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '12',
                'user_id' => '1',
                'score' => '45',
            ],
            // 
            [
                'course_id' => '4',
                'course_module_id' => '13',
                'user_id' => '1',
                'score' => '21',
            ],
            [
                'course_id' => '4',
                'course_module_id' => '14',
                'user_id' => '1',
                'score' => '21',
            ],
            [
                'course_id' => '4',
                'course_module_id' => '15',
                'user_id' => '1',
                'score' => '26',
            ],
            [
                'course_id' => '4',
                'course_module_id' => '16',
                'user_id' => '1',
                'score' => '51',
            ],
             //
             [
                'course_id' => '5',
                'course_module_id' => '17',
                'user_id' => '1',
                'score' => '21',
            ],
            [
                'course_id' => '5',
                'course_module_id' => '18',
                'user_id' => '1',
                'score' => '21',
            ],
            [
                'course_id' => '5',
                'course_module_id' => '19',
                'user_id' => '1',
                'score' => '26',
            ],
            [
                'course_id' => '5',
                'course_module_id' => '20',
                'user_id' => '1',
                'score' => '48',
            ],
            //
            [
                'course_id' => '6',
                'course_module_id' => '21',
                'user_id' => '1',
                'score' => '21',
            ],
            [
                'course_id' => '6',
                'course_module_id' => '22',
                'user_id' => '1',
                'score' => '21',
            ],
            [
                'course_id' => '6',
                'course_module_id' => '23',
                'user_id' => '1',
                'score' => '26',
            ],
            [
                'course_id' => '6',
                'course_module_id' => '24',
                'user_id' => '1',
                'score' => '45',
            ],

            //User 2
            [
                'course_id' => '1',
                'course_module_id' => '1',
                'user_id' => '2',
                'score' => '18',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '2',
                'user_id' => '2',
                'score' => '21',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '3',
                'user_id' => '2',
                'score' => '26',
            ],
            //
            [
                'course_id' => '2',
                'course_module_id' => '5',
                'user_id' => '1',
                'score' => '18',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '6',
                'user_id' => '2',
                'score' => '21',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '7',
                'user_id' => '2',
                'score' => '26',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '9',
                'user_id' => '2',
                'score' => '20',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '10',
                'user_id' => '2',
                'score' => '26',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '11',
                'user_id' => '2',
                'score' => '21',
            ],


            //User 3
            [
                'course_id' => '1',
                'course_module_id' => '1',
                'user_id' => '3',
                'score' => '20',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '2',
                'user_id' => '3',
                'score' => '21',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '3',
                'user_id' => '3',
                'score' => '21',
            ],

            //
            [
                'course_id' => '2',
                'course_module_id' => '5',
                'user_id' => '3',
                'score' => '20',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '6',
                'user_id' => '3',
                'score' => '18',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '7',
                'user_id' => '3',
                'score' => '21',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '9',
                'user_id' => '3',
                'score' => '20',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '10',
                'user_id' => '3',
                'score' => '18',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '11',
                'user_id' => '3',
                'score' => '23',
            ],

             //User 4
             [
                'course_id' => '1',
                'course_module_id' => '1',
                'user_id' => '4',
                'score' => '22',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '2',
                'user_id' => '4',
                'score' => '23',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '3',
                'user_id' => '4',
                'score' => '23',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '5',
                'user_id' => '4',
                'score' => '22',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '6',
                'user_id' => '4',
                'score' => '23',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '7',
                'user_id' => '4',
                'score' => '23',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '9',
                'user_id' => '4',
                'score' => '28',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '10',
                'user_id' => '4',
                'score' => '23',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '11',
                'user_id' => '4',
                'score' => '23',
            ],

            //User 5
             [
                'course_id' => '1',
                'course_module_id' => '1',
                'user_id' => '5',
                'score' => '28',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '2',
                'user_id' => '5',
                'score' => '26',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '3',
                'user_id' => '5',
                'score' => '20',
            ],

            //
            [
                'course_id' => '2',
                'course_module_id' => '5',
                'user_id' => '5',
                'score' => '21',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '6',
                'user_id' => '5',
                'score' => '26',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '7',
                'user_id' => '5',
                'score' => '20',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '9',
                'user_id' => '5',
                'score' => '19',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '10',
                'user_id' => '5',
                'score' => '26',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '11',
                'user_id' => '5',
                'score' => '20',
            ],

            //User 6
             [
                'course_id' => '1',
                'course_module_id' => '1',
                'user_id' => '6',
                'score' => '19',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '2',
                'user_id' => '6',
                'score' => '26',
            ],
            [
                'course_id' => '1',
                'course_module_id' => '3',
                'user_id' => '6',
                'score' => '20',
            ],

            //
            [
                'course_id' => '2',
                'course_module_id' => '5',
                'user_id' => '6',
                'score' => '19',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '6',
                'user_id' => '6',
                'score' => '26',
            ],
            [
                'course_id' => '2',
                'course_module_id' => '7',
                'user_id' => '6',
                'score' => '22',
            ],
            //
            [
                'course_id' => '3',
                'course_module_id' => '9',
                'user_id' => '6',
                'score' => '10',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '10',
                'user_id' => '6',
                'score' => '24',
            ],
            [
                'course_id' => '3',
                'course_module_id' => '11',
                'user_id' => '6',
                'score' => '22',
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
