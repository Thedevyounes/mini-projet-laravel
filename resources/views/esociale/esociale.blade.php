<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entites sociale</title>
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
            <th>id_entite_social</th>
            <th>raison_social</th>  
            <th>numero_registre</th>
            <th>patente</th>
            <th>adresse</th>
            <th>code_postal</th>
        </tr>
        @foreach($esociale as $esocialePosition => $esocialeInfos)
        <tr>
            <td>{{ $esocialeInfos->id_entite_social }}</td>
            <td>{{ $esocialeInfos->raison_social }} </td>
            <td> {{ $esocialeInfos->numero_registre }} </td>
            <td> {{ $esocialeInfos->patente }} </td>
            <td> {{ $esocialeInfos->adresse }} </td>
            <td> {{ $esocialeInfos->code_postal }} </td>
            <td> <a href="/deleteES/{{$esocialeInfos->id_entite_social}}">Delete</a> </td>
            <td> <a href="/modifyesocial/{{$esocialeInfos->id_entite_social}}">Modify</a> </td> 
        </tr>
        @endforeach

    </table>
    <br>
    <a href="/addesocial">Ajouter entite sociale</a>
</body>

</html>