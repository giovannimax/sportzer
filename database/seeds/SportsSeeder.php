<?php

use Illuminate\Database\Seeder;
use App\Sport;
use App\Category;
class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ballGames = ['Basketball','Badminton','Lawn Tennis','Table Tennis'];
        $trackAndField = ['100 meters dash','Shot put','Javelin Throw','Pole Vault',
        'High Jump','Triple Jump'];

        $categories = Category::all();
        foreach($categories as $category){
            if($category->categoryName == 'Ball Games'){
               foreach($ballGames as $ballGame){
                $sport = new Sport();
                $sport->categoryId = $category->id;
                $sport->sportName = $ballGame;
                $sport->sportDescription = 'Description';
                $sport->save();
               }
            }else{
                foreach($trackAndField as $track){
                    $sport = new Sport();
                    $sport->categoryId = $category->id;
                    $sport->sportName = $track;
                    $sport->sportDescription = 'Description';
                    $sport->save();
                   }
            }
        }
    }
}
