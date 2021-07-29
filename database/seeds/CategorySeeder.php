<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $category_types = \App\Http\Controllers\frontend\CategoryController::$category_types;

        foreach ($category_types as $category_type) {
            factory(\App\Category::class)->create([
                'name' => $category_type,
            ]);
        }
    }
}
