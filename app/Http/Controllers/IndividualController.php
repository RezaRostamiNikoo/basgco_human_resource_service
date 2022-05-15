<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    public function index(Request $request)
    {
        return $this->success(Individual::all());
    }

    public function detail(Request $request, Individual $individual)
    {
        return $this->success($individual);
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "national_id" => "required|string|size:10",
        ]);
        return $this->success(Individual::create($data));
    }

    public function update(Request $request, Individual $individual)
    {
        $data = $this->validate($request, [
            "first_name" => "required|string",
            "last_name" => "required|string",
            "national_id" => "required|string|size:10",
        ]);
        $individual->update($data);
        return $this->success($individual);
    }

    public function delete(Request $request, Individual $individual)
    {
        $individual->delete();
        return $this->success($individual);
    }
}
