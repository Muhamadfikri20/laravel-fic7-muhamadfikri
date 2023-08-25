<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   User::factory(20)->create();
   User::create(['name'=>'Muhamad Fikri','email'=>'fikri@gmail.com','email_verified_at'=>now(),'role'=>'admin', 'phone' => '6285640899224',
   'bio' => 'flutter dev','password'=>Hash::make('123') ,]);
   User::create(['name'=>'Super Admin','email'=>'super@gmail.com','email_verified_at'=>now(),'role'=>'superadmin', 'phone' => '6285640899224',
   'bio' => 'flutter dev','password'=>Hash::make('123') ,]);
    }
}
