<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Auth;
class ContactController extends Controller
{
    
    public function show_auth_users()
    {

        $users= Auth::user();
        return view('/admin/admincontact', compact('users'));


    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res=new Contact;
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->phone=$request->input('phone');
        $res->company_name=$request->input('company_name');
        $res->city=$request->input('city');
        $res->state=$request->input('state');
        $res->message=$request->input('message');
        $res->save();
        return redirect()->back()->with('status','Successfully Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        $contact = Contact::all();
        return view('admin.admincontact', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact,$id)
    {
        Contact::where('id',$id)->delete();
        return back()->with('status','Successfully Delete');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
