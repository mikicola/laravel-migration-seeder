<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $trainData =[
                'Azienda' => $faker->word(),
                'Stazione_di_partenza' => $faker->city(),
                'Stazione_di_arrivo' => $faker->city(),
                'Orario_di_partenza' => $faker->date(),
                'Orario_di_arrivo' => $faker->date(),
                'Codice_Treno' => $faker->randomDigitNot(4),
                'Numero_Carrozze' => $faker->randomDigitNot(10),
                'In_orario' => $faker->word(),
                'Cancellato' => $faker->boolean(),
            ];
            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}
// TOFIX faker
// 'Orario_di_partenza' => $faker->time(),
// 'Orario_di_arrivo' => $faker->time(),
