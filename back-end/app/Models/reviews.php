<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $table = 'tbl_reviews';
    protected $primaryKey = 'indexReview ';
}
