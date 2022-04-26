<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $fillable = ["first_name", "last_name", "national_id"];

    public function jobs()
    {

    }
}
