<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>

    {{-- ---------- Start of Css ---------- --}}
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    {{-- ---------- End of Css ---------- --}}

</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Todos Page</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($todos as $todo)
                                <li class="list-group-item">{{ $todo->name }} <a href="{{ url('/todos/' . $todo->id) }}" class="btn btn-primary btn-sm float-end">View</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
