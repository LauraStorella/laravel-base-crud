<h1>Mostra dettagli film</h1>

<div>
  <ul>
    <li>Trama: {{ $movie->description }}</li>
    <li>Anno: {{ $movie->year }}</li>
    <li>Voto: {{ $movie->rating }}</li>
  </ul>

  <a href="{{route('movies.index')}}">Torna a Elenco Film</a>
</div>