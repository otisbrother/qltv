<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;
    protected $primaryKey = 'borrowings'; // Đặt cột khóa chính

    public $incrementing = false; // Nếu khóa chính không phải là số tự tăng
    protected $fillable = [
        'bookid', 'memberid', 'borrowingsdate', 'duedate', 'returnedDate',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'bookid');
    }
}
