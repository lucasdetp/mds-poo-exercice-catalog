<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    <style>
        @import "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap";

        * {
            font-family: Poppins, sans-serif;
            background-color: black;
        }

        button {
            color: #fff;
            cursor: pointer;
            border: 2px solid white;
            padding: 5px 5px;
        }

        .container {
            width: 1000px;
            margin: auto;
        }

        td {
            color: #fff;
        }

        .list_image {
            max-width: 2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="padding-bottom: 1rem;">
            <button onclick="history.back()">Retour</button>
        </div>

        <div style="margin-bottom: 2rem; color:#fff">
            <strong>Genres: </strong>
            @foreach ($genres as $genre)
            <a style="color:#fff; text-decoration: none;" href="/movies?genre={{ $genre->label }}">{{ $genre->label }}</a>
            {{ $loop->last ? "" : "," }}
            @endforeach
        </div>

        <div>
            <table>
                @foreach ($movies_paginator as $movie)
                <tr>
                    <td>
                        <img class="list_image" src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                    </td>
                    <td>
                        <a style="text-decoration: none; color:#fff;" href="/movies/{{ $movie->id }}">
                            {{ $movie->originalTitle }}
                        </a>
                    </td>
                    <td>{{ $movie->averageRating }}/10</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div">
            {{ $movies_paginator->links('paginator') }}
    </div>
    </div>
</body>

</html>