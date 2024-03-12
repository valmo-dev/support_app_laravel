@extends('app')

@section('content')

<section class="create-form w-full grid justify-items-center gap-8 mb-8">
  <div class="flex justify-center w-full">
      <div class="card shrink-0 w-full max-w-2xl shadow-2xl bg-base-100">
          <form action="{{ route('statuts.store') }}" method="POST" class="card-body">
              @csrf

              <div class="form-control">
                <a href="{{ route('statuts.index') }}" class="btn btn-outline btn-primary w-1/2 flex flex-row gap-4" >
                  <span class="material-symbols-outlined">
                    arrow_back
                  </span> 
                  Retour à la liste
                </a>
              </div>
  
              <div class="form-control">
                <label class="label">
                  <span class="label-text">Libellé du statut</span>
                </label>
                <input type="text" name="label" class="input input-bordered" />
              </div>
  
              <div class="form-control mt-6">
                <button class="btn btn-primary">Créer</button>
              </div>
          </form>
      </div>
  </div>
</section>

@endsection