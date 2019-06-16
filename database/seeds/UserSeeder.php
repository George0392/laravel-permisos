<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */public function run()
    {

      // usuario con el rol super-admin
      $admin = User::create([
        'name'     => 'Admin',
        'email'    => '123@123.com',
        'password' => bcrypt('123456')
      ]);

      $admin->assignRole('Super-Admin');

        // usuario con el rol moderador
      $moderador = User::create([
        'name'     => 'Moderador',
        'email'    => '1234@123.com',
        'password' => bcrypt('123456')
      ]);

      $moderador->assignRole('Moderador');

        // usuario con el rol editor
      $editor = User::create([
        'name'     => 'Editor',
        'email'    => '12345@123.com',
        'password' => bcrypt('123456')
      ]);

      $editor->assignRole('Editor');

    }
  }


