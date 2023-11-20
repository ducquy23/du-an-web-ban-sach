<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $authors =  Author::withCount('books')->get();
        $authorsWithBooks = Author::with('books')->get();
        return view('client.authors',compact('authors','authorsWithBooks'));
    }
    public function authorDetail(Request $request,$id) {
        $author = Author::with('books')->find($id);
        return view('client.authordetail',compact('author'));
    }
}
