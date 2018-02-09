@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">apakah kamu yakin akan mengahpus nama aku dihati kamu?</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/lomba/{{$lomba->id}}/confirmDelete" role="button">Ya</a>
    <a class="btn btn-primary btn-lg" href="/lomba" role="button">Tidak</a>
  </p>
</div>

@endsection