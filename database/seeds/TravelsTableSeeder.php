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
    public function run()
    {
        //Creazione 20 pacchetti di viaggio (rows)
        for ($i=0; $i < 20; $i++) { 
            // creazione nuova istanza di Travel
            $new_travel = new Travel();

            // Popolazione delle colonne
            $new_travel->name = 'Paradiso innevato';
            $new_travel->destination = 'Cervinia';
            $new_travel->departure_date = '2022-02-5';
            $new_travel->return_date = '2022-2-12';
            $new_travel->description = 'lorem ipsum dolor sit amet, lorem ipsum dolor sit amet';
            $new_travel->days = 8;
        }

        // Salvare i dati nel DB
        $new_travel->save();
    }
}
