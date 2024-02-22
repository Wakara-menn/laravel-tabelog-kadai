<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::all();
        $products = Product::all();
        $reserve->reserve_date = $request->input('reserve_date');
        $reserve->reserve_time = $request->input('reserve_time');
        $reserve->categoryreserve_people = $request->input('reserve_people');
        $reserve->save();

        return view('reserves.index');
    }

}
