<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $seedTopics = [
            [
                'id'=>1,
                'name' => 'general',
                'description' => 'General Query / Unknown Topic',
                'available' => true,
            ],
            [
                'id'=>100,
                'name' => 'website errors',
                'description' => 'Website errors',
                'available' => true,
            ],
            [
                'name' => 'website oopsie',
                'description' => 'Website errors',
                'available' => false,
            ],
            [
                'name' => 'feedback',
                'description' => 'Client feedback (positive and negative)',
                'available' => true,
            ],

        ];

        foreach($seedTopics as $seedTopic){
            if (! Topic::find($seedTopic['name'])) {
                Topic::create($seedTopic);
            }
        }

    }
}
