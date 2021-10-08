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
    <h1>Nieuw team</h1>
	<form action="{{ route('teams.store') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="name">Naam team</label>
			<input type="text" id="name" name="name" class="form-control">
			<input type="text" id="type" name="type" class="form-control">
			<input type="text" id="origin" name="origin" class="form-control">
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
