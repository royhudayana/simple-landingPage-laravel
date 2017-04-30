<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Sms\SendSms;
use App\Role;
use App\SmsMessage;
use App\SmsGroup;
use App\SmsContact;

class smsMessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected  $deliverSms;
    protected  $deliverBatchSms;
    public function __construct()
    {
        $this->middleware('auth');
        $this->deliverSms = new SendSms;
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
            $messages = SmsMessage::orderBy('created_at', 'desc')->get();
            $group = SmsGroup::pluck('name', 'id')->all();
            return view('portal.messages.manageMessages',compact('messages','group'));
        }
        $messages = SmsMessage::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $group = SmsGroup::where('user_id',Auth::user()->id)->pluck('name', 'id')->all();
        return view('portal.messages.manageMessages',compact('messages','group'));

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
        SmsMessage::create($input);
        Session::flash('message', 'The message has been CREATED !!');
        return redirect('/portal/message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = SmsMessage::findOrFail($id);
        $group = SmsGroup::pluck('name', 'id')->all();
        return view('portal.messages.manageMessages', compact('message','group'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = SmsMessage::findOrFail($id);
        $messages = SmsMessage::all();
        $group = SmsGroup::pluck('name', 'id')->all();
        return view('portal.messages.edit', compact('message', 'messages','group'));
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
        $message = SmsMessage::findOrFail($id);
        $message->update($input);
        Session::flash('message', 'The Message has been updated :-)');
        return redirect('/portal/message');
    }
    /**
     * send the specified resource in to set phone numbers.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendMessage(Request $request, $id)
    {
        if(Auth::user()->isRoot(Role::find(Auth::user()->role_id)))
        {
            $message = SmsMessage::findOrFail($id);
            $contacts = SmsContact::where('group_id', $message->group_id)->get();
            if($contacts->count() > 1)
            {
                $to = array(); //for sending bulk sms
                foreach ($contacts as $contact) {
                    $to[] = "'$contact->number'";
                }
                $this->deliverSms->sendBulkTextSms($to,"'$message->message'");
                Session::flash('message', 'The Message has been updated :-)');
                return redirect('/portal/message');

            }
            elseif ($contacts->count() == 1)
            {
                //for sending single sms
                $to = null;
                foreach ($contacts as $contact) {
                    //$sms = '"'. $contact->number .'"';
                    $to = $contact->number ;
                }

                $this->deliverSms->sendSingleTextSms($to,$message->message);


                Session::flash('message', 'The Message has been updated :-)');
                return redirect('/portal/message');
            }

        }
        Session::flash('message', 'The Message not sent :-)');
        return redirect('/portal/message');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = SmsMessage::findOrFail($id);
        $message->delete();
        Session::flash('message', 'The Message has been deleted :-(');
        return redirect('/portal/message');
    }
}
