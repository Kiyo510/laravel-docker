<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopsController extends Controller
{
    public function index()
    {
        // $shops = Shop::all();
        // return view('shops.index', compact('shops'));

        $shops_route = Shop::find(1)->routes()->get();
        dd($shops_route);
    }
}
