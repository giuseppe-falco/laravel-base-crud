@extends("layouts.main")

@section('title')
    {{$book->title}}
@endsection

@section('mainContent')

    <div class="container">
        <li class="book-list-item">
            <img src="{{$book->image}}" alt="">
            
            <div>
                <a href="{{route("books.edit", $book->id)}}">Modifica</a>
            </div>

            <ul>
                <li><span>Titolo:</span> {{$book->title}}</li>
                <li><span>Autore:</span> {{$book->author}}</li>
                <li><span>Edizione:</span> {{$book->edition}}</li>
                <li><span>Codice ISBN:</span> {{$book->isbn}}</li>
                <li><span>Data Pubblicazione:</span> {{$book->year}}</li>
                <li><span>Genere:</span> {{$book->genre}}</li>
                <li><span>N° Pagine:</span> {{$book->pages}}</li>
            </ul>

            <form action="{{route("books.destroy", $book->id)}}" method="POST">
                
                @csrf

                @method("DELETE")
            
                <input type="submit" value="Elimina">
            </form>
        </li>
    </div>


@endsection