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
        #mydiv2{
            position: absolute;
            left: 248px;
            top: 110px;
        }
        #exit, #exit_update {
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
        .actions{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position:absolute;
            margin-top: -60px;
        }

        .delete-action1{
            position:static;
            margin-left: -10px;
        }
        .delete-action2{
            position: static;
            margin-left: -16px;
            margin-top: -5px;
        }
        .delete-action3{
            position: static;
            margin-left: -16px;
            margin-top: -5px;
        }
        .delete-action4{
            position: static;
            margin-top: 1px;
            margin-left: -10px;
        }
    </style>
</head>
<body class="container mt-5 bg-light">
    <h1 class="h1 text-center mt-3">Créer emploi du temps</h1>
    <table class="mt-5" >
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
                    <div class="actions">
                        <div class="delete-action1">
                            <form action="{{ route('emploi.destroy', $emploi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="deleteButton" style="border: none; background-color: transparent;">
                                    <img src="{{ asset('images/delete.png') }}" alt="Delete" width="26px">
                                </button>
                            </form>
                        </div>
                    </div>
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
                        <div class="actions">
                            <div class="delete-action2">
                                <form action="{{ route('emploi.destroy', $emploi->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="deleteButton" style="border: none; background-color: transparent;">
                                        <img src="{{ asset('images/delete.png') }}" alt="Delete" width="26px">
                                    </button>
                                </form>
                            </div>
                        </div>
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
                    <div class="actions">
                        <div class="delete-action3">
                            <form action="{{ route('emploi.destroy', $emploi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="deleteButton" style="border: none; background-color: transparent;">
                                    <img src="{{ asset('images/delete.png') }}" alt="Delete" width="26px">
                                </button>
                            </form>
                        </div>
                    </div>
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
                    <div class="actions">
                        <div class="delete-action4">
                            <form action="{{ route('emploi.destroy', $emploi->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="deleteButton" style="border: none; background-color: transparent;">
                                    <img src="{{ asset('images/delete.png') }}" alt="Delete" width="26px">
                                </button>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @include('emploi.create')
    @include('emploi.update')

    {{-- <script>
        // Get references to the forms and the table
        const formCreate = document.getElementById('mydiv');
        const formUpdate = document.getElementById('mydiv2');
        const exitButton = document.getElementById('exit');
        const exitButtonUpdate = document.getElementById('exit_update');
        const cells = document.querySelectorAll('tbody #ses1, #ses2, #ses3, #ses4');

        // Hide the forms initially
        formCreate.style.display = 'none';
        formUpdate.style.display = 'none';

        // Event listener to close the forms
        exitButton.addEventListener('click', () => {
            formCreate.style.display = 'none';
        });

        exitButtonUpdate.addEventListener('click', () => {
            formUpdate.style.display = 'none';
        });

        // Add click event listeners to each cell
        cells.forEach(cell => {
            cell.addEventListener('mouseover', () => {
                cell.style.backgroundColor = '#ccc';
            });
            cell.addEventListener('mouseout', () => {
                cell.style.backgroundColor = '';
            });
            cell.addEventListener('click', (e) => {
                const day = cell.className;
                const seance = cell.id;
                document.getElementById('seid').value=e.target.id
                document.getElementById('joure').value=e.target.className

                // Check if the cell is empty
                if (cell.innerText.trim() === '') {
                    // Show the create form and fill in the day and seance
                    formCreate.style.display = 'block';
                    formUpdate.style.display = 'none';
                    document.getElementById('seid').value=e.target.id
                    document.getElementById('joure').value=e.target.className
                } else {
                    // Show the update form and fill in the day and seance
                    formUpdate.style.display = 'block';
                    formCreate.style.display = 'none';
                    document.getElementById('seid').value=e.target.id
                    document.getElementById('joure').value=e.target.className
                }
            });
        });
    </script> --}}
    <script>
        // Get references to the forms and the table
        const formCreate = document.getElementById('mydiv');
        const formUpdate = document.getElementById('mydiv2');
        const exitButton = document.getElementById('exit');
        const exitButtonUpdate = document.getElementById('exit_update');
        const cells = document.querySelectorAll('tbody td[id^="ses"]');

        // Hide the forms initially
        formCreate.style.display = 'none';
        formUpdate.style.display = 'none';

        // Event listener to close the forms
        exitButton.addEventListener('click', () => {
            formCreate.style.display = 'none';
        });

        exitButtonUpdate.addEventListener('click', () => {
            formUpdate.style.display = 'none';
        });

        // Add click event listeners to each cell
        cells.forEach(cell => {
            cell.addEventListener('mouseover', () => {
                cell.style.backgroundColor = '#ccc';
            });
            cell.addEventListener('mouseout', () => {
                cell.style.backgroundColor = '';
            });
            cell.addEventListener('click', (e) => {
                const day = cell.className;
                const seance = cell.id;
                const emploiData = extractEmploiData(cell);

                // Check if the cell is empty
                if (emploiData.isEmpty) {
                    // Show the create form and fill in the day and seance
                    formCreate.style.display = 'block';
                    formUpdate.style.display = 'none';
                    document.getElementById('seid').value = seance;
                    document.getElementById('joure').value = day;
                } else {
                    // Show the update form and fill in the day and seance
                    formUpdate.style.display = 'block';
                    formCreate.style.display = 'none';
                    populateUpdateForm(emploiData);
                }
            });
        });

        function extractEmploiData(cell) {
            const emploiData = {
                groupe: '',
                fromateur: '',
                module: '',
                salle: '',
                seance: '',
                isEmpty: true
            };

            const paragraphs = cell.querySelectorAll('p');
            if (paragraphs.length > 0) {
                emploiData.isEmpty = false;
                emploiData.groupe = paragraphs[0].innerText;
                emploiData.fromateur = paragraphs[1].innerText;
                emploiData.module = paragraphs[2].innerText;
                if (paragraphs[3]) {
                    emploiData.salle = paragraphs[3].innerText;
                }
                emploiData.seance = cell.id;
            }

            return emploiData;
        }
    </script>

    </body>
</html>
