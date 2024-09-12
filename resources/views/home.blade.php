{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
    <div class="container my-5">
        <h1>titolo</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID TRENO</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di arrivo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <th>{{ $train->enterprise }}</th>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->departure_hour }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->arrival_hour }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    home
@endsection
