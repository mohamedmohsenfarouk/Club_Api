<?php

use Illuminate\Database\Seeder;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sessions')->insert([
            [
                'name' => 'One',
                'attendance_limit' => '25',
                'sport_id' => '1',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Two',
                'attendance_limit' => '15',
                'sport_id' => '1',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Three',
                'attendance_limit' => '15',
                'sport_id' => '2',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Four',
                'attendance_limit' => '10',
                'sport_id' => '2',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Five',
                'attendance_limit' => '15',
                'sport_id' => '3',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Six',
                'attendance_limit' => '10',
                'sport_id' => '3',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Seven',
                'attendance_limit' => '20',
                'sport_id' => '4',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Eight',
                'attendance_limit' => '10',
                'sport_id' => '4',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nine',
                'attendance_limit' => '10',
                'sport_id' => '5',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ten',
                'attendance_limit' => '5',
                'sport_id' => '5',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
