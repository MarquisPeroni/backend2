<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Marco',
            'email' => 'marco_p2009@live.it',
            'password' => Hash::make('ciaociao'), 
            'is_admin' => true,
        ]);
    }
}

