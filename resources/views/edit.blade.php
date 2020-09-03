<h1>Modifica Film: {{ $movie->title }}</h1>

<form action="{{ route('movies.update', $movie->id)}}" method="post">
  @csrf
  @method('PUT')
  
  <div>
    <label>Titolo</label>
    <input type="text" name="title" value="{{ $movie->title }}">
  </div>
  
  <div>
    <label>Descrizione</label>
    <textarea name="description" id="" cols="80" rows="8" value="{{ $movie->description }}"></textarea>
  </div>
  
  <div>
    <label>Anno</label>
    <input type="number" name="year" value="{{ $movie->year }}">
  </div>
  
  <div>
    <label>Voto</label>
    <input type="number" name="rating" value="{{ $movie->rating }}">
  </div>
  
  <div>
    <input type="submit" value="Salva">
  </div>
</form>