@extends('layouts.app')

@section('page-title', 'Crea comic')

@section('main-content')
<h1>
    Crea Comic:
</h1>

<form action="{{ route('comics.store') }}" method="POST">
  @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Titolo: <span>*</span> </label>
    <input type="text" class="form-control" id="title" name="title" required maxlength="128" placeholder="Inserire il titolo">
  </div>

  <div class="mb-3">
    <label for="thumb" class="form-label">Copertina:</label>
    <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserire la copertina">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Descrizione:</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label for="series" class="form-label">Serie:</label>
    <input type="text" class="form-control" id="series" name="series" placeholder="Inserire la serie">
  </div>

  <div class="mb-3">
    <label for="sales_date" class="form-label">Data di uscita:</label>
    <input type="date" class="form-control" id="sales_date" name="sales_date" placeholder="Inserire la data">
  </div>

  <div class="mb-3">
    <label for="type" class="form-label">Tipo: <span>*</span> </label>
    <select class="form-select" id="type" name="type" required>
      <option selected>Seleziona</option>
      <option value="comic book">Fumetto</option>
      <option value="graphic nodel">Graphic Novel</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Prezzo: <span>*</span> </label>
    <input type="numb" class="form-control" id="price" name="price" required step="0.01" placeholder="Inserire il prezzo">
  </div>

  <div class="mb-3">
    <label for="artists" class="form-label">Artisti:</label>
    <input type="text" class="form-control" id="artists" name="artists" aria-describedby="artist.help" placeholder="Inserire gli artisti">
    <div id="passwordHelpBlock" class="form-text">
      Inserire i nome degli artisti, separati dalle virgole.
    </div>
  </div>

  <div class="mb-3">
    <label for="writers" class="form-label">Scrittori:</label>
    <input type="text" class="form-control" id="writers" name="writers" aria-describedby="artist.help" placeholder="Inserire degli scrittori">
    <div id="passwordHelpBlock" class="form-text">
      Inserire i nome degli scrittori, separati dalle virgole.
    </div>
  </div>

  <div class="mb-3">
    <button type="submit" class="btn btn-danger w-100">
      Aggiungi(+)
    </button>
  </div>
  
  
</form>
@endsection
