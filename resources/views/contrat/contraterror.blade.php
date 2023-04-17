<!DOCTYPE html>
<html lang="en">

<head>
    <title>contrat error</title>
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
    <h3>Les contrats qui ont le status AC présent sur deux versions ou plus</h3>

    <table>

        <tr>
            <th>id_contrat</th>
            <th>id_entite_physique</th>
            <th>numero_contrat</th>
            <th>statut_contrat</th>
            <th>version_contrat</th>
            <th>type_contrat</th>
            <th>fréquence_facturation</th>
            <th>date_creation</th>
            <th>date_demarrage</th>

        </tr>
        @foreach($contraterror as $key => $contratvalue)
        <tr>
            <td>{{ $contratvalue->id_contrat }}</td>
            <td>{{ $contratvalue->id_entite_physique }} </td>
            <td> {{ $contratvalue->numero_contrat }} </td>
            <td> {{ $contratvalue->statut_contrat }} </td>
            <td> {{ $contratvalue->version_contrat }} </td>
            <td> {{ $contratvalue->type_contrat }} </td>
            <td> {{ $contratvalue->fréquence_facturation }} </td>
            <td> {{ $contratvalue->date_creation }} </td>
            <td> {{ $contratvalue->date_demarrage }} </td>
        </tr>
        @endforeach

    </table>

    <button onclick="window.location.href='http://127.0.0.1:8000/deletePreviouscontrat';">
      Confirm
    </button>
</body>

</html>