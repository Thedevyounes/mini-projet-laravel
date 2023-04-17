<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add entite sociale</title>
    <style>
        .alert {
            color: red;
        }
    </style>
</head>

<body>
    <form action="/addestodb" method="post">
        @csrf
        <label for="id_entite_social" >id_entite_social</label>
        <input type="number" name="id_entite_social" required><br>
        @error('id_entite_social')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="raison_social">raison_social</label>
        <input type="text" name="raison_social" required><br>
        @error('raison_social')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="numero_registre">numero_registre</label>
        <input type="number" name="numero_registre" required><br>
        @error('numero_registre')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="code_postal">code_postal</label>
        <input type="number" name="code_postal"><br>
        @error('code_postal')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="patente">patente</label>
        <input type="text" name="patente"><br>
        @error('patente')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="adresse">adresse</label>
        <input type="text" name="adresse"><br>
        @error('adresse')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="submit" value="submit">
    </form>
</body>

</html>