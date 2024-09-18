<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $fillable = ['title' , 'author' , 'description' , 'price' , 'year' , 'image'];

    public function getBooks(){
        $books = Book::get()->toArray();
        return $books;
    }
}