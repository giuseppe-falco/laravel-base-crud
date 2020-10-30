@extends("layouts.main")

@section('title')
    {{$book->title}}
@endsection

@section('mainContent')

<form action="{{route("books.update", $book->id)}}" method="POST">
    @csrf
    @method("PUT")


    <div>
      <img src="{{$book->image}}" alt="">
    </div>
    <div>
      <label for="title">Titolo</label>
      <input type="text" name="title" id="title" value="{{$book->title}}" maxlength="30" required>
    </div>
    
    <div>
      <label for="author">Autore</label>
      <input type="text" name="author" id="author" value="{{$book->author}}" maxlength="30" required>
    </div>

    <div>
      <label for="edition">Edizione</label>
      <input type="text" name="edition" id="edition" value="{{$book->edition}}" maxlength="30" required>
    </div>

    <div>
      <label for="isbn">Codice ISBN</label>
      <input type="text" name="isbn" id="isbn" value="{{$book->isbn}}" size="13" required>
    </div>

    <div>
      <label for="year">Data di Pubblicazione</label>
      <input type="date" name="year" id="year" value="{{$book->year}}" required>
    </div>

    <div>
      <label for="genre">Genere</label>
      <input type="text" name="genre" id="genre" value="{{$book->genre}}" maxlength="30" required>
    </div>

    <div>
      <label for="pages">N° pagine</label>
      <input type="number" name="pages" id="pages" value="{{$book->pages}}" required>
    </div>

    <div>
      <label for="image">Link immagine copertina</label>
      <input type="text" name="image" id="image" value="{{$book->image}}" >
    </div>

    <input type="submit" value="Salva">

</form>

<form action="{{route("books.destroy", $book->id)}}" method="POST">
    @csrf
    @method("DELETE")
    
    <input type="submit" value="Elimina">
</form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@endsection