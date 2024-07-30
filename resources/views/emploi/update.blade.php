<div id="mydiv2" class="row" id="listeSelsalle">
    <div class="col-12 col-lg-10">
        <form action="{{ route('update',$emploi->id_seance) }}" method="POST">
            @csrf
            <div id="listeSelsalle" class="row mb-0">
                <div id="addscx" style="position: display: ;padding-left: 0px;">
                    <input type="text" name="id_seance"  value="{{ $emploi->id_seance }}" hidden id="seid">
                    <input type="text" name="grp_id"  value="{{ $grp->id }}" hidden>
                    <input type="text" name="groupe" hidden value="{{ $emploi->groupe }}"/>
                    <input type="text" name="joure"  value="{{ $emploi->joure }}" hidden id="joure">
                    <input type="submit" name="seance" value="Présentielle" id="addprescx" style="margin-top:-2px;" class="btn btn-success btn-sm">
                    <input type="submit" value="Teams" name="seance" id="addprescx" style="margin-top:-2px;" class="btn btn-primary btn-sm">
                    <span id="exit_update">
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
                                        <option value="{{ $item->Nom_Prenom }}" @if ($item->Nom_Prenom == $emploi->fromateur) selected @endif>{{ $item->Nom_Prenom }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td style="width: 160px;">
                                <h6>Mdules :</h6>
                                <select size="12" name="module" id="sallesc" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                    @foreach ($modules as $item)
                                        <option value="{{ $item->Code_Module }}" @if ($item->Code_Module == $emploi->module) selected @endif>{{ $item->Code_Module }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td style="width: 110px;">
                                <h6>Salles :</h6>
                                <select size="12" name="salle" id="sallesc" class="form-select" style="width: 100%;font-size: 14px; line-height: 1;padding: 0px;">
                                    @foreach ($salles as $item)
                                        <option value="{{ $item->numero_salle }}" @if ($item->numero_salle == $emploi->salle) selected @endif>{{ $item->numero_salle }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
