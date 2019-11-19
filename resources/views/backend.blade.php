@extends('base')

@section('title', 'Willkommen im Backend')

@section('top-links')
    @auth
        <a href="/patients">Patient</a>
        <a href="/backend">Kalender</a>
        <a href="/backend">Doku</a>
        <a href="/">Frontend</a>
    @endauth
@endsection

@section('main')
    Willkommen im Backend.
@endsection
