<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container">
    <h1 class="h1 mt-4">Liste groupes</h1>
    <table class="table table-striped mt-4">
        <tr>
            <th>Id Groupe</th>
            <th>Libelle</th>
            <th>Secteur</th>
            <th>Specialite</th>
            <th>Niveau</th>
            <th>Annee</th>
        </tr>
        @foreach ($groupes as $groupe)
        <tr>
            <td>{{ $groupe->Id_Groupe }}</td>
            <td>{{ Str::limit($groupe->Libelle,30)  }}</td>
            <td>{{ $groupe->Secteur }}</td>
            <td>{{ $groupe->Specialite }}</td>
            <td>{{ $groupe->Niveau }}</td>
            <td>{{ $groupe->Annee }}</td>
            <td>
                <a href="{{ route('create',$groupe->id) }}" class="btn btn-success" type="btn"><img src="{{ asset('images/add.png') }}" alt="" width="30px"></a>
                <a href="{{ route('show',$groupe->id) }}" class="btn btn-primary" type="btn"><img src="{{ asset('images/calendar.png') }}" alt="" width="30px"></a>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="mt-4">
        {{ $groupes-> links() }}
    </div>
</body>
</html>
