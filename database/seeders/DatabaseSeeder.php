<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
            
        $user = User::first();
        
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $animals = Category::create([
            'name' => 'Animals',
            'slug' => 'animals'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $animals->id,
            'title' => 'My animals',
            'slug' => 'my-animals',
            'excerpt' => 'My animals are crazy. They love make poo',
            'body' => "

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt quam id nisi suscipit vulputate. Ut et nunc justo. Vivamus pulvinar nisl lacus, ac accumsan nibh blandit at. Nullam in tincidunt mi, sit amet commodo mauris. Nunc volutpat dapibus erat. Aliquam vehicula euismod nisl, sit amet accumsan nibh sagittis at. Aenean iaculis quis neque id consequat. Donec sed dolor sodales, viverra sapien at, dictum nulla. Vestibulum nunc eros, commodo at tristique sollicitudin, dapibus ac velit. Sed id risus facilisis, semper nisi sit amet, tincidunt lectus. Nulla mattis eu augue ut consequat. Vestibulum placerat a metus sed commodo. Aliquam congue accumsan efficitur. Morbi ac rhoncus ex.
            
            Nullam finibus ex nec turpis semper tincidunt. Proin lacinia metus posuere mauris aliquam, at viverra libero consectetur. Morbi hendrerit vestibulum euismod. Integer ultrices congue nisi quis laoreet. Etiam et lectus vitae arcu tempus malesuada ac ut tortor. Aenean sit amet tortor ac erat ullamcorper rhoncus eget in nibh. Etiam ac convallis sapien. Donec ullamcorper condimentum libero ac ultrices. Nulla pulvinar sagittis commodo. Duis laoreet euismod nibh, nec semper odio suscipit a. Fusce ac est lacus.
            
            Sed a tristique neque. Curabitur pellentesque, dolor nec rhoncus finibus, mauris justo interdum libero, nec elementum purus lorem vitae eros. Vivamus pretium magna ac velit aliquam tristique. Sed blandit feugiat venenatis. Pellentesque non orci id quam vulputate pretium. Cras condimentum imperdiet metus vel mollis. Morbi vitae lectus dolor.
            
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque pellentesque pharetra efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius congue lacus nec accumsan. Cras fermentum a lorem eu viverra. Mauris eu ante in magna volutpat venenatis. Quisque ultrices justo est, id maximus magna vulputate maximus. Morbi eu massa ut est eleifend bibendum.
            
            Sed consequat gravida quam, eu mattis augue. Etiam pellentesque tempor massa, ac cursus enim. Nam nibh mauris, fermentum vitae diam eu, rhoncus dignissim lacus. Fusce id dui commodo, placerat orci quis, pulvinar erat. Vivamus at mi posuere, mattis neque sed, malesuada ante. Donec in molestie ipsum. Sed rutrum accumsan mauris vel venenatis. Etiam sagittis dignissim neque. Duis pulvinar feugiat turpis, id mattis est sagittis at. Donec eu congue neque. Praesent augue velit, volutpat et ex quis, tempor aliquet nibh. Mauris pharetra tortor vitae orci tristique viverra eu id nulla. Morbi pulvinar tempus hendrerit. Phasellus dictum enim ut dignissim laoreet. Fusce quis urna a tellus hendrerit pulvinar. "
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My worker',
            'slug' => 'my-worker',
            'excerpt' => 'My worker are crazy. They love make poo',
            'body' => "

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt quam id nisi suscipit vulputate. Ut et nunc justo. Vivamus pulvinar nisl lacus, ac accumsan nibh blandit at. Nullam in tincidunt mi, sit amet commodo mauris. Nunc volutpat dapibus erat. Aliquam vehicula euismod nisl, sit amet accumsan nibh sagittis at. Aenean iaculis quis neque id consequat. Donec sed dolor sodales, viverra sapien at, dictum nulla. Vestibulum nunc eros, commodo at tristique sollicitudin, dapibus ac velit. Sed id risus facilisis, semper nisi sit amet, tincidunt lectus. Nulla mattis eu augue ut consequat. Vestibulum placerat a metus sed commodo. Aliquam congue accumsan efficitur. Morbi ac rhoncus ex.
            
            Nullam finibus ex nec turpis semper tincidunt. Proin lacinia metus posuere mauris aliquam, at viverra libero consectetur. Morbi hendrerit vestibulum euismod. Integer ultrices congue nisi quis laoreet. Etiam et lectus vitae arcu tempus malesuada ac ut tortor. Aenean sit amet tortor ac erat ullamcorper rhoncus eget in nibh. Etiam ac convallis sapien. Donec ullamcorper condimentum libero ac ultrices. Nulla pulvinar sagittis commodo. Duis laoreet euismod nibh, nec semper odio suscipit a. Fusce ac est lacus.
            
            Sed a tristique neque. Curabitur pellentesque, dolor nec rhoncus finibus, mauris justo interdum libero, nec elementum purus lorem vitae eros. Vivamus pretium magna ac velit aliquam tristique. Sed blandit feugiat venenatis. Pellentesque non orci id quam vulputate pretium. Cras condimentum imperdiet metus vel mollis. Morbi vitae lectus dolor.
            
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque pellentesque pharetra efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius congue lacus nec accumsan. Cras fermentum a lorem eu viverra. Mauris eu ante in magna volutpat venenatis. Quisque ultrices justo est, id maximus magna vulputate maximus. Morbi eu massa ut est eleifend bibendum.
            
            Sed consequat gravida quam, eu mattis augue. Etiam pellentesque tempor massa, ac cursus enim. Nam nibh mauris, fermentum vitae diam eu, rhoncus dignissim lacus. Fusce id dui commodo, placerat orci quis, pulvinar erat. Vivamus at mi posuere, mattis neque sed, malesuada ante. Donec in molestie ipsum. Sed rutrum accumsan mauris vel venenatis. Etiam sagittis dignissim neque. Duis pulvinar feugiat turpis, id mattis est sagittis at. Donec eu congue neque. Praesent augue velit, volutpat et ex quis, tempor aliquet nibh. Mauris pharetra tortor vitae orci tristique viverra eu id nulla. Morbi pulvinar tempus hendrerit. Phasellus dictum enim ut dignissim laoreet. Fusce quis urna a tellus hendrerit pulvinar. "
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My family',
            'slug' => 'my-family',
            'excerpt' => 'My family are crazy. They love make poo',
            'body' => "

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt quam id nisi suscipit vulputate. Ut et nunc justo. Vivamus pulvinar nisl lacus, ac accumsan nibh blandit at. Nullam in tincidunt mi, sit amet commodo mauris. Nunc volutpat dapibus erat. Aliquam vehicula euismod nisl, sit amet accumsan nibh sagittis at. Aenean iaculis quis neque id consequat. Donec sed dolor sodales, viverra sapien at, dictum nulla. Vestibulum nunc eros, commodo at tristique sollicitudin, dapibus ac velit. Sed id risus facilisis, semper nisi sit amet, tincidunt lectus. Nulla mattis eu augue ut consequat. Vestibulum placerat a metus sed commodo. Aliquam congue accumsan efficitur. Morbi ac rhoncus ex.
            
            Nullam finibus ex nec turpis semper tincidunt. Proin lacinia metus posuere mauris aliquam, at viverra libero consectetur. Morbi hendrerit vestibulum euismod. Integer ultrices congue nisi quis laoreet. Etiam et lectus vitae arcu tempus malesuada ac ut tortor. Aenean sit amet tortor ac erat ullamcorper rhoncus eget in nibh. Etiam ac convallis sapien. Donec ullamcorper condimentum libero ac ultrices. Nulla pulvinar sagittis commodo. Duis laoreet euismod nibh, nec semper odio suscipit a. Fusce ac est lacus.
            
            Sed a tristique neque. Curabitur pellentesque, dolor nec rhoncus finibus, mauris justo interdum libero, nec elementum purus lorem vitae eros. Vivamus pretium magna ac velit aliquam tristique. Sed blandit feugiat venenatis. Pellentesque non orci id quam vulputate pretium. Cras condimentum imperdiet metus vel mollis. Morbi vitae lectus dolor.
            
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque pellentesque pharetra efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer varius congue lacus nec accumsan. Cras fermentum a lorem eu viverra. Mauris eu ante in magna volutpat venenatis. Quisque ultrices justo est, id maximus magna vulputate maximus. Morbi eu massa ut est eleifend bibendum.
            
            Sed consequat gravida quam, eu mattis augue. Etiam pellentesque tempor massa, ac cursus enim. Nam nibh mauris, fermentum vitae diam eu, rhoncus dignissim lacus. Fusce id dui commodo, placerat orci quis, pulvinar erat. Vivamus at mi posuere, mattis neque sed, malesuada ante. Donec in molestie ipsum. Sed rutrum accumsan mauris vel venenatis. Etiam sagittis dignissim neque. Duis pulvinar feugiat turpis, id mattis est sagittis at. Donec eu congue neque. Praesent augue velit, volutpat et ex quis, tempor aliquet nibh. Mauris pharetra tortor vitae orci tristique viverra eu id nulla. Morbi pulvinar tempus hendrerit. Phasellus dictum enim ut dignissim laoreet. Fusce quis urna a tellus hendrerit pulvinar. "
        ]);

        // $this->call([
        //     UserSeeder::class
        // ]);
    }


}
