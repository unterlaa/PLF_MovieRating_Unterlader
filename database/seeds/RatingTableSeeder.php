<?php

use Illuminate\Database\Seeder;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ratings')->delete();



        DB::table('ratings')->insert([ //,
            'username' => 'unterlaa',
            'movie_id' => 1,
            'stars' => 4,
            'comment' => 'ahichihis',
        ]);

        DB::table('ratings')->insert([ //,
            'username' => 'zarred',
            'movie_id' => 2,
            'stars' => 3,
            'comment' => 'ökvpdk',
        ]);

        DB::table('ratings')->insert([ //,
            'username' => 'mandela',
            'movie_id' => 3,
            'stars' => 5,
            'comment' => 'kascojaodj',
        ]);

    }
}
