<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as Faker;
use App\Models\Artwork;
class ArtworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artworks')->delete();
        $faker = Faker::create();
        
        for($i=0; $i<5; $i++){
            Artwork::create([
                'id'=>$i+1,
                'artist_name'=>$faker->name,
                'description'=>$faker->sentence(2,true),
                'art_type' => $faker->randomElement(['hoihoa', 'amnhac', 'vanhoc']),
                'media_link'=>$faker->url,
                'cover_image'=>$faker->image($dir = 'pic', 30,30),
                
            ]);
    }
    }
}
