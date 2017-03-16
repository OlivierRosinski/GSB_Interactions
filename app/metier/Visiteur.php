<?php

namespace App\metier;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use DB;

class Visiteur extends Model {

    //
    protected $table = 'visiteur';
    public $timestamps = false;
    protected $fillable = [
        'id_visiteur',
        'id_laboratoire',
        'id_secteur',
        'nom_visiteur',
        'prenom_visiteur',
        'adresse_visiteur',
        'cp_visiteur',
        'ville_visiteur',
        'date_embauche',
        'login_visiteur',
        'pwd_visiteur',
        'type_visiteur',
    ];

    //Dialogue avec la bdd pour véirifer si le login et le mot de passe correspondent (renvoie un booléen)
    public function login($login, $pwd) {
        $connected = false;
        $visiteur = DB::table('visiteur')
                ->select()
                ->where('login_visiteur', '=', $login)
                ->first();
        if ($visiteur) {
            if ($visiteur->pwd_visiteur == $pwd && $visiteur->type_visiteur == 'P') {
                Session::put('id', $visiteur->id_visiteur);
                Session::put('nom', $visiteur->nom_visiteur);
                Session::put('prenom', $visiteur->prenom_visiteur);
                $connected = true;
            }
        }
        return $connected;
    }

    public function logout() {
        Session::put('id', 0);
        Session::put('nom', "");
        Session::put('prenom', "");
    }

}
