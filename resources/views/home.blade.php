@extends('layouts.master')

@section('head')
    <div class="container mt-5">
    <h1 class="mb-4 text-center">🚆 Tabellone Treni</h1>
    </div>
@endsection

@section('content')
<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped train-table">
            <thead class="table-dark text-center">
                <tr>
                    <th>Azienda</th>
                    <th>Da</th>
                    <th>A</th>
                    <th>Partenza</th>
                    <th>Arrivo</th>
                    <th>Codice</th>
                    <th>Carrozze</th>
                    <th>Stato</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ \Carbon\Carbon::parse($train->departure_time)->format('H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($train->arrival_time)->format('H:i') }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->carriage_count }}</td>
                        <td>
                            @if ($train->cancelled)
                                <span class="badge bg-danger">
                                    <i class="bi bi-x-circle"></i> Cancellato
                                </span>
                            @elseif ($train->on_time)
                                <span class="badge bg-success">
                                    <i class="bi bi-check-circle"></i> In orario
                                </span>
                            @else
                                <span class="badge bg-warning">
                                    <i class="bi bi-clock"></i> In ritardo
                                </span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
