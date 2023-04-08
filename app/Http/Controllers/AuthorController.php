<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;
use PharIo\Manifest\Author;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors',[
            'title' => 'authors',
            'authors' => Authors::all()
        ]);
    }
    
    public function show(Authors $authors)
    {
        return view('author',[
            'title' => 'single authors',
            'author' => $authors
        ]);
    }
}