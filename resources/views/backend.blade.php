@extends('base')

@section('title', 'Willkommen in Backend')

@section('top-links')
    @auth
        <a href="/">Patient</a>
        <a href="/">Kalender</a>
        <a href="/">Doku</a>
        <a href="/">Frontend</a>
    @endauth
@endsection

@section('main')
    Willkommen im Backend.
@endsection
