<?php

namespace Database\Seeders;

use App\Models\FeeStatement;

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
                'amount' => '100000.00',
            ],
            [
                'user_id' => '1',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '1',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '1',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],

            //User 2
            [
                'user_id' => '2',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '2',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '2',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '2',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            //User 3
            [
                'user_id' => '3',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '3',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '3',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '3',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            //User 4
            [
                'user_id' => '4',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '4',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '4',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '4',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            //User 5
            [
                'user_id' => '5',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '5',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '5',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '5',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            //User 6
            [
                'user_id' => '6',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '6',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '6',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '6',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            //User 7
            [
                'user_id' => '7',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '7',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '7',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '7',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            //User 8
            [
                'user_id' => '8',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '8',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '8',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '8',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            //User 9
            [
                'user_id' => '9',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '9',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '9',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '9',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            //User 10
            [
                'user_id' => '10',
                'date' => '2020-06-07',
                'document_number' => '127363',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '10',
                'date' => '2020-06-07',
                'document_number' => '127456',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '10',
                'date' => '2020-06-07',
                'document_number' => '128351',
                'document_type' => 'Invoice', 
                'type' => 'Debit',
                'amount' => '100000.00',
            ],
            [
                'user_id' => '10',
                'date' => '2020-06-07',
                'document_number' => '129052',
                'document_type' => 'Receipt', 
                'type' => 'Credit',
                'amount' => '100000.00',
            ],

        ];

        foreach ($fee_statements as $fee_statement) {
            FeeStatement::create([
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
