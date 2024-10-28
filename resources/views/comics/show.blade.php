@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{ $comic->title }}
</h1>

<div class="card">
  <div class="card-body">
    <ul>
      <p>
        {{ $comic->description }}
      </p>
      <li>
        Serie: {{ $comic->series }}
      </li>
      <li>
        Data uscita: {{ $comic->sale_date }}
      </li>
      <li>
        Tipo: {{ $comic->type }}
      </li>
      <li>
        Prezzo: € {{ number_format($comic->price, 2, ',', ',') }}
      </li>

      <li>
        Artisti:
        <ul>
          @foreach (json_decode($comic->artists, true ) as $artist)
            <li>
              {{ $artist }}
            </li>
          @endforeach
        </ul>
      </li>
      <li>
        Scrittori:
        <ul>
          @foreach (json_decode($comic->writers, true ) as $writer)
            <li>
              {{ $writer }}
            </li>
          @endforeach
        </ul>
      </li>
    </ul>
  </div>
  <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-bottom">
</div>

@endsection
