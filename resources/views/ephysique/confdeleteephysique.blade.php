<!DOCTYPE html>
<html lang="en">
<head>
   <title>confirm delete Es</title>
</head>
<body>
    Id to delete : {{ $id_entite_physique }}

    <button onclick="window.location.href='http://127.0.0.1:8000/confdeleteephysique/{{ $id_entite_physique }}';">
      Confirm
    </button>
</body>
</html>