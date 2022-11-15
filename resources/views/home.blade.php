<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .container {
            margin: auto;
            max-width: 900px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }

        a {
            text-decoration: none;
        }

        h3 {
            border-radius: 10px;
            background-color: #F9AD67;
            width: 40%;
            padding-top: 2px;
            padding-bottom: 2px;
            margin-left: auto;
            margin-right: auto;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ config('app.name') }}</h1>
        <div>
            <a href="/movies">
                <h3>Tous les films</h3>
            </a>
            <a href="/movies?order_by=startYear&order=desc">
                <h3>Les films les plus récents</h3>
            </a>
            <a href="/movies?order_by=averageRating&order=desc">
                <h3>Les films les mieux notés</h3>
            </a>
            <a href="/movies/random">
                <h3>Film aléatoire</h3>
            </a>
        </div>

        <div class="wrapper">
            @foreach ($movies as $movie)
            <div>
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>