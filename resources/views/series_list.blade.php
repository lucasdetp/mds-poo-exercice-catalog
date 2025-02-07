<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Séries</title>

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

        td {
            color: #fff;
        }

        .container {
            width: 1000px;
            margin: auto;
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
            <a style="color:#fff; text-decoration: none;" href="/series?genre={{ $genre->label }}">{{ $genre->label }}</a>
            {{ $loop->last ? "" : "," }}
            @endforeach
        </div>

        <div>
            <table>
                @foreach ($series_paginator as $series_item)
                <tr>
                    <td>
                        <img class="list_image" src="{{ $series_item->poster }}" alt="{{ $series_item->primaryTitle }}">
                    </td>
                    <td>
                        <a style="color:#fff; text-decoration: none;" href="/series/{{ $series_item->id }}">
                            {{ $series_item->originalTitle }}
                        </a>
                    </td>
                    <td>{{ $series_item->averageRating }}/10</td>
                </tr>
                @endforeach
            </table>
        </div>

        <div>
            {{ $series_paginator->links('paginator') }}
        </div>
    </div>
</body>

</html>