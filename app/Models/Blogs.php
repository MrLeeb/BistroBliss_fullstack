<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Blogs extends Model
{
    use HasFactory;
            protected $fillable =[
              'date',
              'title',
              'imagetop',
              'imagebottom',
              'content',];
}