@extends('layout.footer')
@section('content')
<div style="height: 350px;">

</div>
<div class="modal fade" id="ModalService" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title text-paillete" id="exampleModalLongTitle">Choix des details</h5>
            <span aria-hidden="true"><i class="fa fa-x" data-dismiss="modal" aria-label="Close"
                    aria-hidden="true"></i></span>
        </div>

        <div class="modal-body">
            <div class="Modal_holder">
                <table width="100%">
                    @foreach ($details as $detail)
                    @php
                        $detailss = explode(", ", $detail->details);
                    @endphp
                    <tr class="Modal_tr">
                        <td class="Modal_td">{{$detail->nom}}</td>
                        <td class="Modal_td">
                            <div>
                                <input class="Modal_input" type="checkbox" />
                                <span></span>
                            </div>
                        </td>
                    </tr>
                    <tr class="Modal_tr">
                        <td colspan="2">
                            <ul>
                                @foreach ($detailss as $donnee)
                                <li>{{$donnee}}</li>

                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    @endforeach



                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn" id="closeButton" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="saveButton">Enregistrer</button>
        </div>
    </div>
</div>
</div>
@endsection
