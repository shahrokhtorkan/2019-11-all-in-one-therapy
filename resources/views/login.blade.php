@extends('base')

@section('title', 'login')

@section('main')
    <form method="post" action="{{ route('authenticate') }}">
        @csrf
        @if($errors->any())
            <p class="alert alert-danger">Die Zugangsdaten sind nicht Korekt.</p>
        @endif
        <p><input type="text" class="form-control" name="name" placeholder="Benutzer"></p>
        <p><input type="password" class="form-control" name="password" placeholder="Passwort"></p>
        <p><button type="submit" class="btn btn-primary">Login</button></p>
    </form>
@endsection
