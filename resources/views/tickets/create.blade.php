@extends('app')

@section('content')

<section class="create-form w-full grid justify-items-center gap-8 mb-8">
  <div class="flex justify-center w-full">
      <div class="card shrink-0 w-full max-w-2xl shadow-2xl bg-base-100">
          <form action="{{ route('tickets.store') }}" method="POST" class="card-body">
              @csrf
  
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Titre</span>
                </label>
                <input type="text" name="title" class="input input-bordered" />
              </div>
  
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Description</span>
                </label>
                <textarea class="textarea textarea-bordered" name="description" cols="30" rows="10"></textarea>
              </div>
  
              <div class="form-control mt-6">
                <button class="btn btn-primary">Créer</button>
              </div>
          </form>
      </div>
  </div>
</section>

@endsection