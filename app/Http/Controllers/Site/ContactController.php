<?php

namespace App\Http\Controllers\Site;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(ContactFormRequest $request)
    {
        $contact = Contact::create($request->all());

        return redirect()->route('site.contact')->with([
            'success' => true,
            'message' => 'A mensagem foi enviada com sucesso'
        ]);

        //Código para disparar e-mail//
        //Notification::route('mail', config('mail.from.address'))
        //  ->notify(new NewContact($contact));
        //----------------------------------------------------------//
    }
}