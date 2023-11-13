<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Reservation;

class DetailController extends Controller
{
    public function index(Request $request)
    {
        $items = Detail::all();
        return view('detail.index',['items' => $items]);
    }
}
