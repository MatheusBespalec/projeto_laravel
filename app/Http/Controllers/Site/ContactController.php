<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Notifications\NewContact;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('site.contact.index',['page'=>'contact']);
    }

    public function form(ContactFormRequest $request){
        $contact = Contact::create($request->all());

        Notification::route('mail', config('mail.from.address'))
            ->notify(new NewContact($contact));
        return redirect()->route('site.contact')->with([
            'success' => true,
            'message' => 'Enviado com Sucesso!',
            'page'=>'contact'
        ]);
    }
}
