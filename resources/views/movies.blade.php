<h1>Elenco Film</h1>

<ul>
  @foreach ($movies as $movie)
  <li>Titolo: {{ $movie->title }}</li>
  @endforeach
</ul>