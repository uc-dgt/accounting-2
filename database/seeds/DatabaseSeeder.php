<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(PermissionSeeder::class);

        Model::reguard();
    }
}