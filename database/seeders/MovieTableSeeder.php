<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shamshank-redention',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=0zIJbutQuts',
                'thumbnail' => 'https://m.media-amazon.com/images/I/512G9J05RJL._AC_UF1000,1000_QL80_.jpg',
                'rating' => 4.3,
                'is_featured' => 1,
            ],

            [
                'name' => 'The GodFather',
                'slug' => 'the-god-father',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=0zIJbutQuts',
                'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'rating' => 4.1,
                'is_featured' => 0,
            ],
            [
                'name' => 'The GodFather: Part II',
                'slug' => 'the-god-father',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=0zIJbutQuts',
                'thumbnail' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'rating' => 4.0,
                'is_featured' => 0,
            ]

        ];

        Movie::insert($movies);
    }
}
