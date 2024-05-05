<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reservation;
use App\Models\TypeSoiree;
use App\Models\Themes;
use App\Models\Lieux;
use App\Models\Services;
use App\Models\ServicesDetails;

class ReservationController extends Controller
{
    public function getAllReservation()
    {
        $reservations = Reservation::all();
        // return view('serviceList', compact('reservations'));
        //liste reservation
    }
    public function createReservation(Request $request)
    {
        $idClient = $request->get('idClient');
        $datePrevue = $request->get('datePrevue');
        $idTypeSoiree = $request->get('idTypeSoiree');
        $idTheme = $request->get('idTheme');
        $nbparticipants = $request->get('nbparticipants');
        $idlieux = $request->get('idlieux');
        $localisation = $request->get('localisation');
        $budget = $request->get('budget');
        $etat = $request->get('etat');
        Reservation::create(["idclient" => $idClient, "dateprevue" => $datePrevue, "idtypesoiree" => $idTypeSoiree, "idtheme" => $idTheme, "nbparticipants" => $nbparticipants, "idlieux" => $idlieux, "localisation" => $localisation, "budget" => $budget, "etat" => $etat]);
        /////redirection vers la liste des réservations
    }

    public function pourReserver()
    {
        $typesoirees = TypeSoiree::all();
        $themes = Themes::all();
        $lieux = Lieux::all();
        $services = Services::all();
        $servicesDEtails = ServicesDetails::all();
        return view('reservation/booking', compact('typesoirees','themes','lieux','services','servicesDEtails'));
    }

    public function modal($id)
    {
        $details = ServicesDetails::where('idservices', $id)->get();
        return view('reservation/modal', compact('details'));
    }

    public function envoieEmail()
    {
        return redirect()->back()->with('success','Votre demande a bien été envoyée, veuillez cliquer sur okay');
    }

    public function backBooking()
    {
        $typesoirees = TypeSoiree::all();
        $themes = Themes::all();
        $lieux = Lieux::all();
        $services = Services::all();
        $servicesDEtails = ServicesDetails::all();
        return view('reservation/booking', compact('typesoirees','themes','lieux','services','servicesDEtails'));
    }
}
