<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participerprog;
use App\Models\ProgChasse;

class ParticiperprogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participerprog = Participerprog::all();
        $i=0;
        foreach($participerprog as $value)
        {
            //dd($value->id);
            $programme[$i] = ProgChasse::find($value->id);
            $i=$i+1;
        }
        return view ('participerprog.index')->with('participerprog', $participerprog)->with('programme',$programme);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $ProgChasse = ProgChasse::find($id);
        return view('participerprog.add')->with('ProgChasse', $ProgChasse);;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createParticipant(Request $request,$id)
    {
        $request->validate([
            'location'=>'required|min:5',
            'date'=>'required|after:today',
            'numpeople'=>'required|numeric',
            'description'=>'required|min:5',
            'costs'=>'required|numeric',
        ],[
            'numpeople.numeric'=>'numpeople must be numeric',
            'costs.numeric'=>'numpeople must be numeric',
            'date.after'=>'The date must be after Today',
            'location.min'=>'location is must have at least 5 char',
            'description.min'=>'description is must have at least 5 char'
        ]);
        
        $Participerprog=new Participerprog();
      
        $Participerprog->nom=$request->nom;
        $Participerprog->prenom=$request->prenom;
        $Participerprog->age=$request->age;
        $Participerprog->email=$request->email;
        $Participerprog->progchasse_id=$id;
        $Participerprog->save();
        return redirect('participerprog')->with('flash_message', 'ProgChasse Addedd!');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $id
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
    public function store(Request $request,$id)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Participerprog::destroy($id);
        return redirect('participerprog')->with('flash_message', 'Participerprog deleted!');
    }
}
