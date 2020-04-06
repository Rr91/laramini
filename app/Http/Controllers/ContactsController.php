<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $data = Contacts::get();
        return json_encode($data);
    }
    public function store()
    {
        $input = Input::json();
        Contacts::create(array(
            'name' => $input->name,
            'email_address' => $input->email_address,
            'description' => $input->description,
        ));
    }
    public function show($id)
    {
       return json_encode(Contacts::find($id));
    }
    public function update($id)
    {
        $contact = Contacts::find($id);
        $input = Input::json();

        $contact->name = $input->name;
        $contact->email_address = $input->email_address;
        $contact->description = $input->description;
        $contact->save();
    }

    public function destroy($id)
    {
        return Contacts::find($id)->delete();
    }
}
