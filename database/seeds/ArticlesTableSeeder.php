<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Calling the model from App and indicating the number of instance to be created
        factory(App\Article::class, 30)->create();
    }
}
