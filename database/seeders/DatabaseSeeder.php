<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ditotisi',
            'username' => 'ditotisi',
            'email' => 'test@example.com',
            'password' => Hash::make('ditoganteng')
        ]);

        $this->call([ItemsSeeder::class, StocksSeeder::class, TransactionsSeeder::class, IncomingItemsSeeder::class, ExitItemsSeeder::class]);
    }
}
