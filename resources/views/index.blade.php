@extends('app')

@section('content')
<div class="hero min-h-screen bg-base-100">
  <div class="hero-content text-center">
    <div class="max-w-md">
      <h1 class="text-5xl font-bold">Bienvenue,</h1>
      <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
      <a href="{{ route('tickets.create') }}" class="btn btn-primary">Créer un ticket</a>
      <a href="{{ route('tickets.index') }}" class="btn btn-primary">Liste des tickets</a>
    </div>
  </div>
</div>
@endsection