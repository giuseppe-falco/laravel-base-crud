@extends("layouts.main")

@section('title')
Aggiungi un nuovo libro
@endsection

@section('mainContent')

    <form action="{{route('books.store')}}" method="POST">
        @csrf
        @method('POST') 

        <div>
            <label for="name">Titolo</label>
            <input type="text" name="title" placeholder="title">
        </div>
        <div>
            <label for="author">Autore</label>
            <input type="text" name="author" placeholder="author">
        </div>
        <div>
            <label for="edition">Edizione</label>
            <input type="text" name="edition" placeholder="edition">
        </div>
        <div>
            <label for="genre">Genere</label>
            <input type="text" name="genre" placeholder="genre">
        </div>
        <div>
            <label for="image">Link immagine</label>
            <input type="text" name="image" placeholder="image">
        </div>
        <div>
            <label for="year">Anno</label>
            <input type="date" name="year" placeholder="year">
        </div>
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" placeholder="isbn">
        </div>
        <div>
            <label for="pages">Pagine</label>
            <input type="number" name="pages" placeholder="pages">
        </div>

        <input type="submit" value="Salva">

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </form>

@endsection
