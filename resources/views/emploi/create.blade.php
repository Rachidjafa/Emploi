<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center
        }
        th {
            background-color: #f0f0f0;
        }
        #th {
            background-color: #f0f0f0;
            text-align: start
        }
        #td {
            background-color: #f0f0f0;
            text-align: start;
            font-weight: bold
        }
        #sub{
            background: transparent;
            border: none;
            width: max-content;
        }
        #listeSelsalle{
            width: 800px;
            backdrop-filter: blur(3px);
            background-color: #b7b6b667;
            padding: 25px;
            border-radius: 5px;
            border: none;
            box-shadow: 2px 7px 29px 4px gray;
        }
        #mydiv{
            position: absolute;
            left: 248px;
            top: 110px;
        }
        #exit{
            position: relative;
            left: 574px;
            cursor: pointer;
        }
        #sallesc::-webkit-scrollbar {
            display: none;
        }
        p{
            font-size: 10px;
            margin-bottom: -26px;
        }
    </style>
</head>
<body class="container mt-4 bg-light">
    @php
    $jour = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
    @endphp
    <h1 class="h1 text-center mt-3">Créer emploi du temps pour le groupe {{ $groupe->Id_Groupe }}</h1>
    <table class="mt-4" >
        <thead>
          <tr>
            <th id="th">Jour\heure</th>
            <th>08:30 - 11:00</th>
            <th>11:00 - 13:30</th>
            <th>13:30 - 16:00</th>
            <th>16:30 - 18:30</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($jour as $item)
            <tr>
                <td id="td">{{ $item }}</td>
                <td id="ses1" class="{{ $item }}">
                    @forEach ($emplois as $emploi)
                    @if($emploi->id_seance == "ses1" && $item == $emploi->joure )
                    <p id="pp">{{ $emploi->fromateur }}</p><br>
                    <p>{{ $emploi->module }}</p><br>
                    <p>Salle {{ $emploi->salle }}</p><br>
                    <p>{{ $emploi->seance }}</p><br>
                    @endif
                    @endforeach
                </td>
                <td id="ses2" class="{{ $item }}">
                    @forEach ($emplois as $emploi)
                    @if($emploi->id_seance == "ses2" && $item == $emploi->joure)
                    <p id="pp">{{ $emploi->fromateur }}</p><br>
                    <p>{{ $emploi->module }}</p><br>
                    <p>Salle {{ $emploi->salle }}</p><br>
                    <p>{{ $emploi->seance }}</p><br>
                    @endif
                    @endforeach
                </td>
                <td id="ses3" class="{{ $item }}">
                    @forEach ($emplois as $emploi)
                    @if($emploi->id_seance == "ses3" && $item == $emploi->joure)
                    <p id="pp">{{ $emploi->fromateur }}</p><br>
                    <p>{{ $emploi->module }}</p><br>
                    <p>Salle {{ $emploi->salle }}</p><br>
                    <p>{{ $emploi->seance }}</p><br>
                    @endif
                    @endforeach
                </td>
                <td id="ses4" class="{{ $item }}">
                    @forEach ($emplois as $emploi)
                    @if($emploi->id_seance == "ses4" && $item == $emploi->joure)
                    <p id="pp">{{ $emploi->fromateur }}</p><br>
                    <p>{{ $emploi->module }}</p><br>
                    <p>Salle {{ $emploi->salle }}</p><br>
                    <p>{{ $emploi->seance }}</p><br>
                    @endif
                    @endforeach
                </td>
            </tr>

            @endforeach
        </tbody>
      </table>
      <div id="mydiv" style="display: none;">
        <form action="{{ route('emplois.store') }}" method="post">
        @csrf
        <div id="listeSelsalle" class="row mb-0">
            <div id="addscx" style="position:;display: ;padding-left: 0px;">
                <input type="text" name="id_seance"  value="" hidden id="seid">
                <input type="text" name="joure"  value="" hidden id="joure">
                <input type="text" name="id_groupe"  value="{{ $groupe->id }}" hidden>
                <input type="submit" name="seance" value="Présentielle" id="addprescx" style="margin-top:-2px;" class="btn btn-success btn-sm">
                <input type="submit" value="Teams" name="seance" id="addprescx" style="margin-top:-2px;" class="btn btn-primary btn-sm">
                <span id="exit">
                    <img src="{{ asset('images/supprimer.png') }}" alt="" width="30px">
                </span>
            </div>

            <table style="border: 0px solid #000;width: 100%;">
                <tbody>
                    <tr>
                        <td style="width: 110px;">
                            <h6>Formateur :</h6>
                            <select size="12" id="sallesc" name="fromateur" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                @foreach ($formateur as $item)
                                    <option value="{{ $item->Nom_Prenom }}">{{ $item->Nom_Prenom }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td style="width: 160px;">
                            <h6>Mdules :</h6>
                            <select size="12" name="module" id="sallesc" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                @foreach ($modules as $item)
                                    <option value="{{ $item->Libelle }}">{{ $item->Libelle }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td style="width: 110px;">
                            <h6>Salles :</h6>
                            <select size="12" name="salle" id="sallesc" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                @foreach ($salles as $item)
                                    <option value="{{ $item->numero_salle }}">Salle {{ $item->numero_salle }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
      </div>
      <script>
        const cells = document.querySelectorAll('tbody #ses1, #ses2, #ses3, #ses4');
        const mydiv = document.getElementById('mydiv');

        const close = document.getElementById('exit')

        cells.forEach(cell => {
            cell.addEventListener('mouseover', () => {
            cell.style.backgroundColor = '#ccc';
        });

        cell.addEventListener('mouseout', () => {
            cell.style.backgroundColor = '';
        });

        cell.addEventListener('click', (e) => {
            console.log(e)
            mydiv.style.display = mydiv.style.display === 'none' ? 'block' : 'none';
            document.getElementById('seid').value=e.target.id
            document.getElementById('joure').value=e.target.className
        });

        close.addEventListener('click', function() {
            mydiv.style.display = 'none';
        });
    });
      </script>
</body>
</html>
