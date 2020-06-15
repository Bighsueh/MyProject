<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     *@return void
     */
    public function run()
    {
        DB::table('user')->delete();

        User::create([
            'id' => '1234',
            'password' => '1234567',
        ]);
        $this->call('DatabaseSeeder');
    }
}
