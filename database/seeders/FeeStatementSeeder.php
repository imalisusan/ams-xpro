<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FeeStatementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fee_statements = [
            //User 1
            [
                'user_id' => '1',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000',
            ],
            [
                'user_id' => '1',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000',
            ],

            //User 2

        ];

        foreach ($fee_statements as $fee_statement) {
            User::create([
                   'user_id' => $fee_statement['user_id'],
                   'date' => $fee_statement['date'],
                   'document_number' => $fee_statement['document_number'],
                   'document_type' => $fee_statement['document_type'],
                   'type' => $fee_statement['type'],
                   'amount' => $fee_statement['amount'],
                 ]);
        }
    }
}
