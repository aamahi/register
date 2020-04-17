<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use Illuminate\Http\Request;

class Contract extends Controller
{
    public function contact(){
        $all_message = Contact::latest()->get();
        return view('Admin.contact',compact('all_message'));
    }
    public function delete_contact_message($id){
        $delete_contact_message = Contact::find($id)->delete();
        $notification = array(
            'message' => "Delete Contact Message",
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    public function show_contact_message($id){
        $contact_message = Contact::find($id);
        $contact_message->status = 1;
        $contact_message->save();
        return view('Admin.show_contact_message',compact('contact_message'));
    }
}
