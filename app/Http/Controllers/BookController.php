<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Publisher;
use App\Author;

class BookController extends Controller
{
    private $book;
    private $publisher;
    private $author;

    public function __construct(Book $book, Publisher $publisher, Author $author)
    {
        $this->book = $book;
        $this->publisher = $publisher;
        $this->author = $author;
    }

    public function index()
    {
        $books = $this->book->all();

        return view("books.index", ["books" => $books]);

    }

    public function create()
    {
        $publishers = $this->publisher->all();

        $authors = $this->author->all();

        return view("books.create",  ["publishers" => $publishers, "authors" => $authors]);
    }

    public function store(Request $request)
    {
        $book = $this->book;

        $book->title = $request->title;

        $book->publisher_id = $request->publisher_id;

        $book->author_id = $request->author_id;

        $book->save();

        return redirect("books");

    }

    public function edit($id)
    {
        $book = $this->book->find($id);

        $publishers = $this->publisher->all();

        $authors = $this->author->all();

        return view("books.edit", ["book" => $book, "publishers" => $publishers, "authors" => $authors]);
    }

    public function update(Request $request)
    {
        $book = $this->book->find($request->id);

        $book->title = $request->title;

        $book->publisher_id = $request->publisher_id;

        $book->author_id = $request->author_id;

        $book->save();

        return redirect("books");

    }

    public function destroy($id)
    {
        $this->book->find($id)->delete();

        return redirect("books");
    }

}
