<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publisher;

class PublisherController extends Controller
{
    public $publisher;

    public function __construct(Publisher $publisher)
    {
        $this->publisher = $publisher;
    }

    public function index()
    {
        $publishers = $this->publisher->all();
        return view("publishers.index", ['publishers' => $publishers]);
    }

    public function create()
    {
        return view("publishers.create");
    }

    public function store(Request $request)
    {
        $info = new Publisher;

        $info->name = $request->name;

        $info->save();

        return redirect("publishers");

    }

    public function edit($id)
    {
        $publisher = $this->publisher->find($id);

        return view("publishers.edit", ['publisher' => $publisher]);
    }

    public function update(Request $request)
    {
        $publisher = $this->publisher::find($request->id);

        $publisher->name = $request->name;

        $publisher->save();

        return redirect("publishers");
    }

    public function destroy($id)
    {
        $this->publisher->find($id)->delete();

        return redirect("publishers");
    }

}

