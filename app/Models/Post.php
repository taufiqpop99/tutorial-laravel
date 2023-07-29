<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Taufiq Pop",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil dolore veritatis minus delectus eaque nobis, aperiam voluptatibus impedit, facilis possimus enim quidem cupiditate perferendis assumenda maxime asperiores mollitia? Ut, molestiae. Labore deleniti illum fuga officiis laborum provident possimus, fugit quod ipsum nobis dolor vero, minus dolore expedita architecto blanditiis! Rem accusamus laudantium, harum distinctio quis voluptate consectetur placeat doloribus explicabo ullam corrupti autem nihil earum maxime nobis adipisci aliquam cupiditate. Molestias aliquam qui cumque earum vero ex provident id!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lala",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil dolore veritatis minus delectus eaque nobis, aperiam voluptatibus impedit, facilis possimus enim quidem cupiditate perferendis assumenda maxime asperiores mollitia? Ut, molestiae. Labore deleniti illum fuga officiis laborum provident possimus, fugit quod ipsum nobis dolor vero, minus dolore expedita architecto blanditiis! Rem accusamus laudantium, harum distinctio quis voluptate consectetur placeat doloribus explicabo ullam corrupti autem nihil earum maxime nobis adipisci aliquam cupiditate. Molestias aliquam qui cumque earum vero ex provident id!"
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
