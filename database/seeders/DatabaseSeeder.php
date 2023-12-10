<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('users')->insert([
        //     'f_name' => 'Mohammed',
        //     'l_name' => 'IESA',
        //     'user_name' => 'IESA',
        //     'email' => 'iesa@exapmle.com',
        //     'contact' => '1234543656',
        //     'password' =>Hash::make('12345') ,
        //     'admin' => 1
        // ]);
  
  
        // Insert a user
        $userId = DB::table('users')->insertGetId([
            'f_name' => 'Mohammed',
            'l_name' => 'IESA',
            'user_name' => 'IESA',
            'email' => 'iesa@example.com',
            'contact' => '1234543656',
            'password' => Hash::make('12345'),
            'admin' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert posts for the user
        DB::table('posts')->insert([
            [
                'post_title' => 'Post Title 1',
                'postdesc' => 'Post Description 1',
                'category' => 'Category 1',
                'image' => 'blog_1.jpg',
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_title' => 'Post Title 2',
                'postdesc' => 'Post Description 2',
                'category' => 'Category 2',
                'image' => 'blog_1.jpg',
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more posts as needed
        ]);
    }
}

 
    

