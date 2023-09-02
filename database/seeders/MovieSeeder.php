<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = new Movie;
        $movie->name='Terminator';
        $movie->description = 'En un futuro postapocalíptico, un cyborg asesino es enviado al pasado para eliminar a Sarah Connor, la madre del futuro líder de la resistencia humana, pero un hombre llamado Kyle Reese intenta protegerla';
        $movie->quality = 'full DH';
        $movie->image='no-image.jpg';
        $movie->release_year = '1984-04-10';
        $movie->reproduction_number='1';
        $movie->language = 'Español';
        $movie->video_link = 'no-link.com';
        $movie->download_link='no-link.com';
        $movie->category_id='1';
        $movie->user_id='1';
        $movie->save();

        $movie = new Movie;
        $movie->name='Son como niños';
        $movie->description = 'Después de la muerte de su entrenador de baloncesto, un grupo de amigos de la infancia se reúne para celebrar un funeral y revive viejas rivalidades y travesuras.';
        $movie->quality = '720p';
        $movie->image='no-image.jpg';
        $movie->release_year = '2010-06-25';
        $movie->reproduction_number='1';
        $movie->language = 'Español';
        $movie->video_link = 'no-link.com';
        $movie->download_link='no-link.com';
        $movie->category_id='2';
        $movie->user_id='1';
        $movie->save();

        $movie = new Movie;
        $movie->name='Forest Gump';
        $movie->description = 'La vida del aparentemente simple Forrest Gump, quien a través de sus aventuras involuntariamente influye en varios momentos clave de la historia de Estados Unidos mientras busca el amor de su vida, Jenny';
        $movie->quality = '1080p';
        $movie->image='no-image.jpg';
        $movie->release_year = '2010-07-06';
        $movie->reproduction_number='1';
        $movie->language = 'Español';
        $movie->video_link = 'no-link.com';
        $movie->download_link='no-link.com';
        $movie->category_id='3';
        $movie->user_id='2';
        $movie->save();
    }
}

