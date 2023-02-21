<?php

namespace Database\Seeders;

use App\Models\BorrowExample;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BorrowExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BorrowExample::factory()->count(50)->create();
    }
}
