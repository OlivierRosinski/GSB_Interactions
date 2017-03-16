<?php

namespace App\Http\Controllers;

use App\metier\Visiteur;
use Request;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class VisiteurController extends Controller {

    public function connect() {
        $login = Request::input('login');
        $pwd = Request::input('pwd');
        $unVisiteur = new Visiteur();
        $connected = $unVisiteur->login($login, $pwd);
        if ($connected) {            
            return redirect('/');
        } else {
            $erreur = "Login ou mot de passe inconnu, veuillez réessayer !";
            return view('/Connection/formLogin', compact('erreur'));
        }
    }

    public function getLogin() {
        $erreur = "";
        return view('/Connection/formLogin', compact('erreur'));
    }

    public function signOut() {
        //Création d'un objet, et appel d'une méthode pour cette objet
        $unVisiteur = new Visiteur();
        $unVisiteur->logout();
        return redirect('/');
    }


}
