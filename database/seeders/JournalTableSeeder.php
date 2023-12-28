<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Journal;
use Faker\Factory as Faker;

class JournalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<100;$i++) {
        Journal::create([
            'title'=>$faker->sentence(10,true),
            'editor'=>$faker->name(9,true),
            'ISSN' => '2049-3630',
            'publication_date'=>$faker->date('y-m-d'),
        ]);
        }
    }
}
