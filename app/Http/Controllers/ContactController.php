<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\jobs\newUserExportMailChimp;
use App\Events\UserRegistered;
use App\Contact;
use Auth;

class ContactController extends Controller
{
    public function contact_list(){
       $contact_list = Contact::where('status',1)->orderBy('id','desc')->get();
       return view('contact_list',compact('contact_list'));         
    }

    public function add_contact(Request $request){

        $ContactList =  Contact::create([
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'pin_code' => $request->pin_code,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'last_name' => $request->last_name,
        ]);

        event(new UserRegistered($ContactList));
        echo 'done'; 
    }

    public function get_contact_list(){
        $get_contact_list = Contact::where('status',1)->orderBy('id','desc')->get();
        return view('get_contact_list',compact('get_contact_list'));  
    }

    public function edit_contact_list(Request $request){
        $edit_contact_list = Contact::where([['status',1],['id',$request->id]])->first();
        return json_encode($edit_contact_list);
    }

    public function update_contact_form(Request $request){
       $data['email']  = $request->email;
       $data['first_name']  = $request->first_name;
       $data['last_name']  = $request->last_name;
       $data['phone_number']  = $request->phone_number;
       $data['pin_code']  = $request->pin_code;
       $data['address']  = $request->address;
       Contact::where('id',$request->id)->update($data);
       echo 'update successfully'; 
    }

    public function delete_contact_list(Request $request){
        Contact::where('id',$request->id)->delete();
        echo 'Delete Successfully';
    }

    public function export_to_mail_chimp(){
       
        $export_email = DB::table('contact_list')->where('export_email',0)->get();
        foreach($export_email as $value){
            $data['export_email'] = 1;
            Contact::where('email',$value->email)->update($data);
        }
        echo 'export mailchimp successfully';
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
