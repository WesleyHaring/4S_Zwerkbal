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
	<form action="{{ route('teams.update', $team) }}" method="POST">
		@csrf
        @method('PUT')
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" id="name" name="name" class="form-control" value="{{ $team->name }}">
		</div>

		<div class="form-group">
			<label for="type">Type</label>
			<select name="type" id="type">
				<option value="{{ $team->type }}"> </option>
				<option value="Rare">Rare</option>
				<option value="Legendary">Legendary</option>
				<option value="Super">Super</option>
				<option value="Ultimate">Ultimate</option>
			</select>
		</div>

		<div class="form-group">
		<label for="origin">Origin</label>
			<input type="text" id="origin" name="origin" class="form-control" value="{{ $team->origin }}">
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
