@extends('backend')

@section('title')Patienten &ndash;

@parent
@endsection
@section('main')
    <button class="btn btn-primary float-left" onclick="window.location='/patients/create'">Add New Patient</button>
    <form class="form-inline float-right" method="post" action="{{route('patients')}}">
        @csrf
        <input type="text" class="form-control mb-3 mr-sm-2" name="name" placeholder="Enter patient name">
        <button type="submit" class="btn btn-primary mb-3" name="filter">Search</button>
    </form>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>@sortablelink('svnr')</th>
                <th>@sortablelink('firstname')</th>
                <th>@sortablelink('lastname')</th>
                <th>@sortablelink('email')</th>
                <th>@sortablelink('address')</th>
                <th>@sortablelink('plz')</th>
                <th>@sortablelink('city')</th>
                <th>@sortablelink('country')</th>
                <th>Details</th>
            </tr>
        </thead>
        @foreach($patients as $patient)
            <tbody>
                <tr>
                    <td>{{ $patient->svnr }}</td>
                    <td>{{ $patient->firstname }}</td>
                    <td>{{ $patient->lastname }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>{{ $patient->plz }}</td>
                    <td>{{ $patient->city }}</td>
                    <td>{{ $patient->country }}</td>
                    <td><a href="/patients/{{$patient->id}}"><i class="fas fa-user-edit"></i></a></td>
                </tr>
            </tbody>
        @endforeach
    </table>
    <div class="float-left">{!! $patients->appends(\Request::except('page'))->render() !!}</div>
@endsection
