<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'bookid'; // Đặt tên cột khóa chính

    protected $fillable = [
        'title', 'author', 'isbn', 'publishedyear', 'genre',
    ];
}
