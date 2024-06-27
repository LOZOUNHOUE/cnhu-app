@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liste du Personnel</h1>
            <a href="{{ route('personnel.create') }}" class="btn btn-primary">Ajouter un Employé</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($personnels as $personnel)
                    <tr>
                        <td>{{ $personnel->id }}</td>
                        <td>{{ $personnel->nom }}</td>
                        <td>{{ $personnel->prenom }}</td>
                        <td>{{ $personnel->email }}</td>
                        <td>
                            <a href="{{ route('personnel.show', $personnel->id) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('personnel.edit', $personnel->id) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('personnel.destroy', $personnel->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
