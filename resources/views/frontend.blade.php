@extends('base')

@section('title', 'Willkommen')

@section('top-links')
    @auth
    <a href="/backend">Backend</a>
    @endauth
@endsection

@section('main')
    Willkommen bei AIOT.
@endsection
