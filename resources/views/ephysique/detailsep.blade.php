<!DOCTYPE html>
<html lang="en">

<head>
    <title>details e physique</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
        }

        td,
        th {
            padding: 5px;
        }
    </style>
</head>

<body>
    <h3>Les contrats</h3>
    <table>

        <tr>
            <th> id_contrat</th>
            <th> id_entite_physique</th>
            <th> numero_contrat</th>
            <th> statut_contrat</th>
            <th> version_contrat</th>
            <th> type_contrat</th>
            <th> fréquence_facturation</th>
            <th> date_creation</th>
            <th> date_demarrage</th>
            <th rowspan="100000"></th>
            <th> id_article</th>
            <th> libelle </th>
            <th> montant </th>
            <th> remise </th>
            <th> devise </th>
            <th> date_creation </th>
        </tr>
        @foreach($contrats as $contratsPosition => $contratInfos)
        <tr>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}">{{ $contratInfos->id_contrat }}</td>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}">{{ $contratInfos->id_entite_physique }}</td>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}">{{ $contratInfos->numero_contrat }} </td>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}"> {{ $contratInfos->statut_contrat }} </td>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}"> {{ $contratInfos->version_contrat }} </td>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}"> {{ $contratInfos->type_contrat }} </td>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}"> {{ $contratInfos->fréquence_facturation }} </td>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}"> {{ $contratInfos->date_creation }} </td>
            <td rowspan="{{$countArtContr[$contratInfos->id_contrat] + 2}}"> {{ $contratInfos->date_demarrage }} </td>
            
        </tr>
        @foreach($articles as $articlesPosition => $articleInfos)

        @if($articleInfos->id_contrat == $contratInfos->id_contrat)

        <tr>
            <td> {{ $articleInfos->id_article}}</td>
            <td> {{ $articleInfos->libelle}} </td>
            <td> {{ $articleInfos->montant}} </td>
            <td> {{ $articleInfos->remise}} </td>
            <td> {{ $articleInfos->devise}} </td>
            <td> {{ $articleInfos->date_creation}} </td>
        </tr>
        @endif
        @endforeach

        @endforeach

    </table>
    <br><br><br>
    <h3>Les Contacts et les articles</h3>

    <table>

        <tr>
            <th>id_contact</th>
            <th>nom</th>
            <th>prenom</th>
            <th>cin</th>
            <th>adresse</th>
            <th>role</th>
        </tr>
        @foreach($contactRoles as $contactPos => $contactInfos)
        <tr>
            <td>{{ $contactInfos->id_contact }}</td>
            <td>{{ $contactInfos->nom }} </td>
            <td> {{ $contactInfos->prenom }} </td>
            <td> {{ $contactInfos->cin }} </td>
            <td> {{ $contactInfos->adresse }} </td>
            <td> {{ $contactInfos->role }} </td>
        </tr>
        @endforeach

    </table>
</body>

</html>