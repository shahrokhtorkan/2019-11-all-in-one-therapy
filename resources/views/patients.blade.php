@extends('backend')

@section('title')Patienten &ndash;
@parent
@endsection

@section('main')
    <table class="table table-bordered">
        <tr>
            <th>SVNr</th>
            <th class="text-left">Name</th>
            <th>Adresse</th>
            <th>PLZ</th>
            <th>Ort</th>
            <th>Land</th>
        </tr>
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->svnr }}</td>
                <td class="text-left">{{ $patient->lastname }}, {{ $patient->firstname }}</td>
                <td>{{ $patient->address }}</td>
                <td>{{ $patient->plz }}</td>
                <td>{{ $patient->city }}</td>
                <td>{{ $patient->country }}</td>
            </tr>
        @endforeach
    </table>
    <p>{{ $patients->links() }}</p>
@endsection
