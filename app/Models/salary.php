<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    use HasFactory;
    public $table="salaries";

    protected $fillable =['firstname','currentsalary','performance','rating','cr','crgrouping'];
}