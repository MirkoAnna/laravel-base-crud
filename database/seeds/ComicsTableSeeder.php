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
        $comics = config('comics');

        foreach ($comics as $comic) {

            $item = new Comic();

            $item->title = $comic['title'];
            $item->description = $comic['description'];
            $item->thumb = $comic['thumb'];
            $item->price = $comic['price'];
            $item->series = $comic['series'];
            $item->sale_date = $comic['sale_date'];
            $item->type = $comic['type'];
            $item->save();
        }
    }
}
