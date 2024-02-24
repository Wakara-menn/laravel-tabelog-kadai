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
        $reserves = $product->reserves()->get();
    
        return view('reserves.index', compact('product', 'reserves'));

    }

    /*
     * 完了画面出力
     */
    public function complete()
    {
        return view('reserves.complete');
    }
}
