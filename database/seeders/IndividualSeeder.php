<?php

namespace Database\Seeders;

use Database\Factories\IndividualFactory;
use Illuminate\Database\Seeder;

class IndividualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IndividualFactory::new()->count(20)->create();
    }
}
