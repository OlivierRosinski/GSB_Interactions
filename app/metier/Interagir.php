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
    
    
    public function getListeInteraction($idM){
        $lesInteractions = DB::table('interagir')
                ->Select()     
                ->join('medicament', function($join) {
                    $join->on('interagir.id_medicament', '=', 'medicament.id_medicament');
                    $join->on('interagir.med_id_medicament', '=', 'medicament.id_medicament');
                })
                ->where('medicament.id_medicament','=', $idM)
                ->get();
        return $lesInteractions;
    }
    

}
