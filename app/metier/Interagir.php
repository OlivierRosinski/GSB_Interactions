<?php

namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Interagir extends Model {

    //
    protected $table = 'interagir';
    public $timestamps = false;
    protected $fillable = [
        'id_medicament',
        'med_id_medicament',
    ];

    public function getListeInteraction($idM) {
        $lesInteractions = DB::table('interagir')
                ->Select('m1.nom_commercial AS medicamentA', 'm2.nom_commercial AS medicamentB', 'interagir.id_medicament AS idA', 'interagir.med_id_medicament AS idB')
                ->join('medicament AS m1', 'interagir.id_medicament', '=', 'm1.id_medicament')
                ->join('medicament AS m2', 'interagir.med_id_medicament', '=', 'm2.id_medicament')
                ->where('interagir.id_medicament', '=', $idM)
                ->get();
        $lesInteractions += DB::table('interagir')
                ->Select('m2.nom_commercial AS medicamentA', 'm1.nom_commercial AS medicamentB', 'interagir.id_medicament AS idA', 'interagir.med_id_medicament AS idB')
                ->join('medicament AS m1', 'interagir.id_medicament', '=', 'm1.id_medicament')
                ->join('medicament AS m2', 'interagir.med_id_medicament', '=', 'm2.id_medicament')
                ->where('interagir.med_id_medicament', '=', $idM)
                ->get();
        return $lesInteractions;
    }

    public function supprimerInteraction($idA, $idB) {
        DB::table('interagir')
                ->where('id_medicament', '=', $idA)
                ->where('med_id_medicament', '=', $idB)
                ->delete();
    }
    
    public function ajouterInteraction($idA, $idB) {
        $ajout = DB::table('interagir')
                ->insert(['id_medicament' => $idA, 'med_id_medicament' => $idB]);
        return $ajout;
    }
    public function modifierInteraction($idB) {
        $ajout = DB::table('interagir')
                ->update(['med_id_medicament' => $idB]);
        return $ajout;
    }

}
