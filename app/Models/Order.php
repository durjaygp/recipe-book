<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Book;


class Order extends Model
{
    use HasFactory;

    public function books(){
        return $this->belongsTo(Book::class,'book_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


}
