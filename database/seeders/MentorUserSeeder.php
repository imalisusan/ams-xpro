<?php

namespace Database\Seeders;

use App\Models\MentorUser;
use Illuminate\Database\Seeder;

class MentorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mentorusers = [
            [
                'mentor_id' => '1',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '1',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '1',
                'user_id' => '3',
            ],

            //Lecturer 2
            [
                'mentor_id' => '2',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '2',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '3',
                'user_id' => '3',
            ],

            //Lecturer 3
            [
                'mentor_id' => '3',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '3',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '3',
                'user_id' => '3',
            ],

            //Lecturer 4
            [
                'mentor_id' => '4',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '4',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '4',
                'user_id' => '3',
            ],

            //Lecturer 5
            [
                'mentor_id' => '5',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '5',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '5',
                'user_id' => '3',
            ],

            //Lecturer 6
            [
                'mentor_id' => '6',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '6',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '6',
                'user_id' => '3',
            ],

            //Lecturer 7
            [
                'mentor_id' => '7',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '7',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '7',
                'user_id' => '3',
            ],

            //Lecturer 8
            [
                'mentor_id' => '8',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '8',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '8',
                'user_id' => '3',
            ],

            //Lecturer 9
            [
                'mentor_id' => '9',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '9',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '9',
                'user_id' => '3',
            ],

            //Lecturer 10
            [
                'mentor_id' => '10',
                'user_id' => '1',
            ],
            [
                'mentor_id' => '10',
                'user_id' => '2',
            ],
            [
                'mentor_id' => '10',
                'user_id' => '3',
            ],
          
                  
        ];

        foreach ($mentorusers as $mentoruser) {
            MentorUser::create([
                   'mentor_id' => $mentoruser['mentor_id'],
                   'user_id' => $mentoruser['user_id'],
                 ]);
        }
    }
}
