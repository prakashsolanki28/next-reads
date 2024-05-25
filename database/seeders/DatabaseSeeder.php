<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::where("email", "admin@gmail.com")->first();

        if (!$user) {
            User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
                'role' => 'admin',
            ]);
        }


        $json = file_get_contents(public_path('assets/books/books.json'));
        $data = json_decode($json, true);

        foreach ($data['books'] as $key => $book) {

            Book::create([
                'title' => $book['title'] ?? null,
                'description' => $book['description'] ?? null,
                'image' => $book['image'] ?? null,
                'num_pages' => $book['num_pages'] ?? null,
                'editorial' => $book['editorial'] ?? null,
                'isbn' => $book['isbn'] ?? null,
                'year_edition' => $book['year_edition'] ?? null,
                'date_edition' => $book['date_edition'] ?? null,
                'writer' => $book['writer'] ?? null,
                'price' => rand(150, 500),
            ]);

        }
    }

}
