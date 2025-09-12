<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

   protected $fillable = [
    'title',
    'url',       // Make sure this is included
    'file',      // Make sure this is included
    'platform',
    'user_id',
    'uploaded_by',
];

}
