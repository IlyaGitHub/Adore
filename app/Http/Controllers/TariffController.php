<?php

namespace App\Http\Controllers;

use App\Models\Tariff;
use Illuminate\Http\Request;

class TariffController extends Controller
{
    public function index(){
        return view('pages.tariffs')->with(['tariffs' => Tariff::all()]);
    }
}
