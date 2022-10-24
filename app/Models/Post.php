<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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
        ]
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
