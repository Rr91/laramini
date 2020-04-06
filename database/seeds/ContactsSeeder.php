<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<3;$i++)
            DB::table('contacts')->insert([
                'name' => $i."-".str_random(10),
                'email_address' => $i."-".str_random(10).'@gmail.com',
                'description' => $i."-".str_random(10),
            ]);

    }
}
