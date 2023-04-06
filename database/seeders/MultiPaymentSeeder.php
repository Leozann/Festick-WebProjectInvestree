<?php

namespace Database\Seeders;

use App\Models\MultiPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MultiPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MultiPayment::create([
            'mp_logo' => 'https://gopay.co.id/icon.png',
            'mp_method' => 'gopay',
            'mp_account_number' => '081234567891'
        ]);
    }
}
