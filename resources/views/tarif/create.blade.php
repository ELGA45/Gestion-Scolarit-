@extends('layouts.app')

@section('page-title', 'Tarif')

@section('content')

<div class="create-wrapper">

    <div class="create-card">
        <h2 class="create-title">Créer un tarif</h2>

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

        <form action="{{ route('tarifs.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="incription">Inscription</label>
                <input
                    type="number"
                    id="incription"
                    name="inscription"
                    value="{{ old('inscription') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="mensualite">Mensualité</label>
                <input
                    type="number"
                    id="mensualite"
                    name="mensualite"
                    value="{{ old('mensualite') }}"
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