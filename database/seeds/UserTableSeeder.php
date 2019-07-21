<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
        factory(App\User::class, 5)->create()->each(function ($user) {


            $rand = 3;
            for ($i = 1; $i <= $rand; $i++) {
                $user->children()->create( factory(App\User::class,2)->create() );
            }


        });
        */

        $node = factory(App\User::class, 4) // Create the root comments.
            ->create()
            ->each(function ($user1){ // Add children to every root.
                $node2 = factory(App\User::class,3)
                    ->create()
                    ->each(function ($user2) use ($user1){
                        $user1->appendNode($user2);
                        $node3 = factory(App\User::class,2)
                            ->create()
                            ->each(function ($user3) use ($user2){
                                $user2->appendNode($user3);
                            });
                    });
            });

    }
}
