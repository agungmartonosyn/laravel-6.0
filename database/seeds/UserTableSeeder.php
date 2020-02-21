<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $add = new User();
        $add->name = 'Admin';
        $add->email = 'admin@admin.com';
        $add->password = bcrypt('password');
        $add->email_verified_at = Carbon::now();
        $add->remember_token = Str::random(10);
        $add->save();
    }
}
