<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        $categories = [
            [
                'name'=>'Celulares y Tablets',
                'slug'=>Str::slug('Celulares y Tablets'),
                'icon'=>'<i class="fa-thin fa-mobile"></i>'
            ],
            [
                'name'=>'TV, Audio y Video',
                'slug'=>Str::slug('TV, Audio y Video'),
                'icon'=>'<i class="fa-thin fa-tv"></i>'
            ],
            [
                'name'=>'Consolas y Videojuegos',
                'slug'=>Str::slug('Consolas y Videojuegos'),
                'icon'=>'<i class="fa-thin fa-gamepad"></i>'
            ],
            [
                'name'=>'Computación',
                'slug'=>Str::slug('Computación'),
                'icon'=>'<i class="fa-thin fa-laptop"></i>'
            ],
            [
                'name'=>'Moda',
                'slug'=>Str::slug('Moda'),
                'icon'=>'<i class="fa-thin fa-shirt"></i>'
            ],
        ];
        
        foreach($categories as $category){
            $category = Category::factory(1)->create($category)->first(); 
            $brands = Brand::factory(4)->create();
            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}