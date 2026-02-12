@extends('layouts.app')

@section('page-title', 'Filiére')

@section('content')

<div class="create-wrapper">

    <div class="create-card">
        <h2 class="create-title">Créer une filière</h2>

        {{-- Messages d’erreur --}}
        @if ($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('filieres.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="code">Code filière</label>
                <input
                    type="text"
                    id="code"
                    name="code"
                    value="{{ old('code') }}"
                    placeholder="Ex : INFO"
                    required
                >
            </div>

            <div class="form-group">
                <label for="nom">Nom de la filière</label>
                <input
                    type="text"
                    id="nom"
                    name="nom"
                    value="{{ old('nom') }}"
                    placeholder="Informatique"
                    required
                >
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-primary">
                    Enregistrer
                </button>
                <a href="{{ route('filieres.index') }}" class="btn-secondary">
                    Annuler
                </a>
            </div>
        </form>
    </div>

</div>
@endsection