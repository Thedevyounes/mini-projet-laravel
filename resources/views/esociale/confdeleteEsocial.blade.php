<!DOCTYPE html>
<html lang="en">
<head>
   <title>confirm delete Es</title>
</head>
<body>
    Id to delete : {{ $id_entite_social }}

    <button onclick="window.location.href='http://127.0.0.1:8000/confdeleteEsocial/{{ $id_entite_social }}';">
      Confirm
    </button>
</body>
</html>