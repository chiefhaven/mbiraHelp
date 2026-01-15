<?php

namespace Modules\mbiraHelpupdate\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class mbiraHelpupdateDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        $this->call([

            PermissionTableSeeder::class,
            SettingtableTableSeeder::class,
            Setting1TableSeeder::class,
            EmailTemplateSeederTableSeeder::class,
        ]);
    }
}
