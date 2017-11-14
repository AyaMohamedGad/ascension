<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'date' => \Carbon\Carbon::now(),
            'image' => 'test.png',
        ]);

        DB::table('news')->insert([
            'date' => \Carbon\Carbon::now(),
            'image' => 'test.png',
        ]);

        DB::table('news')->insert([
            'date' => \Carbon\Carbon::now(),
            'image' => 'test.png',
        ]);

        DB::table('news_translations')->insert([
            'title' => 'test 1',
            'language' => 'en',
            'description' => 'test test test test test test test test test test test test test test test test ',
            'new_id' => 1,
        ]);

        DB::table('news_translations')->insert([
            'title' => 'test 2',
            'language' => 'en',
            'description' => 'test test test test test test test test test test test test test test test test ',
            'new_id' => 2,
        ]);

        DB::table('news_translations')->insert([
            'title' => 'test 3',
            'language' => 'en',
            'description' => 'test test test test test test test test test test test test test test test test ',
            'new_id' => 3,
        ]);

        DB::table('photo_gallery')->insert([
            'image' => '1.png',
            'order' => 1,
        ]);

        DB::table('photo_gallery')->insert([
            'image' => '2.png',
            'order' => 2,
        ]);

        DB::table('courses')->insert([
            'name' => 'cma',
            'reg' => \Carbon\Carbon::now(),
            'far' => \Carbon\Carbon::now(),
        ]);

        DB::table('courses')->insert([
            'name' => 'cpa',
            'reg' => \Carbon\Carbon::now(),
            'far' => \Carbon\Carbon::now(),
        ]);

        DB::table('courses')->insert([
            'name' => 'cia',
            'reg' => \Carbon\Carbon::now(),
            'far' => \Carbon\Carbon::now(),
        ]);

        DB::table('courses')->insert([
            'name' => 'cfa',
            'reg' => \Carbon\Carbon::now(),
            'far' => \Carbon\Carbon::now(),
        ]);

    }
}
