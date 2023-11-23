<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;
use App\Models\Libro;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $autor = new Autor();
        $autor->nombre = "Pau Tobar";
        $autor->nacimiento = 1978;
        $autor->save();
        $libro = new Libro();
        $libro->titulo = "El pas dels maulets";
        $libro->editorial = "3i4";
        $libro->precio = 10;
        $libro->autor()->associate($autor);
        $libro->save();
    }
}
