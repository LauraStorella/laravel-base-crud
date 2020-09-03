<h1>Elenco Film</h1>

<ul>
  @foreach ($movies as $movie)
<li>Titolo: {{ $movie->title }} <a href="{{ route('movies.show', $movie->id ) }}">Dettagli</a> </li>
  @endforeach
</ul>