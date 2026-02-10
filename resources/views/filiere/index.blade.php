@extends('layouts.app')

@section('page-title', 'Filiére')

@section('content')

<div class="filiere-index-wrapper">

    {{-- En-tête --}}
    <div class="filiere-index-header">
        <h1>Filières</h1>

        <a href="{{ route('filieres.create') }}" class="btn-add">
            + Nouvelle filière
        </a>
    </div>

    {{-- Message succès --}}
    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tableau --}}
    <div class="filiere-table-card">
        <table class="filiere-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Code</th>
                    <th>Nom de la filière</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($filieres as $filiere)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $filiere->code_filiere }}</td>
                        <td>{{ $filiere->nom_filiere }}</td>
                        <td class="actions">
                            <a href="{{ route('filieres.edit', $filiere->id) }}" class="btn-edit">
                                Modifier
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="empty">
                            Aucune filière enregistrée.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection