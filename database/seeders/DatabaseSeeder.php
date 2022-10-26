<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Muhammad Fathurrohman Haris',
        //     'email' => 'haris@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Muhammad Imam Ansori',
        //     'email' => 'imamansori@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' =>  'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum. Omnis vero pariatur nostrum eaque rem, eveniet error labore dolorum? Quae vitae non, dolorem numquam ipsa alias odit consequuntur incidunt ipsum, fuga quo deserunt, nam error! Eligendi magnam non expedita tempora qui labore aut? Architecto minus, maiores enim porro ullam accusantium sed. Ipsam consequuntur quis ab architecto. Sequi ea possimus impedit similique veritatis provident fugit, doloribus esse, dolorem, perferendis vero soluta nostrum enim quas veniam voluptates quod fugiat numquam pariatur omnis assumenda nihil? Placeat ex, officiis impedit quod fugit excepturi quibusdam voluptates laboriosam tenetur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum.porro ullam accusantium sed. Ipsam consequuntur quis ab architecto. Sequi ea possimus impedit similique veritatis provident fugit, doloribus esse, dolorem, perferendis vero soluta nostrum enim quas veniam voluptates quod fugiat numquam pariatur omnis assumenda</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' =>  'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum. Omnis vero pariatur nostrum eaque rem, eveniet error labore dolorum? Quae vitae non, dolorem numquam ipsa alias odit consequuntur incidunt ipsum, fuga quo deserunt, nam error! Eligendi magnam non expedita tempora qui labore aut? Architecto minus, maiores enim porro ullam accusantium sed. Ipsam consequuntur quis ab architecto. Sequi ea possimus impedit similique veritatis provident fugit, doloribus esse, dolorem, perferendis vero soluta nostrum enim quas veniam voluptates quod fugiat numquam pariatur omnis assumenda nihil? Placeat ex, officiis impedit quod fugit excepturi quibusdam voluptates laboriosam tenetur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum.porro ullam accusantium sed. Ipsam consequuntur quis ab architecto. Sequi ea possimus impedit similique veritatis provident fugit, doloribus esse, dolorem, perferendis vero soluta nostrum enim quas veniam voluptates quod fugiat numquam pariatur omnis assumenda</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' =>  'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum. Omnis vero pariatur nostrum eaque rem, eveniet error labore dolorum? Quae vitae non, dolorem numquam ipsa alias odit consequuntur incidunt ipsum, fuga quo deserunt, nam error! Eligendi magnam non expedita tempora qui labore aut? Architecto minus, maiores enim porro ullam accusantium sed. Ipsam consequuntur quis ab architecto. Sequi ea possimus impedit similique veritatis provident fugit, doloribus esse, dolorem, perferendis vero soluta nostrum enim quas veniam voluptates quod fugiat numquam pariatur omnis assumenda nihil? Placeat ex, officiis impedit quod fugit excepturi quibusdam voluptates laboriosam tenetur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum.porro ullam accusantium sed. Ipsam consequuntur quis ab architecto. Sequi ea possimus impedit similique veritatis provident fugit, doloribus esse, dolorem, perferendis vero soluta nostrum enim quas veniam voluptates quod fugiat numquam pariatur omnis assumenda</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' =>  'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum. Omnis vero pariatur nostrum eaque rem, eveniet error labore dolorum? Quae vitae non, dolorem numquam ipsa alias odit consequuntur incidunt ipsum, fuga quo deserunt, nam error! Eligendi magnam non expedita tempora qui labore aut? Architecto minus, maiores enim porro ullam accusantium sed. Ipsam consequuntur quis ab architecto. Sequi ea possimus impedit similique veritatis provident fugit, doloribus esse, dolorem, perferendis vero soluta nostrum enim quas veniam voluptates quod fugiat numquam pariatur omnis assumenda nihil? Placeat ex, officiis impedit quod fugit excepturi quibusdam voluptates laboriosam tenetur.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias esse delectus incidunt dicta labore tempora cum.porro ullam accusantium sed. Ipsam consequuntur quis ab architecto. Sequi ea possimus impedit similique veritatis provident fugit, doloribus esse, dolorem, perferendis vero soluta nostrum enim quas veniam voluptates quod fugiat numquam pariatur omnis assumenda</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
