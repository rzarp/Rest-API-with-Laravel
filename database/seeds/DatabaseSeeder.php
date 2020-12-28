<?php

use Illuminate\Database\Seeder;
use App\BarangModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        BarangModel::truncate();
        factory(App\BarangModel::class, 10)->create();
        
    }
}
