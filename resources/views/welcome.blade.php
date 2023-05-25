@extends('layouts.app')

@section('content')
    <h1 class="text-center py-5">I nostri Treni</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Azienda</th>
                            <th scope="col">Stazione di Partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Oraio di arrivo</th>
                            <th scope="col">Codice treno</th>
                            <th scope="col">Numero carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <th>{{ $train->Azienda }}</th>
                                <td>{{ $train->Stazione_di_partenza }}</td>
                                <td>{{ $train->Stazione_di_arrivo }}</td>
                                <td>{{ $train->Orario_di_partenza }}</td>
                                <td>{{ $train->Orario_di_arrivo }}</td>
                                <td>{{ $train->Codice_Treno }}</td>
                                <td>{{ $train->Numero_Carrozze }}</td>
                                <td>{{ $train->In_Orario }}</td>
                                <td>{{ $train->Cancellato }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
