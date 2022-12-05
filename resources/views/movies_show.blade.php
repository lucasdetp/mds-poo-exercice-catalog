<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $movie->originalTitle }}</title>

    <style>
        .container {
            width: 1000px;
            margin: auto;
        }

        th {
            font: bold;
            text-align: left;
            min-width: 4rem;
        }

        p {
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="padding-bottom: 1rem;">
            <button onclick="history.back()">Retour</button>
        </div>

        <div>
            <img src="{{ $movie->poster }}" alt="{{ $movie->originalTitle }}">
        </div>

        <h2>Détails</h2>
        <table>
            <tr>
                <th>Titre</th>
                <td>{{ $movie->primaryTitle }} ({{ $movie->originalTitle }})</td>
            </tr>
            <tr>
                <th>Genre</th>
                <td>
                    @foreach ($movie->genres as $genre)
                    <a href="/movies?genre={{ $genre->label }}">{{ $genre->label }}</a>
                    {{ $loop->last ? "" : "," }}
                    @endforeach
                </td>
            </tr>
            <tr>
                <th>Année de sortie :</th>
                <td>{{ $movie->startYear }}</td>
            </tr>
            <tr>
                <th>Durée :</th>
                <td>{{ $movie->runtimeMinutes }} minutes</td>
            </tr>
            <tr>
                <th>Note :</th>
                <td>{{ $movie->averageRating }} ({{ $movie->numVotes }} votes)</td>
            </tr>
        </table>

        <h2>Résumé</h2>
        <p>
            {{ $movie->plot }}
        </p>
    </div>
</body>

</html>