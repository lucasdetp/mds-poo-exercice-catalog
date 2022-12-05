<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $series_item->originalTitle }}</title>

    <style>
        @import "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap";

        * {
            font-family: Poppins, sans-serif;
            background-color: black;
        }

        .container {
            width: 1000px;
            margin: auto;
        }

        th {
            font: bold;
            text-align: left;
            min-width: 4rem;
            color: #fff;
        }

        td {
            color: #fff;
        }

        td a {
            text-decoration: none;
            color: #fff;
        }

        p {
            text-align: justify;
            color: #fff;
        }

        h2 {
            color: #fff;
        }

        h3 {
            color: #fff;
        }

        button {
            color: #fff;
            cursor: pointer;
            border: 2px solid white;
            padding: 5px 5px;
        }

        .titre {
            display: flex;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="padding-bottom: 1rem;">
            <button onclick="history.back()">Retour</button>
        </div>

        <div>
            <div class="titre">
                <td>{{ $series_item->primaryTitle }} ({{ $series_item->originalTitle }})</td>
            </div>
            <img src="{{ $series_item->poster }}" alt="{{ $series_item->originalTitle }}">
        </div>

        <h2>Détails</h2>
        <table>
            <tr>
                <th>Titre :</th>
                <td>{{ $series_item->primaryTitle }} ({{ $series_item->originalTitle }})</td>
            <tr>
                <th>Genre :</th>
                <td>
                    @foreach ($series_item->genres as $genre)
                    <a href="/series?genre={{ $genre->label }}">{{ $genre->label }}</a>
                    {{ $loop->last ? "" : "," }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>Année de sortie :</th>
                <td>{{ $series_item->startYear }}</td>
            </tr>
            <tr>
                <th>Durée :</th>
                <td>{{ $series_item->runtimeMinutes }} minutes</td>
            </tr>
            <tr>
                <th>Note :</th>
                <td>{{ $series_item->averageRating }} ({{ $series_item->numVotes }} votes)</td>
            </tr>
        </table>

        <h2>Résumé</h2>
        <p>
            {{ $series_item->plot }}
        </p>

        <p>
            @foreach ($series_item->seasons() as $seasonNumber => $episodes)
        <h3>Saison {{ $seasonNumber }}</h3>
        <table>
            @foreach ($episodes->sortBy('episodeNumber') as $episodeNumber => $episode)
            <tr>
                <td>{{ $episodeNumber }}</td>
                <td>
                    <img src="{{ $episode->poster }}" alt="{{ $episode->originalTitle }}" style="width: 2rem">
                </td>
                <td>
                    <a href="/series/{{ $series_item->id }}/season/{{ $seasonNumber }}/episode/{{ $episodeNumber }}">
                        {{ $episode->originalTitle }}
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        @endforeach
        </p>
    </div>

</body>

</html>