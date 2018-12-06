<?php

use Illuminate\Database\Seeder;

class TerminalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++)
        {
            DB::table('terminals')->insert([
                'code' => str_random('5'),
                'branch_id'=>  random_int(1,4),
                'colleague_id'=>random_int(1,10),
                'manufacturer'=>$faker->company,
                'img_path'=>'',
                'install_date'=>$faker->date(),
                'last_support_date'=>$faker->date(),
                'state_id'=> random_int(1,5),
            ]);
        }
    }
}
