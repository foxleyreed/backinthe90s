<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@backinthe90s.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
            'is_revisor' => true,
            'is_writer' => true
        ]);

        for($i = 1; $i <= 15; $i++) {
            Article::create([
                'title' => 'Article #0-000' . $i,
                'subtitle' => 'This is the subtitle of the article',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'image' => 'public/images/img-' . rand(1, 7) . '.jpg',
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'slug' => 'article-0-000' . $i,
                'is_accepted' => rand(0, 1)
            ]);
        }
    }
}
