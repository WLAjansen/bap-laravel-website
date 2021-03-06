@extends('layouts.master')

<head>
    <link rel="stylesheet" href="/css/style.css">
</head>

@section('header')
<div class="jumbotron jumbotron-fluid">
  <div class="container center">
    <h1 class="display-7">Browser</h1>
    <p class="lead display-7">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      <a href="{{ route('photo.upload') }}" class="btn btn-primary my-2 my-sm-0 call-to-action" type="submit">Begin met browsen</a>
  </div>
</div>
@endsection

@section('content')
<div class="main-list">
<h3>{{ $bedrijf->name }}</h3>
</div>
<div class="list-companies">
  {{ $bedrijf->address }}<br>
  {{ $bedrijf->zipcode }}<br>
  {{ $bedrijf->city }}<br>
  {{ $bedrijf->phone }}<br>
</div>
<p>
  {{ $bedrijf->description }}
</p>
<hr>
<a href="{{ route('company.list') }}">Terug naar alle bedrijven</a>
@endsection
