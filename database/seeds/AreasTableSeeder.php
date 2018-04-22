<?php

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'description'     => 'Gestão e Negócios',
        ]);

        Area::create([
            'description'     => 'Informação e Comunicação',
        ]);
    }
}
