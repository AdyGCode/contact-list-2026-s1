<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

final class ContactSeeder extends Seeder
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
