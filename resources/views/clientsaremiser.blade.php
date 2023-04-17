<!DOCTYPE html>
<html lang="en">

<head>
    <title>details cliant a remiser</title>
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
            <th>id_entite_physique</th>
            <th>libelle</th>
            <th>numero_client</th>
            <th>status_ep</th>

            <th rowspan="100000"></th>

            <th> id_contrat</th>
            <th> numero_contrat</th>
            <th> statut_contrat</th>
            <th> version_contrat</th>
            <th> type_contrat</th>

            <th rowspan="100000"></th>

            <th> id_article</th>
            <th> libelle </th>
            <th> montant </th>
            <th> remise </th>
            <th> devise </th>
        </tr>
        @foreach($clientsAremiser as $Position => $Infos)
        <tr>
            <td rowspan="{{ $lenghtsEp [$Infos['id_entite_physique']] +2}}">{{ $Infos['id_entite_physique'] }}</td>
            <td rowspan="{{ $lenghtsEp [$Infos['id_entite_physique']]  +2}}">{{ $Infos['libelle'] }} </td>
            <td rowspan="{{ $lenghtsEp [$Infos['id_entite_physique']]  +2}}"> {{ $Infos['numero_client'] }} </td>
            <td rowspan="{{ $lenghtsEp [$Infos['id_entite_physique']] +2 }}"> {{ $Infos['status_ep'] }} </td>

        </tr>

        @foreach($Infos['contrats'] as $contratPosition => $contratInfos)

        <tr>
            <td rowspan="{{ $lenghtsCo [$contratInfos['id_contrat']] +1}}"> {{ $contratInfos['id_contrat']}}</td>
            <td rowspan="{{ $lenghtsCo [$contratInfos['id_contrat']] +1}}"> {{ $contratInfos['numero_contrat']}} </td>
            <td rowspan="{{ $lenghtsCo [$contratInfos['id_contrat']] +1}}"> {{ $contratInfos['statut_contrat']}} </td>
            <td rowspan="{{ $lenghtsCo [$contratInfos['id_contrat']] +1}}"> {{ $contratInfos['version_contrat']}} </td>
            <td rowspan="{{ $lenghtsCo [$contratInfos['id_contrat']] +1}}"> {{ $contratInfos['type_contrat']}} </td>

        </tr>

        @foreach($contratInfos['articles'] as $articlesPosition => $articleInfos)

        <tr>
            <td> {{ $articleInfos['id_article']}}</td>
            <td> {{ $articleInfos['libelle']}} </td>
            <td> {{ $articleInfos['montant']}} </td>
            <td> {{ $articleInfos['remise']}} </td>
            <td> {{ $articleInfos['devise']}} </td>
        </tr>
        @endforeach

        @endforeach

        @endforeach

    </table>
    <br><br><br>
    <form action="/addremise" method="POST">
        @csrf
        @foreach ($articleIds as $arti)

        <input hidden type="number" name="listIds[]" value="{{ $arti }}">

        @endforeach
        <button type="submit">Add Remise</button>
    </form>

</body>

</html>