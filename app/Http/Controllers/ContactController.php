<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function index() 
    {   
    	$rows = Contact::get();
    	return view('Contact')->with('rows', $rows);
    }

    public function create(Request $request) 
    {
    	$data = $request->all();
        Contact::create($data);
    	return redirect('/contacts');
    }

    public function edit($id) 
    {
        $cont = Contact::find($id);
        $name = $cont['name'];
        $number = $cont['number'];
        return view('edit')->with(['name'=> $name , 'number' => $number , 'id' => $id]);
    }

    public function update(Request $request) 
    {
        $data = $request->all();
        $save = Contact::find($data['id']);
        $save->update(['name'=>$data['name'], 'number'=>$data['number']]);
        return redirect('/contacts');
    }

    public function searchnumber(Request $request) 
    {
        $data = $request->all();   
        $number = $data['number'];
        $rows = Contact::where('number', 'LIKE', "%$number%")->get();
        return view('search')->with('rows', $rows);
    }

}
