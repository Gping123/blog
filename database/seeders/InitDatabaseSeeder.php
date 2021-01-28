<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\AdminTablesSeeder;
use Illuminate\Support\Facades\Artisan;

class InitDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userModel = config('admin.database.users_model');

        if ($userModel::count() == 0) {
            Artisan::call('db:seed', ['--class' => AdminTablesSeeder::class]);
        }

    }
}
