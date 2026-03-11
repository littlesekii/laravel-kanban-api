<?php

namespace Database\Seeders;

use App\Models\Field;
use Illuminate\Database\Seeder;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Field::create([
            'title' => 'Not started',
            'order' => 1
        ]);

        Field::create([
            'title' => 'In progress',
            'order' => 2
        ]);

        Field::create([
            'title' => 'Done',
            'order' => 3
        ]);
    }
}
