<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        Mail::raw( $request->message.' Correo de: '.$request->email, function($message) use ($request)
         {
            $message->from( $request->email , $request->name);
            $message->to('marielaag.15@gmail.com');
            $message->subject('Formulario de Contacto de '.$request->email);
        });

        return back()->with('success', 'Thanks for contacting us!');



    }

    
}
