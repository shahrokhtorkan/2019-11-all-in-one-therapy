@extends('backend')

@section('title')
Add New Patient
@endsection

@section('main')
    <div class="container">
        <form class="form-group text-left" method="post" action="{{route('newPatient')}}">
            @csrf
            <div class="form-group row">
                <div class="col-3"><label for="svnr">Svnr</label></div>
                <div class="col-8"><input name="svnr"
                       class="form-control"
                       type="text"
                       placeholder="svnr"
                       autocomplete="svnr" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="firstname" class="">First Name </label></div>
                <div class="col-8"><input name="firstname"
                       class="form-control"
                       type="text"
                       placeholder="First Name"
                       autocomplete="firstname" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="lastname" class="">Last Name </label></div>
                <div class="col-8"><input name="lastname"
                       class="form-control"
                       type="text"
                       placeholder="Last Name"
                       autocomplete="lastname" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="email" class="">Email </label></div>
                <div class="col-8"><input name="email"
                       class="form-control"
                       type="text"
                       placeholder="Email"
                       autocomplete="email" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="address" class="">Address </label></div>
                <div class="col-8"><input name="address"
                       class="form-control"
                       type="text"
                       placeholder="Address"
                       autocomplete="address" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="plz" class="">PLZ </label></div>
                <div class="col-8"><input name="plz"
                       class="form-control"
                       type="text"
                       placeholder="PLZ"
                       autocomplete="plz" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="city" class="">City </label></div>
                <div class="col-8"><input name="city"
                       class="form-control"
                       type="text"
                       placeholder="City"
                       autocomplete="city" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="country" class="">Country </label></div>
                <div class="col-8"><input name="country"
                       class="form-control"
                       type="text"
                       placeholder="Country"
                       autocomplete="country" autofocus></div>
            </div>
            <button class="btn btn-primary" type="submit">Add</button>
            <a class="btn btn-primary" href="/patients" role="button">Back</a>
        </form>
    </div>
@endsection
