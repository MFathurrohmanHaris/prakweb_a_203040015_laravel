<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Fathurrohman Haris",
        "email" => "harisfathurrohman142@gmail.com",
        "image" => "haris.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Fathurrohman Haris",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum porro quae sit excepturi dolore cum aliquam expedita hic, perspiciatis obcaecati ipsa nam inventore adipisci ea eos sapiente, qui ad nostrum vel magni, esse tenetur? Similique eius laudantium quaerat porro voluptates blanditiis, aperiam odit, atque sapiente quibusdam culpa praesentium amet perspiciatis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Imam Ansori",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias facere ipsam aliquid distinctio, est earum laborum tempore officiis aspernatur error dolores! Sapiente nostrum architecto deserunt repellat earum excepturi culpa error enim possimus mollitia! A sapiente necessitatibus maxime perferendis accusantium velit repellat aliquid provident ullam, nobis nisi, ad consectetur. Itaque est officiis, nisi quos impedit quasi molestiae eligendi aliquid soluta, numquam ut modi nulla beatae aspernatur obcaecati, culpa asperiores. Nam eaque id repellendus quia beatae itaque nemo rem accusantium blanditiis molestiae iste, fuga dolores debitis neque esse cumque autem ab consectetur, accusamus dicta tempore maxime quis ratione dolorem? Quo, voluptates consequatur!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Fathurrohman Haris",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum porro quae sit excepturi dolore cum aliquam expedita hic, perspiciatis obcaecati ipsa nam inventore adipisci ea eos sapiente, qui ad nostrum vel magni, esse tenetur? Similique eius laudantium quaerat porro voluptates blanditiis, aperiam odit, atque sapiente quibusdam culpa praesentium amet perspiciatis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Imam Ansori",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias facere ipsam aliquid distinctio, est earum laborum tempore officiis aspernatur error dolores! Sapiente nostrum architecto deserunt repellat earum excepturi culpa error enim possimus mollitia! A sapiente necessitatibus maxime perferendis accusantium velit repellat aliquid provident ullam, nobis nisi, ad consectetur. Itaque est officiis, nisi quos impedit quasi molestiae eligendi aliquid soluta, numquam ut modi nulla beatae aspernatur obcaecati, culpa asperiores. Nam eaque id repellendus quia beatae itaque nemo rem accusantium blanditiis molestiae iste, fuga dolores debitis neque esse cumque autem ab consectetur, accusamus dicta tempore maxime quis ratione dolorem? Quo, voluptates consequatur!"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
