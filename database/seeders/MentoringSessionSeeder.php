<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MentoringSession;

class MentoringSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentoringsessions = [
            [
                'user_id' => '1',
                'mentor_id' => '10',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '2',
                'mentor_id' => '9',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '3',
                'mentor_id' => '8',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '4',
                'mentor_id' => '7',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '5',
                'mentor_id' => '6',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '6',
                'mentor_id' => '5',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '7',
                'mentor_id' => '4',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '8',
                'mentor_id' => '3',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '9',
                'mentor_id' => '2',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            [
                'user_id' => '10',
                'mentor_id' => '1',
                'total_hours' => '1',
                'date_time' => '2021-07-16 10:14:04',
                'comments' => 'Enjoyed the session!',
            ],
            
        ];

        foreach ($mentoringsessions as $mentoringsession) {
            MentoringSession::create([
                   'mentor_id' => $mentoringsession['mentor_id'],
                   'user_id' => $mentoringsession['user_id'],
                   'total_hours' => $mentoringsession['total_hours'],
                   'comments' => $mentoringsession['comments'],
                   'date_time' => $mentoringsession['date_time'],
                 ]);
        }
    }
}
