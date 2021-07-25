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
                'user_id' => '10',
            ],

            //Mentor 2
            [
                'mentor_id' => '2',
                'user_id' => '9',
            ],

            //Mentor 3
            [
                'mentor_id' => '3',
                'user_id' => '8',
            ],

            //Mentor 4
            [
                'mentor_id' => '4',
                'user_id' => '7',
            ],

            //Mentor 5
            [
                'mentor_id' => '5',
                'user_id' => '6',
            ],

            //Mentor 6
            [
                'mentor_id' => '6',
                'user_id' => '5',
            ],

            //Mentor 7
            [
                'mentor_id' => '7',
                'user_id' => '4',
            ],

            //Mentor 8
            [
                'mentor_id' => '8',
                'user_id' => '3',
            ],

            //Mentor 9
            [
                'mentor_id' => '9',
                'user_id' => '2',
            ],

            //Mentor 10
            [
                'mentor_id' => '10',
                'user_id' => '1',
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
