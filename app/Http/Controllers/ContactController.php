<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function view() 
    {
    	$rows = Contact::get();
    	return view('Contact')->with('rows', $rows);
    }

    public function add(Request $request) 
    {
    	$data = $request->all();
    	$contact = new Contact;
    	$contact->fill($data);
    	$contact->insert(['name'=>$contact['name'], 'number'=>$contact['number']]);
    	return redirect('/');
    }

    public function edit(Request $request) 
    {
        $id = $request['id'];
        $cont = Contact::where('id', $id)->first();
        $name = $cont['name'];
        $num = $cont['number'];
        return view('edit')->with(['name'=> $name , 'num' => $num , 'id' => $id]);
    }

    public function save(Request $request) 
    {
        $data = $request->all();
        $contact = new Contact;
        $contact->fill($data);
        $save = Contact::where('id', $data['id'])->first();
        $save->update(['name'=>$contact['name'], 'number'=>$contact['number']]);
        return redirect('/');
    }

    public function searchnumber(Request $request) 
    {
        $data = $request->all();
        dump($data);   
        $number = $data['number'];
        $rows = Contact::where('number', 'LIKE', "%$number%")->get();
        return view('search')->with('rows', $rows);
    }

}
