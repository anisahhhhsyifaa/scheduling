@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index Page</title>
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    </head>

    <body>
        <header>
            <h1>Welcome to the Index Page!</h1>
        </header>
        <main>
            <p>This is the content of the index page.</p>
        </main>
        <footer>
            <p>&copy; 2024 GaLaYu </p>
        </footer>
    </body>
@endsection
