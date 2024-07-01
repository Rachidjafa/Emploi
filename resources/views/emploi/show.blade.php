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
            font-weight: bold;
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
        #update{
            background: none;
            border: none;
            position: relative;;
            left: 81px;
            top: -65px;

        }
        #supp{
            background: none;
            border: none;
            height: 15px;
            position: relative;;
            left: 81px;
            top: -78px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="container mt-4 bg-light">
    <h1 class="h1 text-center mt-3">Emploi du temps de groupe {{ $groupe->Id_Groupe }}</h1>
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
            @foreach($daysOfWeek as $day)
            <tr>
                <td id="td">{{ $day['day'] }} {{ $day['date'] }}</td>
                <td id="ses1" class="{{ $day['day']."".$day['date'] }}">
                    @forEach ($emplois as $emploi)
                    @if($emploi->id_seance == "ses1" && $day['day']."".$day['date']== $emploi->joure )
                    <p id="pp">{{ $emploi->groupe }}</p><br>
                    <p>{{ $emploi->fromateur }}</p><br>
                    <p>{{ $emploi->module }}</p><br>
                    @if($emploi->seance !== "Teams")
                    <p>salle {{ $emploi->salle }}</p><br>
                    @endif
                    @if($emploi->seance == "Teams")
                    <p>{{ $emploi->seance }}</p><br>
                    @endif
                    <a href="{{ route('edit',$emploi->id) }}" class="btn" type="btn" id="update"><img src="{{ asset('images/crayon.png') }}" alt="" width="30px"></a><br>
                    <a id="supp" class="btn" type="btn" ><img src="{{ asset('images/delete.png') }}" alt="" width="30px"></a>
                    @endif
                    @endforeach
                </td>
                <td id="ses2" class="{{ $day['day']."".$day['date']}}">
                    @forEach ($emplois as $emploi)
                    @if($emploi->id_seance == "ses2" && $day['day']."".$day['date']== $emploi->joure )
                    <p id="pp">{{ $emploi->groupe }}</p><br>
                    <p>{{ $emploi->fromateur }}</p><br>
                    <p>{{ $emploi->module }}</p><br>
                    @if($emploi->seance !== "Teams")
                    <p>salle {{ $emploi->salle }}</p><br>
                    @endif
                    @if($emploi->seance == "Teams")
                    <p>{{ $emploi->seance }}</p><br>
                    @endif
                    <a href="" class="btn" type="btn" id="update"><img src="{{ asset('images/crayon.png') }}" alt="" width="30px"></a><br>
                    <a id="supp" class="btn" type="btn" ><img src="{{ asset('images/delete.png') }}" alt="" width="30px"></a>
                    @endif
                    @endforeach
                </td>
                <td id="ses3" class="{{ $day['day']."".$day['date']}}">
                    @forEach ($emplois as $emploi)
                    @if($emploi->id_seance == "ses3" && $day['day']."".$day['date']== $emploi->joure )
                    <p id="pp">{{ $emploi->groupe }}</p><br>
                    <p>{{ $emploi->fromateur }}</p><br>
                    <p>{{ $emploi->module }}</p><br>
                    @if($emploi->seance !== "Teams")
                    <p>salle {{ $emploi->salle }}</p><br>
                    @endif
                    @if($emploi->seance == "Teams")
                    <p>{{ $emploi->seance }}</p><br>
                    @endif
                    <a href="" class="btn" type="btn" id="update"><img src="{{ asset('images/crayon.png') }}" alt="" width="30px"></a><br>
                    <a id="supp" class="btn" type="btn" ><img src="{{ asset('images/delete.png') }}" alt="" width="30px"></a>
                    @endif
                    @endforeach
                </td>
                <td id="ses4" class="{{ $day['day']."".$day['date']}}">
                    @forEach ($emplois as $emploi)
                    @if($emploi->id_seance == "ses4" && $day['day']."".$day['date']== $emploi->joure )
                    <p id="pp">{{ $emploi->groupe }}</p><br>
                    <p>{{ $emploi->fromateur }}</p><br>
                    <p>{{ $emploi->module }}</p><br>
                    @if($emploi->seance !== "Teams")
                    <p>salle {{ $emploi->salle }}</p><br>
                    @endif
                    @if($emploi->seance == "Teams")
                    <p>{{ $emploi->seance }}</p><br>
                    @endif
                    <a href="" class="btn" type="btn" id="update"><img src="{{ asset('images/crayon.png') }}" alt="" width="30px"></a><br>
                    <a id="supp" class="btn" type="btn" ><img src="{{ asset('images/delete.png') }}" alt="" width="30px"></a>
                    @endif
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
      <div id="mydiv">
        @include('emploi.update')
      </div>
      <script>
        const cells = document.querySelectorAll('tbody #ses1, #ses2, #ses3, #ses4');
        const mydiv = document.getElementById('mydiv');

        const close = document.getElementById('exit');

        const update = document.getElementById('update');

        const tzs = document.querySelectorAll('#tz1, #tz2, #tz3, #tz4');

        /*cells.forEach((cell,index) => {
             cell.addEventListener('mouseover', () => {
            cell.style.backgroundColor = '#ccc';

            /* tzs.forEach(tz=>{
                if (cell.children[0] === tz){
                    tz.style.display = tz.style.display === 'none' ? 'block' : 'none';
                }
            })
        });*/

        /* cell.children[0].children[0].addEventListener('click', (e) => {
            mydiv.style.display = mydiv.style.display === 'none' ? 'block' : 'none';
            document.getElementById('seid').value=e.target.id
            document.getElementById('joure').value=e.target.className
        });


        /* cell.addEventListener('mouseout', () => {
            cell.style.backgroundColor = '';
            tzs.forEach(tz=>{
                if (cell.children.item("div") === tz){
                    tz.style.display = 'none';
                }
            })
        }); */

        update.addEventListener('click', function() {
            mydiv.style.display = mydiv.style.display === 'none' ? 'block' : 'none';
        });

        close.addEventListener('click', function() {
            mydiv.style.display = 'none';
        });

    /* }); */
      </script>
</body>
</html>
