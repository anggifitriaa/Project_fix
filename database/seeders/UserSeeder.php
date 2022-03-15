<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator'
        ]);

        // $pengguna = Role::create([
        //     'name' => 'pengguna',
        //     'display_name' => 'User Biasa'
        // ]);

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();

        // $pengguna = new pengguna();
        // $pengguna->name = 'pengguna';
        // $pengguna->email = 'pengguna@gmail.com';
        // $pengguna->password = Hash::make('12345678');
        // $pengguna->save();

        $user->attachRole($admin);
        // $pengguna->attachRole($pengguna);

    
    }
}
