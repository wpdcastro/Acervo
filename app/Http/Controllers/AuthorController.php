<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public $author;

    public function __construct(Author $author)
    {
        $this->author = $author;
    }

    public function index()
    {
        $authors = $this->author->all();
        return view("authors.index", [ 'authors' => $authors]);
    }

    public function create()
    {
        return view("authors.create");
    }

    public function store(Request $request)
    {
        $info = new Author;
        $info->name = $request->name;
        $info->save();
        return redirect("authors");

    }


    public function edit($id)
    {
        $author = $this->author->find($id);
        return view("authors.edit", ['author' => $author]);
    }

    public function update(Request $request)
    {
        $author = $this->author::find($request->id);

        $author->name = $request->name;

        $author->save();

        return redirect("authors");
    }

    public function destroy($id)
    {
        $this->author->find($id)->delete();

        return redirect("authors");
    }

}
