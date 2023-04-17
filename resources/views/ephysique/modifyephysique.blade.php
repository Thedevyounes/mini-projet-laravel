<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modify entite sociale</title>
    <style>
        .alert {
            color: red;
        }
    </style>
</head>

<body>
    <form action="/modifyephysiqueindb" method="post">

        @csrf
        <label for="id_entite_physique">id_entite_physique</label>
        <input type="number" name="id_entite_physique" value="{{$id_entite_physique}}" required><br><br>
        @error('id_entite_physique')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="entite_social">entite_social</label>
        <select name="entite_social" id="entite_social">
            @foreach($esociale as $ephysiqPos => $esocialeRaisonS)
            <option value="{{$esocialeRaisonS->id_entite_social}}" {!! $esocialeRaisonS->id_entite_social == $id_entite_social ? "selected" : "" !!}
                >{{$esocialeRaisonS->raison_social}}</option>
            @endforeach
        </select><br><br>

        @error('id_entite_social')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="libelle">libelle</label>
        <input type="text" name="libelle" value="{{$libelle}}" required><br><br>
        @error('libelle')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="numero_client">numero_client</label>
        <input type="number" name="numero_client" value="{{$numero_client}}"><br><br>
        @error('numero_client')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="code_postal">code_postal</label>
        <input type="number" name="code_postal" value="{{$code_postal}}"><br><br>
        @error('code_postal')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="adresse">adresse</label>
        <input type="text" name="adresse" value="{{$adresse}}"><br><br>
        @error('adresse')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="status_ep">status_ep</label>

        <select name="status_ep">
            <option value="AC" {!! $status_ep == "AC" ? "selected" : "" !!}>AC</option>
            <option value="KO" {!! $status_ep == "KO" ? "selected" : "" !!}>KO</option>
            <option value="PR" {!! $status_ep == "PR" ? "selected" : "" !!}>PR</option>
        </select><br><br>

        @error('status_ep')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="date_creation">date_creation</label>
        <input type="date" name="date_creation" value="{{$date_creation}}"><br><br>
        @error('date_creation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="submit" value="submit">
    </form>
</body>

</html>