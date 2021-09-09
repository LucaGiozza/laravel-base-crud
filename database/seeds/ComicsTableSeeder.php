<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comic = config('comic');

        foreach ($array_comic as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->image = $comic['thumb'];
            $newComic->type = $comic['type'];
            $newComic->author = $comic['series'];
            $newComic->year = $comic['sale_date'];
            $newComic->description = $comic['description'];
            $newComic->save();
            
        }
    }
}





