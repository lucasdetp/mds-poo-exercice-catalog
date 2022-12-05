<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $series_item->originalTitle }}</title>

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
    </div>
</body>

</html>