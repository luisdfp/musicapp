<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->delete();
        DB::table('songs')->insert([
            // The Doors
            [
                'title' => 'Strange Days',
                'artist_id' => 1,
                'duration' => 190
            ],
            [
                'title' => 'The Crystal Ship',
                'artist_id' => 1,
                'duration' => 155
            ],
            [
                'title' => 'Moonlight Drive',
                'artist_id' => 1,
                'duration' => 215
            ],
            // Radiohead
            [
                'title' => 'My Iron Lung',
                'artist_id' => 2,
                'duration' => 276
            ],
            [
                'title' => 'Airbag',
                'artist_id' => 2,
                'duration' => 288
            ],
            [
                'title' => 'Karma Police',
                'artist_id' => 2,
                'duration' => 264
            ],
            // Soda Stereo
            [
                'title' => '(En) El Séptimo Día',
                'artist_id' => 3,
                'duration' => 263
            ],
            [
                'title' => 'Hombre Al Agua',
                'artist_id' => 3,
                'duration' => 355
            ],
            [
                'title' => 'Persiana Americana',
                'artist_id' => 3,
                'duration' => 292
            ],

        ]);
    }
}
