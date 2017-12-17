<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Listing;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Listing::truncate();

        $userQuantity=5;
        $listingQnt=100;

        factory(App\User::class,$userQuantity)->create();
        factory(App\Listing::class,$listingQnt)->create();
    }
}
