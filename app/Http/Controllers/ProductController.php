<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rayon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    public function indextest()
    {
//        $rayon=new Rayon();
//        $rayon->code="dazd";
//        $rayon->libelle="hghgh";
//
//        $rayon->save();
//        $product=new Product();
//        $product->name="selim";
//        $product->category="selim";
//        $product->price_unit=7.2;
//        $product->image="selim";
//           $rayon->products()->save($product);
        $rayon=new Rayon();
        $rayon->code="zef";
        $rayon->libelle="azd";
        $rayon->save();
        $product=new Product();
        $product->name="selim";
        $product->category="selim";
        $product->price_unit=7.2;
        $product->image="selim";

           $product->rayon()->associate($rayon)->save();
    }

    public function index()
    {
        $route = Route::current()->getName();
        $listtwo=Rayon::all();
        $list=Product::all();
        return view("layouts.Dashboard.tables.product",["list"=>$list,"route"=>$route,"listtwo"=>$listtwo]);
    }

    public function indexclient()
    {
        return view("layouts.Client.front.displayproduct",["list"=>Product::all()]);
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
            'name' => 'required|max:191',
            'cat' => 'required|max:191',
            'pri' => 'required',
            'lim' => 'required',
            'ima' => 'required',
            'act' => 'required'
        ]);
        $product = new Product();
        $this->extracted($request, $product);
        return redirect('/Product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Redirector
     */

    public function Addrate(Request $request)
    {
        if ($request->request->count()>0) {
            $product=Product::find($request->id_rate);
            $product->user_rate+=1;
            if(!$product->total_rate)
                $product->total_rate=$request->rating;
            else
                $product->total_rate+=$request->rating;
            $product->save();
        }
        return redirect('/Productclient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $id
     * @return Application|Factory|View
     */

    public function Modifybefore($id)
    {
        $list=Rayon::all();
        $route = Route::current()->getName();
        return view("layouts.Dashboard.tables.crud.modifyproduct")->with('req',Product::find($id))->with('route',$route)->with('list',$list);
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
            'name' => 'required|max:191',
            'cat' => 'required|max:191',
            'pri' => 'required',
            'lim' => 'required',
            'act' => 'required'

        ]);
        $product = Product::find($request->id);
        $this->extracted($request, $product);
        return redirect()->route('productpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */

    public function Delete($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('productpage');
    }

    /**
     * @param Request $request
     * @param $product
     * @return void
     */

    public function extracted(Request $request, $product): void
    {
        if ($request->file('ima')) {
            $file = $request->file('ima');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $product->image = $filename;
        }
        $product->name = $request->name;
        $product->category = $request->cat;
        $product->price_unit = $request->pri;
        $product->limited = $request->lim;
        $product->active_for_sale = $request->act;

        $product->rayon()->associate(Rayon::find($request->ray))->save();
    }
}