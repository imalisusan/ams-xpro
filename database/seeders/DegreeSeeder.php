<?php

namespace Database\Seeders;

use App\Models\Degree;
use Illuminate\Database\Seeder;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degrees =[
            [
            'name' => 'Bachelor of Science in Informatics and Computer Science',
            'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Commerce',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Tourism Management',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Science in Hospitality and Hotel Management',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Business Science: Financial Engineering',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Business Science: Financial Economics',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Business Science: Actuarial Science',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Science in Telecommunications',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Laws',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Arts in Communication',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Arts in International Studies',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Arts in Development Studies and Philosophy',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Arts in Supply Chain and Operations Management',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Arts in Financial Services',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'Bachelor of Science in Electrical and Electronics Engineering',
                'description' => 'Lorem Ipsum'
            ],
            [
                'name' => 'None',
                'description' => 'Lorem Ipsum'
            ]
            ];
            
        foreach($degrees as $degree)
              {
                  Degree::create([
                   'name' => $degree['name'],
                   'description' => $degree['description'],
                 ]);
               }
    }
}
