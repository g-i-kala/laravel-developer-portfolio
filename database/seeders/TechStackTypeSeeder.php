<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechStackTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Frontend', 'Backend', 'Fullstack', 'DevOps', 'Database', 'Testing'];

        foreach ($types as $type) {
            \App\Models\TechStackType::firstOrCreate([
                'name' => $type,
            ]);
        }
    }
}
