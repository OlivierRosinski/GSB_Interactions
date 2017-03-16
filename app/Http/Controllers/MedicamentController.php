<?php

namespace App\Http\Controllers;

use App\metier\Medicament;
use App\metier\Interagir;
use Request;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class MedicamentController extends Controller {

    public function getListeMedicament() {
        $medicament = new Medicament();
        $lesMedicaments = $medicament->getListeMedicament();
        return view('listeMedicament', compact('lesMedicaments'));
    }

    public function getListeInteraction($idM) {
        $interagir = new Interagir();
        $lesInteractions = $interagir->getListeInteraction($idM);
        return view('listeInteraction', compact('lesInteractions'));
    }
}
