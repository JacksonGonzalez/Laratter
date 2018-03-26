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
        $user = $request->user();

        $message = Message::create([
            'user_id' => $user->id,
            'content' => $request->input('message'),
            'image' => 'http://lorempixel.com/600/338?'.mt_rand(0, 1000)
        ]);

        return redirect('/messages/'.$message->id);
    }
}
