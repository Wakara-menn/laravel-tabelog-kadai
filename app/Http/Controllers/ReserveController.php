<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Reserve $reserve)
    {
        $reserve = new Reserve();
        $reserve->reserve_date = $request->input('reserve_date') ? $request->input('reserve_date') : $reserve->reserve_date;
        $reserve->reserve_time = $request->input('reserve_time') ? $request->input('reserve_time') : $reserve->reserve_time;
        $reserve->reserve_people = $request->input('reserve_people') ? $request->input('reserve_people') : $reserve->reserve_people;
        
        return view('reserves.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $reserves = new Reserve();
        $reserve->user_id = $request->input('user_id');
        $reserve->product_id = $request->input('product_id');
        $reserve->reserve_date = $request->input('reserve_date');
        $reserve->reserve_time = $request->input('reserve_time');
        $reserve->reserve_people = $request->input('reserve_people');
        $reserve->save();

        return back();
    }

    public function complete(Request $request)
    {
        return view('reserves.complete');
    }
}
