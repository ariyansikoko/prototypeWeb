<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ariyan Sikoko",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam maxime non, rerum dolores amet libero qui deleniti est distinctio tempore, nisi minima eaque natus? Ratione ipsum voluptas distinctio, omnis ea vel porro quas sunt aliquid explicabo in fugiat odit esse rerum, dolores, vitae incidunt alias dolore harum dolorem deserunt ipsam! Est possimus quidem quas. Nulla voluptatem illum temporibus reprehenderit repellat?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Awoken Vox",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum quasi porro et veniam commodi labore ratione illo cum, rem minima tempora quisquam ab necessitatibus tenetur eum aliquam voluptates nesciunt quia doloribus perspiciatis nulla reprehenderit. Praesentium quos aut, velit atque ducimus pariatur sapiente illo quis vel officiis autem deleniti temporibus earum ut facere ipsa inventore officia eius perspiciatis optio. Natus cupiditate totam sint ab quaerat maxime ratione, voluptatum delectus voluptatem facere necessitatibus, doloremque ipsum rem quae fuga libero repellat qui. Dolorum."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Satya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum quasi porro et veniam commodi labore ratione illo cum, rem minima tempora quisquam ab necessitatibus tenetur eum aliquam voluptates nesciunt quia doloribus perspiciatis nulla reprehenderit. Praesentium quos aut, velit atque ducimus pariatur sapiente illo quis vel officiis autem deleniti temporibus earum ut facere ipsa inventore officia eius perspiciatis optio. Natus cupiditate totam sint ab quaerat maxime ratione, voluptatum delectus voluptatem facere necessitatibus, doloremque ipsum rem quae fuga libero repellat qui. Dolorum."
        ],
        [
            "title" => "Judul Post Keempat",
            "slug" => "judul-post-keempat",
            "author" => "Ayaka",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum quasi porro et veniam commodi labore ratione illo cum, rem minima tempora quisquam ab necessitatibus tenetur eum aliquam voluptates nesciunt quia doloribus perspiciatis nulla reprehenderit. Praesentium quos aut, velit atque ducimus pariatur sapiente illo quis vel officiis autem deleniti temporibus earum ut facere ipsa inventore officia eius perspiciatis optio. Natus cupiditate totam sint ab quaerat maxime ratione, voluptatum delectus voluptatem facere necessitatibus, doloremque ipsum rem quae fuga libero repellat qui. Dolorum."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();


        return $posts->firstWhere('slug', $slug);
    }
}
