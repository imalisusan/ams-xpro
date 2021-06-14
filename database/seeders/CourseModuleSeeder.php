<?php

namespace Database\Seeders;

use App\Models\CourseModule;
use Illuminate\Database\Seeder;

class CourseModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coursemodules = [
            [
                'course_id' => '1',
                'name' => 'CAT 1',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '1',
                'name' => 'CAT 2',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '1',
                'name' => 'Assignments',
                'weight' => '0.1',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '1',
                'name' => 'Exam',
                'weight' => '0.6',
                'maximum_score' => '60', 
            ],

            [
                'course_id' => '2',
                'name' => 'CAT 1',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '2',
                'name' => 'CAT 2',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '2',
                'name' => 'Assignments',
                'weight' => '0.1',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '2',
                'name' => 'Exam',
                'weight' => '0.6',
                'maximum_score' => '60', 
            ],

            [
                'course_id' => '3',
                'name' => 'CAT 1',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '3',
                'name' => 'CAT 2',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '3',
                'name' => 'Assignments',
                'weight' => '0.1',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '3',
                'name' => 'Exam',
                'weight' => '0.6',
                'maximum_score' => '60', 
            ],
           
            [
                'course_id' => '4',
                'name' => 'CAT 1',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '4',
                'name' => 'CAT 2',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '4',
                'name' => 'Assignments',
                'weight' => '0.1',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '4',
                'name' => 'Exam',
                'weight' => '0.6',
                'maximum_score' => '60', 
            ],

            [
                'course_id' => '5',
                'name' => 'CAT 1',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '5',
                'name' => 'CAT 2',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '5',
                'name' => 'Assignments',
                'weight' => '0.1',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '5',
                'name' => 'Exam',
                'weight' => '0.6',
                'maximum_score' => '60', 
            ],

            [
                'course_id' => '6',
                'name' => 'CAT 1',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '6',
                'name' => 'CAT 2',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '6',
                'name' => 'Assignments',
                'weight' => '0.1',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '6',
                'name' => 'Exam',
                'weight' => '0.6',
                'maximum_score' => '60', 
            ],

            [
                'course_id' => '7',
                'name' => 'CAT 1',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '7',
                'name' => 'CAT 2',
                'weight' => '0.15',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '7',
                'name' => 'Assignments',
                'weight' => '0.1',
                'maximum_score' => '30', 
            ],

            [
                'course_id' => '7',
                'name' => 'Exam',
                'weight' => '0.6',
                'maximum_score' => '60', 
            ],
        ];

        foreach ($coursemodules as $coursemodule) {
            CourseModule::create([
                   'course_id' => $coursemodule['course_id'],
                   'name' => $coursemodule['name'],
                   'weight' => $coursemodule['weight'],
                   'maximum_score' => $coursemodule['maximum_score'],
            ]);
        }
    }
}
