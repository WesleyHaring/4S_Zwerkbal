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
    <h1>Team aanpassen</h1>
	<form action="{{ route('teams.update', $tournament) }}" method="POST">
		@csrf
        @method('PUT')
		<div class="form-group">
			<label for="name">Naam team</label>
			<input type="text" id="name" name="name" class="form-control" value="{{ $team->name }}">
            <input type="date" id="date" name="date" class="form-control" value="{{ $team->date }}">
            <input type="time" id="start_time" name="start_time" class="form-control" value="{{ $team->start_time }}">
		</div>
		<button type="submit">Opslaan</button>
	</form>
@endsection
@if($errors->any())
	<ul class="errors">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif
