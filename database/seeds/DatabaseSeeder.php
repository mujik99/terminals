<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BranchesSeeder::class);
        $this->call(TerminalStateSeeder::class);
        $this->call(ColleaguesSeeder::class);
        $this->call(TerminalsSeeder::class);
    }
}
