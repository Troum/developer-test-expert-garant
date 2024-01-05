<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CDocument;
use App\Models\CUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CUser::factory(10)
            ->hasAttached(
                CDocument::factory()->count(4)
            )
            ->create();
    }
}
