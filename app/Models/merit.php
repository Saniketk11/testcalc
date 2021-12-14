<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merit extends Model
{
    use HasFactory;
    public $table="merits";
    protected $fillable =['Performance_Rating','CR_Grouping','Inc_Percentage'];
    
}
