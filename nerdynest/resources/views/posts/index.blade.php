@extends('layouts.app')
@section('content')
<div class="container">
  <div class="titlebar">
    <h1>Blog NerdyNest</h1>
  </div>
  <hr>
  <p>Blog - {{ $post }}</p>
</div>
@endsection
