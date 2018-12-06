<?php

use Illuminate\Database\Seeder;

class ColleaguesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('Ru_RU');

        for ($i = 0; $i < 10; $i++)
        {
            DB::table('colleagues')->insert([
                'name' => $faker->firstName('male'),
                'branch_id'=>  random_int(1,4),
                'last_name' => $faker->lastName,
                'second_name'=> $faker->firstName('male').'ович'
            ]);
        }
        //
    }
}
