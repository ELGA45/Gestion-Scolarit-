@extends('layouts.app')

@section('page-title', 'Modifier une Filière')

@section('content')

<div class="container">

    <div class="card shadow-sm">
        <div class="card-body">

            <h4 class="mb-4">Modifier la filière</h4>

            {{-- Messages d'erreur --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('filieres.update', $filiere->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Code filière</label>
                    <input type="text"
                           name="code"
                           class="form-control"
                           value="{{ old('code', $filiere->code_filiere) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nom filière</label>
                    <input type="text"
                           name="nom"
                           class="form-control"
                           value="{{ old('nom', $filiere->nom_filiere) }}"
                           required>
                </div>

                <div class="d-flex justify-content-between">

                    <a href="{{ route('filieres.index') }}"
                       class="btn btn-secondary">
                        Annuler
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Mettre à jour
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection
