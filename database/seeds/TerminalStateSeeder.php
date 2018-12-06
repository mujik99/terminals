<?php

use Illuminate\Database\Seeder;

class TerminalStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terminal_states')->insert([
            'state_name' => 'на складе',
        ]);
        DB::table('terminal_states')->insert([
            'state_name' => 'транспортировка',
        ]);
        DB::table('terminal_states')->insert([
            'state_name' => 'установлен',
        ]);
        DB::table('terminal_states')->insert([
            'state_name' => 'активен',
        ]);
        DB::table('terminal_states')->insert([
            'state_name' => 'деактивирован',
        ]);

    }
}
