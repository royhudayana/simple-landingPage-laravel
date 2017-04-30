<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\SmsContact;
use App\SmsGroup;

class smsContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->isRoot(Role::find(Auth::user()->role_id)))
        {
            $contacts = SmsContact::all();
            $group = SmsGroup::pluck('name', 'id')->all();
            return view('portal.contacts.manageContacts', compact('contacts','group'));
        }
            $contacts = SmsContact::where('user_id',Auth::user()->id)->get();
            $group = SmsGroup::where('user_id',Auth::user()->id)->pluck('name', 'id')->all();
            return view('portal.contacts.manageContacts', compact('contacts','group'));

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
        $input = $request->all();
        $input['source'] = 'web';
        $input['user_id'] = Auth::user()->id;
        SmsContact::create($input);
        Session::flash('message', 'The contact has been CREATED !!');
        return redirect('/portal/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = SmsContact::findOrFail($id);
        return view('portal.contacts.manageContacts', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = SmsContact::findOrFail($id);
        $contacts = SmsContact::all();
        $group = SmsGroup::pluck('name', 'id')->all();
        return view('portal.contacts.edit', compact('contact', 'contacts','group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $contact = SmsContact::findOrFail($id);
        $contact->update($input);
        Session::flash('message', 'The contact has been updated :-)');
        return redirect('/portal/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = SmsContact::findOrFail($id);
        $contact->delete();
        Session::flash('message', 'The contact has been deleted :-(');
        return redirect('/portal/contact');
    }
}
