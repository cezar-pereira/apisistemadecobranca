<?php

use Illuminate\Database\Seeder;

class PaymentSlipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paymentslips')->delete();

        DB::table('paymentslips')->insert(array(
            0 => array(
                'id' => 1,
                'dueDate' => '2019-01-01',
                'value' => 500.00,
                'user_id' => 1
            ),
            1 => array(
                'id' => 2,
                'dueDate' => '2019-01-01',
                'value' => 850.00,
                'user_id' => 2
            ),
        ));
    }
}
