<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder array
        $accounts = array(
            [
                'bank' => 'Bank Alpha',
                'accounttype' => 'Current Account',
                'iban' => 'LU84 1111 2222 3333 4444',
                'currency' => 'EUR',
                'balance' => 42,
            ],
            [
                'bank' => 'Bank Beta',
                'accounttype' => 'Savings Account',
                'iban' => 'LU84 5555 6666 7777 8888',
                'currency' => 'EUR',
                'balance' => 1200,
            ],

        );

        // insert seeds
        foreach ($accounts as $key => $value) {
            DB::table('accounts')->insert([
                'bank' => $value['bank'],
                'accounttype' => $value['accounttype'],
                'iban' => $value['iban'],
                'currency' => $value['currency'],
                'balance' => $value['balance'],
            ]);
        }
    }
}
