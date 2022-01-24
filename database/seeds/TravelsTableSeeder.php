<?php

use Illuminate\Database\Seeder;

// Use Faker
use Faker\Generator as Faker;

//Importazione modello
use App\Travel;


class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Creazione 20 pacchetti di viaggio (rows)
        for ($i=0; $i < 20; $i++) { 
            // creazione nuova istanza di Travel
            $new_travel = new Travel();

            // Popolazione delle colonne
            // $new_travel->name = 'Paradiso innevato';
            // $new_travel->destination = 'Cervinia';
            // $new_travel->departure_date = '2022-02-5';
            // $new_travel->return_date = '2022-2-12';
            // $new_travel->description = 'lorem ipsum dolor sit amet, lorem ipsum dolor sit amet';
            // $new_travel->days = 8;

            //Usiamo FAKERS
            $new_travel->name = $faker->text(30);
            $new_travel->destination = $faker->text(12);
            $new_travel->departure_date = $faker->dateTimeBetween('+1 week', '+2 week');
            $new_travel->return_date = $faker->dateTimeBetween('+2 week', '+3 week');
            $new_travel->description = $faker->paragraph(3);
            $new_travel->days = $faker->numberBetween(0, 16);
            // Salvare i dati nel DB
            $new_travel->save();
        }

    }
}
