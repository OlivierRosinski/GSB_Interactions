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
        $medicament = new Medicament();
        $lesInteractions = $interagir->getListeInteraction($idM);
        $nomMedicament = $medicament->getNomMedicament($idM);
        return view('listeInteraction', compact('lesInteractions','nomMedicament'));
    }
    
    public function modifierInteraction($idA,$idB) {
        $medicament = new Medicament();
        $medicamentA = $medicament->getMedicament($idA);
        $medicamentB = $medicament->getMedicament($idB);
        $lesMedicaments = $medicament->getListeMedicament();
        return view('formInteractionModifier', compact('medicamentA','medicamentB','lesMedicaments'));
    }
    public function ajouterInteraction() {
        $medicament = new Medicament();
        $lesMedicaments = $medicament->getListeMedicament();
        return view('formInteractionAjouter', compact('lesMedicaments'));
    }
    public function supprimerInteraction($idA,$idB) {
        $interagir = new Interagir();
        $medicament = new Medicament();
        $interagir->supprimerInteraction($idA,$idB);    
        $lesInteractions = $interagir->getListeInteraction($idA);
        $message = "Le médicament a bien été supprimé.";
        $nomMedicament = $medicament->getNomMedicament($idA);
        return view('listeInteraction', compact('lesInteractions','message','nomMedicament'));
    }
    public function postAjouterInteraction() {
        $interagir = new Interagir();
        $medicament = new Medicament();
        $idA = Request::input('cbMedicamentA');
        $idB = Request::input('cbMedicamentB');
        $medicamentA = $medicament->getMedicament($idA);
        $medicamentB = $medicament->getMedicament($idB);
        if($interagir->ajouterInteraction($idA,$idB)){
        $lesInteractions = $interagir->getListeInteraction($idA);
        $message = "L'interaction entre le médicament " . $medicamentA->nom_commercial . " et le médicament " . $medicamentB->nom_commercial . " a bien été ajouté.";
        return view('listeInteraction', compact('lesInteractions','message'));
        }
        else{        
        $lesMedicaments = $medicament->getListeMedicament();
        return view('formInteractionAjouter', compact('lesMedicaments'));
        }
    }
    public function postModifierInteraction() {
        $interagir = new Interagir();
        $medicament = new Medicament();
        $idA = Request::input('idA');
        $idB = Request::input('cbMedicamentB');
        if($interagir->modifierInteraction($idB)){
        $lesInteractions = $interagir->getListeInteraction($idA);
        $medocA = $medicament->getNomMedicament($idA);
        $medocB = $medicament->getNomMedicament($idB);
        $message = "L'interaction entre le médicament " . $medocA->nom_commercial . " et le médicament " . $medocB->nom_commercial  . " a bien été modifié.";
        $interagir = new Interagir();
        $medicament = new Medicament();
        $nomMedicament = $medicament->getNomMedicament($idA);
        return view('listeInteraction', compact('lesInteractions','message','nomMedicament'));
        }
        else{        
        $medicamentA = $medicament->getMedicament($idA);
        $medicamentB = $medicament->getMedicament($idB);
        $lesMedicaments = $medicament->getListeMedicament();
        return view('formInteractionModifier', compact('medicamentA','medicamentB','lesMedicaments'));
        }
    }
}
