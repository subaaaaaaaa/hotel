<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $items = Hotel::all();
        return view('hotel.index',['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hotel.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Hotel::$rules);
        $hotel = new Hotel;
        $form = $request->all();
        unset($form['_token']);
        $hotel->fill($form)->save();
        return redirect('/hotel');
    }
}
