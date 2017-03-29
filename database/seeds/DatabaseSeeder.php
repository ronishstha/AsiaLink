<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(JobsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
    }
}
