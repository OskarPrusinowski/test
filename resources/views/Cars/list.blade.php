<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samochody</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1> Samochody</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Lp</th>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Cecha</th>
                    <th>Szczegół</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $car[0] }}</td>
                        <td>{{ $car[1] }}</td>
                        <td>{{ $car[2] }}</td>
                        <td>
                            <a href="/cars/{{ $loop->iteration }}"> Szczegóły</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $car[0] }}
    {{ $car[1] }}
    {{ $car[2] }} --}}
    </div>

</body>

</html>
