<?php


use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'dob' => $faker->date,
                'member_type' => $faker->randomElement(['basic', 'premium']),
                'nomination_year' => $faker->numberBetween(2000, 2022)
            ]);
        }
    }
}
