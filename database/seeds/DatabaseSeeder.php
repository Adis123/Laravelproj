<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\MyController;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seed = new MyController();
        $seed->get();
        // $this->call(UsersTableSeeder::class);
    }
}
