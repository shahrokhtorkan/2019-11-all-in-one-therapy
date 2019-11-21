@extends('backend.base')

@section('title')
    Patienten
@endsection
@section ('main')
    <p><a href="{{ route('newpatient') }}">Neuer Patient</a></p>
    <p>
    <form method="get" action="{{ route('patients') }}">
        @csrf
        &#x1F50D;<input type="text" name="query" placeholder="Name oder SVNr" value="{{ request()->get('query') }}">
        <button type="submit" class="btn btn-primary">Suchen</button>
    </form>
    </p>
    @if (count($patients)>0)
        <table class="table table-bordered table-hover">
            <tr>
                @if( $orderBy == 'lastname')
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'lastname', 'orderDirection' => $inverseOrderDirection]) }}">Name {!! $orderDirectionIndicator !!}</a>
                    </th>
                @else
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'lastname', 'orderDirection' => $orderDirection]) }}">Name</a>
                    </th>
                @endif
                @if( $orderBy == 'svnr')
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'svnr', 'orderDirection' => $inverseOrderDirection]) }}">SVNr {!! $orderDirectionIndicator !!}</a>
                    </th>
                @else
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'svnr', 'orderDirection' => $orderDirection]) }}">SVNr</a>
                    </th>
                @endif
                    @if ($orderBy == 'address')
                <th>
                    <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'address', 'orderDirection' => $inverseOrderDirection]) }}">Adresse {!! $orderDirectionIndicator !!}</a>
                </th>
                @else
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'address', 'orderDirection' => $orderDirection]) }}">Adresse</a>
                    </th>
                @endif
                <th>Aktion</th>
            </tr>
            @foreach ($patients as $patient)
                <tr>
                    <td>
                        <a href="{{ route('patient', $patient->id) }}">
                            {{$patient->firstname }} {{$patient->lastname}}
                        </a>
                    </td>
                    <td>
                        {{$patient->svnr}}
                    </td>
                    <td>
                        {{$patient->address}},
                        {{$patient->plz}} {{$patient->city}},
                        {{$patient->country}}
                    </td>
                    <td>
                        <form method="post" action="/patient/{{$patient->id}}/delete">
                            @csrf
                            <button type="submit" class="btn btn-primary">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        {{ $patients->links() }}
        <a href="{{ route('newpatient') }}">Neuer Patient</a>
    @else
        Keine Patienten gefunden. <a href="{{ route('patients') }}">Alle Patienten anzeigen.</a>
    @endif
@endsection
