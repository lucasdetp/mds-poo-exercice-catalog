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
            max-width: 1000px;
        }

        .wrapper {
            margin: auto;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        }

        .poster {
            object-fit: cover;
            width: 200px;
            height: 300px;
        }

        a {
            text-decoration: none;
            margin-left: 30px;
            text-align: center;


            width: 40%;
            padding-top: 2px;
            padding-bottom: 0px;

        }

        h3 {
            border: 2px solid #F9AD67;
            width: 20%;
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
            <h3>Films</h3>

            <div>
                <a href="/movies">
                    Tous les films
                </a>
                <a href="/movies?order_by=startYear&order=asc">
                    Les films les plus récents
                </a>
                <a href="/movies?order_by=averageRating&order=desc">
                    Les films les mieux notés
                </a>
                <a href="/movies/random">
                    Film aléatoire
                </a>
            </div>

            <div>
                <h3>Séries</h3>
                <div>
                    <a href="/series">
                        Toutes les séries
                    </a>
                    <a href="/series?order_by=startYear&order=asc">
                        Les séries les plus récentes
                    </a>
                    <a href="/series?order_by=averageRating&order=desc">
                        Les séries les mieux notées
                    </a>
                </div>
                <div class="wrapper">
                    @foreach ($series as $series_item)
                    <div>
                        <a href="/series/{{ $series_item->id }}">
                            <img src="{{ $series_item->poster }}" alt="{{ $series_item->primaryTitle }}" class="poster">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="wrapper">
            @foreach ($movies as $movie)
            <div>
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}" class="poster">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>