@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" class="active">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Teams</h1>
    <a href="{{ route('teams.create') }}">+ nieuw team</a>
    <table class="table">
        <tr>
            <th>Teams</th>
            <th>Type</th>
            <th>Origin</th>
            <th>&nbsp;</th>
        </tr>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->type }}</td>
                <td>{{ $team->origin}}</td>
                <td><a href="{{ route('teams.edit', $team->id) }}">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>
    
@endsection