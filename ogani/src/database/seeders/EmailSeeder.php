<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Email;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Email::factory()->count(30)->create();
    }
}
