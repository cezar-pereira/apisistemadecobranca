<?php

use Illuminate\Database\Seeder;

class SmssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smss')->delete();

        DB::table('smss')->insert(array(
            0 => array(
                'id' => 1,
                'sendDate' => '2019-01-01',
                'sendHour' => '01:01:01',
                'message' => 'message teste',
                'user_id' => 1
            ),
            1 => array(
                'id' => 2,
                'sendDate' => '2019-01-01',
                'sendHour' => '01:01:01',
                'message' => 'message teste1',
                'user_id' => 1
            ),
            2 => array(
                'id' => 3,
                'sendDate' => '2019-01-01',
                'sendHour' => '01:01:01',
                'message' => 'message teste2',
                'user_id' => 2
            ),
        ));
    }
}
