@extends('backend')

@section('title')Details

@endsection

@section('main')
    <div class="container">
        <div class="row m-3">
            @if($docs->count())
                <h1>Patient Documentations</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>User ID</th>
                        <th>@sortablelink('Datum')</th>
                        <th>@sortablelink('firstname')</th>
                        <th>@sortablelink('lastname')</th>
                        <th>@sortablelink('svnr')</th>
                        <th>@sortablelink('text')</th>
                    </tr>                    @foreach($docs as $doc)
                        <tr>
                            <td>{{ $doc->user_id }}</td>
                            <td>{{ $doc->created_at->toDateString() }}</td>
                            <td>{{ $doc->patient->firstname }}</td>
                            <td>{{ $doc->patient->lastname }}</td>
                            <td>{{ $doc->patient->svnr }}</td>
                            <td>{{ $doc->text }}</td>
                        </tr>
                    @endforeach
                </table>
            @endif
                <p>{!! $docs->appends(\Request::except('page'))->render() !!}</p>
        </div>
    </div>
@endsection
