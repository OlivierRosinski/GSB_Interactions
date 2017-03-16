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
    
    
    public function getListeMedicament(){
        $lesMedicaments = DB::table('medicament')
                ->Select()
                ->get();
        return $lesMedicaments;
    }

}
