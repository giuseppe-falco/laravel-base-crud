@extends("layouts.main")

@section('title')
Indice Libri    
@endsection

@section('mainContent')

    <style>
        .container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .book{
            border:1px solid #000;
            width: max-content;
            padding: 50px;
            margin: 100px;
            text-align: center
        }

    </style>

    <div class="container">

        @foreach ($books as $book)
            <div class="book">
                <div>
                    <a href="{{route("books.show", $book->id)}}">Visualizza</a>
                    <a href="{{route("books.edit", $book->id)}}">Modifica</a>
                </div>
                
                <h1>Title: {{$book->title}}</h1>
                <h3>Author: {{$book->author}}</h3>
                <small>Edition: {{$book->edition}}</small>

                <form action="{{route("books.destroy", $book->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    
                    <input type="submit" value="Elimina">
                </form>
            </div>
        @endforeach

    </div>

@endsection

