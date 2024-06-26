<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div id="listeSelsalle" class="row mb-0">
            <div id="addscx" style="position:;display: ;padding-left: 0px;">
                <input type="text" name="id_seance"  value="" hidden id="seid">
                <input type="text" name="grp_id"  value="{{ $grp->id }}" hidden id="seid">
                <input type="text" name="joure"  value="" hidden id="joure">
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
                            <h6>Groupe :</h6>
                            <select size="12" id="sallesc" name="groupe" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                @foreach ($groupe as $item)
                                    <option value="{{ $item->Id_Groupe }}">{{ $item->Id_Groupe }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td style="width: 160px;">
                            <h6>Formateur :</h6>
                            <select size="12" id="sallesc" name="fromateur" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                @foreach ($formateur as $item)
                                    <option value="{{ $item->Nom_Prenom }}">{{ $item->Nom_Prenom }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td style="width: 110px;">
                            <h6>Mdules :</h6>
                            <select size="12" name="module" id="sallesc" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                @foreach ($modules as $item)
                                    <option value="{{ $item->Code_Module }}">{{ $item->Code_Module }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td style="width: 110px;">
                            <h6>Salles :</h6>
                            <select size="12" name="salle" id="sallesc" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                @foreach ($salles as $item)
                                    <option value="{{ $item->numero_salle }}">salle {{ $item->numero_salle }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</body>
</html>
