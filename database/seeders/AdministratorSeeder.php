<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert(
            [
                [
                    'name' => '管理者',
                    'email' => 'admin@example.com',
                    'password' => '$2y$10$ixvmARWGP95fhJZJqA63kORVHmSBgUZNJRkX3pGVLchhE3N1Q9/2O' // ハッシュ化する前は password
                ]
            ]
            );
    }
}
