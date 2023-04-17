<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entites physique</title>
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
    <p style="color: yellow;">{{ $message }}</p>
    <table>

        <tr>
            <th>id_entite_physique</th>
            <th>id_entite_social</th>
            <th>libelle</th>
            <th>numero_client</th>
            <th>adresse</th>
            <th>code_postal</th>
            <th>status_ep</th>
            <th>date_creation</th>
        </tr>
        @foreach($ephysique as $ephysiquePosition => $ephysiqueInfos)
        <tr>
            <td>{{ $ephysiqueInfos->id_entite_physique }}</td>
            <td>{{ $ephysiqueInfos->id_entite_social }} </td>
            <td> {{ $ephysiqueInfos->libelle }} </td>
            <td> {{ $ephysiqueInfos->numero_client }} </td>
            <td> {{ $ephysiqueInfos->adresse }} </td>
            <td> {{ $ephysiqueInfos->code_postal }} </td>
            <td> {{ $ephysiqueInfos->status_ep }} </td>
            <td> {{ $ephysiqueInfos->date_creation }} </td>
            <td> <a href="/detailsep/{{$ephysiqueInfos->id_entite_physique}}">Details</a> </td>
            <td> <a href="/deleteep/{{$ephysiqueInfos->id_entite_physique}}">Delete</a> </td>
            <td> <a href="/modifyephysique/{{$ephysiqueInfos->id_entite_physique}}">Modify</a> </td> 
        </tr>
        @endforeach

    </table>
    <br>
    <a href="/addephysique">Ajouter entite physique</a>
</body>

</html>