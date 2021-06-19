<?php

use App\Testapi;
use Illuminate\Database\Seeder;

class TestapiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Testapi::class, 25)->create();
    }
}
