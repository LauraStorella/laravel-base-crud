<h1>Crea Nuovo Film</h1>

<form action="{{ route('movies.store')}}" method="post">
  @csrf
  @method('POST')
  
  <div>
    <label>Titolo</label>
    <input type="text" name="title" value="{{ old('title') }}">
  </div>
  
  <div>
    <label>Descrizione</label>
    <textarea name="description" id="" cols="80" rows="8" value="{{ old('description') }}"></textarea>
  </div>
  
  <div>
    <label>Anno</label>
    <input type="number" name="year" value="{{ old('year') }}">
  </div>
  
  <div>
    <label>Voto</label>
    <input type="number" name="rating" value="{{ old('rating') }}">
  </div>
  
  <div>
    <input type="submit" value="Salva">
  </div>
</form>