<?php

namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Medicament extends Model {

    //
    protected $table = 'medicament';
    public $timestamps = false;
    protected $fillable = [
        'id_medicament',
        'id_famille',
        'depot_legal',
        'nom_commercial',
        'effets',
        'contre_indication',
        'prix_echantillon',
    ];
    
    public function getMedicament($idM){
        $medicament = DB::table('medicament')
                ->Select()
                ->where('id_medicament','=',$idM)
                ->first();
        return $medicament;
    }
    
    public function getNomMedicament($idM){
        $medicament = DB::table('medicament')
                ->Select('nom_commercial')
                ->where('id_medicament','=',$idM)
                ->first();
        return $medicament;
    }

    
    public function getListeMedicament(){
        $lesMedicaments = DB::table('medicament')
                ->Select()
                ->get();
        return $lesMedicaments;
    }

}
