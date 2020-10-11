<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TxnhistorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder array
        $txnhistors = array(
            [
                'txndate' => '2020-10-07',
                'txntype' => 'SEPA Direct Debit',
                'beneficiary' => 'Orange Comms',
                'currency' => 'EUR',
                'txnamount' => '72',
            ],
            [
                'txndate' => '2020-10-09',
                'txntype' => 'Debit Card',
                'beneficiary' => 'Q8 Dudelange',
                'currency' => 'EUR',
                'txnamount' => '68',
            ],
            [
                'txndate' => '2020-10-15',
                'txntype' => 'Transfer',
                'beneficiary' => 'Paul Dupont',
                'currency' => 'EUR',
                'txnamount' => '300',
            ],

        );

        // insert seeds
        foreach ($txnhistors as $key => $value) {
            DB::table('txnhistors')->insert([
                'txndate' => $value['txndate'],
                'txntype' => $value['txntype'],
                'beneficiary' => $value['beneficiary'],
                'currency' => $value['currency'],
                'txnamount' => $value['txnamount'],
            ]);
        }
    }
}
