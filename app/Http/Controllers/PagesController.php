<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
	  	$messages = Message::latest()->paginate(10);//e permite hacer la paginacion automatica
        //Message::all()//trae todos los datos
        //Message::find() busca un dato en particualar


	    return view('welcome', [
	    	'messages' => $messages,
	    ]);
    }

    public function about()
    {
    	return view('about');
    }
}
