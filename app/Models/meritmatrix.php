<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meritmatrix extends Model
{
    use HasFactory;
    public $table="meritmatrices";

    protected $fillable=['rating','grouping','persentage'];
}
