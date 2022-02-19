<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(
            [
                // [
                //     'question' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur quia ipsa est error nihil beatae, recusandae quibusdam voluptatem necessitatibus dolores quae rerum quidem neque odit sed, optio nulla saepe laudantium.',
                // ],
                // [

                //     'question' => 'Culpa ut consectetur consectetur Lorem dolore proident. Mollit tempor ipsum et sunt incididunt. Culpa cupidatat labore cillum commodo et in cillum mollit elit. Non est do ut sit in. Proident esse aliqua excepteur occaecat ipsum proident sunt. Elit fugiat esse proident anim magna sint.',
                // ],

            ]
        );
    }
}
