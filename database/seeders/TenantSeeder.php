<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws \Throwable
     */
    public function run(): void
    {
        $list = [
            [
                'tenant_id' => 'devops',
                'tenant_name' => 'devops',
                'domain' => 'devops.formationconsultancy.com',
                'user_name' => 'Saeed Mohamed',
                'user_email' => 'saeed@gmail.com',
            ],
            [
                'tenant_id' => 'full-stack',
                'tenant_name' => 'full-stack',
                'domain' => 'full-stack.formationconsultancy.com',
                'user_name' => 'Ahmed Hassan',
                'user_email' => 'ahmed@gmail.com',
            ],
            [
                'tenant_id' => 'flutter',
                'tenant_name' => 'flutter',
                'domain' => 'flutter.formationconsultancy.com',
                'user_name' => 'Ahmed Diab',
                'user_email' => 'diab@gmail.com',
            ],
        ];

        foreach ($list as $item) {
            $tenant = Tenant::create([
                'id' => $item['tenant_id'],
                'name' => $item['tenant_name'],
            ]);

            $tenant->domains()->create([
                'domain' => $item['domain'],
            ]);

            User::factory()->create([
                'name' => $item['user_name'],
                'email' => $item['user_email'],
            ]);
        }




//        Tenant::all()->runForEach(function(Tenant $tenant) {
//            $user = User::factory()->create([
//                'name' => 'Ahmed Hassan',
//                'email' => 'ahmed@gmail.com',
//            ]);
//        });


    }
}
