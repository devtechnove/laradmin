<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         $this->call(\Modules\Roles\Database\Seeders\RolesDatabaseSeeder::class);

        $user = new  \App\Models\User();
        $user->name= 'Tecnologia Bandes';
        $user->username= 'tbandes';
        $user->email= 'tbandes@bandes.gob.ve';
        $user->password=\Hash::make('123456');
        $user->status= 1;
        $user->role_id= 1;
        $user->save();

        $user->assignRole('Tecnologia');
    }
}
