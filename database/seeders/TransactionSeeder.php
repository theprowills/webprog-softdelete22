<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Transaction::create([
            't_id'            => '268495c6-71fc-412b-8880-2349c8d531b7',
            't_date'          => '2020-12-01',
            't_username'      => 'jane',
            't_product_name'  => 'sarasa',
            't_price'         => '20000',
            't_quantity'      => '9'
        ]);

        Transaction::create([
            't_id'            => '26922ffb-1eba-47c1-ab0e-755d645c5e1a',
            't_date'          => '2020-12-01',
            't_username'      => 'johny',
            't_product_name'  => 'love is war',
            't_price'         => '20000',
            't_quantity'      => '5'
        ]);
    }
}
