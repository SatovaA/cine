<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\MovieType::create([
            'name' => 'Acción',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        \App\MovieType::create([
            'name' => 'Romantica',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        \App\MovieType::create([
            'name' => 'Fantasía',
            'created_at' => date('Y-m-d H:i:s')
        ]);

    }
}
