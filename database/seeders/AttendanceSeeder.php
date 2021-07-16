<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attendances = [
            [
                'user_id' => '1',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '1',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '1',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '1',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '1',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '1',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],

            //User 2
            [
                'user_id' => '2',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '2',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '2',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '2',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '2',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '2',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],

            //User 3
            [
                'user_id' => '3',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '3',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '3',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '3',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '3',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '3',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],

            //User 4
            [
                'user_id' => '4',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '4',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '4',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '4',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '4',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '4',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],

            //User 5
            [
                'user_id' => '5',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '5',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '5',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '5',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '5',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '5',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],

            //User 6
            [
                'user_id' => '6',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '6',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '6',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '6',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '6',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '6',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],

            //User 7
            [
                'user_id' => '7',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '7',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '7',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '7',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '7',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '7',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],


            //User 8
            [
                'user_id' => '8',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '8',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '8',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '8',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '8',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '8',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],


            //User 9
            [
                'user_id' => '9',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '9',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '9',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '9',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '9',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '9',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],


            //User 10
            [
                'user_id' => '10',
                'course_id' => '1',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '10',
                'course_id' => '2',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '10',
                'course_id' => '3',
                'total_hours' => '3',
                'status' => 'Present',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '10',
                'course_id' => '4',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '10',
                'course_id' => '5',
                'total_hours' => '3',
                'status' => 'Absent',
                'date_time' => '2021-07-16 10:14:04',
            ],
            [
                'user_id' => '10',
                'course_id' => '6',
                'total_hours' => '3',
                'status' => 'Abse',
                'date_time' => '2021-07-16 10:14:04',
            ],

        ];

        foreach ($attendances as $attendance) {
            Attendance::create([
                   'course_id' => $attendance['course_id'],
                   'user_id' => $attendance['user_id'],
                   'total_hours' => $attendance['total_hours'],
                   'status' => $attendance['status'],
                   'date_time' => $attendance['date_time'],
                 ]);
        }
    }
}
