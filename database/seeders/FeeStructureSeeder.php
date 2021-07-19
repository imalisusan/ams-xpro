<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FeeStructure;


class FeeStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feestructures =[
            [
                'file_name' => 'sample.pdf',
                'student_year' => '1',
                'semester' => 'MAY2021',
                'sem_start_date' => '2021-07-19',
                'sem_end_date' => '2021-07-19',
                'file_path' => 'sample.pdf',
                'created_at' => '2021-07-19 15:54:54',
                'updated_at' =>'2021-07-19 15:54:55',
            ],
            [
                'file_name' => 'sample.pdf',
                'student_year' => '2',
                'semester' => 'MAY2021',
                'sem_start_date' => '2021-07-19',
                'sem_end_date' => '2021-07-19',
                'file_path' => 'sample.pdf',
                'created_at' => '2021-07-19 15:54:54',
                'updated_at' =>'2021-07-19 15:54:55',
            ],
            [
                'file_name' => 'sample.pdf',
                'student_year' => '3',
                'semester' => 'MAY2021',
                'sem_start_date' => '2021-07-19',
                'sem_end_date' => '2021-07-19',
                'file_path' => 'sample.pdf',
                'created_at' => '2021-07-19 15:54:54',
                'updated_at' =>'2021-07-19 15:54:55',
            ],
            [
                'file_name' => 'sample.pdf',
                'student_year' => '4',
                'semester' => 'MAY2021',
                'sem_start_date' => '2021-07-19',
                'sem_end_date' => '2021-07-19',
                'file_path' => 'sample.pdf',
                'created_at' => '2021-07-19 15:54:54',
                'updated_at' =>'2021-07-19 15:54:55',
            ]

        ];

        foreach ($feestructures as $feestructure) {
            FeeStructure::create([
                'file_name' => $feestructure['file_name'],
                'student_year' => $feestructure['student_year'],
                'semester' => $feestructure['semester'],
                'sem_start_date' => $feestructure['sem_start_date'],
                'sem_end_date' => $feestructure['sem_end_date'],
                'file_path' => $feestructure['file_path'],
                'created_at' => $feestructure['created_at'],
                'updated_at' =>$feestructure['updated_at'],
                   
                 ]);
        }

    }
}
