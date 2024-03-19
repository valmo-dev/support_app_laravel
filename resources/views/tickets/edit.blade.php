@extends('app')

@section('content')

<section class="create-form w-full grid justify-items-center gap-8 mb-8">
  <div class="flex justify-center w-full">
    <div class="card shrink-0 w-full max-w-2xl shadow-2xl bg-base-100">
      <form action="{{ route('tickets.update', $ticket) }}" method="POST" class="card-body">
        @csrf
        @method('PUT')
        <div class="form-control">
          <a href="{{ route('tickets.index') }}" class="btn btn-outline btn-primary w-1/2 flex flex-row gap-4">
            <span class="material-symbols-outlined">
              arrow_back
            </span>
            Retour à la liste
          </a>
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Titre</span>
          </label>
          <input value="{{ $ticket->title }}" type="text" name="title" class="input input-bordered" />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Description</span>
          </label>
          <textarea class="textarea textarea-bordered textarea-lg w-full h-80" name="description">
          {{ $ticket->description }}
          </textarea>
        </div>

        <div class="form-control mt-6 flex flex-wrap gap-4">
          <button class="btn btn-primary">Modifier</button>
        </div>
      </form>
      <div class="form-control flex mx-8 mb-8">
        <form action="{{ route('tickets.destroy', $ticket) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-error w-full" method="submit">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection