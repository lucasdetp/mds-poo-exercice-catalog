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
        @import "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap";

        * {
            background-color: black;
            font-family: Poppins, sans-serif;
        }

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

        .movies-a {
            margin-bottom: 20px;
            justify-content: center;
            text-align: center;
        }

        .movies-a a {
            font-size: 1.2rem;
            position: relative;
            text-align: center;
            margin: 10px;
            color: #fff;
            text-decoration: none;
        }

        .movies-a a::after {
            content: "";
            background: white;
            mix-blend-mode: exclusion;
            width: calc(100% + 20px);
            height: 0;
            position: absolute;
            bottom: -4px;
            left: -10px;
            transition: all .3s cubic-bezier(0.445, 0.05, 0.55, 0.95);
        }

        .movies-a a:hover::after {
            height: calc(100% + 8px)
        }

        h3 {
            border: 2px solid #F9AD67;
            width: 20%;
            padding-top: 2px;
            padding-bottom: 2px;
            margin-left: auto;
            margin-right: auto;
            color: white;
            text-align: center;
        }

        h1 {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ config('app.name') }}</h1>
        <div>
            <h3>Films</h3>
            <div class="movies-a">
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
            <div class="wrapper">
                @foreach ($movies as $movie)
                <div>
                    <a href="/movies/{{ $movie->id }}">
                        <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}" class="poster">
                    </a>
                </div>
                @endforeach
            </div>

            <div>
                <h3>Séries</h3>
                <div class="movies-a">
                    <a href="/series">
                        Toutes les séries
                    </a>
                    <a href="/series?order_by=startYear&order=asc">
                        Les séries les plus récentes
                    </a>
                    <a href="/series?order_by=averageRating&order=desc">
                        Les séries les mieux notées
                    </a>
                    <a href="/series/random">
                        Série aléatoire
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


    </div>
</body>

</html>