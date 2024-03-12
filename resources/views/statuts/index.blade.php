@extends('app')

@section('content')

<section class="article-container w-full mx-auto flex flex-col justify-center gap-12 mb-8">
    <a href="{{ route('statuts.create') }}" class="btn btn-primary my-8 w-2/6 mx-auto">Créer un nouveau statut</a>
    
    @if (session('statutDelete'))
    <div class="alert alert-error animate-fade">
        {{ session('statutDelete') }}
    </div>
    @endif

    <div class="overflow-x-auto">
        <table class="table w-1/2 mx-auto border border-collapse text-center">
            <!-- head -->
            <thead>
                <tr>
                    <th class="border">#</th>
                    <th class="border">Label</th>
                    <th class="border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($statuts as $statut)
                    <tr>
                        <th class="border">
                            {{ $statut->id }}
                        </th>
                        <td class="border">
                            {{ $statut->label }}
                        </td>
                        <td class="flex gap-4 justify-center">
                            <a href="{{ route('statuts.edit', $statut) }}"
                                class="btn btn-warning">Modifier</a>
                            <form action="{{ route('statuts.destroy', $statut) }}" method="POST">
                                @csrf
                                @method('DELETE')
    
                                <button class="btn btn-error">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection