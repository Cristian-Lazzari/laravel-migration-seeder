<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite ('resources/js/app.js')
</head>
<body>
    <h1 class="text-center">Stazione dei viaggi nel tempo e nello spazio Boolean</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Partenza:</th>
                    <th>Arrivo:</th>
                    <th>orario partenza:</th>
                    <th>orario arrivo:</th>
                  
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->departure}}</td>
                        <td>{{ $train->destination }}</td>
                        <td>{{ $train->timeDeparture }}</td>
                        <td>{{ $train->timeDestination }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>