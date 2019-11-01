<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->delete();
        DB::table('artists')->insert([
            [
                'id' => 1,
                'name' => 'The Doors',
                'bio' => 'The Doors were an American rock band formed in Los Angeles in 1965, with vocalist Jim Morrison, keyboardist Ray Manzarek, guitarist Robby Krieger, and drummer John Densmore. They were among the most controversial and influential rock acts of the 1960s, mostly because of Morrison\'s lyrics and his erratic stage persona, and the group was widely regarded as representative of the era\'s counterculture',
                'portrait_url' => 'https://img.discogs.com/lkC2CFT9r0Wl0-HI6Rm5tIep-U4=/600x600/smart/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/A-56798-1440335571-1358.jpeg.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Radiohead',
                'bio' => 'Radiohead are an English rock band formed in 1985 in Abingdon, Oxfordshire. The band consists of Thom Yorke (vocals, guitar, piano, keyboards), brothers Jonny Greenwood (lead guitar, keyboards, other instruments) and Colin Greenwood (bass), Ed O\'Brien (guitar, backing vocals) and Philip Selway (drums, percussion). They have worked with producer Nigel Godrich and cover artist Stanley Donwood since 1994.',
                'portrait_url' => 'https://img.discogs.com/s-0ITa0WWU-Il-FBa1NEcZR8BpE=/600x480/smart/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/A-3840-1411725455-3589.jpeg.jpg',
            ],
            [
                'id' => 3,
                'name' => 'Soda Stereo',
                'bio' => 'Soda Stereo was an Argentine rock band created in Buenos Aires in 1982 by the power trio made up of Gustavo Cerati (lead vocals, guitars), Héctor "Zeta" Bosio (bass), and Charly Alberti (drums). They are considered one of the most influential and important Latin American bands of all time and a legend of Latin music.',
                'portrait_url' => 'https://img.discogs.com/4D3Vf8pVXTeawah1H-_-ns2u6mk=/600x559/smart/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/A-467153-1534862818-7453.jpeg.jpg'
            ],

        ]);
    }
}
