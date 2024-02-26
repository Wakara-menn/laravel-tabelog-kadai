<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Product $product)
    {        
        return view('reserves.index', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Product $product)
    {
        $reserve = new Reserve();
        $reserve->reserve_date = $request->input('reserve_date');
        $reserve->reserve_time = $request->input('reserve_time');
        $reserve->reserve_people = $request->input('reserve_people');

        return view('reserves.show', compact('product', 'reserve'));
    }

    public function complete(Request $request, Product $product)
    {
        $reserve = new Reserve();
        $reserve->user_id = Auth::user()->id;
        $reserve->product_id = $product->id;
        $reserve->reserve_date = $request->input('reserve_date');
        $reserve->reserve_time = $request->input('reserve_time');
        $reserve->reserve_people = $request->input('reserve_people');
        $reserve->save();

        return view('reserves.complete');
    }
}
