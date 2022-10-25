<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Address;
class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['events', 'show']]);
    }
    public function index()
    {
        $events = Event::all();
        return view ('layouts.Event.event')->with('events', $events);
    }
    
    public function create()
    {
        $addresss = Address::all();

        return view('layouts.Event.create',['addresss'=>$addresss]);
    }
    public function iclient()
    {
        return view("layouts.Client.front.displayEvents",["list"=>Event::all()]);
    }

  
     public function createEvent(Request $req)
    {
        $req->validate([
            'name'=>'required|min:5',
            'address'=>'required',
            'dateS'=>'required|after:today',
            'dateE'=>'required|after:dateS'

   ],[
    'dateE.after'=>'End date must be after Start Date',
    'dateS.after'=>'Start date must be after Today',
    'name.min'=>'Name is must have at least 5 char',
    'dateS.required'=>'Start Date is required',
    'dateE.required'=>'End Date is required',
    'name.required'=>'Name is required',
    'address.required'=>'Address is required'
   ]);
       $event=new Event;
      
       $event->name=$req->name;
       $event->address=$req->address;
       $event->dateS=$req->dateS;
       $event->dateE=$req->dateE;
       $event->save();
       return redirect('event');


    }
    public function show($id)
    {
        $events = Event::find($id);
        return view('layouts.Event.show')->with('events', $events);
    }
    
    public function edit($id)
    {
        
        $events = Event::find($id);
        $addresss = Address::all();

        return view('layouts.Event.edit',['addresss'=>$addresss])->with('events', $events);
    }
  
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:5',
            'address'=>'required',
            'dateS'=>'required|after:today',
            'dateE'=>'required|after:dateS'

   ],[
    'dateE.after'=>'End date must be after Start Date',
    'dateS.after'=>'Start date must be after Today',
    'name.min'=>'Name is must have at least 5 char',
    'dateS.required'=>'Start Date is required',
    'dateE.required'=>'End Date is required',
    'name.required'=>'Name is required',
    'address.required'=>'Address is required'
   ]);
        $events = Event::find($id);
        $input = $request->all();
        $events->update($input);
        return redirect('event')->with('flash_message', 'Event Updated!');  
    }
  
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('event')->with('flash_message', 'Event deleted!');  
    }
}
