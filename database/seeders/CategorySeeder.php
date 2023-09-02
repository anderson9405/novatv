<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category;
        $category->name='Acción';
        $category->description='Películas llenas de emocionantes escenas de acción, peleas y persecuciones.';
        $category->save();

        $category = new Category;
        $category->name='Comedia';
        $category->description='Películas diseñadas para hacerte reír, con humor y situaciones cómicas';
        $category->save();

        $category = new Category;
        $category->name='Drama';
        $category->description='Historias centradas en conflictos emocionales y personales de los personajes';
        $category->save();

        $category = new Category;
        $category->name='Aventura';
        $category->description='Historias que involucran viajes emocionantes, descubrimientos y aventuras en lugares exóticos.';
        $category->save();

        $category = new Category;
        $category->name='Ciencia ficción';
        $category->description='Películas que exploran conceptos y tecnologías futuristas o alternativas';
        $category->save();

        $category = new Category;
        $category->name='Terror';
        $category->description='Películas destinadas a asustar y generar suspense en el espectador.';
        $category->save();

        $category = new Category;
        $category->name='Suspenso';
        $category->description='Películas que mantienen a la audiencia en vilo y expectante debido a la tensión y el misterio.';
        $category->save();


    }
}
