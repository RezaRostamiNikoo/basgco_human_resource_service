<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index(Request $request)
    {
        return $this->success(Job::all());
    }
    public function detail(Request $request,Job $job)
    {
        return $this->success($job);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "title" => "required|string",
        ]);
        return $this->success(Job::create($data));
    }

    public function update(Request $request, Job $job)
    {
        $data = $this->validate($request, [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "national_id" => "required|string|size:10",
        ]);
        $job->update($data);
        return $this->success($job);
    }

    public function delete(Request $request, Job $job)
    {
        $job->delete();
        return $this->success($job);
    }


}
