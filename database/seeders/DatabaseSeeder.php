<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ariyan Satya Sikoko',
            'username' => 'ariyansikoko',
            'email' => 'ariyansikoko@gmail.com',
            'password' => bcrypt('asdasd'),
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia error ullam, obcaecati quibusdam corporis voluptates facere odio alias eius laudantium necessitatibus commodi',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia error ullam, obcaecati quibusdam corporis voluptates facere odio alias eius laudantium necessitatibus commodi, sit tenetur quisquam nostrum accusantium numquam totam dolor voluptatem neque libero incidunt quaerat unde? Cum odit ad molestiae qui. Numquam, consequatur sequi. Laborum perspiciatis nostrum nesciunt ducimus doloremque, est reprehenderit provident explicabo quos tempore quae amet minus quam eum! Sit explicabo neque tempora dolorem animi, asperiores hic amet consequatur sapiente minima eligendi enim facilis modi nam! Porro totam amet soluta veniam ea tempore eligendi ad, maxime consequatur velit minima ut ratione nemo, numquam doloremque saepe nihil quo aut?',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);
    }
}
