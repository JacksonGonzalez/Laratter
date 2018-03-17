<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message)//se pone el objeto en si para que de error 404
    {
    	//buscar en db por el id, y colocarlo en una vista
    	//$message = Message::find($id);
    	//poner el show($id)


    	return view('messages.show', [
    		'message' => $message,
    	]);
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
    		'message' => ['required', 'max:160'] 
    	], [
    		'message.required' => 'Por favor escribe tu mensaje',
    		'message.max' => 'El mensaje no puede superar los 160 Caracteres'
    		
    	]);
    	return ('Llego!');
    }
}
