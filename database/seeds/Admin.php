<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = 'Admin';
        $user->username = 'admin';
        $user->email = 'persolna1243@gmail.com';
        $user->lavel = 'admin';
        $user->password = \Hash::make('admin1');
        $user->save();
        $this->command->info('User Admin berhasil diinsert');
    }
}
