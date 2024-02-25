<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Reserve $reserve)
    {
        $reserve->reserve_date = $request->input('reserve_date') ? $request->input('reserve_date') : $reserve->reserve_date;
        $reserve->reserve_time = $request->input('reserve_time') ? $request->input('reserve_time') : $reserve->reserve_time;
        $reserve->reserve_people = $request->input('reserve_people') ? $request->input('reserve_people') : $reserve->reserve_people;
        
        return view('reserves.index');
    }
}
