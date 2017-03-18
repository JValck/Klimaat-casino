<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('casino_settings')->insert(array(
          ['name' => 'max_joker', 'setting' => '2'],
          ['name' => 'seed_money', 'setting' => '100'],
          ['name' => 'min_bet', 'setting' => '5'],
          ['name' => 'max_bet', 'setting' => '10'],
        ));
    }
}
