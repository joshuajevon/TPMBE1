<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getCreatePage() {
        return view('create');
    }

    public function createBook(Request $request){
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getCreatePage'));
    }

    public function getBooks(){
        $books = Book::all();
        return view('view', ['books' => $books]);
    }
}
