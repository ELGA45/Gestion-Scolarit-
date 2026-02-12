@extends('layouts.app')

@section('page-title', 'Tarif')

@section('content')

<div class="index-wrapper">

        {{-- En-tête --}}
        <div class="index-header">
            <h1>Tarifs</h1>

            <a href="{{ route('filieres.create') }}" class="btn-add">
                + Nouveau tarif
            </a>
        </div>

        {{-- Message succès --}}
        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tableau --}}
        <div class="table-card">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Incription</th>
                        <th>Mensualite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tarifs as $tarif)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tarif->incription }}</td>
                            <td>{{ $tarif->mensualite }}</td>
                            <td class="actions">
                                <a href="{{ route('tarifs.edit', $tarif->id) }}" class="btn-edit">
                                    Modifier
                                </a>

                                <form action="{{ route('tarifs.destroy', $tarif->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Voulez-vous vraiment supprimer ce tarif ?');">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="empty">
                                Aucun tarif enregistré.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

@endsection