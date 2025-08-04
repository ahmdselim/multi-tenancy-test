<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $devopsTenant = Tenant::query()->where('id','devops')->get();
        $fullStackTenant = Tenant::query()->where('id','full-stack')->get();
        $flutterTenant = Tenant::query()->where('id','flutter')->get();

        $devopsTenant->runForEach(function (Tenant $tenant): void {
            $user = User::factory()->create([
                'name' => 'Saeed Mohamed',
                'email' => 'saeed@gmail.com',
            ]);
        });
        $fullStackTenant->runForEach(function (Tenant $tenant): void {
            $user = User::factory()->create([
                'name' => 'Ahmed Hassan',
                'email' => 'ahmed@gmail.com',
            ]);
        });
        $flutterTenant->runForEach(function (Tenant $tenant): void {
            $user = User::factory()->create([
                'name' => 'Ahmed Diab',
                'email' => 'diab@gmail.com',
            ]);
        });
    }
}
