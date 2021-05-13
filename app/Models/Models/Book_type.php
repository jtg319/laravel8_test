<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_type extends Model
{
    
    protected $table = 'book_type';
    public $timestamps = false;

    use HasFactory;
}
