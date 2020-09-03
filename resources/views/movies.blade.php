<h1>Elenco Film</h1>

<ul>
  @foreach ($movies as $movie)
  <li>Titolo: {{ $movie->title }} 
    <a href="{{ route('movies.show', $movie->id ) }}">Show details</a>
    <a href="{{ route('movies.edit', $movie->id ) }}">Edit</a>  

    <form action="{{ route('movies.destroy', $movie->id ) }}" method="post">
      @csrf
      @method('DELETE')
      <input type="submit" value="Delete">
    </form>
  </li>
  @endforeach
</ul>

<a href="{{ route('movies.create', $movie->id ) }}">Create</a>