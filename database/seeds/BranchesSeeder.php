<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            'code' => 'ABDP',
            'city' => 'Днепр',
        ]);

        DB::table('branches')->insert([
            'code' => 'ABKV',
            'city' => 'Киев'
        ]);

        DB::table('branches')->insert([
            'code' => 'ABLV',
            'city' => 'Львов'
        ]);

        DB::table('branches')->insert([
            'code' => 'ABZP',
            'city' => 'Запорожье'
        ]);
    }
}
