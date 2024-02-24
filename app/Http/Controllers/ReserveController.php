<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();
        $users = User::all();
        $reserve->reserve_date = $reserve->input('reserve_date');
        $reserve->reserve_time = $request->input('reserve_time');
        $reserve->reserve_people = $request->input('reserve_people');
        $reserve->save();

        return view('reserves.index');
    }

    public function showReservationPage()
    {
        return view('index');
    }
}
