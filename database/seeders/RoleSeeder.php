<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()
        ->count(15)
        ->sequence(fn (Sequence $sequence) 
            => $sequence->index < 9 ? ['role' => 'admin'] : ['role' => 'editor'], ['role' => 'viewer'])
        ->create();
    }
}
