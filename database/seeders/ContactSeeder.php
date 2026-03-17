<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedContacts = [
            [
                'title' => '',
                'given_name' => '',
                'family_name' => '',
                'nick_name' => '',
                'email' => '',
                'user_id' => 000,
            ],
        ];

    }
}
