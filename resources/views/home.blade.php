{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
    <div class="container my-5 text-center">
        <h1>{{ $title }}</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID TRENO</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Giorno</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Numero di Carrozze</th>
                    <th scope="col">In Orario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <th>{{ $train->enterprise }}</th>
                        {{-- @php
                            $day_date = date_create($train->departure_day);
                        @endphp
                        <td>{{ date_format($day_date, 'd-m-Y') }}</td> --}}
                        <td>{{ date('d-m-Y', strtotime($train->departure_day)) }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->departure_hour }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->arrival_hour }}</td>
                        <td>{{ $train->numbers_of_carriages }}</td>
                        <td>{{ $train->on_time ? 'In Orario' : 'Ritardo' }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


@section('titlePage')
    home
@endsection
