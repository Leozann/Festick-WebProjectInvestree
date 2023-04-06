<?php

namespace Database\Seeders;

use App\Models\Transactions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transactions::create([
            'ticket_id' => '1',
            'user_id' => '2',
            'ticket_quantity' => '2',
            'total_price' => '1250000',
            'transaction_status' => 'refund',
        ]);
        Transactions::create([
            'ticket_id' => '2',
            'user_id' => '3',
            'ticket_quantity' => '3',
            'total_price' => '1500000',
            'transaction_status' => 'success',
        ]);
        Transactions::create([
            'ticket_id' => '3',
            'user_id' => '4',
            'ticket_quantity' => '1',
            'total_price' => '500000',
            'transaction_status' => 'success',
        ]);
        Transactions::create([
            'ticket_id' => '1',
            'user_id' => '3',
            'ticket_quantity' => '1',
            'total_price' => '500000',
            'transaction_status' => 'success',
        ]);
        Transactions::create([
            'ticket_id' => '2',
            'user_id' => '5',
            'ticket_quantity' => '1',
            'total_price' => '500000',
            'transaction_status' => 'success',
        ]);
        Transactions::create([
            'ticket_id' => '3',
            'user_id' => '6',
            'ticket_quantity' => '1',
            'total_price' => '500000',
            'transaction_status' => 'success',
        ]);
        Transactions::create([
            'ticket_id' => '4',
            'user_id' => '5',
            'ticket_quantity' => '1',
            'total_price' => '500000',
            'transaction_status' => 'success',
        ]);
        Transactions::create([
            'ticket_id' => '2',
            'user_id' => '5',
            'ticket_quantity' => '1',
            'total_price' => '500000',
            'transaction_status' => 'success',
        ]);
        Transactions::create([
            'ticket_id' => '3',
            'user_id' => '7',
            'ticket_quantity' => '1',
            'total_price' => '500000',
            'transaction_status' => 'success',
        ]);
        Transactions::create([
            'ticket_id' => '4',
            'user_id' => '4',
            'ticket_quantity' => '1',
            'total_price' => '500000',
            'transaction_status' => 'success',
        ]);
    }
}
