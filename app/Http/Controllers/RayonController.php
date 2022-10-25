<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Route;

class RayonController extends Controller
{

    public function index()
    {
        $list=Rayon::all();
        $route = Route::current()->getName();
        return view("layouts.Dashboard.tables.rayon",["list"=>$list,"route"=>$route]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Redirector
     */

    public function Add(Request $request)
    {
        $request->validate([
            'code' => 'required|max:191',
            'lib' => 'required|max:191'
        ]);
        $rayon = new Rayon();
        $rayon->code = $request->code;
        $rayon->libelle = $request->lib;

        $rayon->save();
        return redirect('/Rayon');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param $id
     * @return Application|Factory|View
     */

    public function Modifybefore($id)
    {
        $route = Route::current()->getName();
        return view("layouts.Dashboard.tables.crud.modifyrayon")->with('req',Rayon::find($id))->with('route',$route);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */

    public function Modify(Request $request)
    {
        $request->validate([
            'code' => 'required|max:191',
            'lib' => 'required|max:191'
        ]);
        Rayon::where('id', $request->id)->update(['code'=>$request->code,'libelle'=>$request->lib]);
        return redirect()->route('rayonpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $id
     * @return RedirectResponse
     */

    public function Delete($id)
    {
        Rayon::findOrFail($id)->delete();
        return redirect()->route('rayonpage');
    }
}
