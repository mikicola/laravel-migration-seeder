<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treni</title>
</head>
<body>
    <h1>Treni</h1>
        @foreach ($train as $item)
            <div>
                <span>
                    {{-- <h2>treno</h2> --}}
                    Da: {{ $item->Stazione_di_partenza }}|
                    a: {{ $item->Stazione_di_arrivo }}|
                    {{ $item->In_orario }}|
                    Codice treno: {{ $item->Codice_Treno }}|
                </span>
            </div>
        @endforeach
        {{ $train->links() }}
</body>
</html>
