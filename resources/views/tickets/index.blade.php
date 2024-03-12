@extends('app')

@section('content')



<section class="article-container w-full mx-auto flex flex-col justify-center gap-12 mb-8">
    <a href="{{ route('tickets.create') }}" class="btn btn-primary w-2/6 mx-auto">Créer un ticket</a>

    <div class="card-wrap flex flex-wrap justify-center gap-12">
        @foreach($tickets as $ticket)
        <div class="card w-96 bg-base-100 shadow-xl">
            <div class="card-body items-center text-center">
                    <div class="badge badge-primary px-2 py-3">{{ $ticket->statut->label }}</div>
        
                    <h2 class="card-title">
                        {{ $ticket->title }}
                    </h2>
                    <span class="text-xs italic">
                        {{ $ticket->user->name }}
                    </span>
                    <p>
                        {{ $ticket->description }}
                    </p>
                    <div class="card-actions justify-end">
                    <a href="{{ route('tickets.edit', $ticket) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('tickets.destroy', $ticket) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-error" method="submit">Supprimer</button>
                    </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection