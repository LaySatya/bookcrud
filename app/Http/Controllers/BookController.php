<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $bookModel = new Book;
        $books = $bookModel->getBooks();
        return view('index' , compact('books'));
    }
    public function show($id){
        $books = Book::find($id);
        return view('show' , compact('books'));
    }
    public function store(){
        return view('add');
    }
    public function addBooks(Request $request){
    
            // Check if any required field is missing
            if (!$request->filled(['title', 'author', 'description', 'price', 'year'])) {
                return redirect()->back()->withInput()->withErrors('All fields are required.');
            }
            
            // If all checks pass, proceed with saving the book
            $newBook = new Book();
            $newBook->title = $request->title;
            $newBook->author = $request->author;
            $newBook->description = $request->description;
            $newBook->price = $request->price;
            $newBook->year = $request->year;
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image->extension();  
    
            $request->image->move(public_path('images'), $imageName);    
            $newBook->image = $imageName;
            $newBook->save();
            return redirect('/')->with('success', 'Book has been added successfully.');
    }
    public function delete($id){
        $book = Book::find($id);
        if(!$book) {
            return redirect('/')->with('error', 'Book not found');
        }
        $book->delete();
    
        return redirect('/')->with('success', 'Book deleted successfully');
    }
    public function prepareUpdate($id){
        $book = Book::find($id);
        if(!$book){
            return redirect('./')->with('error' , 'No books found!.');
        }
        return view('update' , compact('book'));
    }
    public function update(Request $request , $id){
        $book = Book::find($id);
        if(!$book){
            return redirect('/')->with('error' , 'No books found!.');
        }
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        $book->year = $request->input('year');
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('images'), $imageName);    
        $book->image = $imageName;
        $book->save();
        return redirect('/')->with('success', 'Book has been updated successfully.');
    }


    // view child layout

    public function homepage(){
        return view('homepage');
    }
}
