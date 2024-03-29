<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_book';

    protected $fillable = [
        'book_name',
        'book_description',
        'book_author',
        'book_publisher',
        'book_price',
        'book_stock',
        'book_pages'
    ];
}
