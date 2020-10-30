<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate(
            [
                "title" => "required|max:30",
                "author"=> "required|max:30",
                "edition" => "required|max:30",
                "isbn" => "required|unique:books|size:13",
                "year" => "required|date|",
                "genre" => "required|max:30",
                "pages" => "required|integer",
            ]
        );

        $book = new Book;
        
        $book->title = $data["title"];
        $book->author = $data["author"];
        $book->edition = $data["edition"];
        $book->isbn = $data["isbn"];
        $book->year = $data["year"];
        $book->genre = $data["genre"];
        $book->pages = $data["pages"];
        $book->image = $data["image"];

        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $book = Book::find($id);

        $request->validate(
            [
                "title" => "required|max:30",
                "author"=> "required|max:30",
                "edition" => "required|max:30",
                "isbn" => "required|unique:books|size:13",
                "year" => "required|date|",
                "genre" => "required|max:30",
                "pages" => "required|integer",
            ]
        );

        $book->title = $data["title"];
        $book->author = $data["author"];
        $book->edition = $data["edition"];
        $book->isbn = $data["isbn"];
        $book->year = $data["year"];
        $book->genre = $data["genre"];
        $book->pages = $data["pages"];
        $book->image = $data["image"];

        $book->update();

        return redirect()->route('books.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        $book->delete();

        return redirect()->route('books.index');
    }
}
