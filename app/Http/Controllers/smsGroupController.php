<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\SmsGroup;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;

class smsGroupController extends Controller
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
            $groups = SmsGroup::all();
            return view('portal.groups.manageGroups',compact('groups'));
        }
        $groups = SmsGroup::where('user_id',Auth::user()->id)->get();
        return view('portal.groups.manageGroups',compact('groups'));
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
        $input['user_id'] = Auth::user()->id;
        SmsGroup::create($input);
        Session::flash('message', 'The group has been CREATED !!');
        return redirect('/portal/group');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = SmsGroup::findOrFail($id);
        return view('portal.groups.manageGroups', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = SmsGroup::findOrFail($id);
        $groups = SmsGroup::all();
        return view('portal.groups.edit', compact('group', 'groups'));
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
        $group = SmsGroup::findOrFail($id);
        $group->update($input);
        Session::flash('message', 'The group has been updated :-)');
        return redirect('/portal/group');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = SmsGroup::findOrFail($id);
        $group->delete();
        Session::flash('message', 'The group has been deleted :-(');
        return redirect('/portal/group');
    }
}
