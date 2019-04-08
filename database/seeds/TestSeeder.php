<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    $faker = Faker\Factory::create();

    for($i = 0; $i < 25; $i++) {
        App\Test::create([
            'soldier_name' => $faker->firstname,
            'soldier_lastname' => $faker->lastname,
            'soldier_type' => $faker->bothify,
        ]);
    }
}
}
