<?php

namespace Database\Seeders;

use App\Models\Job;
use Database\Factories\IndividualFactory;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{

    public function run()
    {
        Job::create(["title" => "شغل 1"]);
        Job::create(["title" => "شغل 2"]);
        Job::create(["title" => "شغل 3"]);
        Job::create(["title" => "شغل 4"]);
        Job::create(["title" => "شغل 5"]);
        Job::create(["title" => "شغل 6"]);
        Job::create(["title" => "شغل 7"]);
        Job::create(["title" => "شغل 8"]);
        Job::create(["title" => "شغل 9"]);
    }
}
