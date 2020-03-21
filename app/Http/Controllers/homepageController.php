<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    //

    public function telaHome(){
        
        #echo 'Tela de Login';
        return view('homepage');
    }


}
