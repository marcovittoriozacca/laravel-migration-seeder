<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PageController extends Controller
{
    public function index(){

        $trains = Train::all();

        $columns =  Schema::getColumnListing('trains');

        return view('home', compact('trains', 'columns'));
    }
}
