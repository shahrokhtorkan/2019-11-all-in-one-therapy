@extends('backend')

@section('title')Details

@endsection

@section('main')
    <div class="container">
        <form class="form-group text-left" method="post" action="/patients/{{$details->id}}">
            @method('PATCH')
            @csrf
            <div class="form-group row">
                <div class="col-3"><label for="svnr">Svnr</label></div>
                <div class="col-8"><input name="svnr"
                       class="form-control"
                       type="text"
                       placeholder="svnr"
                       value="{{ old('svnr') ?? $details->svnr }}"
                       autocomplete="svnr" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="firstname" class="">First Name</label></div>
                <div class="col-8"><input name="firstname"
                       class="form-control"
                       type="text"
                       placeholder="First Name"
                       value="{{ old('firstname') ?? $details->firstname }}"
                       autocomplete="firstname" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="lastname" class="">Last Name</label></div>
                <div class="col-8"><input name="lastname"
                       class="form-control"
                       type="text"
                       placeholder="Last Name"
                       value="{{ old('lastname') ?? $details->lastname }}"
                       autocomplete="lastname" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="email" class="">Email</label></div>
                <div class="col-8"><input name="email"
                       class="form-control"
                       type="text"
                       placeholder="Email"
                       value="{{ old('email') ?? $details->email }}"
                       autocomplete="email" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="address" class="">Address</label></div>
                <div class="col-8"><input name="address"
                       class="form-control"
                       type="text"
                       placeholder="Address"
                       value="{{ old('address') ?? $details->address }}"
                       autocomplete="address" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="plz" class="">PLZ</label></div>
                <div class="col-8"><input name="plz"
                       class="form-control"
                       type="text"
                       placeholder="PLZ"
                       value="{{ old('plz') ?? $details->plz }}"
                       autocomplete="plz" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="city" class="">City</label></div>
                <div class="col-8"><input name="city"
                       class="form-control"
                       type="text"
                       placeholder="City"
                       value="{{ old('city') ?? $details->city }}"
                       autocomplete="city" autofocus></div>
            </div>
            <div class="form-group row">
                <div class="col-3"><label for="country" class="">Country</label></div>
                <div class="col-8"><input name="country"
                       class="form-control"
                       type="text"
                       placeholder="Country"
                       value="{{ old('city') ?? $details->country }}"
                       autocomplete="country" autofocus></div>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
            <a class="btn btn-primary" href="/patients" role="button">Back</a>
            <button type="button" class="btn btn-danger" onclick="if(confirm('Sind Sie sicher das Sie den Patienten ' +
                '{{ $details->lastname }}, {{ $details->firstname }} löschen wollen?')) window.location='/patient/delete/{{ $details->id }}'">Patient löschen
            </button>
        </form>
        <br>
        @if($documentations->count())
            <h1 class="float-left mb-1">Patient Documentations</h1>
            <a class="btn btn-primary float-right" href="/patients/{{$details->id}}/documentation" role="button">Add New Documentation</a>
            <table class="table table-bordered table-hover table-responsive">
                <tr>
                    <th>@sortablelink('Datum')</th>
                    <th>@sortablelink('firstname')</th>
                    <th>@sortablelink('lastname')</th>
                    <th>@sortablelink('svnr')</th>
                    <th>@sortablelink('text')</th>
                </tr>
                @foreach($documentations as $doc)
                    <tr>
                        <td>{{ $doc->created_at->toDateString() }}</td>
                        <td>{{ $doc->patient->firstname }}</td>
                        <td>{{ $doc->patient->lastname }}</td>
                        <td>{{ $doc->patient->svnr }}</td>
                        <td class="text-left">{{ $doc->text }}</td>
                    </tr>
                @endforeach
            </table>
        @endif
        <p>{!! $documentations->appends(\Request::except('page'))->render() !!}</p>
    </div>
@endsection
