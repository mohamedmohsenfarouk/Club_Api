<?php

use Illuminate\Database\Seeder;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Sports::class, 5)->create();
        DB::table('sports')->insert([
            [
            'name' => 'Football',
            'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Basketball',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Volleyball',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Swimming',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tennis',
                'created_at' => date('Y-m-d H:i:s')
            ]
            ]);
    }
}
