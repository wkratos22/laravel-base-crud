<?php

use Illuminate\Database\Seeder;
use App\models\Fumetto;

class FumettosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti = config( 'fumetti' );
        foreach ($fumetti as $fumetto){
            $new_fumetto = new Fumetto();

            $new_fumetto->fill( $fumetto );
            $new_fumetto->save();

        }
    }
}
