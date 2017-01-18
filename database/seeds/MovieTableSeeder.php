<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->delete();

        DB::table('movies')->insert([ //,
            'genre' => 'Fantasy',
            'title' => 'Falafel',
            'description' => 'aivjiajvija',
            'year' => 2000,
            'runtime' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('movies')->insert([ //,
            'genre' => 'Comedy',
            'title' => 'Dumm und Dümmer',
            'description' => 'jdijgvijdi',
            'year' => 2000,
            'runtime' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('movies')->insert([ //,
            'genre' => 'Horror',
            'title' => 'Scary Movie',
            'description' => 'kfojdaovjo',
            'year' => 2000,
            'runtime' => 4,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
