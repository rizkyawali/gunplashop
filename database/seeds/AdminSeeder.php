<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new \App\User;
        $admin->username = "administrator";
        $admin->name = "Administrator";
        $admin->email = "administrator@gunplashop.com";
        $admin->roles = json_encode(["ADMIN"]);
        $admin->password = \Hash::make("gunplashop");
        $admin->avatar = "not-found.jpg";
        $admin->phone = "081296375825";
        $admin->address = "Bandung";

        $admin->save();
        $this->command->info("Administrator Has Been Seeding Into Database");
    }
}
