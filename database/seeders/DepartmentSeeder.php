<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
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
            $department = Department::query()->create([
                'name' => 'DevOps',
            ]);
        });
        $fullStackTenant->runForEach(function (Tenant $tenant): void {
            $department = Department::query()->create([
                'name' => 'Full Stack',
            ]);
        });
        $flutterTenant->runForEach(function (Tenant $tenant): void {
            $department = Department::query()->create([
                'name' => 'Flutter',
            ]);
        });
    }
}
