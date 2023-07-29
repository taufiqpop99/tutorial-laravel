<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Taufiq Pop",
        "email" => "taufiqpop999@gmail.com",
        "image" => "Pop.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Taufiq Pop",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil dolore veritatis minus delectus eaque nobis, aperiam voluptatibus impedit, facilis possimus enim quidem cupiditate perferendis assumenda maxime asperiores mollitia? Ut, molestiae. Labore deleniti illum fuga officiis laborum provident possimus, fugit quod ipsum nobis dolor vero, minus dolore expedita architecto blanditiis! Rem accusamus laudantium, harum distinctio quis voluptate consectetur placeat doloribus explicabo ullam corrupti autem nihil earum maxime nobis adipisci aliquam cupiditate. Molestias aliquam qui cumque earum vero ex provident id!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lala",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil dolore veritatis minus delectus eaque nobis, aperiam voluptatibus impedit, facilis possimus enim quidem cupiditate perferendis assumenda maxime asperiores mollitia? Ut, molestiae. Labore deleniti illum fuga officiis laborum provident possimus, fugit quod ipsum nobis dolor vero, minus dolore expedita architecto blanditiis! Rem accusamus laudantium, harum distinctio quis voluptate consectetur placeat doloribus explicabo ullam corrupti autem nihil earum maxime nobis adipisci aliquam cupiditate. Molestias aliquam qui cumque earum vero ex provident id!",
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Taufiq Pop",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil dolore veritatis minus delectus eaque nobis, aperiam voluptatibus impedit, facilis possimus enim quidem cupiditate perferendis assumenda maxime asperiores mollitia? Ut, molestiae. Labore deleniti illum fuga officiis laborum provident possimus, fugit quod ipsum nobis dolor vero, minus dolore expedita architecto blanditiis! Rem accusamus laudantium, harum distinctio quis voluptate consectetur placeat doloribus explicabo ullam corrupti autem nihil earum maxime nobis adipisci aliquam cupiditate. Molestias aliquam qui cumque earum vero ex provident id!",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lala",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic nihil dolore veritatis minus delectus eaque nobis, aperiam voluptatibus impedit, facilis possimus enim quidem cupiditate perferendis assumenda maxime asperiores mollitia? Ut, molestiae. Labore deleniti illum fuga officiis laborum provident possimus, fugit quod ipsum nobis dolor vero, minus dolore expedita architecto blanditiis! Rem accusamus laudantium, harum distinctio quis voluptate consectetur placeat doloribus explicabo ullam corrupti autem nihil earum maxime nobis adipisci aliquam cupiditate. Molestias aliquam qui cumque earum vero ex provident id!",
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,
    ]);
});
