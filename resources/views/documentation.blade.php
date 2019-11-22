@extends('backend')

@section('title')Details

@endsection

@section('main')
    <div class="container">
        <p>Autor: {{ auth()->user()->name }}</p>
        <div class="row">
            <form method="post" action="{{ route('newDocumentation', $id) }}">
                @csrf
                <div class="form-group row">
                    <label for="text">Add New Documentation</label>
                    <textarea name="text" cols="50" rows="8" placeholder="Write documentation here" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-primary" href="/patients/{{$id}}" role="button">Back</a>
            </form>
        </div>
    </div>
@endsection
