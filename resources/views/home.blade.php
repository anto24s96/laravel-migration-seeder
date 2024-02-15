<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="text-white fw-bolder text-uppercase">Trains Table</h1>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-12">
                <table class="table table-warning table-striped">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Departure Station</th>
                            <th>Arrival Station</th>
                            <th>Departur Date</th>
                            <th>Arrival Date</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Train Code</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($filtered_trains as $train)
                            <tr>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ date('d-m-Y', strtotime($train->departure_date)) }}</td>
                                <td>{{ date('d-m-Y', strtotime($train->arrival_date)) }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->train_code }}</td>
                                <td>
                                    @if ($train->in_time)
                                        In Time
                                    @elseif($train->cancelled)
                                        Cancelled
                                    @else
                                        Delay
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
