<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)
                ->create()
                ->each(function(User $user){
                    collect(range(1,3))->each(function() use ($user){
                        $user->posts()->save(factory(Post::class)->make());
                    });
                });
    }
}
