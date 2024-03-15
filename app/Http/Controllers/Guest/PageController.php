<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PageController extends Controller
{
    public function index(){
        //risultato della query
        $trains = Train::all();

        //i treni che partono dalla data odierna in poi
        $today_trains = Train::where('departure_time', '>=', today())->get();

        //colonne del db
        $columns =  Schema::getColumnListing('trains');

        return view('home', compact('trains', 'columns', 'today_trains'));
    }
}
