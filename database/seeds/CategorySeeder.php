<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = ['Ball Games', 'Track and Field'];
        foreach($datas as $data){
            $category = new Category();
            $category->categoryName = $data;
            $category->categoryDescription = 'Description';
            $category->save();
        }
        //
    }
}
